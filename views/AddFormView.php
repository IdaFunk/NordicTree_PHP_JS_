<?php
header("Content-type: text/html; charset=UTF-8");
?>
<?php
include("./views/Header.php");
?>

<!DOCTYPE html>
<html lang="sv">

<body>

<div class="container">

    <h2>Lägg till en Produkt</h2>

    <form action="<?=$_SERVER['SCRIPT_NAME']?>/AdminController/addProduct" method="post">

        <label  style="font-family: Verdana">Namn: <span style="color: red; font-family: Verdana; font-size: small"> <?=$errormsg['namn']?></span></label>
        <input type="text" class="form-control" id="namn" placeholder="tex Gran mini" name="namn" value="<?=$postdata['namn']?>"><br>

        <label  style="font-family: Verdana">Beskrivning: <span style="color: red; font-family: Verdana; font-size: small"> <?=$errormsg['description']?></span></label>
        <input type="text" class="form-control" id="namn" placeholder="tex Gran mini" name="description" value="<?=$postdata['description']?>"><br>

        <label  style="font-family: Verdana">Pris: <span style="color: red; font-family: Verdana; font-size: small"> <?=$errormsg['price']?></span></label>
        <input type="text" class="form-control" id="price" placeholder="text 299" name="price" value="<?=$postdata['price']?>"><br>

        <label  style="font-family: Verdana">BildURL: <span style="color:red; font-family: Verdana; font-size: small"> <?=$errormsg['imgURL']?></span></label>
        <input type="url" class="form-control" id="imgURL" placeholder="tex http://bilder/gran.jpg" name="imgURL" value="<?=$postdata['imgURL']?>"><br>

        <label  style="font-family: Verdana">Kategori: <span style="color: red; font-family: Verdana; font-size: small"> <?=$errormsg['kategori']?></span></label>
        <input type="text" class="form-control" id="kategori" placeholder="tall" name="kategori" value="<?=$postdata['kategori']?>"><br>
        <br>
        <button type="submit" class="btn btn-primary">Lägg till</button>
    </form>

    <a href="<?=$_SERVER['SCRIPT_NAME']?>/AdminController/showProducts">Till produkterna</a>
</div>

</body>
</html>
