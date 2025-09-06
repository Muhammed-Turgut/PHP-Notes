<?php

//extends; miras alma için kullanılır.
//private; sadece kullanılan class ciddiye alır orda etkilidir.
//protected; tanımlanan sınıf ve miraslara çocujklara etki eder.
//public; heryerde erişilebilir.

class merhaba{

    private $deger = 5;
    protected $korumlai = "a";
    public $genel = "genel";

    function yazdir(){
        echo "extedns görüyorum";
    }
}

class a extends merhaba{

    function genisle(){
        echo "genisleme";
    }
     
}

// **final : verildiği sınıfın miras alınmasını engeliyor.

final class merhaba2{

  
}

class yeni extends merhaba2{

}

?> 