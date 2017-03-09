<?php

require_once 'Controller/Load.php';
require('menu.php');

$item = $_GET["item"];

?>
<!-- product category -->
<section id="aa-product-details">
    <div class="container">
        <div class="row">
            <?php
            $_SESSION['load']->productDetail_onLoad($item);
            ?>
        </div>
    </div>
</section>
<!-- / product category -->

<?php
require_once 'footer.php';
?>
