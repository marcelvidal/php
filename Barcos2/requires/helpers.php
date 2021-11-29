<?php
$f = 0;
$c = 0;

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['error'])) {
    var_dump($_SESSION['error']);
}

// FUNCIONS MAPA

function actualitzar_mapa($files, $columnes, $mapa, $mapa_jugador)
{
    for ($i = 0; $i < $files; $i++) {
        for ($j = 0; $j < $columnes; $j++) {
            if ($mapa[$files][$columnes] == 1) {
                $mapa_jugador[$files][$columnes] = 1;
            } else if ($mapa[$files][$columnes] == 0) {
                $mapa_jugador = 2;
            }
        }
    }

    return $mapa_jugador;
}


function mostrar_mapa($tablero, $fila, $columna)
{
    $contador = 0;

    echo "<table class='table map-table'>";

    echo "<tr>";

    echo "<td class='table-guide'></td>";

    for ($m = 0; $m < $fila; $m++) {

        echo "<td class='table-guide'>" . $m . "</td>";

    }

    echo "</tr>";

    for ($a = 0; $a < $fila; $a++) {

        echo '<tr>';

        for ($k = 0; $k < $columna; $k++) {

            if ($k == 0) {

                echo "<td class='table-guide'>" . $contador . "</td>";

                $contador++;
            }

            echo '<td>' . $tablero[$a][$k] . '</td>';

        }

        echo '</tr>';
    }

    echo '</table>';

}

function afegir_barcos($files, $columnes, $mapa, $barcos)
{

    for ($i = 0; $i < $barcos; $i++) {
        $P0 = rand(0, $files - 1);
        $P1 = rand(0, $columnes - 1);

        if ($mapa[$P0][$P1] == 1) {
            $i - 1;
        }
        $mapa[$P0][$P1] = 1;   // AFEGIR BARCOS AL TABLERO (1)
    }

    return $mapa;
}

function crear_mapa($files, $columnes)
{
    for ($i = 0; $i < $files; $i++) {
        for ($j = 0; $j < $columnes; $j++) {
            $mapa[$i][$j] = 0;
        }
    }
    return $mapa;
}

?>