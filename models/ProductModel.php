<?php

class ProductModel{

    public $trees = array();

    public function __construct(){
            $sqlSelcetAllProducts = 'SELECT * FROM products';
            //get connection to db
            $pdo = $this->getPDOConnection();
            //prepare the sql statement
            $pdoStatement = $pdo->prepare($sqlSelcetAllProducts);
            //excute the preparedstatement
            $pdoStatement->execute();
            //fetch the data from the executed sql statement
            $granar = $pdoStatement->fetchAll();
            //close connection to db
            $pdoConnection = NULL;

            $this->trees = $granar;
    }

    //Funktion för att hämta alla produkter
    public function getAllProducts(){
        $sqlSelcetAllProducts='SELECT * FROM products';

        $pdo=$this->getPDOConnection();
        $pdoStatement=$pdo->prepare($sqlSelcetAllProducts);
        $pdoStatement->execute();
        $granar=$pdoStatement->fetchAll();
        $pdoConnection=NULL;
        return $granar;
    }

    //Funktion för att hämta alla produkter baserat på katergori
    public function getTreeByKategori($kategori){
        $sqlSelectAllProducts = 'SELECT * FROM products WHERE kategori =:kategori';
        $pdo = $this->getPDOConnection();
        $pdoStatement = $pdo->prepare($sqlSelectAllProducts);
        $pdoStatement->bindParam(':kategori', $kategori);
        $pdoStatement->execute();
        $treeByCat = $pdoStatement->fetchAll();
        $pdoConnection = NULL;
        return $treeByCat;
    }

    //Funktion för att hämta alla produkter baserat på id
    public function getProductByID($id){
        $sqlSelectAllProducts = 'SELECT * FROM products WHERE id=:id';
        $pdo = $this->getPDOConnection();
        $pdoStatement = $pdo->prepare($sqlSelectAllProducts);
        $pdoStatement->bindParam(':id', $id);
        $pdoStatement->execute();
        $product = $pdoStatement->fetchAll();
        $pdoConnection = NULL;
        return $product;
    }


    //Funktion för uppkoppling till databasen
    private function getPDOConnection():PDO{
        $dsn='mysql:host= <insert link to db>';
        $user='<insert username>';
        $pass='<insert password>';

        $option=array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");

        try{
            //connection to the database
            $pdoConnection=new PDO($dsn, $user, $pass, $option);
            return $pdoConnection;
        }
        catch(PDOException $pdoexp) {
            $pdoConnection=NULL;
            echo 'DB error ', $pdoexp->getMassage();
            die();//stoppar fortsatt körning och avlustar
        }

    }

}//end class

?>
