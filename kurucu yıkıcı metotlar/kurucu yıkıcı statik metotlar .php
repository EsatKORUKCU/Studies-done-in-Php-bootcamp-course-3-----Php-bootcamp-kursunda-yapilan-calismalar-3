<?php

// statik metotlar
class Ogrenciler {
    static $ogrenciSayi = 50;

    public static function ogrenci() {
        return "Ögrenci Sayısı:" .self::$ogrenciSayi;  //123
    }
    /*
    public static function ogrenci() {
        return self::$ogrenciSayi; //1111
    }
    */
}

//$ogrenci = new Ogrenciler;

//echo Ogrenciler::$ogrenciSayi;//1111

echo Ogrenciler::ogrenci();  

/*
class Dosya {
    private $dosya;
    private $dosyaAd;
    private $dosyaBoyut;

    public function __construct($ad){
        $this->dosyaAd = $ad;
        $this->dosya = fopen($this->dosyaAd,"rbt");
        $this->dosyaBoyut = filesize($this->dosyaAd);

    }

    public function islem() {
        return fread($this->dosya,$this->dosyaBoyut);
    }

    public function __destruct() {
        fclose($this->dosya);
    }
}

$icerik = new Dosya("dosya.txt");
echo $icerik->islem();
*/

/*
// kurucu metot __construct()

class Ogrenciler {
    private $adsoyad = "Mehmet Selçuk Batal";
    private $tckimlik = "11111111";

    // paremetreli fonksiyonlar
    public function __construct($adsoyad,$tckimlik) {
        echo "$adsoyad<br>$tckimlik";
    }

    public function __destruct() {
        echo "<br>Nesne Silindi.";
    }
}

$ogrenci = new Ogrenciler("Ahmet KOÇAK", "11111111");
*/
/*
// parametresiz kurucu metot
$ogrenci = new Ogrenciler();
    public function __construct() {
        echo "$this->adsoyad<br>$this->tckimlik";
    }
}

$ogrenci = new Ogrenciler();
*/
?>