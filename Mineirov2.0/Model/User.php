<?php

/**
 * Created by PhpStorm.
 * User: Me
 * Date: 14/11/2016
 * Time: 14:23
 */

namespace mineiro;

class User
{
    var $nome, $ultimo, $morada, $nif, $email, $pass, $contacto, $data_nas, $cidade, $cod_postal, $distrito, $pais;
    var $conn;

    public function __construct()
    {
        $this->conn = new DB();
    }

    public function __construct1($nome, $ultimo, $morada, $nif, $email, $pass, $contacto, $data_nas, $cidade, $cod_postal, $distrito, $pais)
    {
        $this->conn = new DB();
        $this->nome = $nome;
        $this->ultimo = $ultimo;
        $this->morada = $morada;
        $this->nif = $nif;
        $this->email = $email;
        $this->pass = $pass;
        $this->contacto = $contacto;
        $this->data_nas = $data_nas;
        $this->cidade = $cidade;
        $this->cod_postal = $cod_postal;
        $this->distrito = $distrito;
        $this->pais = $pais;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setUltimo($ultimo)
    {
        $this->ultimo = $ultimo;
    }

    public function setMorada($morada)
    {
        $this->morada = $morada;
    }

    public function setNif($nif)
    {
        $this->nif = $nif;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    public function setContacto($contacto)
    {
        $this->contacto = $contacto;
    }

    public function setDataNas($data_nas)
    {
        $this->data_nas = $data_nas;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function setCodPostal($cod_postal)
    {
        $this->cod_postal = $cod_postal;
    }

    public function setDistrito($distrito)
    {
        $this->distrito = $distrito;
    }

    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    public function setConn($conn)
    {
        $this->conn = $conn;
    }

    public function getTotalUsers()
    {

        $conn = $this->conn->conn();

        $result = mysqli_query($conn, "SELECT count(*) AS total FROM utilizador");
        $data = mysqli_fetch_assoc($result);
        echo $data['total'];

        return intval($data['total']);

    }

    public function registerUser()
    {

        $conn = $this->conn->conn();

        $id = $this->getTotalUsers() + 1;

        $query = "INSERT INTO utilizador VALUES ('$id','$this->nome','$this->ultimo','$this->morada'
         ,'$this->nif','$this->email','$this->pass','$this->contacto','$this->data_nas',
         '$this->cidade','$this->cod_postal','$this->distrito','$this->pais')";

        $sql = mysqli_query($conn, $query) or trigger_error($conn->error);

    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getUltimo()
    {
        return $this->ultimo;
    }

    public function getMorada()
    {
        return $this->morada;
    }

    public function getNif()
    {
        return $this->nif;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function getContacto()
    {
        return $this->contacto;
    }

    public function getDataNas()
    {
        return $this->data_nas;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function getCodPostal()
    {
        return $this->cod_postal;
    }

    public function getDistrito()
    {
        return $this->distrito;
    }

    public function getPais()
    {
        return $this->pais;
    }

}