<?php
$pages=[
    'home'=>'Allgemeines',
    'lists'=>'Listen',
    'tables'=>'Tabellen',
    'formulare'=>'Formulare',
    'thesaurus'=>'Thesaurus',
    'fakultaet'=>'Fakultät',
    'gallery'=>'Gallerie',
    'karte'=>'Pizza-Karte'
];
if (isset($_GET['page'])&&isset($pages[$_GET['page']])) {

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
<div id="all">
<?php
require 'head.php';
echo "<div id='main'>";
require 'navigation.php';
require 'content.php';
echo "</div>";
require 'foot.php';
?></div>
</body>
</html>