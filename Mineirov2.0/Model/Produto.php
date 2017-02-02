<?php

/**
 * Created by PhpStorm.
 * User: Me
 * Date: 14/11/2016
 * Time: 14:23
 */

namespace mineiro ;

require_once 'DB.php' ;


class Produto
{

    var $id, $nome, $marca, $preco, $quantidade, $image, $descricao, $id_categoria ;
    var $conn ;

    function __construct() {

        $this->conn = new DB();

    }

    function getAllProducts(){

        $conn = $this->conn->conn();
        $result = array();
        $i = 0;

        $query = 'SELECT * FROM produto';

        $sql = mysqli_query($conn, $query) or trigger_error($conn->error);

        while ($row = mysqli_fetch_array($sql)) {
            $result[$i]['id'] = $row['id'];
            $result[$i]['nome'] = $row['nome'];
            $result[$i]['marca'] = $row['marca'];
            $result[$i]['preco'] = $row['preco'];
            $result[$i]['quantidade'] = $row['quantidade'];
            $result[$i]['imagem'] = $row['imagem'];
            $result[$i]['descricao'] = $row['descricao'];
            $result[$i]['id_categoria'] = $row['id_categoria'];
            $i++;
        }

        return $result;

    }

    function getPopularProduct(){

        $conn = $this->conn->conn();
        $result = array();
        $i = 0;

        $query = 'SELECT * FROM produto limit 10' ;

        $sql = mysqli_query($conn, $query) or trigger_error($conn->error);

        while ($row = mysqli_fetch_array($sql)) {
            $result[$i]['id'] = $row['id'];
            $result[$i]['nome'] = $row['nome'];
            $result[$i]['marca'] = $row['marca'];
            $result[$i]['preco'] = $row['preco'];
            $result[$i]['quantidade'] = $row['quantidade'];
            $result[$i]['imagem'] = $row['imagem'];
            $result[$i]['descricao'] = $row['descricao'];
            $result[$i]['id_categoria'] = $row['id_categoria'];
            $i++;
        }

        return $result;

    }

    function getProductByCat($cat){

        $conn = $this->conn->conn();
        $result = array();
        $i = 0;

        $query = 'SELECT * FROM produto WHERE produto.id_categoria = '.$cat;

        $sql = mysqli_query($conn, $query) or trigger_error($conn->error);

        while ($row = mysqli_fetch_array($sql)) {
            $result[$i]['id'] = $row['id'];
            $result[$i]['nome'] = $row['nome'];
            $result[$i]['marca'] = $row['marca'];
            $result[$i]['preco'] = $row['preco'];
            $result[$i]['quantidade'] = $row['quantidade'];
            $result[$i]['imagem'] = $row['imagem'];
            $result[$i]['descricao'] = $row['descricao'];
            $result[$i]['id_categoria'] = $row['id_categoria'];
            $i++;
        }

        return $result;

    }

    function getProduct($id){

        $conn = $this->conn->conn();
        $result = array();
        $i = 0;
        $query = 'SELECT * FROM produto WHERE produto.id = '.$id;

        $sql = mysqli_query($conn, $query) or trigger_error($conn->error);

        while ($row = mysqli_fetch_array($sql)) {
            $result[$i]['id'] = $row['id'];
            $result[$i]['nome'] = $row['nome'];
            $result[$i]['marca'] = $row['marca'];
            $result[$i]['preco'] = $row['preco'];
            $result[$i]['quantidade'] = $row['quantidade'];
            $result[$i]['imagem'] = $row['imagem'];
            $result[$i]['descricao'] = $row['descricao'];
            $result[$i]['id_categoria'] = $row['id_categoria'];
            $i++;
        }

        return $result;

    }

    function getProductByType($type){

        $conn = $this->conn->conn();
        $result = array();
        $i = 0;

        $query = 'SELECT * FROM produto WHERE produto.id_tipo_produto = '.$type ;

        $sql = mysqli_query($conn, $query) or trigger_error($conn->error);

        while ($row = mysqli_fetch_array($sql)) {
            $result[$i]['id'] = $row['id'];
            $result[$i]['nome'] = $row['nome'];
            $result[$i]['marca'] = $row['marca'];
            $result[$i]['preco'] = $row['preco'];
            $result[$i]['quantidade'] = $row['quantidade'];
            $result[$i]['imagem'] = $row['imagem'];
            $result[$i]['descricao'] = $row['descricao'];
            $result[$i]['id_categoria'] = $row['id_categoria'];
            $i++;
        }

        return $result;


    }

    function getProductbyName($name){

        $conn = $this->conn->conn();
        $result = array();
        $i = 0;

        $query = 'SELECT * FROM produto WHERE produto.nome = %'.$name.'%';

        $sql = mysqli_query($conn, $query) or trigger_error($conn->error);

        while ($row = mysqli_fetch_array($sql)) {
            $result[$i]['id'] = $row['id'];
            $result[$i]['nome'] = $row['nome'];
            $result[$i]['marca'] = $row['marca'];
            $result[$i]['preco'] = $row['preco'];
            $result[$i]['quantidade'] = $row['quantidade'];
            $result[$i]['imagem'] = $row['imagem'];
            $result[$i]['descricao'] = $row['descricao'];
            $result[$i]['id_categoria'] = $row['id_categoria'];
            $i++;
        }

        return $result;

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    public function setIdCategoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;
    }


}