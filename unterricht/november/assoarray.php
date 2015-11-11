<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$array = [
    "Alfred" =>[
        "Audi A4" => ["Schwarz", "180 PS", "2 Jahre"],
        "Prosche" => ["Blau", "240 PS", "1 Jahre"]
    ],
    "Ingrid" =>[
        "VW Käfer" => ["Gelb", "110 PS", "6 Jahre"]
    ],
    "Lisa" => [
        "VW Lupo" => ["Rot", "90 PS", "0 Jahre"]
    ]
];

$array["Alfred"]["Mercedes"]=["Silber","235PS","3 Jahre"];

//echo"<pre>";
//var_dump($array);
//echo "</pre>";
echo "<ul>";
foreach ($array as $name => $autos) {
    echo "<li> $name<ol>";
    foreach ($autos as $auto => $eigenschaften) {
        echo "<li>$auto<ul>";
        foreach ($eigenschaften as $eigenschaft)
            echo "<li>$eigenschaft</li>";
        echo "</ul></li>";
    }
    echo "</ol></li>";
}
echo "</ul>";




?>


</body>
</html>