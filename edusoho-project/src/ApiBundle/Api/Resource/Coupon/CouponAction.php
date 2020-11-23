<?php

namespace ApiBundle\Api\Resource\Coupon;

use ApiBundle\Api\ApiRequest;
use ApiBundle\Api\Resource\AbstractResource;
use Biz\Common\CommonException;
use Biz\Coupon\Service\CouponService;
use Biz\Coupon\Service\CouponBatchService;

class CouponAction extends AbstractResource
{
    public function add(ApiRequest $request, $code)
    {
        try {
            $action = $request->request->get('action');

            if (empty($action)) {
                throw CommonException::ERROR_PARAMETER_MISSING();
            }

            $function = $action.'Coupon';

            return \call_user_func(array($this, $function), $request, $code);
        } catch (\Exception $e) {
            return array(
                'success' => false,
                'error' => array(
                    'code' => $e->getCode(),
                    'message' => $this->container->get('translator')->trans($e->getMessage()),
                ),
            );
        }
    }

    private function receiveCoupon($request, $code)
    {
        $id = $request->request->get('targetId');
        $type = $request->request->get('targetType');

        $coupon = $this->getCouponService()->getCouponByCode($code);
        if (empty($coupon)) {
            return $this->error('该优惠券不存在');
        }
        $batch = $this->getCouponBatchService()->getBatch($coupon['batchId']);
        if (empty($batch['codeEnable'])) {
            return $this->error('该优惠卷无法通过优惠码渠道发放');
        }

        if (isset($batch['deadlineMode']) && 'day' == $batch['deadlineMode']) {
            //ES优惠券领取时，对于优惠券过期时间会加86400秒，所以计算deadline时对于固定天数模式应与设置有效期模式一致，都为当天凌晨00:00:00
            $fields['deadline'] = strtotime(date('Y-m-d')) + 24 * 60 * 60 * $batch['fixedDay'];
            $this->getCouponService()->updateCoupon($coupon['id'], $fields);
        }
        $result = $this->getCouponService()->checkCoupon($code, $id, $type);
        if (isset($result['useable']) && 'no' == $result['useable']) {
            return $this->error($result['message']);
        }
        $result['target'] = $this->getCouponBatchService()->getTargetByBatchId($result['id']);
        $result['targetDetail'] = $this->getCouponBatchService()->getCouponBatchTargetDetail($coupon['batchId']);

        return $this->success($result);
    }

    private function success($result)
    {
        return array(
            'success' => true,
            'message' => '领取成功，请在卡包中查看',
            'data' => $result,
        );
    }

    private function error($message)
    {
        return array(
            'success' => false,
            'error' => array(
                'code' => 500,
                'message' => $message,
            ),
        );
    }

    /**
     * @return CouponBatchService
     */
    private function getCouponBatchService()
    {
        return $this->service('Coupon:CouponBatchService');
    }

    /**
     * @return CouponService
     */
    private function getCouponService()
    {
        return $this->service('Coupon:CouponService');
    }
}
