<?php
/**
 * Created by PhpStorm.
 * User: smagolexandr
 * Date: 31.10.16
 * Time: 3:38
 */
require_once __DIR__ . '/vendor/autoload.php';


$test = new Vendor\users_roles\Users\Users();
$test->username = 'SmagOlexandr';
$test->email = "test@gmail.com";
$test->role = "Administrator";

$admin = new Vendor\users_roles\Admin\Admin();
$admin->getInfo();

$test->getInfo();