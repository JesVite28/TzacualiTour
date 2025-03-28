<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio de Turismo</title>
    <link rel="stylesheet" href="../Css/restaurant.css">
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
                        <li><a href="seguridad.php">Escuelas</a></li>
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
        <h1>Restaurantes</h1>
        <div class="restaurant">
            <img src="../Imagenes/Restaurantes/restaurant1.jpg" alt="El Rincón Zacualtipense">
            <div class="restaurant-info">
                <h2>La Barracuda</h2>
                <p>Calle Morelos 5, Centro, 43200 Zacualtipán, Hgo. • 774 742 0143</p>
            </div>
        </div>
        <div class="restaurant">
            <img src="../Imagenes/Restaurantes/restaurant2.jpg" alt="La Casa del Café">
            <div class="restaurant-info">
                <h2>La Casa del Café</h2>
                <p>Av. Hidalgo 20, Centro, 43200 Zacualtipán, Hgo. • 774 742 0123</p>
                <button class="reservarBtn">Reservar Mesa</button>
            </div>
        </div>
        <div class="restaurant">
            <img src="../Imagenes/Restaurantes/restaurant3.jpg" alt="El Buen Sazón">
            <div class="restaurant-info">
                <h2>El Buen Sazón</h2>
                <p>Ignacio Allende 15, Centro, 43200 Zacualtipán, Hgo. • 774 742 0345</p>
                <button class="reservarBtn">Reservar Mesa</button>
            </div>
        </div>
        <div class="restaurant">
            <img src="../Imagenes/Restaurantes/restaurant4.jpg" alt="Restaurante Las Delicias">
            <div class="restaurant-info">
                <h2>Restaurante Las Delicias</h2>
                <p>Ocampo 10, Centro, 43200 Zacualtipán, Hgo. • 774 742 0567</p>
                <button class="reservarBtn">Reservar Mesa</button>
            </div>
        </div>
        <div class="restaurant">
            <img src="../Imagenes/Restaurantes/restaurant5.jpg" alt="Cocina Tradicional">
            <div class="restaurant-info">
                <h2>Cocina Tradicional</h2>
                <p>Benito Juárez 18, Centro, 43200 Zacualtipán, Hgo. • 774 742 0789</p>
                <button class="reservarBtn">Reservar Mesa</button>
            </div>
        </div>
        <div class="restaurant">
            <img src="../Imagenes/Restaurantes/restaurant6.jpg" alt="Restaurante El Campesino">
            <div class="restaurant-info">
                <h2>Restaurante El Campesino</h2>
                <p>16 de Enero 22, Centro, 43200 Zacualtipán, Hgo. • 774 742 0912</p>
                <button class="reservarBtn">Reservar Mesa</button>
            </div>
        </div>
        <div class="restaurant">
            <img src="../Imagenes/Restaurantes/restaurant7.jpg" alt="Los Portales">
            <div class="restaurant-info">
                <h2>Los Portales</h2>
                <p>Av. Revolución 30, Centro, 43200 Zacualtipán, Hgo. • 774 742 1034</p>
                <button class="reservarBtn">Reservar Mesa</button>
            </div>
        </div>
        <div class="restaurant">
            <img src="../Imagenes/Restaurantes/restaurant8.jpg" alt="El Fogón">
            <div class="restaurant-info">
                <h2>El Fogón</h2>
                <p>Calle Morelos 25, Centro, 43200 Zacualtipán, Hgo. • 774 742 1134</p>
                <button class="reservarBtn">Reservar Mesa</button>
            </div>
        </div>
        <div class="restaurant">
            <img src="../Imagenes/Restaurantes/restaurant9.jpg" alt="Restaurante El Edén">
            <div class="restaurant-info">
                <h2>Restaurante El Edén</h2>
                <p>Ignacio Zaragoza 12, Centro, 43200 Zacualtipán, Hgo. • 774 742 1234</p>
                <button class="reservarBtn">Reservar Mesa</button>
            </div>
        </div>
        <div class="restaurant">
            <img src="../Imagenes/Restaurantes/restaurant10.jpg" alt="El Patio">
            <div class="restaurant-info">
                <h2>El Patio</h2>
                <p>Ocampo 45, Centro, 43200 Zacualtipán, Hgo. • 774 742 1334</p>
                <button class="reservarBtn">Reservar Mesa</button>
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
            <h2>Reservar Mesa</h2>
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
    <script src="../Js/restaurant.js"></script>
</body>
</html>
