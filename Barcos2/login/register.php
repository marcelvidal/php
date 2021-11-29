<?php
if (!isset($_SESSION)){
    session_start();
}

if (isset($_POST['nom']) && isset($_POST['pass'])) {

    $usuaris = array(
        $nom = $_POST['nom'] ?? false, // SI EL QUE LI ARRIBA PER POST ES EL NOM SI NO ES FALSE
        $pass = $_POST['pass'] ?? false
    );

    setcookie("usuaris",json_encode($usuaris));

}

header("Location: ../index.php");
?>