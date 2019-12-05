<?php

$nimi = $_GET['nimi'];
$nimi = strtolower($nimi);
$nimi = ucfirst($nimi);
echo 'Tere, ' . $nimi . '!';
echo '<hr>';


$sisend = $_GET['sisend'];
for ($indeks = 0; $indeks < strlen($sisend); $indeks++) {
    $symbol = strtoupper($sisend[$indeks]);
    echo $symbol . '.';
}





?>