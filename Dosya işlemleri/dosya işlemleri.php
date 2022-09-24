<?php

$dosya = "deneme.txt";

if (file_exists($dosya)) { // dosyanın olup olmadıgını kontrol etti
    unlink($dosya);   // dosyayı sildi
    echo "$dosya dosyası silindi.";
}

else {
    echo "$dosya yok ve silinemedi";
}

/*
if (unlink($dosya)) {
    echo "Dosya silindi";
}
*/
/*
if (file_exists("denemex.txt")) { // dosyayı kontrol eder
    echo "Dosya Mevcut  ";
} else {
    echo "Dosya bulunamadı ";
}
*/
/*
touch("deneme.txt");
if (copy("deneme.txt", "deneme-kopya.txt")) {
    echo "Dosya kopyalandı.";
}
*/
/*
touch("deneme.txt");

if (rename("deneme.txt", "deneme-yeni.txt")) {
    echo "Dosya Adı Degiştirildi.";
} // yeniden adlandırılır
*/
/*
$dosya = fopen("deneme.txt","rb"); // okuma amaçlı açıldı

//echo fread($dosya, filesize("deneme.txt")); // dosya okuyor tek seferede 

while (!feof($dosya)) { // dosyanın sonuna gelinceye kadar 

    echo fgets($dosya)."<br>";//satır satır okur dosyayı okur

}

fclose($dosya);
*/
/*
$isimler = array("Fatih","Mehmet","Zehra","Metehan");

$sirano = 1;

$dosya = fopen("deneme.txt","wbt");

foreach ($isimler as $isim) {
    fwrite($dosya, "$sirano.\t$isim\n");
    $sirano++;
}
fclose($dosya);
*/
/*
$dosya = fopen("deneme.txt", "w+"); // hem açma hem okuma

// r dosyayı okuma amaçlı açar imlec  dosyanın başına konumlanır
// r+ dosyayı okuma ve yazma amaçlı açar imlec  dosyanın başına konumlanır
// w ve w+ dosyayı yazma amaçlı açar 
// a ve a+ hem okuma hem açma için ekleme yapmak için
// x ve x+ yazma amaçlı açmak için
// b bayneri ililik düzende açar
// t windows sistemler de herhangi biri ile kullanılır örn: wbt

fwrite($dosya, "Birinci Satır.\n "); // eklemek için 
fputs($dosya, "İkinci Satır. ");  // eklemek için

fclose($dosya);
*/

/*
$dosya = "deneme.txt";

//touch($dosya); // dosya oluşturma

if (touch($dosya, time()-3600, time()-3600)) {  // birinci 3600 değişklik zamanı bundan bir saat öncesi ikinci3600 erişim zamanı olur
    echo "Dosya Oluşturuldu.";
}
else {
    echo "Hata: Dosya Oluşturulamadı.";
}
*/
?>