<?php
$zahl="";
if (isset($_GET['zahl'])) {
    $zahl = $_GET['zahl'];
}
?>
<form action="" method="get">
    <input type="text" value="<?=$zahl?>" placeholder="Zahl" name="zahl"/>
    <button type="submit">Berechnen</button>
    <input type="hidden" name="page" value="fakultaet">
    <button type="reset">Reset</button><br/>
    <br/>

</form>

<?php
if (isset($_GET['zahl'])){
    if (is_numeric($zahl))echo 'Die Fakultät von '.$zahl.' ist '.fak(round($zahl));
    else echo $zahl.' ist keine zahl';
}
function fak($fak){return ($fak<=1)?1:fak($fak-1)*$fak;}
?>