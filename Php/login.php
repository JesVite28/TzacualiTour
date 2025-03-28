<?php
session_start();
include ('conexion/conexion.php');

// Obtener datos 
$email = $_POST["email"];
$contrasena = $_POST["password"];

// Verificar si el correo existe y la contraseña coincide
$sql = "SELECT * FROM usuarios WHERE Correo = '$email' AND Password1 = '$contrasena'";
$verificar = mysqli_query($conexion, $sql);

if (mysqli_num_rows($verificar) > 0) {
    $_SESSION['email']=$email;
    header("location: ../inicio.php");
    exit;
} else {
    echo '
    <script>
    alert("Email o contraseña incorrectos.");
    window.location="../index.php";
    </script>
    ';
}

// Cerrar la conexión
mysqli_close($conexion);
?>

