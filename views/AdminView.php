<!DOCTYPE html>
<html lang="sv">
<head>
    <title>NordicTree kravodlade granar</title>

    <meta name="robots" content="noindex, nofolow">

    <meta name="description" content="NordicTree säljer Kungsgran Gran Plastgran Tall Jultillbehör Toppstjärna
    Julgranskulor Julbelysning till låga priser. Juloutlet.">

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--Style för att få underliggande divar att få rätt style-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link  content="width=device-width, initial-scale=1">

    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.css">


    <link rel="stylesheet" type="text/css" href="http://users.du.se/~h09idafu/IK1005/Style/Style_Admin.css">


    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

</head>

<body>
<div id="content">

    <!-- Header 1 -->
    <header>

    </header>

    <!--Header2-->
    <header class="header">
        <div class="headerbild">

            <!--Header bild, Fungerar även som länk tillbaka till startsida-->
            <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php">
                <img src="http://users.du.se/~h09idafu/IK1005/bilder_NordicTree/nordic3.jpg" alt="headerbild">
            </a>
        </div>


    </header>


    <!--Dropdown Meny-->
    <nav>
        <ul></ul>
    </nav>


    <!--Main-->
    <main>
        <a href="<?=$_SERVER['SCRIPT_NAME']?>/AdminController/showAddForm">Lägg till en produkt  <span class="oi oi-plus"></span></a>

        <table class="table table-striped">
            <?php

            echo '<br>';


            echo '<tr style="font-weight: bold"><td>Id</td><td>Namn</td><td>Pris</td><td>imgURL</td>
                  <td>Beskrivning</td><td>Kategori</td><td>Redigera</td><td>Ta bort</td></tr>';


            foreach($julgranar as $julgran){//$cars $car

                //Ändrar färg för ändrade/tillaggda produkter
                if($changedJulgran==$julgran->id){
                    echo '<tr style="background-color:green">';
                }


                else{
                    echo '<tr>';
                }


                echo '<td>';
                echo $julgran->id;//$car->regnr;
                echo '</td>';
                echo '<td>';
                echo $julgran->namn;
                echo '</td>';
                echo '<td>';
                echo $julgran->price;
                echo '</td>';
                echo '<td>';
                echo $julgran->imgURL;
                echo '</td>';
                echo '<td>';
                echo $julgran->description;
                echo '</td>';
                echo '<td>';
                echo $julgran->kategori;
                echo '</td>';
                echo '<td>';
                echo '<a href="',$_SERVER['SCRIPT_NAME'],'/AdminController/showUpdateForm/',$julgran->id,'">Redigera <span class="oi oi-pencil"></span></a>';
                echo '<td>';
                echo '<a href="',$_SERVER['SCRIPT_NAME'],'/AdminController/deleteProduct/',$julgran->id,'">Ta bort <span class="oi oi-delete"></span></a>';
                echo '<td>';
                echo '</tr>';
            }
            ?>

        </table>

        <a href="<?=$_SERVER['SCRIPT_NAME']?>/AdminController/showAddForm">Lägg till en produkt <span class="oi oi-plus"></span></a>

    </main>


    <!--footer-->
    <footer> </footer>

</div>


<!-- W3C logos for valid HTML5 and CSS3 -->
<div class="clearfix"></div>

<div class="val">
    <a href="http://validator.w3.org/check?uri=referer"><img
                src="http://www.w3.org/html/logo/downloads/HTML5_Logo_64.png"
                alt="Valid HTML5">
    </a>


    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
             alt="Valid CSS!" />
    </a>

</div>


</body>
</html>