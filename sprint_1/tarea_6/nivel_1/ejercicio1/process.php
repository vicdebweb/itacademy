<?php
session_start();

$username = $_POST['username'];
$email = $_POST['email'];

// Guardar en sesión
$_SESSION['username'] = $username;
$_SESSION['email'] = $email;

echo "Nombre: $username<br>";
echo "Email: $email<br>";

echo "<br>Datos guardados en sesión.";
?>

<br><br>
<a href="index.php">Volver</a>