<?php
include("./views/Header.php");
?>
<body>

<div class="container">

    <h2>Uppdatera</h2>

    <form action="<?=$_SERVER['SCRIPT_NAME']?>/AdminController/updateProduct/" method="post">

        <label style="font-family: Verdana">Id:  <span style="color: red; font-family: Verdana; font-size: small"></span></label>
        <input type="text"  readonly="true" class="form-control" id="id" placeholder="Uppdaterar på befintligt id" name="id" value="<?=$julgran->id?>"><br>

        <label  style="font-family: Verdana">Namn:<span style="color: red; font-family: Verdana; font-size: small"> <?=$errormsg['namn']?></span></label>
        <input type="text" class="form-control" id="name" placeholder="Produktnamn" name="namn" value="<?=$julgran->namn?> <?=$postdata['namn']?>"><br>

        <label  style="font-family: Verdana">Beskrivning:<span style="color: red; font-family: Verdana; font-size: small"> <?=$errormsg['description']?></span></label>
        <input type="text" class="form-control" id="description" placeholder="Beskrivning" name="description" value="<?=$julgran->description?> <?=$postdata['description']?>"><br>

        <label  style="font-family: Verdana">Pris:<span style="color: red; font-family: Verdana; font-size: small"> <?=$errormsg['price']?></span></label>
        <input type="text" class="form-control" id="price" placeholder="Pris" name="price" value="<?=$julgran->price?> <?=$postdata['price']?>"><br>

        <label  style="font-family: Verdana">Bildurl:<span style="color:red; font-family: Verdana; font-size: small"> <?=$errormsg['imgURL']?></span></label>
        <input type="url" class="form-control" id="imgURL" placeholder="tex http://bilder/gran.jpg" name="imgURL" value="<?=$julgran->imgURL?> <?=$postdata['imgURL']?>"><br>

        <label  style="font-family: Verdana">Kategori:<span style="color: red; font-family: Verdana; font-size: small"> <?=$errormsg['kategori']?></span></label>
        <input type="text" class="form-control" id="kategori" placeholder="gran/tall/kungsgran/tillbehör" name="kategori" value="<?=$julgran->kategori?> <?=$postdata['kategori']?>"><br>

        <button type="submit" class="btn btn-primary">Uppdatera</button>

    </form>
    <a href="<?=$_SERVER['SCRIPT_NAME']?>/AdminController/showProducts/">Tillbaka till produkter (Admin)</a>
</div>

</body>
</html>

