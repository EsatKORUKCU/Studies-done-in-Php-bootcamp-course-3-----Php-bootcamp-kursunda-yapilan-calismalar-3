<?php

//include ("deneme.php"); //sayfada defalarca çagrılabilir
//include_once ("deneme.php"); // sayfada bir kere çagrılır. kendinden sonraki kodlar çalışır.
require("deneme.php");// dosya yoksa hata mesajı verir dosya çalışmaz
require_once("deneme.php"); // tek sefer çagrılır

echo $degisken;

?>