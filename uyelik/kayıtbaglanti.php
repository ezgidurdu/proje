<?php
$host= "localhost";
$kullanici= "root";
$sifre= "";
$vt= "kayıtlar";


$kayıtbaglanti= mysqli_connect($host, $kullanici, $sifre, $vt);
mysqli_set_charset($kayıtbaglanti,"UTF8");



?>