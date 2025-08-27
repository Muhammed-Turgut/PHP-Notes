<?php session_start();

@$ad = htmlspecialchars($_POST["ad"]);
@$sifre =htmlspecialchars( $_POST["sifre"]);

$db_ad = "olcay";
$db_sifre = "12";

if ($ad != "" && $sifre != ""):

    if($ad == $db_ad && $sifre == $db_sifre):


        $_SESSION["ad"] = $ad;
        $_SESSION["sifre"] = $sifre;

        echo "Giris Gerceklesti";
     else:

        echo "Bilgilerde Hata var <a href = 'form.php'> geri git </a> <br>";

    endif;

    

else:


endif;

?>