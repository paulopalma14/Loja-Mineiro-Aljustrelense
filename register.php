<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 15/02/2017
 * Time: 00:33
 */

namespace Mineiro;

require_once "Controller/Load.php";

$conn = new Load();

$conn->register_onClick();

header("Location: success.php");

?>