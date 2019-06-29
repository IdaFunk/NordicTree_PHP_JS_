<?php

session_start();
class ProductController{

	private $productModel;
	private $viewHelper;


    public function __construct(){
		$this->productModel=new ProductModel();
        $this->viewHelper=new ViewHelper();
	}

    //Funktion för att hämta alla produkter i databasen
    public function getAllProducts(){
        //Hämtar data från Produkt-modellen (ProductModel)
        $granar=$this->productModel->getAllProducts();

        //Lägger till data till viewHelpern och bestämmer vilken vy som ska visas.
        $this->viewHelper->assign('granar', $granar);
        $this->viewHelper->display('./views/KategoriView.php');
    }

    //Funktion för att hämta produkter baserat på kategori-namn
    public function getProductByKategori($kategori){
        $treeByCat = $this->productModel->getTreeByKategori($kategori);
        $this->viewHelper->assign('treeByCat', $treeByCat);
        $this->viewHelper->display('./views/KategoriView.php');
    }

    //Funktion för att hämta produkter baserat på id
    public function getProductByID($id){
        $product = $this->productModel->getProductByID($id);
        $this->viewHelper->assign('treeByCat', $product);
        $this->viewHelper->display('./views/ProductView.php');
    }


    //Funktion för att komma visa upp startsidan
    public function getFrontpage(){
        $this->viewHelper->display('./views/Start.php');
    }

}//end class

?>