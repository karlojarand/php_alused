<?php

// lisame andmebaasitöötlus funktisoonid
require_once 'db_fnc.php';

//lisame kasutusele andmebaasi serveri konfiguratsiooni
require_once 'config.php';

//ühendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);

//echo '<pre>';
//print_r($ikt);

//tabeli ümbernimetamine

//$sql = 'RENAME TABLE `ojarandk_db`.`TABLE 1` TO `ojarandk_db`.`koolid2015`';
//
//$result = query($sql, $ikt);


$sql ='SELECT Kool, Kokku FROM koolid2015';
$result = getData($sql, $ikt);
echo '<pre>';
print_r($result);
