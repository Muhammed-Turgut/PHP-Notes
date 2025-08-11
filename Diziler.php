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

$elemanlar = array("araba","bisiklet","kamon","ucak","yat","motor");

echo "<pre>"; //diziyi daha düzenli hale getiren html kodu.
print_r(array_chunk($elemanlar,2)); //diziyi 2 eleamnlı yeni dizilere ayrıdı.
print_r(array_chunk($elemanlar,2,true)); // diziyi  2 elamanlı dizilere bölücek  ve indizleri koruyacak.

?>