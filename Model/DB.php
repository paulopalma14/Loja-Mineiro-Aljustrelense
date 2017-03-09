<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 14/02/2017
 * Time: 00:45
 */

namespace Mineiro;


class DB
{
    var $conn ;

    public function __construct()
    {
    }

    public function conn(){

        $this->conn = mysqli_connect("localhost","root","","mineiro");
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        return $this->conn ;

    }
}