<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 04/11/2016
 * Time: 19:07
 */

require_once 'Controller/Load.php';
require_once('menu.php');


if (isset($_GET["type"])) {
    $type = $_GET["type"];
}

if (isset($_GET["cat"])){
    $cat = $_GET["cat"] ;
}

?>
    <section id="aa-product-category">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="aa-product-catg-content">
                        <div class="aa-product-catg-head">
                            <div class="aa-product-catg-head-right">
                                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
                            </div>
                        </div>
                        <div class="aa-product-catg-body">
                            <ul class="aa-product-catg">
                                <?php

                                if (isset($_GET["type"])) {
                                    $_SESSION['load']->productType_onLoad($type);
                                }else{
                                    $_SESSION['load']->productCat_onLoad($cat);
                                }

                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once 'footer.php';
?>