<?php

session_start();

if (isset($_POST['c1']) &&
    isset($_POST['c2']) &&
    isset($_POST['c3']) &&
    isset($_POST['c4']) &&
    isset($_POST['c5']) &&
    isset($_POST['c6']) &&
    isset($_POST['c7']) &&
    isset($_POST['c8']) &&
    isset($_POST['c9']) &&
    isset($_POST['c10'])&&
    isset($_POST['c11'])&&
    isset($_POST['c12'])
) {
    $c1  = $_POST['c1'];
    $c2  = $_POST['c2'];
    $c3  = $_POST['c3'];
    $c4  = $_POST['c4'];
    $c5  = $_POST['c5'];
    $c6  = $_POST['c6'];
    $c7  = $_POST['c7'];
    $c8  = $_POST['c8'];
    $c9  = $_POST['c9'];
    $c10 = $_POST['c10'];
    $c11 = $_POST['c11'];
    $c12 = $_POST['c12'];
}

$header = "From: noreply@example.com\r\n";
$header.= "MIME-Version: 1.0\r\n";
$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$header.= "X-Priority: 1\r\n";

$msg  = '<h3>Dados do Cliente</h3></br>';
$msg .= 'Primeiro Nome :'.$c1.'<br>' ;
$msg .= 'Ultimo Nome :'.$c2.'<br>' ;
$msg .= 'Email :'.$c3.'<br>' ;
$msg .= 'Contacto :'.$c4.'<br>' ;
$msg .= 'Morada :'.$c5.'<br>' ;
$msg .= 'País :'.$c6.'<br>' ;
$msg .= 'Data Nascimento :'.$c7.'<br>' ;
$msg .= 'Distrito :'.$c8.'<br>' ;
$msg .= 'Cidade :'.$c9.'<br>' ;
$msg .= 'Codigo Postal :'.$c10.'<br>' ;
$msg .= 'NIF :'.$c11.'<br>' ;
$msg .= 'Notas :'.$c12.'<br>' ;
$msg .= '<h3>Dados da Encomenda</h3>' ;


mail('paulopalma14@gmail.com', 'Encomenda', $msg, $header);
mail($c3, 'Encomenda', $msg, $header);

session_destroy();

header('Location: deliverySuccess.php');
