<?php
    /*
    //XML GET METOTU
    $url = "http://localhost:8888/msbatal/index.php?tur=xml";
    $xml = simplexml_load_file($url);
    $json = json_decode(json_encode($xml),true);
    $ogrenciler = $json["ogrenci"];
    foreach ($ogrenciler as $ogrenci) {
        foreach ($ogrenci as $anahtar => $deger) {
            echo "$anahtar: $deger<br>";
        }
        echo "<br><br>";
    }
    */
    

    /*
    //JSON GET METOTU
    $url = "http://localhost:8888/msbatal/index.php?tur=json";
    $json = file_get_contents($url);
    $json = json_decode($json,true);
    foreach ($json as $ogrenciler) {
        foreach ($ogrenciler as $anahtar => $deger) {
            echo "$anahtar: $deger<br>";
        }
        echo "<br><br>";
    }
    */


    //POST METOTU
    $token = sha1(md5("mehmet"));
    $veriler = array("token" => $token, "tur" => "json", "ogrenci" => "0");
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://localhost:8888/msbatal/index_sifreli.php");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($veriler));
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type" => "application/x-www-form-urlencoded"));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $cevap = curl_exec($curl);
    curl_close($curl);

    //echo $cevap;

    $json = json_decode($cevap,true);
    foreach ($json as $ogrenciler) {
        foreach ($ogrenciler as $anahtar => $deger) {
            echo "$anahtar: $deger<br>";
        }
        echo "<br><br>";
    }
?>