<?php session_start();

@$ad = htmlspecialchars($_POST["ad"]);
@$sifre =htmlspecialchars( $_POST["sifre"]);

$db_ad = "olcay";
$db_sifre = "12";

if ($ad != "" && $sifre != ""):

    if($ad == $db_ad && $sifre == $db_sifre):


        setcookie('ad',$ad,time()+(60*60*24));
        setcookie('sifre',$sifre,time()+(60*60*24));

        echo "Giris Gerceklesti";
        echo '<form action="cikis.php" method="post">
 <input type="submit" name="cikis" value="çık git">

</form>';
     else:

        echo "Bilgilerde Hata var <a href = 'form.php'> geri git </a> <br>";

    endif;


endif;
if(isset($_COOKIE["ad"]) || isset($_COOKIE["sifre"])){
    echo "Giris yapmışsın artık paneldesin";

    echo '<form action="cikis.php" method="post">
 <input type="submit" name="cikis" value="çık git">

</form>';
}

?>

