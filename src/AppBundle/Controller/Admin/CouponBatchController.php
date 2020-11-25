<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Common\Paginator;
use AppBundle\Common\ArrayToolkit;
use Biz\Classroom\Service\ClassroomService;
use Biz\Coupon\CouponException;
use Biz\Coupon\Service\CouponBatchService;
use Biz\Course\Service\CourseSetService;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Common\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class CouponBatchController extends BaseController
{
    public function indexAction(Request $request)
    {
        $conditions = $request->query->all();

        if (isset($conditions['name'])) {
            $conditions['nameLike'] = $conditions['name'];
            unset($conditions['name']);
        }

        $paginator = new Paginator(
            $request,
            $this->getCouponBatchService()->searchBatchsCount($conditions),
            20
        );

        $batchs = $this->getCouponBatchService()->searchBatchs(
            $conditions,
            array('createdTime' => 'DESC'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        foreach ($batchs as $key => &$batch) {
            $batch['couponContent'] = $this->getCouponBatchService()->getCouponBatchContent($batch['id']);
        }

        return $this->render('admin/coupon/index.html.twig', array(
            'batchs' => $batchs,
            'paginator' => $paginator,
        ));
    }

    public function deleteAction(Request $request, $id)
    {
        $result = $this->getCouponBatchService()->deleteBatch($id);

        return $this->createJsonResponse(true);
    }

    public function checkPrefixAction(Request $request)
    {
        $prefix = $request->query->get('value');
        $result = $this->getCouponBatchService()->checkBatchPrefix($prefix);

        if ($result) {
            $response = array('success' => true, 'message' => '该前缀可以使用');
        } else {
            $response = array('success' => false, 'message' => '该前缀已存在');
        }

        return $this->createJsonResponse($response);
    }

    public function generateAction(Request $request)
    {
        $couponSetting = $this->getSettingService()->get('coupon', array());

        if (empty($couponSetting['enabled'])) {
            return $this->render('admin/coupon/permission-message.html.twig', array('type' => 'info'));
        }

        if ('POST' == $request->getMethod()) {
            $couponData = $request->request->all();

            $couponData['rate'] = $couponData['minus-rate'];
            unset($couponData['minus-rate']);

            $batch = $this->getCouponBatchService()->generateCoupon($couponData);

            $data = array(
                'code' => true,
                'message' => '',
                'url' => $this->generateUrl('admin_coupon_batch_create', array('batchId' => $batch['id'])),
                'num' => $batch['generatedNum'],
            );

            return $this->createJsonResponse($data);
        }

        return $this->render('admin/coupon/generate.html.twig');
    }

    public function batchCreateAction(Request $request, $batchId)
    {
        $batch = $this->getCouponBatchService()->getBatch($batchId);

        $generateNum = $request->request->get('generateNum', 0);
        if ($generateNum >= 1000) {
            return $this->createJsonResponse(array('code' => fase, 'message' => 'GenerateNum must be less than 1000'));
        }

        $this->getCouponBatchService()->createBatchCoupons($batch['id'], $generateNum);

        $generatedNum = $this->getCouponService()->searchCouponsCount(array('batchId' => $batch['id']));

        $data = array(
            'code' => true,
            'url' => $this->generateUrl('admin_coupon_batch_create', array('batchId' => $batch['id'])),
            'generatedNum' => $generatedNum,
            'percent' => ceil($generatedNum / $batch['generatedNum'] * 100),
            'goto' => '',
        );

        if ($generatedNum >= $batch['generatedNum']) {
            $data['goto'] = $this->generateUrl('admin_coupon');
        }

        return $this->createJsonResponse($data);
    }

    public function exportCsvAction(Request $request, $batchId)
    {
        $batch = $this->getCouponBatchService()->getBatch($batchId);

        $coupons = $this->getCouponService()->findCouponsByBatchId(
            $batchId,
            0,
            $batch['generatedNum']
        );

        $coupons = array_map(function ($coupon) {
            $export_coupon['batchId'] = $coupon['batchId'];
            $export_coupon['deadline'] = empty($coupon['deadline']) ? '--' : date('Y-m-d', $coupon['deadline']);
            $export_coupon['code'] = $coupon['code'];

            if ('unused' == $coupon['status']) {
                $export_coupon['status'] = '未使用';
            } elseif ('receive' == $coupon['status']) {
                $export_coupon['status'] = '已领取';
            } else {
                $export_coupon['status'] = '已使用';
            }

            return implode(',', $export_coupon);
        }, $coupons);

        $exportFilename = 'couponBatch-'.$batchId.'-'.date('YmdHi').'.csv';

        $titles = array('批次', '有效期至', '优惠码', '状态');

        $exportFile = $this->createExporteCSVResponse($titles, $coupons, $exportFilename);

        return $exportFile;
    }

    private function createExporteCSVResponse(array $header, array $data, $outputFilename)
    {
        $header = implode(',', $header);
        $str = $header."\r\n";
        $str .= implode("\r\n", $data);
        $str = chr(239).chr(187).chr(191).$str;
        $response = new Response();
        $response->headers->set('Content-type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="'.$outputFilename.'"');
        $response->headers->set('Content-length', strlen($str));
        $response->setContent($str);

        return $response;
    }

    public function detailAction(Request $request, $batchId)
    {
        $count = $this->getCouponService()->searchCouponsCount(array('batchId' => $batchId));

        $batch = $this->getCouponBatchService()->getBatch($batchId);

        $paginator = new Paginator($request, $count, 20);

        $coupons = $this->getCouponService()->searchCoupons(
            array('batchId' => $batchId),
            array('orderTime' => 'DESC', 'id' => 'ASC'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );
        $users = $this->getUserService()->findUsersByIds(ArrayToolkit::column($coupons, 'userId'));

        $orders = $this->getOrderService()->findOrdersByIds(ArrayToolkit::column($coupons, 'orderId'));

        return $this->render('admin/coupon/coupon-modal.html.twig', array(
            'coupons' => $coupons,
            'batch' => $batch,
            'paginator' => $paginator,
            'users' => $users,
            'orders' => ArrayToolkit::index($orders, 'id'),
        ));
    }

    public function targetDetailAction(Request $request, $targetType, $batchId)
    {
        $batch = $this->getCouponBatchService()->getBatch($batchId);
        $paginator = new Paginator($request, count($batch['targetIds']), 10);
        $targetIds = empty($batch['targetIds']) ? array(-1) : $batch['targetIds'];

        $targets = array();
        $users = array();
        $categories = array();
        if ('course' == $targetType) {
            $targets = $this->getCourseSetService()->searchCourseSets(
                array('ids' => $targetIds),
                array('createdTime' => 'ASC'),
                $paginator->getOffsetCount(),
                $paginator->getPerPageCount()
            );
            $users = $this->getUserService()->findUsersByIds(ArrayToolkit::column($targets, 'creator'));
        } elseif ('classroom' == $targetType) {
            $targets = $this->getClassroomService()->searchClassrooms(
                array('classroomIds' => $targetIds),
                array('createdTime' => 'ASC'),
                $paginator->getOffsetCount(),
                $paginator->getPerPageCount()
            );
            $categories = $this->getCategoryService()->findCategoriesByIds(ArrayToolkit::column($targets, 'categoryId'));
        }

        return $this->render('admin/coupon/target-modal.html.twig', array(
            'targets' => $targets,
            'targetType' => $targetType,
            'users' => $users,
            'categories' => $categories,
            'paginator' => $paginator,
        ));
    }

    public function getReceiveUrlAction(Request $request, $batchId)
    {
        $batch = $this->getCouponBatchService()->getBatch($batchId);

        return $this->render('admin/coupon/get-receive-url-modal.html.twig', array(
            'batch' => $batch,
            'url' => $this->generateUrl('coupon_receive', array('token' => $batch['token']), UrlGeneratorInterface::ABSOLUTE_URL),
        ));
    }

    public function couponReceiveAction(Request $request, $token)
    {
        $user = $this->getCurrentUser();

        if (!$user->isLogin()) {
            $goto = $this->generateUrl('coupon_receive', array('token' => $token), UrlGeneratorInterface::ABSOLUTE_URL);

            return $this->redirect($this->generateUrl('login', array('goto' => $goto)));
        }
        $couponBatch = $this->getCouponBatchService()->getBatchByToken($token);
        if (!$couponBatch['linkEnable']) {
            throw new AccessDeniedException('Coupon receipt by link is not allowed');
        }
        $result = $this->getCouponBatchService()->receiveCoupon($token, $user['id']);

        if ($result['code']) {
            if (isset($result['id'])) {
                $response = $this->redirect($this->generateUrl('my_cards', array('cardType' => 'coupon', 'cardId' => $result['id'])));

                $response->headers->setCookie(new Cookie('modalOpened', '1'));

                return $response;
            }

            return $this->createMessageResponse('info', $result['message'], '', 3, $this->generateUrl('my_cards', array('cardType' => 'coupon')));
        }

        return $this->createMessageResponse('info', '无效的链接', '', 3, $this->generateUrl('homepage'));
    }

    public function chooserCouponAction(Request $request, $type)
    {
        $conditions = $request->query->all();
        $conditions['deadlineMode'] = 'day';
        $conditions['unreceivedNumGt'] = 1;

        $paginator = new Paginator(
            $request,
            $this->getCouponBatchService()->searchBatchsCount($conditions),
            10
        );

        $batchs = $this->getCouponBatchService()->searchBatchs(
            $conditions,
            array('createdTime' => 'DESC'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        foreach ($batchs as $key => &$batch) {
            $batch['couponContent'] = $this->getCouponBatchService()->getCouponBatchContent($batch['id']);
        }

        return $this->render('admin/coupon/chooser-coupon/chooser-coupon-modal.html.twig', array(
            'batchs' => $batchs,
            'type' => $type,
            'paginator' => $paginator,
        ));
    }

    public function chooserResourceListAction(Request $request, $batchId)
    {
        $batch = $this->getCouponBatchService()->getBatch($batchId);
        if (!in_array($batch['targetType'], array('course', 'classroom')) || $batch['targetId'] < 0) {
            $this->createNewException(CouponException::TARGET_TYPE_ERROR());
        }
        $resourceIds = empty($batch['targetIds']) ? array(-1) : $batch['targetIds'];
        if ('course' == $batch['targetType']) {
            $resources = $this->getCourseSetService()->findCourseSetsByIds($resourceIds);
        } else {
            $resources = $this->getClassroomService()->findClassroomsByIds($resourceIds);
        }

        return $this->render('admin/coupon/chooser-coupon/coupon-batch-resource-list-modal.html.twig', array(
            'batch' => $batch,
            'resources' => $resources,
        ));
    }

    protected function getUserService()
    {
        return $this->createService('User:UserService');
    }

    protected function getTokenService()
    {
        return $this->createService('User:TokenService');
    }

    private function getCouponService()
    {
        return $this->createService('Coupon:CouponService');
    }

    /**
     * @return CouponBatchService
     */
    private function getCouponBatchService()
    {
        return $this->createService('Coupon:CouponBatchService');
    }

    private function getOrderService()
    {
        return $this->createService('Order:OrderService');
    }

    /**
     * @return CourseSetService
     */
    private function getCourseSetService()
    {
        return $this->createService('Course:CourseSetService');
    }

    /**
     * @return ClassroomService
     */
    private function getClassroomService()
    {
        return $this->createService('Classroom:ClassroomService');
    }

    private function getCategoryService()
    {
        return $this->createService('Taxonomy:CategoryService');
    }

    protected function getSettingService()
    {
        return $this->createService('System:SettingService');
    }
}
