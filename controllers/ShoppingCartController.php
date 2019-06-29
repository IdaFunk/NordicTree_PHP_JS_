<?php

session_start();
class ShoppingCartController {

    private $shoppingCartModel;
    private $productModel;
    private $viewHelper;

    public function __construct() {
        $this->productModel=new ProductModel();
        $this->viewHelper=new ViewHelper();

        //if we dont't have session named 'cart'
        if(!array_key_exists('cart', $_SESSION)){
            //create a cart
            $this->shoppingCartModel=new ShoppingCartModel();
            //and add shoppingcart to the session named cart
            $_SESSION['cart'] = $this->shoppingCartModel;
        }

        else{
            //we have a session named cart so get the shoppingcart object
            //from that session
            $this->shoppingCartModel = $_SESSION['cart'];
        }
    }

    //Funktion för att lägga till produkt i kundvagnen
    public function addToCart($id){

        $pArr=$this->productModel->getProductByID($id);

        $product=$this->getProductObjFromArray($pArr);
        $this->shoppingCartModel->addToCart($product);
        $_SESSION['cart']=$this->shoppingCartModel;

        $this->showCart();
    }

    //Funktion för att ta bort en produkt från kundvagnen
    public function removeFromCart($id){
        $pArr=$this->productModel->getProductByID($id);

        $produkt = $this->getProductObjFromArray($pArr);
        $this->shoppingCartModel->removeFromCart($produkt);
        $_SESSION['cart']=$this->shoppingCartModel;

        $this->showCart();
    }

    //Funktion för att tömma kundvagnen
    public function emptyCart(){
        unset($_SESSION['cart']);
        $this->viewHelper->display('./views/ShoppingCartView.php');
    }

    //Funktion för att visa kundvagnen
    public function showCart(){
        $this->viewHelper->assign('productsInCart',$this->shoppingCartModel->getProductsInCart());
        $this->viewHelper->assign('totalToPay',$this->shoppingCartModel->getTotalToPay());
        $this->viewHelper->display('./views/ShoppingCartView.php');
    }


    //Funktion för att hämta ett produktObjekt från Arrayen med alla produkter
    private function getProductObjFromArray($pArr){

        $product = NULL;

        foreach ($pArr as $item){
            $product = new Product();

            $product->id = $item['id'];
            $product->namn = $item['namn'];
            $product->price = $item['price'];
        }

        return $product;
    }


}//end class