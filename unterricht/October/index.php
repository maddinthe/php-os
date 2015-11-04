<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
    echo"<title>PHP</title>";
    ?>
</head>
<body>
<?php
$titel = "Schwein";
$preis = '€ 9.50';
echo "Das Kilo $titel kostet $preis.<br>";
echo 'Das Kilo $titel kostet '.$preis."<br>";
echo 'Das Kilo $titel kostet $preis.<br>';
echo "'' und \$ <br>";
$tierliste = array("tier"=>"Pferd");
echo "Das Kilo {$tierliste['tier']} kostet $preis.<br>";
?>
</body>
</html>