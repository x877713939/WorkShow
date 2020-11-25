<?php

namespace AppBundle\Controller\Admin;

use Biz\System\Service\SettingService;
use Symfony\Component\HttpFoundation\Request;

class OpenCourseSettingController extends BaseController
{
    public function openCourseSettingAction(Request $request)
    {
        $openCourseSetting = $this->getSettingService()->get('openCourse', array());

        $default = array(
            'show_comment' => '1',
        );

        $openCourseSetting = array_merge($default, $openCourseSetting);

        if ('POST' == $request->getMethod()) {
            $set = $request->request->all();

            $openCourseSetting = array_merge($openCourseSetting, $set);

            $this->getSettingService()->set('openCourse', $set);
            $this->setFlashMessage('success', 'site.save.success');
        }

        return $this->render('admin/open-course/set.html.twig', array(
            'openCourseSetting' => $openCourseSetting,
        ));
    }

    /**
     * @return SettingService
     */
    protected function getSettingService()
    {
        return $this->createService('System:SettingService');
    }
}
