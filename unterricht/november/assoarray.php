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
        "Audi A4" => ["Schwarz", "180 PS", "2 Jahre"]
    ],
    "Ingrid" =>[
        "VW Käfer" => ["Gelb", "110 PS", "6 Jahre"]
    ],
    "Lisa" => [
        "VW Lupo" => ["Rot", "90 PS", "0 Jahre"]
    ]
];
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