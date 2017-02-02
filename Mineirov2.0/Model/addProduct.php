<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 01/02/2017
 * Time: 19:42
 */

namespace mineiro;


require_once "../Model/CarrCompras.php";
require_once "../Controllers/loadControl.php";

$id = $_GET["prod"];
$cont = $_SESSION["cont"];

$cont->addProductToCarr($id);

$_SESSION["cart"];


//header("Location: ../pages/cart.php");



