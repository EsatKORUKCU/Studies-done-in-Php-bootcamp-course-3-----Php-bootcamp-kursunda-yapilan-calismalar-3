<?php

if (rmdir("test")) {
    echo "Test dizini silindi.";
}

//rename("deneme-yeni","test/deneme-yeni"); // klasöün yerini degiştirir

//rename("deneme","deneme-yeni");// klasör ismi degiştirdi

/*
$dizin = scandir("deneme");
foreach($dizin as $icerik) {
    if (is_file($icerik)) {  // dosya mı degil mi diye kontrol edilir
        echo "Dosya: $icerik<br>";
    }
    if (is_dir($icerik)) {
        echo "Dizin: $icerik<br>"; // dizin mi 
    }
}
*/
/*
$dizin = scandir("deneme"); // alfabetik olarak sıraladı ayrıca üöce klasör(dizin) sonra digerleri olarak ekrana çıktı verdi

foreach ($dizin as $icerik) {
    echo "$icerik<br>";
}
*/
/*
if ($dizin = opendir("deneme")) {
    while (($dosya = readdir($dizin))) { // listeme
        echo "$dosya<br>";
    }
    closedir($dizin);
}
*/
/*
$dizin = opendir("deneme");//  dosya yetkisi ile açılır
chmod($dizin,0755); // yetki degiştirilir
closedir($dizin); // dosya kapanır
*/
//mkdir("deneme",0755); // ilk sekizlik sistemi ikinci sistemin sahibini üçüncü grup yetkisini dördüncü herkesi klasör oluşturur

?>