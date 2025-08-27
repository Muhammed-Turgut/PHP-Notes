<?php
 //*******************************************
 //mkdir(); //dosya olusturma komutu.
 //*******************************************

  /* mkdir("dosylar",0700,true);
  mkdir("dosylar/resimler",0700,true); //dosyalar klasörünün içide resimler klasörü olusturdu.
*/
  //*******************************************
 //rmdir(); //dosya silem komutu.
 //*******************************************

// rmdir("dosylar");

 //*******************************************
 //touch(): farklı uzantılı dosyalar olusturmaya yarar(örenk .txt, .php, .py, .java).
 //*******************************************

 //touch("merahaba.txt");

 //*******************************************
//fopen komutu isteiğimiz dosyayı açmaya yarar.
 //*******************************************
/*
 $dosya = fopen("merahaba.txt","r");
 fclose($dosya); //açılmış dosyadan çıkmaya yarar.*/

//*******************************************
//fread(): bu fonksiyon açılan dosyayı okumaya yardım eder.
//*******************************************

/*$dosya = fopen("merahaba.txt","r");
$icerik = fread($dosya,filesize("merahaba.txt"));

echo $icerik;
fclose($dosya);*/

//*******************************************
//fwrite(): Dosyaya yazma işlemleri için kullnılır.
//*******************************************

/*$dosya = fopen("merahaba.txt","a+");
fwrite($dosya," Merhablar sanda");*/

//*******************************************
//unlink(): //kenisine verilen dosya yolunu uçururu.
//*******************************************



//*******************************************
//unlink(): //kenisine verilen dosya yolunu uçururu.
//*******************************************

//************************************ */
// file_exist() : bir dosyanın var olup olmadığını kontrol eder.
//************************************************ */

/*if(file_exists("merahaba.txt")):
  echo  "Dosya var";
else:
  echo "dosya yok";

endif;*/

//************************************ */
// feof -- fgets : feof dosyanın sonuna kadar gideer, fgets ise dosyayı satır satır okur.
//************************************************ */

/*$dosya = fopen("merahaba.txt","r");
$okunan = fgets($dosya);
print $okunan;
fclose($dosya);*/

/*$dosya = fopen("merahaba.txt","r");
while(!feof($dosya)):

   $okunan = fgets($dosya);
   print $okunan."<br>"; 

endwhile;
fclose($dosya);*/


//************************************ */
// copy: Bir dosyanın içeriğini diğer dosyaya kopyalar.
//************************************************ */

/*$mevcut = "merahaba.txt";
$yeni = "merhaba2.txt";

if(copy($mevcut,$yeni)):

  echo "dosya olustur";

else:

  echo "olusturulamadı";

endif;*/

//****************************************************
// glob: Bir klasördeki dosyaları listelemek.
//*****************************************************
/*
foreach(glob("*") as $dosya): foreach(glob(".txt") as $dosya): sadece .txt uzantılı dosyaları filtreler.

  echo $dosya."<br>";

endforeach;
*/

//****************************************************
// scandir: üst dizinide listeler.
//*****************************************************

/*$dosyalar = scandir(".");

foreach($dosyalar as $dosya):
  if($dosya =='.' || $dosya == '..' || $dosya == 'Diziler.php'): //Listelenmesini istemediğimiz değerleri filtreler.

    continue;

  endif;

  echo '<a href = "'.$dosya .'">'.$dosya.'</a> <br>';

endforeach;*/


//****************************************************
// rename: dosya adını değişitmrek için kullanılır.
//*****************************************************

//rename("merahaba.txt","merhaba.txt");

//****************************************************
// is_file: kendisine verielenin dosya olup olmadığını kontrol eder.
//*****************************************************

if(is_file("merhaba.txt")):

  echo "evet dosya";

else:
  echo "hayır dosya değil.";
endif;

?>