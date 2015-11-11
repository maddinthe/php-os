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
if($chrome = strpos($_SERVER["HTTP_USER_AGENT"],"Chrome")!=0){
    echo"Chrome";
}elseif($firefox= strpos($_SERVER["HTTP_USER_AGENT"],"Firefox")!=0){
    echo"Firefox";
}elseif($ie= strpos($_SERVER["HTTP_USER_AGENT"],"Trident")!=0){
    echo"InternetExplorer";
}else echo"Unbekannter Browser";

echo"</pre>";



?>


</body>
</html>