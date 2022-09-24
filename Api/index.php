<?php
    //XML ve Json İle Web Servis Yapımı
    include("baglan.php");

    $format = $_GET["tur"];

    $ogrenciler = array();
    $sorgu = $baglan->query("select * from ogrenci",PDO::FETCH_ASSOC);
    if ($sorgu->rowCount()>0) {
        foreach ($sorgu as $satir) {
            $ogrenciler[] = array("adsoyad" => $satir["adsoyad"], "tckimlik" => $satir["tckimlik"], "adres" => $satir["adres"]);
        }
        if ($format == "json") {
            //index.php?tur=json
            header("Content-Type: application/json; charset=utf-8");
            $json = json_encode($ogrenciler,JSON_UNESCAPED_UNICODE);
            echo $json;
        } else if ($format == "xml") {
            //index.php?tur=xml
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