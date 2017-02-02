<?php

/**
 * Created by PhpStorm.
 * User: Me
 * Date: 14/11/2016
 * Time: 16:17
 */

namespace mineiro;

require_once "Venda.php";
require_once "Produto.php";

class CarrCompras
{

    private $car;
    private $venda;
    private $produto;

    function __construct()
    {

        $this->car = array();
        $this->venda = new Venda();
        $this->produto = new Produto();

    }

    function addVenda()
    {

        $this->venda->setPaymentMethod();
        $this->venda->sendToDB();
        $this->venda->sendEmail();

    }

    public function getCar(){
        return $this->car;
    }

    function addProduct($id)
    {
        $result = $this->produto->getProduct($id);

        $prod = new Produto() ;
        $prod->setId($result[0]["id"]);
        $prod->setNome($result[0]["nome"]);
        $prod->setMarca($result[0]["marca"]);
        $prod->setPreco($result[0]["preco"]);
        $prod->setQuantidade($result[0]["quantidade"]);
        $prod->setImage($result[0]["imagem"]);
        $prod->setDescricao($result[0]["descricao"]);
        $prod->setIdCategoria($result[0]["id_categoria"]);
        $this->car[count($this->car)] = $prod ;
        $this->car[count($this->car)] = $prod ;
        $_SESSION["cart"] = $this->car;

        var_dump($_SESSION["cart"]);

    }

    function removeProduct($id)
    {
        if ($id >= 0 || $id < count($this->car)) {
            unset($this->car[$id]);
        }
    }

    function getCarSize()
    {

        return count($this->car);

    }

    function resetCar()
    {

        unset($this->car);
        $this->car = array();

    }

}