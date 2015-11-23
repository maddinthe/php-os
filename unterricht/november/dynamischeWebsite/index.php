<?php
$pages=[
    'home'=>'Allgemeines',
    'lists'=>'Listen',
    'tables'=>'Tabellen'
];
if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
}
else {
    $currentPage = 'home';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Seite</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
require 'head.php';
require 'navigation.php';
require 'content.php';
require 'foot.php';
?>
</body>
</html>