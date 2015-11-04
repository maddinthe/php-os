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
foreach ($array as $key => $value) {
    echo "<li> $key";
    echo "<ol>";
    foreach ($value as $key => $value) {
        echo "<li>$key<ul>";
        foreach ($value as $value)
            echo "<li>$value</li>";
        echo "</ul></li>";
    }
    echo "</ol></li>";
}
echo "</ul>";


?>


</body>
</html>