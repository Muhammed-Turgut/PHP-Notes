<?php

class okulum{

    function yazi(){
        echo "geliyorum"."<br>";
    }

    function hesapla($d,$v){
      echo $d * $v;
    }
}

class ozellik{
    public $oku = "degiskenden geliyorum"."<br>";

    function oku(){
        echo "fonksiyon";
    }
}

//extends; miras alma için kullanılır.
//private;
//protected;
//public;

class merhaba{
    function yazdir(){
        echo "extedns görüyorum";
    }
}

?>