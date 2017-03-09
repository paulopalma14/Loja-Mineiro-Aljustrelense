<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 14/02/2017
 * Time: 00:45
 */

namespace Mineiro;

require_once "Model/Product.php";
require_once "Model/User.php";
require_once "Model/Cart.php";

require_once "View/HomeView.php";
require_once "View/ProductView.php";
require_once "View/ProductDetailView.php";
require_once "View/CartView.php";
require_once "View/CheckOutView.php";

class Load
{
    var $product, $cart;
    var $homeView, $productView, $productDetailView, $cartView, $checkOutView;

    public function __construct()
    {
        $this->product = new Product();
        $this->cart = $_SESSION['cart'];

        $this->homeView = new HomeView();
        $this->productView = new ProductView();
        $this->productDetailView = new ProductDetailView();
        $this->cartView = new CartView();
        $this->checkOutView = new CheckOutView();
    }

    public function popularHome_onLoad()
    {

        $this->homeView->showPopular($this->product->getPopularProducts());

    }

    public function productType_onLoad($type)
    {
        if ($type == 0) {
            $this->productView->showProducts($this->product->getAllProducts());
        } else {
            $this->productView->showProducts($this->product->getProductByType($type));
        }
    }

    public function productCat_onLoad($cat){
        if ($cat == 0) {
            $this->productView->showProducts($this->product->getAllProducts());
        } else {
            $this->productView->showProducts($this->product->getProductByCategory($cat));
        }
    }

    public function productDetail_onLoad($id)
    {
        $product = $this->product->getProduct($id);
        $this->productDetailView->showDImage($product[0]["imagem"] . "");
        $this->productDetailView->showDTitlePrice($product[0]["nome"], $product[0]["preco"], $product[0]["quantidade"]);
        $this->productDetailView->showSizes($product[0]["id_categoria"]);
        //$this->productDetailView->showQuanty();
        $this->productDetailView->showAddButton($id);
        $this->productDetailView->showDDescription($product[0]["descricao"]);
        $this->productDetailView->showDRelated($this->product->getProductByCategory($product[0]["id_categoria"]));
    }

    public function register_onClick()
    {

        if (!empty($_POST["r1"]) &&
            !empty($_POST["r2"]) &&
            !empty($_POST["r3"]) &&
            !empty($_POST["r4"]) &&
            !empty($_POST["r5"]) &&
            !empty($_POST["r6"]) &&
            !empty($_POST["r7"]) &&
            !empty($_POST["r8"]) &&
            !empty($_POST["r9"]) &&
            !empty($_POST["r10"]) &&
            !empty($_POST["r11"])
        ) {

            $user = new User();
            $user->setNome($_POST["r1"]);
            $user->setUltimo($_POST["r2"]);
            $user->setEmail($_POST["r3"]);
            $user->setPass($_POST["r4"]);
            $user->setDataNas($_POST["r5"]);
            $user->setNif($_POST["r6"]);
            $user->setPais($_POST["r7"]);
            $user->setDistrito($_POST["r8"]);
            $user->setCidade($_POST["r9"]);
            $user->setMorada($_POST["r10"]);
            $user->setCodPostal($_POST["r11"]);
            $user->setContacto($_POST["r12"]);

            $user->registerUser();
        }
    }

    public function menu_onLoad()
    {
        $this->cartView->showCartQty($this->cart->getCartSize());
    }

    public function addToCart_onClick($id)
    {
        $this->cart->addProduct($id);
    }

    public function cartView_onLoad(){

        $this->cartView->showCartProducts($this->cart->getCart());

    }

    public function cartViewTotal_onLoad(){

        $this->cartView->showTotal();
    }

    public function checkOutView_onLoad(){

        $this->checkOutView->showDeliveryResume($this->cart->getCart());
        $this->checkOutView->showSubTotal();
        $this->checkOutView->showTotal();

    }



}