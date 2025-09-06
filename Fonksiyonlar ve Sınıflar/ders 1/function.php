<?php

function yazdir(){
    //Parametre almayan ve değer döndürmeyen fonksiyon.
    echo "Yazdir"."<br>";
}

function toplama($sayiBir , $sayiIki){
    //Paramaetere alan ve değer döndürmeyen fonskiyon.
    echo $sayiBir + $sayiIki;
}

function carpma($sayiBir , $sayiIki){
    //Paramaetere alan ve değer döndüren fonskiyon.
    return $sayiBir + $sayiIki;
}

$isim = "muhammed";
function cikarma(){
    //Paramaetere almayan ve değer döndüren fonskiyon.
    global $isim; //Fonksiyonun dışında olan bir değişkeni fonksiyonun içinde kullanabilememize yarıyor.
    echo $isim;
    return 12;
    
}


?>