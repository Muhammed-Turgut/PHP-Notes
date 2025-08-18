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

?>/*