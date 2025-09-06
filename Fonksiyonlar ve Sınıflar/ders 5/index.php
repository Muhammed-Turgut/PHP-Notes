<?php

//Trait: Tekrar tekrar kullanılabilen bonus işlem bütünüdür.

 trait kargo {
    function yazi(){
        echo "Anasınıfdan gelen veri";
    }   
  }

class deneme{

    use kargo;
    
}

$a = new deneme;

$a -> yazi();



?>