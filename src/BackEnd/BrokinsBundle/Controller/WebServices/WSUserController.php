<?php
/**
 * Created by PhpStorm.
 * User: Dhaker
 * Date: 03/08/2018
 * Time: 10:37
 */

namespace BackEnd\BrokinsBundle\Controller\WebServices;


use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use BackEnd\BrokinsBundle\Helper\ControllerHelper;


use BackEnd\BrokinsBundle\Entity\User;
use BackEnd\BrokinsBundle\Manager\MyUserManager;

class WSUserController extends FOSRestController
{


    public function testPOSTLoginUser()
    {
        $userName = "testuser";
        $password = "test";

        $user = $this->createUser($userName, $password);

        $this->client->request(
            'POST',
            '/users/login',
            [],
            [],
            [
                'CONTENT_TYPE' => 'application/json',
                'PHP_AUTH_USER' => $userName,
                'PHP_AUTH_PW'   => $password,
            ]
        );
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        $responseArr = json_decode($this->client->getResponse()->getContent(), true);
        $this->assertArrayHasKey('token', $responseArr);


    }




    public function loginAction(Request $request)
    {
        $userName = "roletest";
        $password = "test";

        $user = $this->getDoctrine()
            ->getRepository('BackEndBrokinsBundle:User')
            ->findOneBy(['username' => $userName]);

        $response = new Response($this->serialize(['token' => $user]), Response::HTTP_OK);

        return $this->setBaseHeaders($response);
    }

    /**
     * Returns token for user.
     *
     * @param User $user
     *
     * @return array
     */
    public function getToken(User $user)
    {
        return $this->container->get('lexik_jwt_authentication.encoder')
            ->encode([
                'username' => $user->getUsername(),
                'exp' => $this->getTokenExpiryDateTime(),
            ]);
    }

    /**
     * Returns token expiration datetime.
     *
     * @return string Unixtmestamp
     */
    private function getTokenExpiryDateTime()
    {
        $tokenTtl = $this->container->getParameter('lexik_jwt_authentication.token_ttl');
        $now = new \DateTime();
        $now->add(new \DateInterval('PT'.$tokenTtl.'S'));

        return $now->format('U');
    }
}