<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 14/02/2017
 * Time: 00:46
 */

namespace Mineiro;


class Cart
{
    var $cart;

    function __construct()
    {
        $this->cart = array();
    }

    public function getCart(){
        return $this->cart;
    }

    public function getCartSize(){
        return count($this->cart);
    }

    public function resetCart()
    {
        unset($this->cart);
        $this->cart = array();
    }

    public function addProduct($id)
    {
        $product = new Product();

        $result = $product->getProduct($id);

        $product->setId($result[0]["id"]);
        $product->setNome($result[0]["nome"]);
        $product->setMarca($result[0]["marca"]);
        $product->setPreco($result[0]["preco"]);
        $product->setQuantidade($result[0]["quantidade"]);
        $product->setImage($result[0]["imagem"]);
        $product->setDescricao($result[0]["descricao"]);
        $product->setIdCategoria($result[0]["id_categoria"]);

        $this->cart[count($this->cart)] = $product;

    }

    public function removeProduct($id)
    {
        if ($id >=0 || $id < count(($this->cart))){
            unset($this->cart[$id]);
        }
    }

}

