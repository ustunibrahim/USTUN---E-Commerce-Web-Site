<?php
$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="URUNLER";


$urunbaglanti=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi); 

if(!$urunbaglanti)
{
    die("veri tabanı bağlantısı başarısız.".mysqli_connect_error());
}


?>