<?php

$massiivid = array('matemaatika', 'kehaline', 'kirjandus', 'kunst', 'geograafia');

foreach ($massiivid as $ained){
    echo "$ained<br>";
}

$nimed = array('Martin','Hardi','Juhan','Tiina','Sirje','Kaie');
$pallivisked = array(33, 32, 27, 11, 15, 28);

echo '<h4>pallivise</h4>';
echo 'Osalejate arv: '.count($nimed).'<br>';
echo 'Keskmine tulemus: '.array_sum($pallivisked) / count($pallivisked).'<br>';
echo 'Parim tulemus: '.max($pallivisked).'<br>';
echo 'Parima tulemusega õpilane: '.$nimed[array_keys($pallivisked, max($pallivisked))[0]];
echo '<hr>';
?>