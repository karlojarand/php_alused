<?php
?>
<h1>RUUMALAD</h1>
<?php
//valemid
function keraRuumala($raadius){
    $ruumala = 4 * pi() * pow($raadius,exp 2);
    return round($ruumala, precision:2);
}
function koonuseRuumala($raadius, $korgus){
    $ruumala = (1 / 3) * pi() * pow($raadius, 2) * $korgus;
    return round ($ruumala, 2);
}

function silindriRuumala($raadius, $korgus){
    $ruumala = pi() * pow($raadius, 2) * $korgus;
    return round($ruumala, 2);
}
//vormi andmed
$keraRaadius = $_GET ['kera-raadius'];
$koonuseRaadius = $_GET ['koonuseRaadius'];
$koonuseKorgus = $_GET ['koonuseKorgus'];
$silindriRaadius = $_GET ['silindriRaadius'];
$silidniKorgus = $_GET ['silidniKorgus'];

//arvutused ja väljund
echo 'Kera raadius = '.$keraRaadius.' ja ruumala = '.keraRuumala($keraRaadius).'<br>';
echo 'Koonuse raadius = '.$koonuseRaadius.' ja korgus = '.$koonuseKorgus.' ja ruumala = '.koonuseRuumala($koonuseRaadius, $koonuseKorgus).'<br>';
echo 'Silindri raadius = '.$silindriRaadius.' ja korgus = '.$silindriKorgus.' ja ruumala = '.silindriRuumala($silindriRaadius, $silindriKorgus).'<br>';
