<?php

session_start();
class AdminController{

    //Deklare viewHelper som variabel
    private $viewHelper;

    public function __construct(){
        //Deklarer viewHelper som ett objekt ut klassen ViewHelper
        $this->viewHelper=new ViewHelper();
    }


    //Funktion för att visa vyn AddFormView, för att lägga till data
    public function showAddForm(){
        $this->viewHelper->display('./views/AddFormView.php');
    }

    //Funktion till AddFormView, för att lägga till produkt i databasen
    public function addProduct(){


        if (count($this->validation()) == 0) {

            $activerecord=new ActiveRecord();

            //get and filters the posted data from GUI form
            //Hämtar in från kolumnamn i databasen till lokala variabeln
            $activerecord->id=filter_input(INPUT_POST, 'id',FILTER_SANITIZE_STRING);
            $activerecord->namn=filter_input(INPUT_POST,'namn',FILTER_SANITIZE_STRING);
            $activerecord->description=filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);
            $activerecord->price=filter_input(INPUT_POST,'price',FILTER_SANITIZE_STRING);
            $activerecord->imgURL=filter_input(INPUT_POST,'imgURL',FILTER_SANITIZE_STRING);
            $activerecord->kategori=filter_input(INPUT_POST,'kategori',FILTER_SANITIZE_STRING);

            $activerecord->save();

            $this->viewHelper->assign('changedJulgran',$activerecord->id);

            $this->showProducts();//showCars
        }

        else {

            $this->viewHelper->assign('errormsg', $this->validation());
            $this->viewHelper->assign('postdata', $_POST);
            $this->viewHelper->display('./views/AddFormView.php');
        }

    }



    //Funktion för att visa vyn UpdateFormView, för att redigera vald produkt i databasen
    public function showUpdateForm($id){
        $activerecord=new ActiveRecord();
        $activerecord->findById($id);

        //creata a stdclass
        $julgran=new stdClass();

        $julgran->id=$activerecord->id;
        $julgran->namn=$activerecord->namn;
        $julgran->description=$activerecord->description;
        $julgran->price=$activerecord->price;
        $julgran->imgURL=$activerecord->imgURL;
        $julgran->kategori=$activerecord->kategori;

        $this->viewHelper->assign('julgran',$julgran);

        $this->viewHelper->display('./views/UpdateFormView.php');
    }

    //Funktion till UpdateFormView, för att redigera vald produkt i databasen
    public function updateProduct(){

        if (count($this->validation()) == 0) {

            $activerecord=new ActiveRecord();

            $activerecord->findById(filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING));
            $activerecord->namn=filter_input(INPUT_POST,'namn',FILTER_SANITIZE_STRING);
            $activerecord->description=filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);
            $activerecord->price=filter_input(INPUT_POST,'price',FILTER_SANITIZE_STRING);
            $activerecord->imgURL=filter_input(INPUT_POST,'imgURL',FILTER_SANITIZE_STRING);
            $activerecord->kategori=filter_input(INPUT_POST,'kategori',FILTER_SANITIZE_STRING);

            $activerecord->update();

            $this->viewHelper->assign('changedJulgran',$activerecord->id);

            $this->showProducts();
        }

        else {

            $this->viewHelper->assign('errormsg', $this->validation());
            $this->viewHelper->assign('postdata', $_POST);
            $this->viewHelper->display('./views/AddFormView.php');
        }
    }



    //Funktion för att visa upp alla
    public function showProducts(){

        //  if($_SESSION['loggedin'] == true) {
        $activerecord = new ActiveRecord();
        $julgranar = $activerecord->getAllProducts();

        $this->viewHelper->assign('julgranar', $julgranar);
        $this->viewHelper->display('./views/AdminView.php');
        //   }

        // else{
       // $this->viewHelper->display('./views/LoginView');
        // }

    }


    //Funktion för att ta bort en produkt från databasen
    public function deleteProduct($id){

        $activerecord=new ActiveRecord();

        $activerecord->findById(filter_var($id, FILTER_SANITIZE_STRING));
        $activerecord->delete();

        $this->viewHelper->assign('changedJulgran', $activerecord->id);
        $this->showProducts();
    }



    //Funktion för att visa vyn LoginView, för att kunna logga in
    public function showLoginView(){
        $this->viewHelper->display('./views/LoginView.php');
    }

    //Funktion för validering av inloggnings-data, kollar av att rätt användarnamn och lösenord har skrivits in.
    public function login(){

        if ($_POST['username'] === 'admin' && $_POST['password'] == '123') {

            $_SESSION['loggedin'] = true;
            $this->viewHelper->assign('loggedin', $_SESSION['loggedin']);
            $this->showProducts();
        }

        else {
            $_SESSION['loggedin'] = false;
            $this->viewHelper->display('./views/LoginView.php');
        }

    }



    /*
    Valideringsfunktion för att visa error-meddelanden för att inte kunna lämna tomma rutor i
    AddFormView och UpdateFormView
    */
    public function validation() {
        $errormsg = array();

        foreach ($_POST as $key => $value) {

            if ($value == '') {
                //$key innehåller tex ordet id, namn, kategori var i
                //loop vi är
                $errormsg[$key] = 'Fel!: Kan inte vara tomt, fyll i!';
            }

            switch ($key) {
                case 'id':
                    if(!is_numeric($value)) {
                        $errormsg[$key] = 'Fel!: Id måste anges i siffror!';
                    }
            }

        }//end foreach

        return $errormsg;
    }
}

?>