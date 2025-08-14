<?php

/*$stringArry = array("Kalem","Kalem traş","silgi","bebek");
                  //  0        1     2      3      4 
$numberArry = array(1,2,3,4,5,6);*/

//Temelde diğer dilierde olduğu gibi burdada index mantığı var.
// dizideki işlk eleman dizinin index numarası 0. elemandır.



/*$kalemler[1] = "Kalem2";
$kalemler[2] = "Kalem3";

echo $kalemler[2];
echo "<br>";

$kalemler = array("ad" => "Kalem1", "kalem2", "kalem3" );

echo $kalemler[0]; //Ekrana Kalem 2 yazack indeks in başladığı yer değişti.
echo "<br>";

echo $kalemler["ad"]; //Ekrana kalem1 yazacaktır. ad artık bir indeks numarası haline geldi*/

/*$uye["ad"] = "olcay";
$uye["yas"] = 30;
$uye["memleket"] = "istanbul";

echo $uye["ad"].".....". $uye["yas"].".....".$uye["memleket"];*/


//----Diziden eleman silme----.
/*$uye["ad"] = "olcay";
$uye["yas"] = 30;
$uye["memleket"] = "istanbul";

unset($uye["ad"]); //ad keyine ait veri silindi.
echo $uye["ad"];*/

//***************************************************************************
//----Dizideki tüm elemanları silme----
//***************************************************************************

/*$uye["ad"] = "olcay";
$uye["yas"] = 30;
$uye["memleket"] = "istanbul";

unset($uye); //Bu şekilde dizinin tamamını sileriz.*/

//***************************************************************************
//----İç içe diziler ----
//***************************************************************************

/*$kalamler ["kalemler"] = array(
 "Renk" => array("Kırmızı","Sarı","Yeşil"),
 "tip" => array("Yuvarlak","Kare","Küp"),
 "kalite" => array("iyi","kötü","normal")
);

echo $kalamler["kalemler"]["Renk"][0]."<br>";
echo $kalamler["kalemler"]["Renk"][1]."<br>";
echo $kalamler["kalemler"]["Renk"][2]."<br>";*/

//***************************************************************************
//---- İşe yarar Kodlar ----
//***************************************************************************


//***************************************************************************
//array push
//Değişken ismlerinde türkçe karakter kullanma.
//***************************************************************************
/*
$kume = array("araba","motor");
array_push($kume,"ucak","bisiklet"); //dizinin sonuna verileri ekledik.

print_r($kume); //Küme elemanlarını tek seferde yazdırdı.*/

//***************************************************************************
//array rand komutu dizi içerisinde rastgele değer döner.
//***************************************************************************

/*$kume = array("araba","motor","ucak","tekne");

$randKey = array_rand($kume,2);

echo $kume[$randKey[0]]."<br>";
echo $kume[$randKey[1]]."<br>";

print_r($randKey);*/

//***************************************************************************
//---- Dizi içerisinde eleman varmı yokmu kontrolu----
//***************************************************************************

/*$kume = array("araba","motor","ucak","tekne");

if(in_array("araba",$kume)):
    echo"Aradığınız değer var";
else:

    echo "yok";

endif;*/

//***************************************************************************
// ----- dizinşn içindeki eleman sayısını veren fonksiyon count() -----
//***************************************************************************

/*$kume = array("araba","motor","ucak","tekne");

echo count($kume);*/

//***************************************************************************
//--- array_fill dizi içerisinde beli bir miktarda başlayıp beli adımda çoğaltır ----.
//***************************************************************************

/*$a = array_fill(5,4,"ogrenci");

print_r($a); //Array ( [5] => ogrenci [6] => ogrenci [7] => ogrenci [8] => ogrenci ) 
*/

//***************************************************************************
//---array_diff komutu iki diziyi karşılaştırı farklı elemanları döndürür----.
//***************************************************************************

/*$kume = array("araba","motor","ucak","tekne");
$kume2 = array("araba","motor","ucak","yat");

$sounuc =array_diff($kume,$kume2);

print_r($sounuc);*/

//***************************************************************************
//next prev end
//***************************************************************************

/*$kume = array("araba","motor","ucak","yat");
echo $son = next($kume)."<br>"; //next komutu o an dizide indeks numarası nerde ise bir ileri gider
echo $son = prev($kume)."<br>"; //prev komutu ise indeks numarası o an nerde ise bir geri gelir
echo $son = end($kume)."<br>"; //indeks numarasını sona götürür.*/

//***************************************************************************
//arry_chunk diziyi istediğim sayıdaki alt dizilere bölmemizi sağlar.
//***************************************************************************

/*$elemanlar = array("araba","bisiklet","kamon","ucak","yat","motor");

echo "<pre>"; //diziyi daha düzenli hale getiren html kodu.
print_r(array_chunk($elemanlar,2)); //diziyi 2 eleamnlı yeni dizilere ayrıdı.
print_r(array_chunk($elemanlar,2,true)); // diziyi  2 elamanlı dizilere bölücek  ve indizleri koruyacak. ön tanımlı olarak false oalrak gelir.
*/


//***************************************************************************
//array_combine
//***************************************************************************
//amaç dizi elemanlarını kombine etmek  1.dizinin ilk elemanı 2.dizinin ilk elemanı ile eşleştiriliyor
/* 
$elemanlar = array("araba","bisiklet","kamon");
$elemanlar1 = array("audi","olcaysan","volvo");

$olusanDizi = array_combine($elemanlar,$elemanlar1);

echo "<pre>";
print_r($olusanDizi);*/


