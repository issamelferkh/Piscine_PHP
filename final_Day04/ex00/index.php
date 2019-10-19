<?php
    session_start();
    if ($_GET['submit'] == 'OK'){
        $_SESSION["login"] = $_GET['login'];
        $_SESSION["passwd"] = $_GET['passwd'];
    }
?>
<html><body>
<form action="index.php" name="index.php" method="GET">
    Identifiant: <input type="text" name="login" value="<?= $_SESSION["login"]; ?>" />
    <br />
    Mot de passe: <input type="password" name="passwd" value="<?= $_SESSION["passwd"]; ?>" />
    <input type="submit" name="submit" value="OK">
</form>
</body></html>
<!-- tous les tags du formulaire devront êtres chacun sur une et une seule ligne (voir
l’exemple) -->

<!-- les champs déjà renseignés précédemment devront être pré-remplis. -->