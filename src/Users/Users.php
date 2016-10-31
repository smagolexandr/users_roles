<?php
/**
 * Created by PhpStorm.
 * User: smagolexandr
 * Date: 31.10.16
 * Time: 4:07.
 */

namespace Vendor\users_roles\Users;

class Users extends AbstractUsers implements UserInterface
{
    public function getInfo()
    {
        echo $this->username;
        echo $this->email;
    }
}
