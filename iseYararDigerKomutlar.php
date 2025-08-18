<?php
//**************************************************
// explode bir dizgeyi istediğimz şekilde alt dizilere böler
//**************************************************

/*$urunler = "toka,saat,dola,ptelefon";

$bolunmus = explode(",",$urunler);*/

//**************************************************
// implode komutu eplde kodunun tam tersi bölmek yerine toparlıyor.
//**************************************************

/*$urunler = array("toka","saat","dolap","telefon");
$ayarac= implode(",",$urunler);

echo $ayarac;*/

//**************************************************
// mt_rand rastgele sayı üretmek için
//**************************************************

 //echo mt_rand(0,100); //0 ile 100 aralığında sayı üretir.

//**************************************************
// mt_rand rastgele sayı üretmek için
//**************************************************
 //rada göre daha hızlıdır.
 //echo mt_rand(0,100); //0 ile 100 aralığında sayı üretir.


 //**************************************************
// floor round ceil 
//**************************************************

/*echo floor(4.3)."<br>";  //floor komutu aşağıya yuvarkalr
echo floor(9.99)."<br>";
echo floor(-3.14)."<br>";

echo "<hr>";

echo round(4.3)."<br>"; //round komutu en yakın on luğa veya yüzlüğe yuvarklar yuvarklar.
echo round(98.99)."<br>";
echo round(-3.14)."<br>";

echo "<hr>";

echo ceil(4.3)."<br>"; //ceil komutu yukarı yuvarlar.
echo ceil(9.99)."<br>";
echo ceil(-3.14)."<br>";*/

//**************************************************
// max, min
//**************************************************

/*echo max(2,3,6,7,9); //kendisine verilen değerlerden en büyük olanı seçer

echo "<br>";

echo min(-1,3,6,15,8); //kendisine cerilen değerlerden en küçüğünü döndürür.

$dizi = array(2,4,8,1,5,9,10);

echo "<br>"; // parametre olarak dizide alır.

echo max($dizi);*/

//**************************************************
// sleep çalışmayı beli bir süre durduru.
//**************************************************

/*echo date('h:i:s')."<br>";

sleep(3); //sistemi üç saniye uyutu.

echo date('h:i:s')."<br>";*/

//*********************************************************************
// isset: isset komutu bir değişkenin var olup olmadığına bakar.
// unset: unset komutu var olan değişkeni siler.
//*********************************************************************

/*$a = 54;
if(isset($a)){
    echo "Var"."<br>";

}
else{
    echo "yok";
}
unset($a);

if(isset($a)){
    echo "Var";

}
else{
    echo "yok";
}*/

//*********************************************************************
// is_bool  değerin boolen mı değilmi ona bakar 0 veya 1 true veya false her türlü if bloğunda çalışır.
//*********************************************************************

/*$degisken = true;
if(is_bool($degisken)):
echo "doğru";
else:
 echo "değil";
endif;*/

//*********************************************************************
// empty: 
//*********************************************************************

/*$değer = 0;
//sıfırı boş olarak kabul eder.
$array = array();
// dizi boş olduğu için  if komutu çalışır.
if(empty($array)):
    echo "0 yada boş yada tanımsız.";

else:

endif;*/

//*********************************************************************
// get_include_files: sayfaya dahil edilen dosyaların lisetesini döner (include ile ekleneleri)
//*********************************************************************

/*include "deneme.php";
include "Donguller.php";
include "KarsilastirmaOperatorleri.php";

$dahiler = get_included_files();

foreach($dahiler as $dosyaadi):
    echo $dosyaadi."<br>";
endforeach;*/

//*********************************************************************
// phpversion(); bu komut mevcut php sürümümüzü verir.
//*********************************************************************

//*********************************************************************
// get_loaded_extensions(); bu fonksiyon projedeki tüm modüleri verir.
//*********************************************************************


?>