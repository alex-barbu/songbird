<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10/7/2018
 * Time: 12:34 PM
 */

namespace AppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use FOS\UserBundle\FOSUserBundle;

class User extends Bundle
{
    // use a child bundle
    public function getParent()
    {
        return substr(strrchr(FOSUserBundle::class, '\\'), 1);
    }
}