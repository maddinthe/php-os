<?php
/**
 * Created by IntelliJ IDEA.
 * User: marti
 * Date: 02.03.2016
 * Time: 16:22
 */
if (isset($_GET["pos"])){
    $pos=$_GET["pos"];
    shell_exec("echo 0=$pos >/dev/servoblaster");
}
?>