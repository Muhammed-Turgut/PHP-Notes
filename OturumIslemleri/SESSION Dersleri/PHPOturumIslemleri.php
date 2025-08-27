
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

//$_SESSION["mesaj"] = "merhaba";
$_SESSION["Ogrenci"] = array("ad" => "olcay", "soyad" => "kalayocuoğlu");

//sesion silme 
//unset($_SESSION["Ogrenci"]);

//unset($_SESSION["Ogrenci"]["soyad"]); //soyad silindi sadece.

echo isset($_SESSION["Ogrenci"])."<br>"; //sessionun olup lmadığını kontrol eder.
echo isset($_SESSION["mesaj"]);

//Sessionu beli bir süre yaşatmak.
//$_SESSION["zaman"] = time() +5;
$_SESSION["bina"] = "kardesler";

echo $_SESSION["bina"];

if(time() > $_SESSION["zaman"]):

    unset($_SESSION["bina"]);

endif;

echo $_SESSION["bina"];

session_destroy(); //sistemdeki tüm sessionları siler.

?>
    
</body>
</html>