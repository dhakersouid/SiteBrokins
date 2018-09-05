<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace BackEnd\BrokinsBundle\EventListener;
use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationFailureEvent;
use Lexik\Bundle\JWTAuthenticationBundle\Response\JWTAuthenticationFailureResponse;

class AuthenticationFailureListener{
    

/**
 * @param AuthenticationFailureEvent $event
 */
public function onAuthenticationFailureResponse(AuthenticationFailureEvent $event)
{
    $data = [
        'status'  => '401 Unauthorized',
        'message' => "L'identifiant ou le mot de passe que vous avez entré n'est pas valide",
    ];

    $response = new JWTAuthenticationFailureResponse($data);

    $event->setResponse($response);
}
}