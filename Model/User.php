<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 14/02/2017
 * Time: 02:16
 */

namespace Mineiro;


class User
{

    var $nome, $ultimo, $morada, $nif, $email, $pass, $contacto, $data_nas, $cidade, $cod_postal, $distrito, $pais;
    var $conn ;

    public function __construct()
    {
        $this->conn = new DB();
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

    private function getTotalUsers()
    {
        $conn = $this->conn->conn();
        $result = mysqli_query($conn, "SELECT count(*) AS total FROM utilizador");
        $data = mysqli_fetch_assoc($result);
        $conn->close();
        return intval($data['total']);
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

    public function setEmail($email)
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


}