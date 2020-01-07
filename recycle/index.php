<?php
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>06 - PHP - Vormid</title>
</head>
<body>
<menu>
    <a href="index.php">Avaleht</a>|
    <a href="portfoolio.php">Portfoolio</a>|
    <a href="kaart.php">Kaart</a>|
    <a href="kontakt.php">Kontakt</a>
</menu>

</body>
</html>
<?php
pageMenu($menu);
if($_SERVER['SCRIPT_NAME'] == $_SERVER['REQUEST_URI']){
    echo '<h2>Avaleht</h2>';
    echo 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
} else {
    pageContent($_GET['leht'], $menu);
}