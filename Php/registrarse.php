<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../Css/registrar.css">
    <link rel="shortcut icon" href="../Imagenes_index/logo.png">
    <title>Registro - Tzacualitour</title>
</head>
<body>
    <div class="container">
<img src="../Imagenes_index/logo.png" width="300" height="300" alt="Logo Guerrero" class="logo">
    <section class="reser-cont">
        <div class="titulo-registro"><h1>Registrarme</h1></div>
            <form id="registro-form" action="almacenamiento/registrar_usuarios.php" method="POST" class="reserva-form">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="comentarios">Apellidos:</label>
                    <input type="text" id="apellidos" name="apellidos" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" id="telefono" name="telefono" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="fecha">Contraseña:</label>
                    <input type="password" id="password1" name="password1" required>
                </div>
                <div class="form-group">
                    <label for="hora">Confirma tu contraseña:</label>
                    <input type="password" id="password2" name="password2" required>
                </div>
                <div class="form-group">
                    <button type="submit" id="btn-registrar" class="btn-registrar">Registrarme</button>
                </div>
            </form>
            <p>¿Ya tienes cuenta? <a href="../index.php">Iniciar sesion</a></p>
        </section>
        </div>
    <script src="../JS/registro.js"></script>
</body>
</html>
