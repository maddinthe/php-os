<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
echo"<pre>";
echo $_SERVER["HTTP_USER_AGENT"];
echo"<br>";
if($chrome = strpos($_SERVER["HTTP_USER_AGENT"],"Chrome")){
    echo"Chrome";
}elseif($firefox= strpos($_SERVER["HTTP_USER_AGENT"],"Firefox")){
    echo"Firefox";
}elseif($ie= strpos($_SERVER["HTTP_USER_AGENT"],"Trident")){
    echo"InternetExplorer";
}else echo"Unbekannter Browser";

echo"</pre>";



?>


</body>
</html>