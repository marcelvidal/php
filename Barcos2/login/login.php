<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['nom']) && isset($_POST['pass'])) {
    if (isset($_COOKIE['usuaris'])) {
        $errores = array();

        $usuaris = json_decode($_COOKIE['usuaris']); // GUARDAR COOKIE A ARRAY
        if ($usuaris[0] == $_POST['nom'] && $usuaris[1] == $_POST['pass']) {  // SI LA POSICIO 0 ES IGUAL AL NOM I LA 1 IGUAL A LA PASS POTS PASSAR
            $_SESSION['logued'] = $_POST['nom'];// SESSIO INICIADA GUARDAR NOM A LA SESSIO
            header("Location: ../index.php");

        } else {
            $_SESSION['error']['nombre'] = "nombre o contraseña incorrectos";// GUARDAR EN UNA SESSIO DE ERRORS TOTS ELS ERRORS
        }

    } else {
        echo "No has creat el usuari";
    }
}