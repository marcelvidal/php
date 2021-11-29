<?php require_once "requires/header.php";
require_once "requires/menu.php";
if (isset($_SESSION['logued'])):

    echo "hola";
    ?>


<?php


else:

    ?>
    <h1>Tens que registrarte!</h1>

<?php

endif;
require_once "requires/footer.php"; ?>

