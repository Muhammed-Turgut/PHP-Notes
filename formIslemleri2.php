<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

@$sayfa = $_GET["islem"];

  switch($sayfa):

   case "git":

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
   break;

   define:

?>
  <center>

 <h3>Form uygulama</h3>
  <hr/>

  <form action="formIslemleri2.php?islem=git" method="post">
    
  <input type="text" name="isim" placeholder="Adınızı Yazınız" required="required" /><br> <br/>

  <input type="password" name ="sifre" placeholder="Sifreniz."/> <br></br>

  <input type="submit" name="buton" value="yallah"/> <br></br>

  <input type="reset" name="reset" value="sıfırla"/> <br></br>

  <select name="secenek">
  <option value="0">dilek</option> 
  <option value="1">şikayet</option>
  <option value="2">öneri</option>
  </select>

  <input type="radio" name="tasarim" value="soft"/>
  <input type="radio" name="tasarim" value="dark"/>
  <input type="radio" name="tasarim" value="beyaz"/>
  

  </form>
  </center>

  <?php

 endswitch;

?>
 
</body>
</html>