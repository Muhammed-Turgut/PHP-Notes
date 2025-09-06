<?php
  //Interface -- Arayüzler;
  //oluşturulacak sınıfların nasıl olşturulacağına karar verem yöntemi.
  //interfacelerdede aynı zamanda miras alma var.

   
  interface benimArayuzum {
    public function ogrenciEkle($isim,$sinifi);
    public function ogrencieListele();

  }

  class ogrenciler implements benimArayuzum{
      
    private $ogrenciBilgi = array();
    public function ogrenciEkle($isim,$sinifi){

        $this ->ogrenciBilgi[$isim]  = $sinifi;

    }
    public function ogrencieListele(){

       

    }

  }

?>