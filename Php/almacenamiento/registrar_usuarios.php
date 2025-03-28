<?php
include ('../conexion/conexion.php');

// Obtener datos 
$nombre = $_POST['nombre'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$email = $_POST["email"];
$contrasena1 = $_POST["password1"];
$contrasena2 = $_POST["password2"];
//Comprobar correo

// Insertar datos
$sql = "INSERT INTO usuarios (Nombre, Apellidos, Telefono, Correo, Password1, Password2 )
VALUES ('$nombre', '$apellidos', '$telefono', '$email','$contrasena1', '$contrasena2')";
//correo no repetido
$sql2=" SELECT * FROM usuarios WHERE Correo = '$email'";
$verificar=mysqli_query($conexion,$sql2);
if(mysqli_num_rows($verificar) > 0){
    echo '
    <script>
    alert("Ingresa otro correo");
    window.location="../registro.php"
    </script>
    ';
    exit();
}
//alerta de registro
$ejecutar=mysqli_query($conexion,$sql);
if($ejecutar){
    echo '
    <script>
    alert("Usuarios almacenados exitosamente");
    window.location="../../index.php"
    </script>
    ';
}else{
    echo'
    <script>
    alert("Se perdio la conexion intentalo de nuevo");
    window.location="../registro.php"
    </script>
    ';
}
// Cerrar conexión
mysqli_close($conexion);
?>