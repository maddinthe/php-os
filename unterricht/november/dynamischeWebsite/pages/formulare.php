<form action="" method="post">
    <fieldset style="max-width: 200px">
    <legend>Login</legend>
    <input type="text" placeholder="Name" name="login"/><br/>
    <input type="password" placeholder="Password" name="password"/><br/>
    <button type="submit">Anmelden</button>
    <!--    <input type="hidden" name="page" value="formulare"/>-->
    <!--    <input type="submit" value="Anmelden"/>-->


    <input type="reset" value="Reset"/>

    </fieldset>
</form>

<?php

if (isset($_POST["login"]) && isset($_POST["password"]))
    echo $_POST["login"] . ': ' . $_POST["password"];


?>