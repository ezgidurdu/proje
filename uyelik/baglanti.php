<?php
$host= "localhost";
$kullanici= "root";
$sifre= "";
$vt= "basvuru";


$baglanti= mysqli_connect($host, $kullanici, $sifre, $vt);
mysqli_set_charset($baglanti,"UTF8");



?>