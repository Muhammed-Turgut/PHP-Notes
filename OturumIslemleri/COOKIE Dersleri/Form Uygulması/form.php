<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

     if(!isset($_COOKIE["ad"]) || !isset($_COOKIE["sifre"])):

    ?>
<center>
    <h1>Forum Uygulamam</h1>
    <hr>
<form action="sonuc.php" method="post">
<input type="text" name="ad"/><br></br>
<input type="password" name="sifre"/><br></br>
<input type="submit" name="button">

</form>
 </center>

 <?php

     else:

        echo "zaten giriş yapılmış <a href = 'sonuc.php'> Tıkla </a>";

   endif;

    ?>
</body>
</html>