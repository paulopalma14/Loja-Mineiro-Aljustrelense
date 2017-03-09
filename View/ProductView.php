<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 14/02/2017
 * Time: 02:22
 */

namespace Mineiro;


class ProductView
{
    public function __construct()
    {
    }

    public function showProducts($result)
    {

        for ($i = 0; $i < count($result); $i++) {

            echo '<li>';
            echo '<figure>';
            echo '<a class="aa-product-img" href="product-detail.php?item=' . $result[$i]["id"] . '"><img src="View/img/products/' . $result[$i]["imagem"] . '" id="' . $result[$i]["id"] . '"></a>';
            echo '<figcaption>';
            echo '<h4 class="aa-product-title"><a href="#">' . $result[$i]["nome"] . '</a></h4>';
            echo '<span class="aa-product-price">€' . $result[$i]["preco"] . '</span>';
            echo '</figcaption>';
            echo '</figure>';
            if (intval($result[$i]['quantidade']) == 0) {

                echo '<span class="aa-badge aa-sold-out" href="#">Esgotado!</span>';
            }
            echo '</li>';

        }
    }


}