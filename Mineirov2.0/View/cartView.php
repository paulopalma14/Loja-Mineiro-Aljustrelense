<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 22/12/2016
 * Time: 18:20
 */

namespace mineiro;


class cartView
{
    public function showQtyItems($size)
    {
        echo '<span class="aa-cart-notify">' . $size . '</span>';
    }

    public function showItems($items)
    {
        var_dump($items);

        for ($i = 0; $i < count($items); $i++) {

            echo '<tr>';
            echo '<td><a class="remove" href="#">';
            echo '<fa class="fa fa-close"></fa>';
            echo '</a></td>';
            echo '<td><a href="#"><img src="View/img/man/polo-shirt-1.png" alt="img"></a></td>';
            echo '<td><a class="aa-cart-title" href="#">Polo T-Shirt</a></td>';
            echo '<td>$250</td>';
            echo '<td><input class="aa-cart-quantity" type="number" value="1"></td>';
            echo '<td>$250</td>';
            echo '</tr>';
        }
    }
}