<?php

//Sihirli sabit
/*

__Call; bir sınıf çağrıldığında sını yoks aotomotik başka bir sınıf çalıştırır.
__callStatic; bir sınıftan nesne üretilmeden çağırlıdığında çalışna fonksiyon.
__set; class içerisinde olmayan bir değişkene değer etmeye çalışırsa devreye girip işlem yapar
__get; class içerisinde olmayan bir değişkene ulaşılmaya çalışılırsa çalışıyor.
__isset; Birdeğerin valığını sorgulamaya çalıştığımızda çalışlırlar.
__unset;
__invoke; bir nesneyi yöntem (fonksiyon) olarak çağırırsak çalışır.

*/

class sihirliSabit{
  function __call($name, $arguments)
  {
     echo "Çağırdınız fonksiyon: ".$name."<br> bu call sihirliden gelmektedir. Fonksiyon yok"."<br>";
  }

  static function __callStatic($name, $arguments)
  {
    echo "Statik Çağırdınız fonksiyon: ".$name."<br> bu call sihirliden gelmektedir. Fonksiyon yok"."<br>";
  }

  function __set($name, $value)
  {
    echo $name." adlı değişkene  ".$value."  değeri atanıyor"."<br>";
  }

  function __get($name)
  {
    echo $name." adlı değişkene ulaşılmaya çalışılıyor";
  }
}
//var_dump(); bu fonkksiyon kendisine verilen değerin tip ve dataylı bilgisini veri.

$sinifim = new sihirliSabit();
$sinifim->__call("selmalar","selamlar");
$sinifim->merhaba(); //olmayan bir fonksiyon çağırdık sorun oluşması ve çökme engelendi.
sihirliSabit::olamyan(); //olmadığı için statik sınıf çalışıcak.

$sinifim->a=10; //olmayan değişkene değer atandı. soruna sebebp olsu ve set çalıştı
$sinifim->b;

?>