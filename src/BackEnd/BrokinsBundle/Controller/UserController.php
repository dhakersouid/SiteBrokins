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
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\FOSRestController;

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

    protected function createUser($userName, $password)
    {
        $userManager = $this->getService('fos_user.user_manager');
        $user = $userManager->createUser();
        $user->setEnabled(true);
        $user->setPlainPassword($password);
        $user->setUsername($userName);
        $user->setEmail('email@email.com');
        $userManager->updateUser($user);

        return $user;
    }

    public function loadProfileAction(){
        $user =$this->getUser();
        if ($this->get('security.context')->isGranted('ROLE_ADMIN')) {

            return $this->render('BackEndBrokinsBundle:Default:index.html.twig'
            );
        }
        else if ($this->get('security.context')->isGranted('ROLE_USER')) {

            return $this->render('BackEndBrokinsBundle:test:devis2.html.twig'
            );
        }

    }
    public function homeAction() {
        return $this->render('BackEndBrokinsBundle:test:devis2.html.twig');
    }
    public function submitAction() {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('back_end_brokins_homepage');
        }
    }

    public function updateAction($id=0)
    {
        $request = $this->container->get('request');

        $url = $this->get('router')
            ->generate('brokins_user_profile');
        return $this->redirect($url, 301);
    }

    public function verificationNouveauMdpAction(){
        $reponse = array("reponse"=>"succes");
        $originMdp = $this->getUser()->getPassword();
        $request = $this->container->get('request');
        $mdp = $request->get("mdp","");
        $salt = $this->getUser()->getSalt();
        $salted = $mdp.'{'.$salt.'}';
        $digest = hash('sha512',$salted,true);
        for ($i=1;$i<5000;$i++){
            $digest = hash('sha512',$digest.$salted,true);
        }
        $encodedPassword = base64_encode($digest);
        $newMdp = $request->get("newMdp","");
        $confirmMdp = $request->get("confirmMdp","");
        if($encodedPassword != $originMdp){
            $reponse["reponse"] = "filedOrigin";
        }
        if($newMdp != $confirmMdp){
            $reponse["reponse"] = "filedNew";
        }
        return new JsonResponse($reponse, 200);
    }
}