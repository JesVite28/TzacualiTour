<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio de Turismo</title>
    <link rel="stylesheet" href="../Css/salud.css">
</head>
<body>
    <header>
        <h1>TZACUALI TOUR</h1>
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="#" id="social-services-btn">Servicios Sociales</a>
                    <ul id="social-services-submenu" style="display: none;">
                        <li><a href="hoteles.php">Hoteles</a></li>
                        <li><a href="salud.php">Salud</a></li>
                    </ul>
                </li>
                <li><a href="#" id="comercial-services-btn">Servicios Comerciales</a>
                <ul id="comercial-services-submenu" style="display: none;">
                        <li><a href="restaurantes.php">Restaurantes</a></li>
                        <li><a href="t_comerciales.php">Tiendas comerciales</a></li>
                        <li><a href="bancos.php">Bancos</a></li>
                    </ul>
            </li>
                <li><a href="#" id="loginBtn">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <section class="content">
        <h1>Hospitales</h1>
        <div class="hospital">
            <img src="../Imagenes/Hospitales/images.png" alt="Hospital General de Zacualtipán">
            <div class="hospital-info">
                <h2>Hospital IMSS de Zacualtipán</h2>
                <p>Ocampo y Moctezuma S/N, Col. Chililiapa, 43200 Zacualtipán, Hgo. • 774 742 0143</p>
                <button class="reservarBtn">Reservar Cita</button>
            </div>
        </div>
        <div class="hospital">
            <img src="../Imagenes/Hospitales/images.jpeg" alt="Centro de Salud Zacualtipán">
            <div class="hospital-info">
                <h2>Centro de Salud Zacualtipán</h2>
                <p>Centro, 43200 Zacualtipán, Hgo. • 774 742 0123</p>
                <button class="reservarBtn">Reservar Cita</button>
            </div>
        </div>
        <div class="hospital">
            <img src="../Imagenes/Hospitales/sierra.jpg" alt="Clínica IMSS Zacualtipán">
            <div class="hospital-info">
                <h2>Clínica Sierra Médica</h2>
                <p>43200, Centro, 43200 Zacualtipán, Hgo. • 774 742 0345</p>
                <button class="reservarBtn">Reservar Cita</button>
            </div>
        </div>
        <div class="hospital">
            <img src="../Imagenes/Hospitales/charbel.jpeg" alt="Hospital Rural Zacualtipán">
            <div class="hospital-info">
                <h2>Hospital Medica charbel</h2>
                <p>Texolo, 43203 Zacualtipán, Hgo. • 774 742 0567</p>
                <button class="reservarBtn">Reservar Cita</button>
            </div>
        </div>
        <div class="hospital">
            <img src="../Imagenes/Hospitales/" alt="Clínica del ISSSTE Zacualtipán">
            <div class="hospital-info">
                <h2>Clínica del ISSSTE Zacualtipán</h2>
                <p>Av. Revolución 123, Centro, 43200 Zacualtipán, Hgo. • 774 742 0789</p>
                <button class="reservarBtn">Reservar Cita</button>
            </div>
        </div>
        <div class="hospital">
            <img src="../Imagenes/Hospitales/sangabriel.jpg" alt="Hospital Materno Infantil Zacualtipán">
            <div class="hospital-info">
                <h2>Centro de Radiología San Gabriel</h2>
                <p>Calle Gral. Tapia 18, Chililiapa, 43200 Zacualtipán, Hgo. • 774 742 0912</p>
                <button class="reservarBtn">Reservar Cita</button>
            </div>
        </div>
        <div class="hospital">
            <img src="../Imagenes/Hospitales/farmamed.jpeg" alt="Hospital Integral de Zacualtipán">
            <div class="hospital-info">
                <h2>FarmaMed</h2>
                <p>Carr. a Tianguistengo 293, Los Pinos, 43203 Zacualtipán, Hgo. • 774 742 1034</p>
                <button class="reservarBtn">Reservar Cita</button>
            </div>
        </div>
    </section>
    <!-- Ventana de inicio de sesión -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Iniciar Sesión</h2>
            <form action="Php/login.php" method="post">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <button type="submit">Iniciar Sesión</button>
            </form>
        </div>
    </div>
    <!-- Ventana de reservar -->
    <div id="reservarModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Reservar Cita</h2>
            <form action="Php/reservar.php" method="post">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="date">Fecha:</label>
                <input type="date" id="date" name="date" required>
                <br>
                <button type="submit">Reservar</button>
            </form>
        </div>
    </div>
    <footer>
        <section class="datos">
            <div class="cont">
                <h3>Contáctanos</h3>
                <p>Por vía correo electrónico:</p>
                <div class="enlace"><a href="mailto:viteadrian79@gmail.com">Viteadrian79@gmail.com</a></div>
            </div>
            <div class="atencion">
                <h3>Atención a cliente</h3>
                <p>Al +52 1 7716896790</p>
                <p>o bien al correo:</p>
                <a href="mailto:viteadrian79@gmail.com">GuerreroGarage@gmail.com</a>
            </div>
            <div class="ayuda">
                <a href="#">Ayuda</a><br><br>
                <a href="#">Términos y condiciones</a>
            </div>
        </section>
    </footer>
    <script src="../Js/hospital.js"></script>
</body>
</html>
