<?php
session_start();
?>


<form action="" method="post">
    <input type="text" name="dazu"/>
    <input type="checkbox" value="löschen" name="aLoeschen"/>löschen
    <button type="submit">Absenden</button>
</form>

<?php
if(isset($_POST["aLoeschen"]))
    session_destroy();

if (isset($_POST["dazu"]))
$_SESSION["ausg"][]=$_POST["dazu"];

echo'<pre>';
var_dump($_SESSION["ausg"]);
echo'</pre>';




?>


