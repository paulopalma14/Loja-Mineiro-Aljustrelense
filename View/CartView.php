<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 14/02/2017
 * Time: 02:22
 */

namespace Mineiro;

require_once 'Model/Product.php';

class CartView
{
    var $total = 0 ;

    public function __construct()
    {
    }

    public function showCartQty($size)
    {
        echo '<span class="aa-cart-notify">' . $size . '</span>';
    }

    public function showCartProducts($items){

        for ($i = 0 ; $i < count($items); $i++){

            echo '<td><a class="remove" href="#">';
            echo '<fa class="fa fa-close"></fa>';
            echo '</a></td>';
            echo '<td><a href="#"><img src="View/img/products/' . $items[$i]->getImage() . '" alt="img"></a></td>';
            echo '<td><a class="aa-cart-title" href="#">'.$items[$i]->getNome().'</a></td>';
            echo '<td>'.$items[$i]->getPreco().'€</td>';
            echo '</tr>';

            $this->total += floatval($items[$i]->getPreco());
        }
    }

    public function showTotal(){

        echo $this->total.'€';
    }
}