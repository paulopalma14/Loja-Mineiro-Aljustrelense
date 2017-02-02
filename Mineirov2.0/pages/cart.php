<?php
require 'menu.php';

require_once '../Controllers/loadControl.php';

$cont = $_SESSION["cont"];
$cart = $_SESSION["cart"];

?>
<!-- Cart view section -->
<section id="cart-view">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart-view-area">
                    <div class="cart-view-table">
                        <form action="">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Produto</th>
                                        <th>Preço</th>
                                        <th>Quantidade</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                     $cont->cartLoad($cart);
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <!-- Cart Total view -->
                        <div class="cart-view-total">
                            <h4>Total</h4>
                            <table class="aa-totals-table">
                                <tbody>
                                <tr>
                                    <?php
                                        //Total do dinheiro no carrinho!
                                    ?>
                                </tr>
                                </tbody>
                            </table>
                            <a href="checkout.php" class="aa-cart-view-btn">Finalizar Encomenda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Cart view section -->

<?php
require 'footer.php';
?>
