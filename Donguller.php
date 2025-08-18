<?php


/* while($sayi != 30){ //içine koşul yazılır ve koşul sağlandığı sürece döngü çalışır.

    echo "evet büyüktür."."<br>";
    $sayi ++;
    //kosul sağlandığı sürece çalışmaya devam edecek.

 }*/
 


/* do{
  $sayi++; 
  echo "evet küçük."."<br>";
 }while($sayi <40);*/


/* for(döngünün başlanguç ifadesi, döngünün koşulu, döngünün hangi adımda aratacağı){

 }*/


/*for($sayi = 1; $sayi <=10 ; $sayi++){
    echo $sayi. "<br>";
}*/

/*for($sayi = 1; ; $sayi++):
    
   if($sayi >10 ):
       break; //döngüyü istediğimiz yede keser.
       
   endif;

   echo $sayi."<br>";


endfor;*/

//******************************************************** */
//Foreach döngüsü
//******************************************************** */

/* $dizi = array ("okul","ogrenci","tahta","silgi");
 
 foreach($dizi as $key => $deger):
          echo $key."--->".$deger."<br>";
 endforeach;*/

//******************************************************** */
// Go to aynı sayfa içerisinde atlamayı sağlar örneğin döngünün dışına atlar hengi bir yere gider.
//******************************************************** */

/*goto atla;
echo "selam";
//Go to verimli bir kod.

atla:

for($a=1; $a<5;$a++):

    if($a==3):
       goto yallah;

    endif;


endfor;

yallah:

echo "uçtum geldim";*/
?>