//***************************************************************************
//array_filip birdizdeki anahtarla değerleri değiştiriri.
//***************************************************************************

//$elemanlar = array("nesne" => "fırça", "malzeme" => "Kum", "arac" => "kamyon");
//değer anahtar verilmese indis değerleri yazılır.
/*
echo "<pre>";
print_r($elemanlar);

echo "<br>";


echo "<pre>";
print_r(array_flip($elemanlar));*/



//***************************************************************************
//array_key_exist Belitilen anahta veya indisin dizide var olup olmadığını kontrol ederr.
//***************************************************************************

/*$elemanlar = array("nesne" => "fırça", "malzeme" => "Kum", "arac" => "kamyon");

if(array_key_exists("malzeme",$elemanlar)):
    echo "Malezeme anahtarı var.";
else:
    echo "Aradığınız değer yok";

endif;
*/

//***************************************************************************
// array_map istenilen fonksiyona istenilen dizinin değerleri parametre olarak veriliyor.
//***************************************************************************

/*function islem($sayi){
    return ($sayi*$sayi*$sayi);
}

$elemanlar = array(1,2,3,4,5);
echo "<pre>";
print_r(array_map("islem",$elemanlar));
//ekrana her indisin fonksiyondaki şleminin sonucunu yazdırdı
echo "</pre>";*/

//***************************************************************************
//array_merge belirtilen dizileri art arda ekleyerek yeni di oluşturur.
//***************************************************************************

/*$elemanlar1 = array("model"=> "T120",8,9);
$elemanlar2 = array("zeytin","peynir","model" => "z890", "marka" => "salman",35);

echo "<pre>";
print_r(array_merge($elemanlar1,$elemanlar2)); //bir veya birden fazla dizi alabilir.
//aynı anahtar değernie sahip elemanlar varsa son değeri alır.
*/

//***************************************************************************
//array_pop dizinin sonundaki elemanını diziden çıkarırı.
//***************************************************************************

/*$elemanlar = array(1,2,3,4,5);

echo "<pre>";
print_r(array_pop($elemanlar)); //burda çıkarılan dizi elamnı yazdırılır.

echo "<pre>";
print_r($elemanlar); //burda ise orjinal dizinin son halini veri*/

//***************************************************************************
//array_shift bu fonksiyon dizinin ilk elemanını çıkarırı
//***************************************************************************

/*$elemanlar = array(1,2,3,4,5);
echo array_shift($elemanlar);

echo "<pre>"; 
print_r($elemanlar); //1 inci eleman dizi den çıkarıldı.*/

//***************************************************************************
//array_unshift dizinin başına bir veya birden fazla değer eklemeye yarar.
//***************************************************************************

/*$elemanlar = array(4,5,6,7,8);
array_unshift($elemanlar,1,2,3);
echo "<pre>";
print_r($elemanlar);*/

//***************************************************************************
//array_product dizideki elemanların çarpımını bulur
//***************************************************************************

/*$elemanlar = array(4,5,6,7,8);
$elemanlar2 = array(4,5,6,7,"değer");

echo "işlem sonucu:".array_product($elemanlar);
echo "işlem sonucu:".array_product($elemanlar2); //sonuc sıfır gelecek*/

//***************************************************************************
//array_unique dizide tekrara eden değerleri siler
//***************************************************************************
/*
$elemanlar = array ("renk" => "yesil", "mavi","digerRenk","marka"=> "sarı","yesil","kırmızı");
echo "<pre>";
print_r(array_unique($elemanlar));*/

//***************************************************************************
//array_replace indizs değerlerini değiştiriri.
//***************************************************************************

/*$anadizim = array("audi","bmw","alfa","jeep");
$degisecek = array(0=>"renualt", 4 =>"volvo");
$degisecek2 = array(0=>"opel");

$sonuc = array_replace($anadizim,$degisecek); //ilk parametredki indis deüerini ikinci dizideki aynı indis değeri ile değişir.
echo "<pre>";
print_r($sonuc);*/


//***************************************************************************
//array_search dizide elema aramya yara deerği bulduğunda anahtarı döner.
//***************************************************************************

/*$array = array(0=>"takı", 1 => "toka", 2=>"tarak", 3=>"ayna");
$sonuc = array_search("ayna",$array);

echo $sonuc; //cevap oalra 3 değerini dönecek.*/


//***************************************************************************
//array_keys istenen değere sayip tüm anhatarları döndürür.
//***************************************************************************
/*$array = array(0=>"takı", 1 => "toka", 2=>"tarak", 3=>"ayna",4=>"ayna",5=>"ayna");

$sonuc = array_keys($array,"ayna");

echo "<pre>";
print_r($sonuc);*/

//***************************************************************************
//array_slice bir dizide istediğimiz kısımları almamızı sağlar.
//***************************************************************************

/*$array = array("takı","toka","ayna","ayna");
echo "<pre>";
print_r(array_slice($array,1,2));
echo "</pre>";*/

//***************************************************************************
//compact değişkenlerin dizi haline dönüşmesini sağlar.
//***************************************************************************

/*$araba = "BMW";
$kasaTipi = "Sedan";
$rengi = "Kırmızı";

$dizim = array();

/*array_push($dizim,$araba);
array_push($dizim,$kasaTipi);
array_push($dizim,$dizim);

echo "<pre>";
$dizim = compact("araba","kasaTipi","rengi");

print_r($dizim);*/

//***************************************************************************
//extract dizideki değerlieri değişke gibi kullanmaya yarar
//***************************************************************************



?>