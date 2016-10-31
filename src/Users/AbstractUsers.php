<?php
/**
 * Users class.
 */

namespace Vendor\users_roles\Users;

abstract class AbstractUsers
{
    public $username;
    public $email;
    public $role;
    protected $password;

    abstract public function getInfo();
}
