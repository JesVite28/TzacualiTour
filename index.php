<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="Css/sesion.css">
    <link rel="shortcut icon" href="Imagenes_index/logo.png">
    <title>Inicio de sesi&oacute;n - Tzacualitour</title>
</head>
<body>
    <div class="body-container">
         <section class="form-cont">
         
                <h2>Iniciar Sesión</h2>
                <form id="formulario" action="Php/login.php" method="post" class="form-sesion">
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <input type="submit" value="Iniciar Sesión" class="btn-submit">
                </form>
                <p><a href="Php/actualizar_pass.php">¿Olvidaste tu contraseña?</a></p>
                <p>¿Aún no tienes cuenta? <a href="Php/registrarse.php">Registrarse</a></p>
        </section>
    </div>
    <script src="JS/login.js"></script>
</body>
</html>
