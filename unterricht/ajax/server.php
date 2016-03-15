<?php
/**
 * Created by IntelliJ IDEA.
 * User: mtheilen
 * Date: 02.03.2016
 * Time: 08:40
 */
//if(isset($_GET["name"])){
//    echo $_GET['name'];
//}else
//echo "Test";

$info1=[
    "film"=>"deadpool",
    "fsk"=>16,
    "Länge"=>100
];
$info2=[
    "film"=>"wurst",
    "fsk"=>16,
    "Länge"=>100
];


echo json_encode([$info1,$info2])


?>