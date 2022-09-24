<?php
require_once("siniflar.php");

 $ogrenciler = new ogrenciler;
 echo $ogrenciler->adsoyad."<br><br>";

 $ogretmenler = new ogretmenler;
 echo $ogretmenler->adsoyad."<br><br>";

 $calisanlar = new calisanlar;
 echo $calisanlar->adsoyad;


 /* // bunlardan çok olursa sınıflar açılacak ve yukarıdaki gibi yazılır
 require_once("ogrenciler.php");
 require_once("ogretmenler.php");
*/
?>