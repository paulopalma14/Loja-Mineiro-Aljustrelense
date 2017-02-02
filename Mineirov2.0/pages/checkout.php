<?php
require 'menu.php';
require_once '../Controllers/loadControl.php';

$cont = $_SESSION["cont"];

?>
<!-- Cart view section -->
<section id="checkout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="checkout-area">
                    <form action="">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="checkout-left">
                                    <div class="panel-group" id="accordion">
                                        <!-- Login section -->
                                        <div class="panel panel-default aa-checkout-login">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseTwo">
                                                        Login
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <input type="text" placeholder="Email">
                                                    <input type="password" placeholder="Password">
                                                    <button type="submit" class="aa-browse-btn">Entrar</button>
                                                    <label for="rememberme"><input type="checkbox" id="rememberme">
                                                        Lembrar-me </label>
                                                    <p class="aa-lost-password"><a href="#">Perdeu a password?</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Shipping Address -->
                                        <div class="panel panel-default aa-checkout-billaddress">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseFour">
                                                        Dados de Envio
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <label for="r1">Primeiro Nome*</label>
                                                                <input name="r1" type="text" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <label for="r2">Ultimo Nome*</label>
                                                                <input name="r2" type="text" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="text" placeholder="Company name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="email" placeholder="Email Address*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="tel" placeholder="Phone*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="aa-checkout-single-bill">
                                                                <label for="r10">Morada*</label>
                                                                <textarea name="r10" cols="8" rows="3" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="aa-checkout-single-bill">
                                                                <select>
                                                                    <option value="0">Select Your Country</option>
                                                                    <option value="1">Portugal</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="text" placeholder="Appartment, Suite etc.">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <label for="r9">Cidade*</label>
                                                                <input name="r9" type="text" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <label for="r8">Distrito*</label>
                                                                <input name="r8" type="text" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="text" placeholder="Postcode / ZIP*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="aa-checkout-single-bill">
                                                                <textarea cols="8" rows="3">Special Notes</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="checkout-right">
                                    <h4>Resumo da Encomenda</h4>
                                    <div class="aa-order-summary-area">
                                        <table class="table table-responsive">
                                            <thead>
                                            <tr>
                                                <th>Produtos</th>
                                                <th>Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!--                                            <tr>-->
                                            <!--                                                <td>T-Shirt <strong> x  1</strong></td>-->
                                            <!--                                                <td>$150</td>-->
                                            <!--                                            </tr>-->
                                            <tfoot>
                                            <tr>
                                                <th>Subtotal</th>
                                            </tr>
                                            <tr>
                                                <th>Portes</th>
                                            </tr>
                                            <tr>
                                                <th>Total</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <h4>Método de Pagamento</h4>
                                    <div class="aa-payment-method">
                                        <label for="cashdelivery"><input type="radio" id="cashdelivery"
                                                                         name="optionsRadios"> Cobrança </label>
                                        <label for="paypal"><input type="radio" id="paypal" name="optionsRadios"
                                                                   checked> Multibanco </label>
                                        <input type="submit" value="Confirmar Encomenda" class="aa-browse-btn">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Cart view section -º+->
<?php
require 'footer.php';
?>
