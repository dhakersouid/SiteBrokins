<?php
/**
 * Created by PhpStorm.
 * User: medna
 * Date: 11/05/2017
 * Time: 23:14
 */

namespace BackEnd\BrokinsBundle\Listener;


use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTDecodedEvent;
use Symfony\Component\HttpFoundation\RequestStack;

class JWTDecodedListener
{

    /**
     * @var RequestStack
     */
    private $requestStack;

    /**
     * @param RequestStack $requestStack
     */
    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    /**
     * @param JWTDecodedEvent $event
     *
     * @return void
     */
    public function onJWTDecoded(JWTDecodedEvent $event)
    {
        $request = $this->requestStack->getCurrentRequest();

        $payload = $event->getPayload();

        if (!isset($payload['ip']) || $payload['ip'] !== $request->getClientIp()) {
            $event->markAsInvalid();
        }
    }
}