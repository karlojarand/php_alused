<?php
$aeg = mktime(hour 12, minute 31, second 0, month 3, day 20, year 2013);
echo date('d.m.Y H:i', $aeg);
echo '<br>';
echo date('d.m.Y H:i',time());
echo '<br>';

$paevaNumber = date(format 'N');
$nadal = array(
    '1' => 'esmaspäev',
    '2' => 'teisipäev',
    '3' => 'kolmapäev',
    '4' => 'neljapäev',
    '5' => 'reede',
    '6' => 'laupäev',
    '7' => 'pühapäev',
);
foreach ($nadal as $number=>$nimetus){
    if($number == $paevaNumber){
        echo $nadal[$number];
    }
}

echo date(format 'd.');
$kuud = array(
    '1' => 'jaanuar',
    '2' => 'veebruar',
    '3' => 'märts',
    '4' => 'aprill',
    '5' => 'mai',
    '6' => 'juuni',
    '7' => 'juuli',
    '8' => 'august',
    '9' => 'september',
    '10' => 'oktoober',
    '11' => 'november',
    '12' => 'detsember',
);
$kuunumber = date(format'n');
foreach ($kuud as $number=$nimetus){
    if($number == $kuunumber){
        echo $kuud[$number];

    }
}
echo date(' Y '); // kuvame aasta
foreach ($nadal as $number=>$nimetus){
    if($number == $paevaNumber){
        echo $nadal[$number]; // kuvame nädalapäev
    }
}
echo '<hr>';

$jargmineAasta = date('Y')+1;
$jaaniPaev = mktime(0, 0, 0, 6, 24, $jargmineAasta);
$hetkel = time();
$vahe = $jaaniPaev - $hetkel;
$paevasSekunditeArv = 60 * 60 * 24;

$paevadeArv = (int)($vahe / $paevasSekunditeArv);
echo $jargmineAasta.' aasta jaanipäevani on jäänud '.$paevadeArv.' päeva!';
echo '<hr>';
//Minu sünnipäev on 06.11.1980! Leia kumb on meist vanem. Kuva mõlema sünnikuupäevad ning vahe aastates.
$minuSynnipaev = strtotime("30 November ".date('Y'));
$temaSynnipaev = strtotime("11 November ".date('Y'));
$vahe = $temaSynnipaev - $minuSynnipaev;
$vaheAastates = (int)($vahe / (60 * 60 * 24 * 30 * 12));
if($vahe < 0){
    echo 'Tema on vanem kui mina ';
} else {
    echo 'Mina on vanem kui tema ';
}
echo '<hr>';

$jargmineAasta = date('Y')+1;
$minuSynniKuuPaev = strtotime("30 November 1998");
$minuSynnipaevJargmiselAastal = strtotime("30 November ".$jargmineAasta);
// mitu aastat olen vana?
$vanusSekundites = $minuSynnipaevJargmiselAastal - $minuSynniKuuPaev;
$vanusAastates = (int)($vanusSekundites / (60 * 60 * 24 * 30 * 12));
if($vanusAastates % 5 == 0) {
    echo $jargmineAasta.' sul on juubel';
} else {
    echo $jargmineAasta.' sul pole juubelit';
}
echo '<hr>';
//Koosta kood, mis tervitab sind vastavalt ajale. N: 8:00+ “Tere hommikust!”, 13:00+ “Tere päevast!” ja 17:00+ “Tere õhtust!”
$kell = date('H');
if($kell >= 8 and $kell < 13){
    echo 'Tere hommikust!';
} else if($kell >= 13 and $kell < 17) {
    echo 'Tere päevast!';
} else if($kell >= 17 or $kell > 0) {
    echo 'Tere õhtust!';
}
?>