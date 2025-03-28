<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio de Turismo</title>
    <link rel="stylesheet" href="../Css/servicios_s.css">
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
                        <li><a href="Php/restaurantes.php">Restaurantes</a></li>
                        <li><a href="Php/t_comerciales.php">Tiendas comerciales</a></li>
                        <li><a href="Php/bancos.php">Bancos</a></li>
                    </ul>
            </li>
                <li><a href="#" id="loginBtn">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <section class="content">
        <h1>Hoteles</h1>
        <div class="hotel">
            <img src="../Imagenes/Hoteles/Paraiso_real.jpg" alt="Hotel Paraíso Real">
            <div class="hotel-info">
                <h2>Hotel Paraíso Real</h2>
                <p>IGNACIO ALLENDE SIN NUMERO, 10 de Mayo, 43200 Zacualtipán, Hgo.•774 742 1578</p>
                <button class="reservarBtn">Reservar</button>
            </div>
        </div>
        <div class="hotel">
            <img src="../Imagenes/Hoteles/Jadi.jpg" alt="Hotel Zacualtipán">
            <div class="hotel-info">
                <h2>Hotel Jadi</h2>
                <p>Tepeyac, 43203 Zacualtipán, Hgo., 43200 Zacualtipán, Hgo.•774 742 1234</p>
                <button class="reservarBtn">Reservar</button>
            </div>
        </div>
        <div class="hotel">
            <img src="../Imagenes/Hoteles/pacheco.jpg" alt="Hotel Sierra Alta">
            <div class="hotel-info">
                <h2>Hotel Pacheco Inn</h2>
                <p>Vargas Lugo S/N, Centro, 43200 Zacualtipán, Hgo. •774 742 5678</p>
                <button class="reservarBtn">Reservar</button>
            </div>
        </div>
        <div class="hotel">
            <img src="../Imagenes/Hoteles/tepeyac.jpg alt="Hotel Sierra Alta">
            <div class="hotel-info">
                <h2>Hotel Tepeyac</h2>
                <p>Tepeyac, 43203 Zacualtipán, Hgo.•774 742 5678</p>
                <button class="reservarBtn">Reservar</button>
            </div>
        </div>
        <div class="hotel">
            <img src="../Imagenes/Hoteles/augusto.jpg" alt="Hotel El Refugio">
            <div class="hotel-info">
                <h2>Hotel Augusto</h2>
                <p>Morelos 1, Centro, 43200 Zacualtipán, Hgo.•774 742 2345</p>
                <button class="reservarBtn">Reservar</button>
            </div>
        </div>
        <div class="hotel">
            <img src="../Imagenes/Hoteles/jazza.jpg" alt="Hotel Las Flores">
            <div class="hotel-info">
                <h2>Hotel Jazza</h2>
                <p>16 de Enero, Arados, 43205 Zacualtipán, Hgo.•774 742 3456</p>
                <button class="reservarBtn">Reservar</button>
            </div>
        </div>
        <div class="hotel">
            <img src="../Imagenes/Hoteles/images.jpeg" height="" alt="Hotel La Cumbre">
            <div class="hotel-info">
                <h2>Hotel Imperial</h2>
                <p>Amp Sta Cecilia, 43203 Zacualtipán, Hgo.•774 742 4567</p>
                <button class="reservarBtn">Reservar</button>
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
            <h2>Reservar</h2>
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
    <script src="../Js/hotel.js"></script>
</body>
</html>