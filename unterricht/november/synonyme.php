<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
if (!array_key_exists("phrase", $_GET)||!array_key_exists("user",$_GET)||!array_key_exists("pass",$_GET)) {
    echo "bitte mit <b>./synonyme.php?phrase=WORT&user=PROXYNUTZER&pass=PROXYPW</b> aufrufen";

} else {

    $wort = $_GET["phrase"];
    $user=$_GET["user"];
    $pass=$_GET["pass"];
    $url = "http://www.openthesaurus.de/synonyme/search?q=$wort&format=application/json"; #hier die URL angeben
    $auth = base64_encode("$user:$pass"); #Windows-Kennung
    $proxy_resource = array(
        'http' => array(
            'proxy' => 'tcp://proxy:8080',
            'request_fulluri' => true,
            'header' => "Proxy-Authorization: Basic $auth",
        ),
    );
    $stream_content = stream_context_create($proxy_resource);
    $json = file_get_contents($url, false, $stream_content);
    $content = json_decode($json, true); #true nicht vergessen

    echo "<ul><p>$wort</p>";
    foreach ($content["synsets"] as $key => $value) {
        echo "<li><p>";
        $i = 1;
        $max = sizeof($value["terms"]);
        foreach ($value["terms"] as $cat => $term) {
            echo $term["term"];
            if ($i++ < $max) {
                echo ", ";
            }
        }
        echo "</p></li>";
    }
    echo "</ul>";
}
?>

</body>
</html>