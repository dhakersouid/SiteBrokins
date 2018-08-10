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

        dump($data);
        dump($user);
        $data['user'] = array(
        'roles' => $user->getRoles(),
        'userId' => $user->getId(),
        'userName' => $user->getUserName());

        $event->setData($data);

    }

}
