<?php

require_once "requires/header.php";
require_once "requires/helpers.php";
require_once "requires/menu.php";

$mapa = $_SESSION['mapa'];
$files = $_COOKIE['files'];
$columnes = $_COOKIE['columnes'];

mostrar_mapa($mapa, $files, $columnes);
?>

<form action="disparar.php" method="POST">
    <input type="text" name="files_disparar" placeholder="fila">
    <label for="files_disparar">Introdueix num fila on vols atacar</label>

    <input type="text" name="columnes_disparar" placeholder="columna">
    <label for="columnes_disparar">Introdueix num de columna on vols atacar</label>

    <input type="submit" value="ATACAR">
</form>


<?php


?>


<?php
require_once "requires/footer.php"

?>
