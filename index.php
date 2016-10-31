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

$tmp = new Vendor\users_roles\Users\Admin();
$tmp->username = 'qwe';
$tmp->email = "teqweqwst@gmail.com";
$tmp->role = "Administrator";
$tmp->root = true;

$test->getInfo();
echo "<br>";
$tmp->getInfo();