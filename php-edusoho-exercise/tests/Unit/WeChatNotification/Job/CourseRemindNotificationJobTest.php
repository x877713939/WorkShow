<?php

namespace Tests\Unit\WeChatNotification\Job;

use Biz\BaseTestCase;
use Biz\WeChatNotification\Job\CourseRemindNotificationJob;

class CourseRemindNotificationJobTest extends BaseTestCase
{
    public function testExecute()
    {
        $this->mockBiz('WeChat:WeChatService', array(
            array('functionName' => 'getTemplateId', 'returnValue' => 2),
            array('functionName' => 'findSubscribedUsersByUserIdsAndType', 'returnValue' => array(array('openId' => 123))),
            array('functionName' => 'findAllBindUserIds', 'returnValue' => array(array('openId' => 123, 'userId' => 1))),
            array('functionName' => 'getWeChatSendChannel', 'returnValue' => 'wechat'),
        ));
        $this->mockBiz('Course:MemberService', array(
            array('functionName' => 'findLastLearnTimeRecordStudents', 'returnValue' => array(array('userId' => 1, 'courseId' => 1, 'learnedCompulsoryTaskNum' => 1))),
        ));
        $this->mockBiz('Course:CourseService', array(
            array('functionName' => 'findCoursesByIds', 'returnValue' => array(array('id' => 1, 'title' => 'test', 'compulsoryTaskNum' => 1))),
        ));
        $this->mockBiz('Course:CourseSetService', array(
            array('functionName' => 'findCourseSetsByIds', 'returnValue' => array(array('id' => 1, 'title' => 'test', 'defaultCourseId' => 1))),
        ));

        $job = new CourseRemindNotificationJob(array(), $this->biz);
        $job->args = array('key' => 1, 'url' => 'xxxx', 'sendTime' => '00:00', 'sendDays' => array(''));
        $result = $job->execute();

        $this->assertEmpty($result);
    }
}
