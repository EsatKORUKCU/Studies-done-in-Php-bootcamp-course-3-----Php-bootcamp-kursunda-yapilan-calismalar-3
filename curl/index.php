<?php
/*
if(extension_loaded("curl")){
    echo "curl aktif";
}else {
    echo "curl pasif";
}
*/
$dosya = fopen("test.html","w");

$adres = "https://localhost/esat/kontrol.php?adsoyad=Mehmet";
$curl = curl_init(); // başlatma

curl_setopt($curl, CURLOPT_URL,$adres); // url yi tanımladık
curl_setopt($curl, CURLOPT_FILE, $dosya);  //ayar 2 dosyaya aktarma
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS,"ad=Mehmet Selçuk & soyad=BAtal");

// $adres = "https://www.google.com.tr/search?q=mehmet";
// $curl = curl_init(); // başlatma

// curl_setopt($curl, CURLOPT_URL,$adres); // url yi tanımladık
// curl_setopt($curl, CURLOPT_FILE, $dosya);  //ayar 2 dosyaya aktarma
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 



// curl_setopt($curl, CURLOPT_URL,"https://www.google.com.tr"); //ayar 1 url yi tanımladık
// curl_setopt($curl, CURLOPT_FILE, $dosya);  //ayar 2 dosyaya aktarma
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // içerigi bir degişkene aktarmak istiyoruz
// curl_setopt($curl, CURLOPT_HEADER, 1); // .Baslık bilgisi görüntülenip görüntülenmedigi
// curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // Header ile gelen baglantıyı takip edlip edilmememsi
// curl_setopt($curl, CURLOPT_USERAGENT,"ss"); // karşı tarafa bilgimizin gitmememsi için
// //curl_setopt(curl, CURLOPT_USERAGENT,"ss"); // karşı tarafa bilgilerin gittigi
// curl_setopt($curl, CURLOPT_TİMEOUT, 10); //karşı taraftan bekleme süresi
// curl_setopt($curl, CURLOPT_REFERER,"https://www.google.com.tr"); // KARŞI tarafı yanıltma


$sonuc = curl_exec($curl); //çalıştırdık
curl_close($curl); //kapattık

//echo $sonuc;
 fclose($dosya);
?>