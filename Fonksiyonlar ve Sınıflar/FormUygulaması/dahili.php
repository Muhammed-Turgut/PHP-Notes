<?php

class FormKontrol{
    protected $durum = false;
    private $mesaj = "Bilgileri lütfen boş geçemeyin ";
    protected $sonAd,$sonYas,$sonTc, $sonHobi, $sonMeslek, $buton;

    function kontrolEt(){

        @$isim = htmlspecialchars($_POST["isim"]);
        @$yas = htmlspecialchars($_POST["yas"]);
        @$tc = htmlspecialchars($_POST["tc"]);
        @$hobi = htmlspecialchars($_POST["hobi"]);
        @$meslek = htmlspecialchars($_POST["meslek"]);
        $buttonum = htmlspecialchars($_POST["button"]);

        if($isim != "" &&  $yas != "" && $tc != "" && $hobi != "" && $meslek != "" ):

           $this->durum = true; 
           $this->sonAd = $isim;
           $this->sonYas = $yas;
           $this->sonTc = $tc;
           $this->sonHobi = $hobi;
           $this->sonMeslek = $meslek;
           $this->buton = 1;


        else:
             return $this -> mesaj;
        endif;

    }

    function sonucuVer(){ return $this ->durum;}
    function FsonAd(){ return $this ->sonAd;}
    function FsonYas(){ return $this ->sonYas;}
    function FsonTc(){ return $this ->sonTc;}
    function FsonHobi(){ return $this ->sonHobi;}
    function FsonMeslek(){ return $this ->sonMeslek;}
    function buttonNeDurumda(){ return $this ->buton;}
    
}

class Kaydet extends FormKontrol{


    function bilgiKaydet(){
      if(parent::sonucuVer() == true):

        echo "Gelen Ad:  ". parent::FsonAd()."<br>";
        echo "Gelen Yas:  ". parent::FsonYas()."<br>";
        echo "Gelen TC:  ". parent::FsonTc()."<br>";
        echo "Gelen Hobi:  ". parent::FsonHobi()."<br>";
        echo "Gelen Meslek:  ". parent::FsonMeslek()."<br>";
        echo "Button:  ". parent::buttonNeDurumda()."<br>";

      else:
        if(parent::buttonNeDurumda() == 1):
            echo "Hata var";
        endif;
        echo "hata var";

      endif;
    }

}

?>