<?php

namespace BackEnd\BrokinsBundle\Listener;
use BackEnd\BrokinsBundle\Entity\User;
use FOS\UserBundle\Model\UserInterface;
use JMS\Serializer\SerializationContext;
use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationFailureEvent;
use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;
use Lexik\Bundle\JWTAuthenticationBundle\Response\JWTAuthenticationFailureResponse;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;


class JWTResponseListener
{
    protected
        $router,
        /**
         * @var AuthorizationChecker $security
         */
        $security;

    public function __construct(ContainerInterface $container)
    {
        $this->container=$container;
        $this->router = $container->get('router');
        $this->security = $container->get('security.authorization_checker');
    }

    /**
     * @param AuthenticationSuccessEvent $event
     */
    public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event)
    {
        $data = $event->getData();
        $user = $event->getUser();
        if (!$user instanceof UserInterface) {
            return;
        }
        /** @var User $user */


        $url="";
        $user=$this->container->get('security.token_storage')->getToken()->getUser();

        $data['url']= $url;
        $data = $event->getData();
        $user = $event->getUser();
        $userInfo['last_login'] = $user->getLastLogin();
        $userInfo['email'] = $user->getEmail();
        $userInfo['UserName'] = $user->getUsername();
        $userInfo['UserID'] = $user->getId();
        $userInfo['roles'] = $user->getRoles();

        $data['user'] = $userInfo;


        $event->setData($data);
        return $user;
    }

    /**
     * @param AuthenticationFailureEvent $event
     */
    public function onAuthenticationFailureResponse(AuthenticationFailureEvent $event)
    {
        $data = [
            'status'  => '401 Unauthorized',
            'message' => 'Nom d\'utilisateur ou mot de passe incorrect',
        ];

        $response = new JWTAuthenticationFailureResponse($data);

        $event->setResponse($response);
    }
}