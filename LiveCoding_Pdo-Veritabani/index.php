<?php
//PHP PDO VERİTABANI İŞLEMLERİ

$baglan = new PDO("mysql:host=localhost;dbname=ogrenciler;charset=utf8","mehmet","12345");
$baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$baglan->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$baglan->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

/*
$sorgu = $baglan->query("select * from ogrenci where id='2'");
$satir = $sorgu->fetch(PDO::FETCH_OBJ); //FETCH_ASSOC - FETCH_NUM - FETCH_OBJ
echo $satir->adsoyad;
*/

/*
$sorgu = $baglan->query("select * from ogrenci",PDO::FETCH_ASSOC);
foreach ($sorgu as $satir) {
    echo $satir["adsoyad"]."<br>";
}

echo "<br><br>Toplam ".$sorgu->rowCount()." Kayıt Bulundu!";
*/

/*
$sorgu = $baglan->prepare("select * from ogrenci where durum=?",PDO::FETCH_ASSOC);
$sorgu->execute(array("aktif"));
foreach ($sorgu as $satir) {
    echo $satir["adsoyad"]."<br>";
}
*/

/*
$sorgu = $baglan->query("select * from ogrenci");
if ($sorgu->rowCount()>0) {
    foreach ($sorgu as $satir) {
        echo $satir["adsoyad"]."<br>";
    }
} else {
    echo "Kayıt Yok!";
}
*/

/*
$sorgu = $baglan->prepare("insert into ogrenci values(?,?,?,?)");
$ekle = $sorgu->execute(array(NULL,"Ali Veli","222222","aktif"));

if ($ekle) {
    $kayitno = $baglan->lastInsertId();
    echo "$kayitno Numarasıyla Kayıt Eklendi!";
}
*/

/*
$sorgu = $baglan->prepare("update ogrenci set adsoyad=?,telefon=?,durum=? where id=?");
$guncelle = $sorgu->execute(array("Aslıhan Serdengeçti","555","pasif","5"));

if ($guncelle) {
    echo "Güncelleme Başarılı!";
}
*/

/*
$sorgu = $baglan->prepare("delete from ogrenci where id=?");
$sil = $sorgu->execute(array(4));

if ($sil) {
    echo "Silme Başarılı!";
}
*/

/*
$sil = $baglan->exec("delete from ogrenci");
echo "Toplam $sil Kayıt Silindi!";
*/



?>