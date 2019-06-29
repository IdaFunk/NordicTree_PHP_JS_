<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Logga in</title>
    <link rel="stylesheet" type="text/css" href="http://users.du.se/~h09idafu/IK1005/Style/Style_LogIn.css">


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style type="text/css">

        .clearfix {
            clear:both;
        }
    </style>
</head>

<body>
<div id="layout">


    <main>
        <div id="pager"></div>
        <h1 style ="color: black;">Login</h1>
        <div id="News">
            <form name="name" action="<?=$_SERVER['SCRIPT_NAME']?>/AdminController/login/" method="post">

                <span>Användarnamn:</span>
                <br>
                <input type="text" name="username">
                <br>
                <span>Lösenord:</span>
                <br>
                <input type="password" name="password">
                <br>
                <br>
                <input type="submit" value="Login">
                <br>
                <br>

            </form>
        </div>


    </main>


</div>
<br>
<br>

<!-- W3C logos for valid HTML5 and CSS3 -->
<div class="clearfix"></div>
<div>
    <p>
        <a href="http://validator.w3.org/check?uri=referer"><img
                    src="http://www.w3.org/html/logo/downloads/HTML5_Logo_64.png"
                    alt="Valid HTML5" height="50" width="50"
                    style="border:0;" /></a>
    </p>
    <p>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">
            <img style="border:0;width:88px;height:31px"
                 src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                 alt="Valid CSS!" />
        </a>
    </p>
</div>

</body>
</html>