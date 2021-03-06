<?php
require_once 'Controller/Load.php';
require_once 'menu.php';
?>

<!-- Category section -->
<section id="aa-promo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-promo-area">
                    <div class="row">
                        <!-- promo left -->
                        <div class="col-md-5 no-padding">
                            <div class="aa-promo-left">
                                <a class="aa-product-img" href="product.php?cat=1">
                                    <div class="aa-promo-banner">
                                        <img src="View/img/banners/kits_Banner.png" alt="img">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- promo right -->
                        <div class="col-md-7 no-padding">
                            <div class="aa-promo-right">
                                <div class="aa-single-promo-right">
                                    <a href="product.php?cat=4">
                                        <div class="aa-promo-banner">
                                            <img src="View/img/banners/crianca_Banner.png"
                                                 alt="img">
                                        </div>
                                    </a>
                                </div>
                                <div class="aa-single-promo-right">
                                    <a href="product.php?cat=3">
                                        <div class="aa-promo-banner">
                                            <img src="View/img/banners/woman_Banner.png" alt="img">
                                        </div>
                                    </a>
                                </div>
                                <div class="aa-single-promo-right">
                                    <a href="product.php?cat=5">
                                        <div class="aa-promo-banner">
                                            <img src="View/img/banners/tickets_Banner.png" alt="img">
                                        </div>
                                    </a>
                                </div>
                                <div class="aa-single-promo-right">
                                    <a href="product.php?cat=2">
                                        <div class="aa-promo-banner">
                                            <img src="View/img/banners/diversos_Banner.png"
                                                 alt="img">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Category section -->

<!-- popular section -->
<section id="aa-popular-category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-popular-category-area">
                        <!-- start prduct navigation -->
                        <ul class="nav nav-tabs aa-products-tab">
                            <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Start men popular category -->
                            <div class="tab-pane fade in active" id="popular">
                                <ul class="aa-product-catg aa-popular-slider">
                                    <!-- start single product item -->
                                    <?php
                                    $_SESSION['load']->popularHome_onLoad();
                                    ?>
                                </ul>
                                <a class="aa-browse-btn" href="product.php?type=0">Todos os Produtos<span
                                            class="fa fa-long-arrow-right"></span></a>
                            </div>
                            <!-- / popular product category -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / popular section -->

<?php
require_once 'footer.php';
?>
