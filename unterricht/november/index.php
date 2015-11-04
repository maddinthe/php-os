<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
$header = "Kapitel 1";
echo "<h1>$header</h1>";
for ($h = 0; $h < 14; $h++) {
    if ($h % 2 == 0)
        echo "<div style='text-align: left;vertical-align: top;display: inline-block'>";
    else echo "<div style='text-align: right;vertical-align: top;display: inline-block'>";

    for ($i = 1; $i <= 16; $i++) {
        if ($i % 2 == 0) echo "<div style='color: red'>";
        else echo "<div style='color: black'>";

        for ($j = $i; $j > 0; $j--) echo "o";
        echo "&nbsp;";
        echo "</div>";

    }
    for ($i = 15; $i >= 1; $i--) {
        if ($i % 2 == 0) echo "<div style='color: red'>";
        else echo "<div style='color: black'>";

        for ($j = $i; $j > 0; $j--) echo "o";
        echo "&nbsp;";
        echo "</div>";
    }
    echo "</div>";
}

?>

</body>
</html>