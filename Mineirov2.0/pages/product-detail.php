<?php

require_once '../Controllers/loadControl.php';
require('menu.php');

$cont = $_SESSION["cont"];

$cod = $_GET['item'];


?>
<!-- product category -->
<section id="aa-product-details">
    <div class="container">
        <div class="row">
            <?php
            $cont->productDLoad($cod);
            ?>
        </div>
    </div>
</section>
<!-- / product category -->

<?php
require 'footer.php';
?>
