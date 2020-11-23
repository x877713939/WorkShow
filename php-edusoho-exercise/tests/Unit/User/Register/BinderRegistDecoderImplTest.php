<?php

namespace Tests\Unit\User\Register;

use AppBundle\Common\ReflectionUtils;
use Biz\BaseTestCase;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class BinderRegistDecoderImplTest extends BaseTestCase
{
    public function testRegistWithHappyPath()
    {
        $this->mockBiz(
            'System:SettingService',
            [
                [
                    'functionName' => 'get',
                    'returnValue' => [
                        'qq_enabled' => true,
                        'qq_secret' => 'qqKey',
                        'qq_key' => 'qqSecret',
                        'qq_set_fill_account' => true,
                    ],
                ],
            ]
        );

        $registration = [
            'email' => 'hello@howzhi.com',
            'nickname' => 'hello',
            'password' => '123456',
            'authid' => 'sdfses1',
            'type' => 'qq',
        ];

        $binderDecoder = $this->getBinderRegistDecoder();
        $binderDecoder->setRegister($this->getEmailRegistDecoder());
        list($user, $inviteUser) = $binderDecoder->register($registration);

        $user = $this->getUserService()->getUser($user['id']);

        $expectedPass = $this->getPasswordEncoder()->encodePassword('123456', $user['salt']);
        $this->assertEquals('hello@howzhi.com', $user['email']);
        $this->assertEquals($expectedPass, $user['password']);
        $this->assertEquals(1, $user['setup']);

        $userBind = $this->getUserBindDao()->getByTypeAndFromId('qq', 'sdfses1');
        $this->assertEquals('sdfses1', $userBind['fromId']);
    }

    /**
     * @expectedException \Biz\System\SettingException
     */
    public function testWithInvalidSetting()
    {
        $this->mockBiz(
            'System:SettingService',
            [
                [
                    'functionName' => 'get',
                    'returnValue' => ['qq_set_fill_account' => false],
                    'withParams' => ['login_bind', []],
                    'runTimes' => 1,
                ],
            ]
        );
        ReflectionUtils::invokeMethod($this->getBinderRegistDecoder(), 'validateBeforeSave', [['type' => 'qq']]);
    }

    protected function getEmailRegistDecoder()
    {
        return $this->biz['user.register.email'];
    }

    protected function getBinderRegistDecoder()
    {
        return $this->biz['user.register.binder'];
    }

    protected function getUserService()
    {
        return $this->biz->dao('User:UserService');
    }

    protected function getSettingService()
    {
        return $this->biz->service('System:SettingService');
    }

    protected function getUserBindDao()
    {
        return $this->biz->service('User:UserBindDao');
    }

    protected function getPasswordEncoder()
    {
        return new MessageDigestPasswordEncoder('sha256');
    }
}
