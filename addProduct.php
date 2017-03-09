<?php

namespace Mineiro;

require_once "Controller/Load.php";
require_once "Model/Product.php";

session_start();

$id = $_GET["id"];

$conn = new Load();
$prod = new Product();

$result = $prod->getProduct($id);

if (intval($result[0]['quantidade']) > 0){
    $conn->addToCart_onClick($id);
    header("Location: cart.php");
}else{
    header('Location: product-detail.php?item='.$id.'');
    echo '<script type=\'text/javascript\'>alert("Produto não se encontra em stock");</script>';
}

?>