<?php
header("Content-type: text/html; charset=iso-8859-1");
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="ISO-8859-1">

    <title>NordicTree</title>

    <meta name="robots" content="noindex, nofolow">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--Style för att få underliggande divar att få rätt style-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link  content="width=device-width, initial-scale=1">

    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.css">

    <link rel="stylesheet" type="text/css" href="http://users.du.se/~h09idafu/IK1005/Style/Style_shoppingCart.css">

    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

</head>

<body>
<div id="content">

    <!-- Header 1 -->
    <header>

        <div class="sprak">
            <img src="http://users.du.se/~h09idafu/IK1005/bilder_NordicTree/sverigeflagga3.jpg" alt="språkval: svenska">
            <img src="http://users.du.se/~h09idafu/IK1005/bilder_NordicTree/italienflagga1.jpg" alt="språkval: italienska">
            <img src="http://users.du.se/~h09idafu/IK1005/bilder_NordicTree/tysklandflagga3.jpg" alt="språkval: tyska">
            <img src="http://users.du.se/~h09idafu/IK1005/bilder_NordicTree/malaysiaflagga1.jpg" alt="språkval: malaysiska">
        </div>

        <div class="kundvagn">
            <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ShoppingCartController/showCart/">
                <img src="http://users.du.se/~h09idafu/IK1005/bilder_NordicTree/kundvagn.jpg" alt="gå till kundkorgen">
            </a>
        </div>

        <div class="login">
            <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/AdminController/login/">
                <img src="http://users.du.se/~h16kaeri/ik1005/NordicTreePHP2/login-icon.png" alt="gå till login">
            </a>
        </div>

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
        <ul>
            <li class="dropdown">
                <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByKategori/Kungsgran">Kungsgran</a>
                <div class="dropdown-content">
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/5">Kungsgran Mini-mini</a>
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/4">Kungsgran Mini</a>
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/3">Kungsgran Medium</a>
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/2">Kungsgran Large</a>
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/1">Kungsgran Extra-large</a>
                </div>
            </li>

            <li class="dropdown">
                <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByKategori/Gran">Gran</a>
                <div class="dropdown-content">
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/10">Gran Mini-mini</a>
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/9">Gran Mini</a>
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/8">Gran Medium</a>
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/7">Gran Large</a>
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/6">Gran Extra-large</a>
                </div>
            </li>

            <li class="dropdown">
                <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByKategori/Plastgran">Plastgran</a>
                <div class="dropdown-content">
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/20">Plastgran blå</a>
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/21">Plastgran grön</a>
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/22">Plastgran guld</a>
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/23">Plastgran rosa</a>
                </div>
            </li>

            <li class="dropdown">
                <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByKategori/Tall">Tall</a>
                <div class="dropdown-content">
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/15">Tall Mini-mini</a>
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/14">Tall Mini</a>
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/13">Tall Medium</a>
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/12">Tall Large</a>
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/11">Tall Extra-large</a>
                </div>
            </li>

            <li class="dropdown">
                <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByKategori/Tillbehor">Tillbehör</a>
                <div class="dropdown-content">
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/16">Julgransbelysning</a>
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/18">Julgransmatta</a>
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/17">Julgranskulor</a>
                    <a href="http://users.du.se/~h09idafu/IK1005/NordicTreePHP/index1.php/ProductController/getProductByID/19">Toppstjärna</a>
                </div>
            </li>

            <li>
                <div class="sok">
                    <input type="text" name="search" placeholder="Search..">
                </div>
            </li>
        </ul>
    </nav>
    <br>
    <br>


    <!--Main-->
    <main>
        <div class="bilder">

            <?php

            // put your code here
            //show the cart only if there are some product objects in the cart
            if (count($productsInCart)>0) {
                echo nl2br("\n");
                echo '<h1 style="font-family: Verdana">Din kundvagn</h1>';
                echo nl2br(" \n ");
                echo '<a href= "'.$_SERVER['SCRIPT_NAME'].'/ShoppingCartController/emptyCart/">Empty cart<span class="oi oi-delete"></span></a>';
                echo nl2br("\n");
                echo '<table class="table table-striped">';
                echo '<tr style="font-weight: bold; font-family: Verdana; font-size: small"><td>Namn</td><td>Antal</td><td>Pris</td><td>Summa</td><td>Ta bort</td><td>Lägg till</td></tr>';

                foreach ($productsInCart as $cartproduct) {

                    if ($cartproduct->qty > 0){ // && ($cartproduct->price > 0)) {
                        $pay = $cartproduct->price * $cartproduct->qty;
                        echo '<tr>';
                        echo "<td style='font-family: Verdana; font-size: small'>$cartproduct->namn</td>";
                        echo "<td style='font-family: Verdana; font-size: small'>$cartproduct->qty</td>";
                        echo "<td style='font-family: Verdana; font-size: small'>$cartproduct->price kr</td>";
                        echo "<td style='font-family: Verdana; font-size: small'>$pay kr</td>";
                        echo "<td><a href=".$_SERVER['SCRIPT_NAME']."/ShoppingCartController/removeFromCart/".$cartproduct->id."><span class='oi oi-minus'></span></a></td>";
                        echo "<td><a href=".$_SERVER['SCRIPT_NAME']."/ShoppingCartController/addToCart/".$cartproduct->id."><span class='oi oi-plus'></span></a></td>";
                        echo '</tr>';

                    }
                }
                echo "<tr><td colspan=1 style='background-color: #152d4d; color:white'>  </td>";

                echo "<td colspan=5 style='background-color: #152d4d; font-family: Verdana; color:white'>Att betala: $totalToPay kr</td></tr>";


                echo "</table>";
            }

            else{
                echo "<p>Kundvagnen är tom</p>";
            }

            ?>

        </div>


    </main>


    <!--footer-->
    <footer>

        <!--Betalmedel-->
        <div class="betalmedel">

            <div class="klarna" tabindex="11">
                <img src="http://users.du.se/~h09idafu/IK1005/bilder_NordicTree/klarna.png" alt="betalfunktion: klarna">
            </div>

            <div class="paypal" tabindex="12">
                <img src="http://users.du.se/~h09idafu/IK1005/bilder_NordicTree/paypal.png" alt="betalfunktion: paypal">
            </div>

            <div class="trygg_ehandel" tabindex="13">
                <img src="http://users.du.se/~h09idafu/IK1005/bilder_NordicTree/trygg_e-handel.png" alt="trygg e-handel">
            </div>

        </div>

        <!--Frakt-->
        <div class="frakt">

            <div class="postnord" tabindex="14">
                <img src="http://users.du.se/~h09idafu/IK1005/bilder_NordicTree/logo_postnord.png" alt="fraktsätt: postnord">
            </div>

            <div class="schenker" tabindex="15">
                <img src="http://users.du.se/~h09idafu/IK1005/bilder_NordicTree/schenker.gif" alt="fraktsätt: schenker">
            </div>

            <div class="dhl" tabindex="16">
                <img src="http://users.du.se/~h09idafu/IK1005/bilder_NordicTree/dhl.png" alt="fraktsätt: dhl">
            </div>

        </div>

        <!--Välgörenhet-->
        <div class="valgorenhet">

            <div class="raddabarnen" tabindex="17">
                <img src="http://users.du.se/~h09idafu/IK1005/bilder_NordicTree/raddabarnen.png" alt="välgörenhet: räddabarnen">
            </div>

            <div class="astrid" tabindex="18">
                <img src="http://users.du.se/~h09idafu/IK1005/bilder_NordicTree/astrid.png" alt="välgörenhet: astrid lindgrens barnsjukhus">
            </div>

        </div>

        <!--Kontakt-->
        <div class="kontakt">

            <a href="../footer/om_oss.html">
                <div class="om" tabindex="19"><p class="p1">Om oss</p></div>
            </a>

            <div class="retur" tabindex="19"><p class="p1">Retur</p></div>
            <div class="sekretess" tabindex="20"><p class="p1">Sekretess</p></div>
            <div class="kundservice" tabindex="21"><p class="p1">Kundservice</p></div>

            <a href="../footer/kontakta_oss.html">
                <div class="kontakta_oss" tabindex="22"><p class="p1">Hjälp/Kontakt</p></div>
            </a>

        </div>

    </footer>

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