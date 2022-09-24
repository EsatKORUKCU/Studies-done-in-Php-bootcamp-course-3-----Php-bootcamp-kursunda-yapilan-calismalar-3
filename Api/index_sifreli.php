<?php
    //XML ve Json İle Web Servis Yapımı (Şifreli Giriş)
    include("baglan.php");

    $token = $_POST["token"];
    $format = $_POST["tur"];
    $ogrenci = intval($_POST["ogrenci"]);

    if ($token != sha1(md5("mehmet"))) {echo "Yetkisiz Erisim!"; die(); } //Güvenlik
    
    $ogrenciler = array();
    if ($ogrenci>0) {
        $sorgu = $baglan->query("select * from ogrenci where (id='$ogrenci')",PDO::FETCH_ASSOC);
    } else {
        $sorgu = $baglan->query("select * from ogrenci",PDO::FETCH_ASSOC);
    }
    if ($sorgu->rowCount()>0) {
        foreach ($sorgu as $satir) {
            $ogrenciler[] = array("adsoyad" => $satir["adsoyad"], "tckimlik" => $satir["tckimlik"], "adres" => $satir["adres"]);
        }
        if ($format == "json") {
            header("Content-Type: application/json; charset=utf-8");
            $json = json_encode($ogrenciler,JSON_UNESCAPED_UNICODE);
            echo $json;
        } else if ($format == "xml") {
            header("Content-Type: application/xml; charset=utf-8");
            echo "<?xml version='1.0' encoding='utf-8' ?>";
            echo "<ogrenciler>";
            foreach ($ogrenciler as $ogrenci) {
                echo "<ogrenci>";
                foreach ($ogrenci as $anahtar => $deger) {
                    echo "<$anahtar>$deger</$anahtar>";
                }
                echo "</ogrenci>";
            }
            echo "</ogrenciler>";
        } else {
            die("Yetkisiz Erisim!");
        }
    }
?>