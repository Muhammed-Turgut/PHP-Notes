<?php


@$cikis= $_POST["cikis"];

if($cikis):
setcookie('ad',$ad,time() -10);
setcookie('sifre',$sifre,time() - 10);

echo "Çıkış yapıldı"."<br> Bekleyin";

header("refresh: 3, url=form.php");

else: 
    echo "Sorun oluştur";
endif;

?>

