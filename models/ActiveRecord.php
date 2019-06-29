<?php

/**Klass som tillhör AdminController med SQL-satser och databas uppkoppling för att lägga till, uppdatera,
visa och ta bort produkter från databasen **/

class ActiveRecord{
    public $id;
    public $namn;
    public $kategori;
    public $description;
    public $price;
    public $imgURL;

    private $pdoConnection;

    const SQL_INSERT = 'INSERT INTO products (id, namn, description, price, imgURL, kategori) VALUES (:id, :namn, :description, :price, :imgURL, :kategori)';
    const SQL_UPDATE = "UPDATE products SET namn=:namn, description=:description, price=:price, imgURL=:imgURL, kategori=:kategori WHERE id=:id";
    const SQL_DELETE = 'DELETE FROM products WHERE id=:id';
    const SQL_FINDBYID = 'SELECT * FROM products WHERE id=:id';



    public function __construct(){
        $this->pdoConnection = $this->getPDOConnection();
    }

    //Funktion för att hitta en produkt baserat på id
    public function findById($id){

        try {

            if ($this->pdoConnection == NULL) {
                $this->pdoConnection = $this->getPDOConnection();
            }

            //Prepares an SQL statement to be executed by the PDOStatement::execute() method
            //returns a PDOStatement object
            $pdoStatement = $this->pdoConnection->prepare(self::SQL_FINDBYID);

            //Binds a PHP variable to a corresponding named or question mark placeholder in the SQL statement that was used to prepare the statement.
            $pdoStatement->bindParam(':id', $id);                //Executes a prepared statement
            $pdoStatement->execute();

            //Fetches a row
            //returns an object with property names
            //that correspond to the column names in db table
            $julgranObj = $pdoStatement->fetch(PDO::FETCH_OBJ);

            //set this activerrecords properties(data)
            $this->id = $julgranObj->id;
            $this->namn = $julgranObj->namn;
            $this->description = $julgranObj->description;
            $this->price = $julgranObj->price;
            $this->imgURL = $julgranObj->imgURL;
            $this->kategori = $julgranObj->kategori;

            $this->pdoConnection = NULL;
        } catch (PDOException $exp) {
            echo 'Något gick fel vid sökning, försök igen: ', $exp->getMessage();
            $this->pdoConnection = NULL;
            die();
        }

    }//end findbyid

    //Funktion för att spara ändringar i databasen
    public function save(){
        try {
            $pdoStatement = $this->pdoConnection->prepare(self::SQL_INSERT);
            $pdoStatement->bindParam(':id', $this->id);
            $pdoStatement->bindParam(':namn', $this->namn);
            $pdoStatement->bindParam(':description', $this->description);
            $pdoStatement->bindParam(':price',$this->price);
            $pdoStatement->bindParam(':imgURL', $this->imgURL);
            $pdoStatement->bindParam(':kategori', $this->kategori);

            $pdoStatement->execute();
            $this->pdoConnection = NULL;
        }

        catch (PDOException $exp) {
            echo 'Något gick fel vid sparning, försök igen: ', $exp->getMessage();
            $this->pdoConnection = NULL;
            die();
        }

    }//end save

    //Funktion för att uppdatera en produkt i databasen
    public function update(){

        try {

            if ($this->pdoConnection == NULL) {
                $this->pdoConnection = $this->getPDOConnection();
            }

            $pdoStatement = $this->pdoConnection->prepare(self::SQL_UPDATE);
            $pdoStatement->bindParam(':id', $this->id);
            $pdoStatement->bindParam(':namn', $this->namn);
            $pdoStatement->bindParam(':description', $this->description);
            $pdoStatement->bindParam(':price',$this->price);
            $pdoStatement->bindParam(':imgURL', $this->imgURL);
            $pdoStatement->bindParam(':kategori', $this->kategori);

            $pdoStatement->execute();
            $this->pdoConnection = NULL;
        }

        catch (PDOException $exp) {
            echo 'Något gick fel vid uppdatering försök igen: ', $exp->getMessage();
            $this->pdoConnection = NULL;
            die();
        }

    }//end update

    //Funktion för att ta bort en produkt i databasen
    public function delete(){

        try {
            if ($this->pdoConnection == NULL) {
                $this->pdoConnection = $this->getPDOConnection();
            }

            $pdoStatement = $this->pdoConnection->prepare(self::SQL_DELETE);
            $pdoStatement->bindParam(':id', $this->id);

            $pdoStatement->execute();

            $this->pdoConnection = NULL;
        }

        catch (PDOException $exp) {
            echo 'Något gick fel vid borttagning försök igen: ', $exp->getMessage();
            $this->pdoConnection = NULL;
            die();
        }

    }//end delete

    //Funktion för att hämta och visa alla produkter i databasen
    public function getAllProducts(){

        try {

            if ($this->pdoConnection == NULL) {
                $this->pdoConnection = $this->getPDOConnection();
            }


            $pdoStatement = $this->pdoConnection->prepare("SELECT * FROM products");
            $pdoStatement->execute();

            $julgranar = $pdoStatement->fetchAll(PDO::FETCH_OBJ);
            $this->pdoConnection = NULL;

            return $julgranar;
        }


        catch (PDOException $exp) {
            echo 'Något gick fel, försök igen: ', $exp->getMessage();
            $this->pdoConnection = NULL;
            die();
        }
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
            echo 'DB error ', $pdoexp->getMessage();
            die();//stoppar fortsatt körning och avlustar
        }

    }//end getPDOConnction

}//end class

?>
