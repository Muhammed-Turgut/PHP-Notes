<?php

//GET yöntemi verileri açık taşır.
//POST yöntemi verileri kapalı taşır.

 $isim = $_POST["isim"]; // çekeceğimiz değer gelecek değerdeki isim deki alanın adıdır.
 $sifre =$_POST["sifre"]; 

 $sec = $_POST["secenek"]; // çekeceğimiz değer gelecek değerdeki isim deki alanın adıdır.
 $tas =$_POST["tasarim"]; 

 $submit =$_POST["buton"]; 

if($submit):

    echo "Glen isim: ".htmlspecialchars($isim)."<br>";//htmlspecialchars tüm diğer html taglarını temizler. güvenlik açısından önerilir.
    echo "Glen sifre: ".$sifre."<br>";
    echo "Glen secenek: ".$sec."<br>";
    echo "Glen tasarım: ".$tas."<br>";

else:
    echo "Butona basılmadı";

endif;

?>