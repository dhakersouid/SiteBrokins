<?php

namespace BackEnd\BrokinsBundle\EventListener;

use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;

class AuthenticationSuccessListener {

/**
 * @param AuthenticationSuccessEvent $event
 */
    public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event)
    {

        $data = $event->getData();
        $user = $event->getUser();


        $data['user'] = array(
        'roles' => $user->getRoles(),
        'userId' => $user->getId(),
        'userName' => $user->getUserName(),
        'last_login' => $user->getPassword());

        $event->setData($data);

    }

}
