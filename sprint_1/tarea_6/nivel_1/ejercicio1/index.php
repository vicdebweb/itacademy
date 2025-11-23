<?php
session_start();
?>
<form action="process.php" method="post">
    <label>Nombre:</label>
    <input type="text" name="username">

    <br><br>

    <label>Email:</label>
    <input type="text" name="email">

    <br><br>

    <button type="submit">Enviar</button>
</form>