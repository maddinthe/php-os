<?php
$wort = "";
$user="";
$pass="";
if (isset($_POST["syno"]))$wort = $_POST["syno"];
if (isset($_POST["user"]))$user = $_POST["user"];
if (isset($_POST["pass"]))$pass = $_POST["pass"];






?>
<form action="" method="post">
    <input type="text" value="<?=$wort?>" placeholder="Synonym" name="syno"/><br/>
    <input type="text" value="<?=$user?>" placeholder="Proxy-User" name="user"/><br/>
    <input type="password" value="<?=$pass?>" placeholder="Proxy-PW" name="pass"/><br/>
    <button type="submit">Absenden</button>
    <input type="reset" value="Reset"/>


</form>

<?php

if (isset($_POST["syno"])&&isset($_POST["user"])&&isset($_POST["pass"])) {
$wort = $_POST["syno"];
$user=$_POST["user"];
$pass=$_POST["pass"];
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

echo "<ul><h1>$wort</h1>";
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