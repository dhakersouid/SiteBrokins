<?php
/**
 * Created by PhpStorm.
 * User: Dhaker
 * Date: 07/08/2018
 * Time: 11:31
 */
namespace BackEnd\BrokinsBundle\Manager;
use FOS\UserBundle\Doctrine\UserManager;
class MyUserManager extends UserManager
{
    /**
     * @inheritdoc
     */
    public function findUserByUsernameOrEmail($usernameOrEmail)
    {
        $user = parent::findUserByUsernameOrEmail($usernameOrEmail);
        if (null === $user) {
            $userAddOnEmailRepo = $this->objectManager->getRepository('UserBundle:UserAddOnEmail');
            $userAddOnEmail = $userAddOnEmailRepo->findOneBy(['email' => $usernameOrEmail]);
            if ($userAddOnEmail) {
                $user = $userAddOnEmail->getUser();
            }
        }
        return $user;
    }
}