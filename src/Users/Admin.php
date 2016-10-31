<?php
/**
 * Created by PhpStorm.
 * User: smagolexandr
 * Date: 31.10.16
 * Time: 4:41
 */

namespace Vendor\users_roles\Users;


class Admin extends Users
{
    public $root = false;

    public function getInfo(){
        echo $this->username;
        echo $this->email;
        echo $this->role;
        echo $this->root;
    }
}