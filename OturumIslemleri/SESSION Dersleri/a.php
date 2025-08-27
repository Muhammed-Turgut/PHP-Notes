<?php 
 session_start(); //çerecleri kullanacağız.
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo $_SESSION["Ogrenci"]["ad"]."<br>";
echo $_SESSION["Ogrenci"]["soyad"]."<br>";
?>
</body>
</html>