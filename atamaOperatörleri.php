<?php
//Atama operatörleri.

$a = 4;

$b = 4;


$a %= $b;

echo $a;

/*
+= topla eşitle
-= çıkar eşitle
*= çarp eşitle
/= böl eşitle
%= kalana eşitle
*/

$isimsoyisim = "Hüseyin";
$soyad = "Ahmet";

echo $isimsoyisim .= $soyad; //Buda sitringleri birleşitmreye yarar.


//************** Artırma azlatma operatörleri **************

$a= 8;

$a--; 
echo $a;
echo "<br>";

$a -=  1;
echo $a;
echo "<br>";

$a= $a -1; 
echo $a;
echo "<br>";

$a++;
echo $a;
echo "<br>";

//******** Tarih işlemleri ******

date_default_timezone_set('Europe/Istanbul');
$date = date('d.m.Y H:i:s')."<br>";

echo $date; //zaman bilgisini Aldık





?>