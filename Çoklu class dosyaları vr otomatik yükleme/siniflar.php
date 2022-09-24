<?php
function yukle ($sinif) {
    $adres = __DIR__."/cls/".$sinif.".class.php";
    require_once($adres);  // çagırma oluştu
}

spl_autoload_register("yukle");
?>