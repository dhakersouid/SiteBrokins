<?php
/**
 * Created by PhpStorm.
 * User: Dhaker
 * Date: 25/07/2018
 * Time: 11:34
 */

namespace BackEnd\BrokinsBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class UserController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request ,AuthenticationUtils $authenticationUtils)
    {

    $a="a";
    dump($a);
    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();
    $b="b";
    dump($b);
    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();
    $c="c";
    dump($c);
    return $this->render('@BackEndBrokins/test/devis2.html.twig', array(
        'last_username' => $lastUsername,
        'error'         => $error,
    ));
    }
}