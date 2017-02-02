<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 01/02/2017
 * Time: 15:18
 */

namespace mineiro ;

require_once '../Controllers/loadControl.php';
require_once '../Model/User.php';

$con = new loadControl();
$user = new User();

$r1 = $_POST["r1"];
$r2 = $_POST["r2"];
$r3 = $_POST["r3"];
$r4 = $_POST["r4"];
$r5 = $_POST["r5"];
$r6 = $_POST["r6"];
$r7 = $_POST["r7"];
$r8 = $_POST["r8"];
$r9 = $_POST["r9"];
$r10 = $_POST["r10"];
$r11 = $_POST["r11"];
$r12 = $_POST["r12"];

$user->setNome($r1);
$user->setUltimo($r2);
$user->setEmail($r3);
$user->setPass($r4);
$user->setDataNas($r5);
$user->setNif($r6);
$user->setPais($r7);
$user->setDistrito($r8);
$user->setCidade($r9);
$user->setMorada($r10);
$user->setCodPostal($r11);
$user->setContacto($r12);

$con->btnRegister_onClick($user);

header("Location:../Pages/success.php");






