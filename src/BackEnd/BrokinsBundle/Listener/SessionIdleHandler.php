<?php

namespace BackEnd\BrokinsBundle\Listener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class SessionIdleHandler
{

    protected $session;
    protected $securityToken;
    protected $router;
    protected $maxIdleTime;

    public function __construct(SessionInterface $session, TokenStorageInterface $securityToken, RouterInterface $router)
    {
        $this->session = $session;
        $this->securityToken = $securityToken;
        $this->router = $router;
        $this->maxIdleTime = 1800;
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
    }

}