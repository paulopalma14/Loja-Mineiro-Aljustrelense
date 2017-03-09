<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 14/02/2017
 * Time: 02:23
 */

namespace Mineiro;


class CheckOutView
{

    var $subtotal = 0;

    public function __construct()
    {
    }

    public function showDeliveryResume($items)
    {
        for ($i = 0; $i < count($items); $i++) {
            echo '<tbody>';
            echo '<td>' . $items[$i]->getNome() . '</td>';
            echo '<td>' . $items[$i]->getPreco() . '€</td>';
            echo '</tr>';
            echo '<tfoot>';
            $this->subtotal += floatval($items[$i]->getPreco());
        }
        echo'<tr>';
        echo'<th>Portes</th>';
        echo'<td>3.45€</td>';
        echo'</tr>';
    }

    public function showSubTotal()
    {
        echo '<tr>';
        echo'<th>Subtotal</th>';
        echo'<td>'.$this->subtotal.'€</td>';
        echo'</tr>';
    }

    public function showTotal()
    {
        $total = floatval($this->subtotal) + 3.45 ;

        echo '<tr>';
        echo'<th>Total</th>';
        echo'<td>'.$total.'€</td>';
        echo'</tr>';
    }

}