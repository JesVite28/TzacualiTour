<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio de Turismo</title>
    <link rel="stylesheet" href="../Css/commercial.css">
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
        <h1>Tiendas Comerciales</h1>
        <div class="store">
            <img src="../Imagenes/Comerciales/store1.jpg" alt="Tiendas 3B">
            <div class="store-info">
                <h2>Tiendas 3B</h2>
                <p>Calle Morelos 22, Centro, 43200 Zacualtipán, Hgo. • 774 742 1010</p>
                <button class="reservarBtn">Más Información</button>
            </div>
        </div>
        <div class="store">
            <img src="../Imagenes/Comerciales/store2.jpg" alt="Super Che Zacualtipán">
            <div class="store-info">
                <h2>Super Che Zacualtipán</h2>
                <p>Av. Hidalgo 30, Centro, 43200 Zacualtipán, Hgo. • 774 742 2020</p>
                <button class="reservarBtn">Más Información</button>
            </div>
        </div>
        <div class="store">
            <img src="../Imagenes/Comerciales/store3.jpg" alt="Bodega Aurrera">
            <div class="store-info">
                <h2>Bodega Aurrera</h2>
                <p>Ignacio Allende 45, Centro, 43200 Zacualtipán, Hgo. • 774 742 3030</p>
                <button class="reservarBtn">Más Información</button>
            </div>
        </div>
        <div class="store">
            <img src="../Imagenes/Comerciales/store4.jpg" alt="Coppel Zacualtipán">
            <div class="store-info">
                <h2>Coppel Zacualtipán</h2>
                <p>Ocampo 18, Centro, 43200 Zacualtipán, Hgo. • 774 742 4040</p>
                <button class="reservarBtn">Más Información</button>
            </div>
        </div>
        <div class="store">
            <img src="../Imagenes/Comerciales/store5.jpg" alt="Electra Zacualtipán">
            <div class="store-info">
                <h2>Electra Zacualtipán</h2>
                <p>Benito Juárez 20, Centro, 43200 Zacualtipán, Hgo. • 774 742 5050</p>
                <button class="reservarBtn">Más Información</button>
            </div>
        </div>
        <div class="store">
            <img src="../Imagenes/Comerciales/store6.jpg" alt="Comercial Mexicana">
            <div class="store-info">
                <h2>Neto</h2>
                <p>16 de Enero 12, Centro, 43200 Zacualtipán, Hgo. • 774 742 6060</p>
                <button class="reservarBtn">Más Información</button>
            </div>
        </div>
        <div class="store">
            <img src="../Imagenes/Comerciales/store7.jpg" alt="Walmart Express">
            <div class="store-info">
                <h2>Oxxo Garita</h2>
                <p>Av. Revolución 32, Centro, 43200 Zacualtipán, Hgo. • 774 742 7070</p>
                <button class="reservarBtn">Más Información</button>
            </div>
        </div>
        <div class="store">
            <img src="../Imagenes/Comerciales/store8.jpg" alt="Farmacia Guadalajara">
            <div class="store-info">
                <h2>Bolmare</h2>
                <p>Calle Morelos 25, Centro, 43200 Zacualtipán, Hgo. • 774 742 8080</p>
                <button class="reservarBtn">Más Información</button>
            </div>
        </div>
        <div class="store">
            <img src="../Imagenes/Comerciales/store9.jpg" alt="Oxxo Zacualtipán">
            <div class="store-info">
                <h2>Oxxo Zacualtipán</h2>
                <p>Ignacio Zaragoza 14, Centro, 43200 Zacualtipán, Hgo. • 774 742 9090</p>
                <button class="reservarBtn">Más Información</button>
            </div>
        </div>
        <div class="store">
            <img src="../Imagenes/Comerciales/store10.jpg" alt="Soriana Zacualtipán">
            <div class="store-info">
                <h2>Tienda Asia</h2>
                <p>Ocampo 50, Centro, 43200 Zacualtipán, Hgo. • 774 742 1010</p>
                <button class="reservarBtn">Más Información</button>
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
            <h2>Más Información</h2>
            <form action="Php/moreinfo.php" method="post">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="date">Fecha:</label>
                <input type="date" id="date" name="date" required>
                <br>
                <button type="submit">Solicitar Información</button>
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
    <script src="../Js/commercial.js"></script>
</body>
</html>
