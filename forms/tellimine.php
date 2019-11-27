<?php
?>
<h1>Tellimine</h1>
<?php
    // get - $_GET
        // post - $_POST
           // var_dump($_GET);
echo '<pre>';
print_r($_GET);
echo '</pre>';

$toode1 = $_GET['t1'];
$toode2 = $_GET['t2'];
$toode3 = $_GET['t3'];

echo 'Toode1:' .toode1. 'tk<br>';
echo 'Toode1:' .toode2. 'tk<br>';
echo 'Toode1:' .toode3. 'tk<br>';
