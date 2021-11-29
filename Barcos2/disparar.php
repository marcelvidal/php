<?php require_once "requires/header.php";
require_once "requires/helpers.php";
require_once "requires/menu.php";




if (isset($_SESSION['logued'])):

    if (isset($_POST['files']) && (isset($_POST['columnes']) && (isset($_POST['barcos'])))) {
        $files = $_POST['files'];
        $columnes = $_POST['columnes'];
        $barcos = $_POST['barcos'];

        // CREAR MAPA
        $crear_mapa = crear_mapa($files, $columnes); // AQUI N LA RECONEIX PERO SI A HELPERS
        $mapa = afegir_barcos($files, $columnes, $crear_mapa, $barcos);
        $mapa_jugador = crear_mapa($files, $columnes); // MAPA JUGADOR PER A MOSTRAR PER PANTALLA A LA PRINCIPAL

        setcookie("mapa_jugador", json_encode($mapa_jugador));
        setcookie("mapa", json_encode($mapa));
        setcookie("files", json_encode($files));
        setcookie("columnes", json_encode($columnes));


    }


    if (isset($_POST['files_disparar']) && (isset($_POST['columnes_disparar']))) {

        $mapa_jugador = json_decode($_COOKIE['mapa_jugador']);
        $_SESSION['mapa'] = json_decode($_COOKIE['mapa']);
        $files_mapa = json_decode($_COOKIE['files']);
        $columnes_mapa = json_decode($_COOKIE['columnes']);
        $files_disparar = $_POST['files_disparar'];
        $columnes_disparar = $_POST['columnes_disparar'];





       // mostrar_mapa($mapa, $files_mapa, $columnes_mapa);
       // actualitzar_mapa($files, $columnes, $mapa, $mapa_jugador);
       // mostrar_mapa($mapa_jugador, $files_mapa, $columnes_mapa);


    }


    header("Location:jugador.php");


else:

    ?>
    <h1>Tens que registrarte!</h1>

<?php

endif;
require_once "requires/footer.php"; ?>

