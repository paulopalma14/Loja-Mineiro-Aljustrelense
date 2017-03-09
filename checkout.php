<?php
require_once 'menu.php';
?>
<!-- Cart view section -->
<section id="checkout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="checkout-area">
                    <form action="confirmDelivery.php" method="post">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="checkout-left">
                                    <div class="panel-group" id="accordion">
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
                                            <div id="collapseFour" class="panel-collapse">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <label for="c1">Primeiro Nome*</label>
                                                                <input name="c1" type="text" class="form-control"
                                                                       required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <label for="c2">Ultimo Nome*</label>
                                                                <input name="c2" type="text" class="form-control"
                                                                       required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="c3">Email*</label>
                                                            <div class="aa-checkout-single-bill">
                                                                <input name="c3" type="email" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="c4">Contacto*</label>
                                                            <div class="aa-checkout-single-bill">
                                                                <input name="c4" type="text" pattern="\d*"
                                                                       class="form-control" minlength="9" maxlength="9">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="aa-checkout-single-bill">
                                                                <label for="c5">Morada*</label>
                                                                <textarea name="c5" cols="8" rows="3"
                                                                          required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <label for="c6">País*</label>
                                                                <input name="c6" type="text"
                                                                       required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <label for="c7">Data Nascimento*</label>
                                                                <input name="c7" type="date"
                                                                       required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <label for="c8">Distrito*</label>
                                                                <input name="c8" type="text" class="form-control"
                                                                       required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <label for="c9">Cidade*</label>
                                                                <input name="c9" type="text" class="form-control"
                                                                       required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="c10">Código Postal*</label>
                                                            <div class="aa-checkout-single-bill">
                                                                <input name="c10" type="text"
                                                                       pattern="[0-9]{4}-[0-9]{3}" class="form-control"
                                                                       required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="c11">NIF*</label>
                                                            <div class="aa-checkout-single-bill">
                                                                <input name="c11" type="text" pattern="\d*"
                                                                       class="form-control" minlength="11" required
                                                                       maxlength="11">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="c12">Notas</label>
                                                            <div class="aa-checkout-single-bill">
                                                                <textarea name="c12" cols="8" rows="3"></textarea>
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
                                            <?php $_SESSION['load']->checkOutView_onLoad() ?>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <h4>Método de Pagamento</h4>
                                    <div class="aa-payment-method">
                                        <label for="cashdelivery"><input type="radio" id="cashdelivery"
                                                                         name="optionsRadios"> Cobrança </label>
                                        <input type="submit" value="Confirmar Encomenda" class="aa-browse-btn"
                                               onclick="btnConfirmDelivery_onClick()">
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

<script language="JavaScript" type="text/javascript">
    function btnConfirmDelivery_onClick() {
        $.ajax({
            type: "POST",
            url: "confirmDelivery.php",
            data: {
                c1: "c1", c2: "c2", c3: "c3"
                c4: "c4", c5: "c5", c6: "c6", c7: "c7"
                c8: "c8", c9: "c9", c10: "c10", c11: "c11", c12: "c12"
            }
        })
    }
</script>

<!-- / Cart view section -º+->
<?php
require_once 'footer.php';
?>
