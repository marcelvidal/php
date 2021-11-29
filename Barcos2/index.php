
<?php
require_once "requires/header.php";


?>


<?php if (isset($_SESSION['logued'])): ?>



    <h1><?php echo "Benvigut Mr.".$_SESSION['logued']; ?></h1>
<form action="disparar.php" method="POST">
    <input type="text" name="files">
    <label for="files">Introdueix numero de files</label>
    <input type="text" name="columnes">
    <label for="files">Introdueix numero de columnes</label>
    <input type="text" name="barcos">
    <label for="barcos">Introdueix numero de barcos PARTIDA</label>
    <input type="submit" value="Enviar">
</form>






<?php else: ?>
    <form action="login/register.php" method="POST">
        <h1>Register</h1>
        <input type="text" name="nom" placeholder="Escriu el teu nom">
        <input type="text" name="pass" placeholder="Escriu la password">
        <input type="submit" value="Enviar">
    </form>

    <form action="login/login.php" method="POST">
        <h1>Login</h1>
        <input type="text" name="nom" placeholder="Escriu el nom">
        <input type="text" name="pass" placeholder="Escriu la password">
        <input type="submit" value="Enviar">
    </form>


<?php endif; ?>