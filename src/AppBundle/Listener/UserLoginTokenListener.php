<?php

namespace AppBundle\Listener;

use Biz\System\Service\SettingService;
use Biz\User\Service\TokenService;
use Biz\User\Service\UserService;
use Biz\User\UserException;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Topxia\MobileBundleV2\Controller\MobileBaseController;

class UserLoginTokenListener
{
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function onGetUserLoginListener(GetResponseEvent $event)
    {
        if (HttpKernelInterface::MASTER_REQUEST != $event->getRequestType()) {
            return;
        }

        $request = $event->getRequest();
        $session = $request->getSession();
        if (empty($session)) {
            return;
        }

        $user = $this->getUser();
        if (!$user->islogin()) {
            return;
        }
        if (isset($user['locked']) && 1 == $user['locked']) {
            $this->container->get('security.token_storage')->setToken(null);
            setcookie('REMEMBERME');

            return;
        }

        $auth = $this->getSettingService()->get('auth');
        $route = $request->get('_route');

        if ($auth
            && 'mobile' != $auth['register_mode']
            && array_key_exists('email_enabled', $auth)
            && $user['createdTime'] > $auth['setting_time']
            && 0 == $user['emailVerified']
            && ('default' == $user['type'] || 'web_email' == $user['type'] || 'web_mobile' == $user['type'] || 'discuz' == $user['type'] || 'phpwind' == $user['type'] || 'import' == $user['type'])
            && ('opened' == $auth['email_enabled'] && empty($user['verifiedMobile']))
            && (isset($route))
            && ('' != $route)
            && ('register_email_verify' != $route)
            && ('register_submited' != $route)
            && ('register' != $route)
            && ('POST' != $request->getMethod())
        ) {
            $request->getSession()->invalidate();
            $this->container->get('security.token_storage')->setToken(null);

            $goto = $this->container->get('router')->generate('register_submited', array(
                'id' => $user['id'], 'hash' => $this->makeHash($user),
            ));

            $response = new RedirectResponse($goto, '302');
            $response->headers->setCookie(new Cookie('REMEMBERME', ''));
            $event->setResponse($response);

            return;
        }

        $loginBind = $this->getSettingService()->get('login_bind');

        if (!empty($loginBind['client_login_limit'])) {
            $tokens = $this->getTokenService()->findTokensByUserIdAndType($user['id'], MobileBaseController::TOKEN_TYPE);
            foreach ($tokens as $token) {
                if (!isset($token['data']['client']) || 'app' == $token['data']['client']) {
                    $request->getSession()->invalidate();
                    $response = $this->logout($request->isXmlHttpRequest());
                    $event->setResponse($response);

                    return;
                }
            }
        }

        if (empty($loginBind['login_limit'])) {
            return;
        }

        $user = $this->getUserService()->getUser($user['id']);

        if (empty($user['loginSessionId']) || strlen($user['loginSessionId']) <= 0) {
            $sessionId = $request->getSession()->getId();
            $this->getUserService()->markLoginInfo($request->get('type'));
            $this->getUserService()->rememberLoginSessionId($user['id'], $sessionId);

            return;
        }

        $REMEMBERME = $request->cookies->get('REMEMBERME');

        $userLoginToken = $session->getId();
        if (empty($userLoginToken) && !empty($REMEMBERME)) {
            return;
        }

        if ($userLoginToken != $user['loginSessionId']) {
            $magic = $this->getSettingService()->get('magic');

            if ((!empty($magic['login_limit'])) && ($request->isXmlHttpRequest())) {
                $response = new Response(array('error' => array('code' => UserException::LIMIT_LOGIN)), 403);
                $response->headers->clearCookie('REMEMBERME');
                $response->send();
            }
            $request->getSession()->invalidate();

            $response = $this->logout();

            $event->setResponse($response);
        }
    }

    protected function logout($isXmlHttpRequest = false)
    {
        $this->container->get('security.token_storage')->setToken(null);

        $this->container->get('session')->getFlashBag()->add('danger', '此帐号已在别处登录，请重新登录');

        $goto = $this->container->get('router')->generate('login');
        $response = $isXmlHttpRequest ? new JsonResponse(['goto' => $goto], 403) : new RedirectResponse($goto, '302');
        $response->headers->clearCookie('REMEMBERME');

        return $response;
    }

    private function makeHash($user)
    {
        $string = $user['id'].$user['email'].$this->container->getParameter('secret');

        return md5($string);
    }

    /**
     * @return UserService
     */
    protected function getUserService()
    {
        return $this->getBiz()->service('User:UserService');
    }

    /**
     * @return TokenService
     */
    protected function getTokenService()
    {
        return $this->getBiz()->service('User:TokenService');
    }

    /**
     * @return SettingService
     */
    protected function getSettingService()
    {
        return $this->getBiz()->service('System:SettingService');
    }

    protected function getBiz()
    {
        return $this->container->get('biz');
    }

    protected function getUser()
    {
        $biz = $this->getBiz();

        return $biz['user'];
    }
}
