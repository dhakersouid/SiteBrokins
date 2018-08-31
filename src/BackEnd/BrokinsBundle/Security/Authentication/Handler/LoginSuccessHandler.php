<?php

namespace BackEnd\BrokinsBundle\Security\Authentication\Handler;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    protected
        $router,
        $security;

    public function __construct(Router $router,AuthorizationChecker $security)
    {
        $this->router = $router;
        $this->security = $security;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        $url="";
        if ($this->security->isGranted('ROLE_ADMIN'))
            $url ='test';
        elseif ($this->security->isGranted('ROLE_USER'))
            $url ='test';


        $response = new RedirectResponse($this->router->generate($url));

        return $response;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        // if AJAX login
        if ($request->isXmlHttpRequest()) {
            $message = $this->translator->trans("Bad credentials", array(), 'FOSUserBundle');
            $array = array('success' => 'false', 'message' => $message . '.'); // data to return via JSON
            $response = new Response(json_encode($array));
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        } else {
            $request->getSession()->set(SecurityContextInterface::AUTHENTICATION_ERROR, $exception);
            if ($this->session->get('_security.main.failure_path')) {

                $url = $this->session->get('_security.main.failure_path');

            } else {

                $url = $this->router->generate('fos_user_security_login');

            } // end if

            return new RedirectResponse($url);

            // set authentication exception to session

            // return new RedirectResponse( $this->router->generate( 'failure_path' ) );
        }
    }
}