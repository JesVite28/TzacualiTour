<?php

session_start();

if(!isset($_SESSION['email'])){
    echo '
    <script>
        alert("por favor debes iniciar sesion");
        window.location = "index.php"
    </script>
    ';
    session_destroy();
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio de Turismo</title>
    <link rel="stylesheet" href="Css/index.css">
</head>
<body>
    <header>
        <h1>TZACUALI TOUR</h1>
        <nav>
    <ul>
        <li><a href="">Inicio</a></li>
        <li><a href="#" id="social-services-btn">Servicios Sociales</a>
            <ul id="social-services-submenu" class="submenu">
                <li><a href="Php/hoteles.php">Hoteles</a></li>
                <li><a href="Php/salud.php">Salud</a></li>
            </ul>
        </li>
        <li><a href="#" id="comercial-services-btn">Servicios Comerciales</a>
            <ul id="comercial-services-submenu" class="submenu">
                <li><a href="Php/restaurantes.php">Restaurantes</a></li>
                <li><a href="Php/t_comerciales.php">Tiendas comerciales</a></li>
                <li><a href="Php/bancos.php">Bancos</a></li>
            </ul>
        </li>
        <li><a href="Php/almacenamiento/cerrarsesion.php" id="loginBtn">Cerrar sesi&oacute;n</a></li>
    </ul>
</nav>

    </header>
    <div class="container-slider">
        <div class="slider" id="slider">
            <div class="slider_sec"><img src="Imagenes/Index/Centro_de_Zacualtipán.jpg" class="slider_img" alt="Slider 1"></div>
            <div class="slider_sec"><img src="Imagenes/Index/Zacualtipan.jpg " class="slider_img" alt="Slider 2"></div>
            <div class="slider_sec"><img src="Imagenes/Index/Centro_zac.jpg" class="slider_img" alt="Slider 3"></div>
        </div>
        <div class="slider_btn slider__btn--left" id="btn-left">&#60;</div>
        <div class="slider_btn slider__btn--right" id="btn-right">&#62;</div>
    </div>

    <section class="content">
        <h2 class="tit-1">Zacualtipán de Ángeles, Hidalgo, México</h2>
        <p>El Municipio de Zacualtipán deriva su nombre de la raíz Tzacualtipán que etimológicamente significa, "lugar de escondites" o "lugar de montículos o pirámides" 
        existiendo varias traducciones que aseguran que su significado es: "donde se hacen paredes" o "donde se construye bien".</p>
        <p><img src="Imagenes/Index/icono_zacualtipan.png" alt="icono_zacualtipan"></p>
        <p>La interpretación del jeroglífico manifiesta que es ideográfico y esta formado por una pirámide de cinco escalones y una mano encima. 
            Zacualtipán se encuentra situado en una región en la que antiguamente habitaron grupos Toltecas y Chichimecas, figura en relaciones del tiempo de la conquista y antes de ella, demostrando lo anterior con sus construcciones religiosas que datan del siglo XVI.</p>
        <p> 

            <h2 class="tit-1">Conoce su historia</h2>
            
            En el siglo XVIII, fue el año de fundación de la población.
            El 26 de abril de año de 1861, se le otorgó la categoría de Municipio a Zacualtipán.
            El 8 de marzo del año de 1943, se le otorga el título de Ciudad a la cabecera municipal.
            
            <h2 class="tit-1">Que conocer</h2>
        </p>    
        </section>
        <section class="zac-cont">
            <div class="turismo">
                <div class="img-tur"><img src="Imagenes/Index/el_peñon.jpg" width="210" height="130" alt="Enchiladas"></div>
                <div class="name-tur">
                    <h3>El Peñ&oacute;n de Vasconcelos</h3>
                    <button class="ver-mas">Ver más</button>
                <div class="info-extra" style="display: none;">
                    <p>Ubicado en la Sierra Alta del estado de Hidalgo, se encuentra Zacualtipán, cuyo nombre significa, lugar sobre montículos de piedra. Y esto sale a relucir en el peñon de Vasconcelos, una cantera natural que se encuentra en las orillas de la ciudad. Un conjunto de peñas que sobresalen de la cañada, flanqueadas por un lado por el bosque y del otro por la ciudad, las rocas muestran los vestigios tallados por los primeros pobladores de la región, cuyo origen se desconoce.</p>
                </div>
                </div>
            </div>
            <div class="turismo">
                <div class="img-tur"><img src="Imagenes/Index/Casa_de_Piedra.jpg" width="210" height="130" alt="pozole"></div>
                <div class="name-tur">
                    <h3>Casita de piedra</h3>
                    <button class="ver-mas">Ver más</button>
                <div class="info-extra" style="display: none;">
                    <p>Según la tradición, fue construida hacia 1538 por el fraile Bernardo Quezada como penitencia para optar por una vida monástica. 
                        Se trata de dos habitaciones excavadas en la roca viva, que cuentan con muebles y un pequeño altar realizados en la propia roca. 
                        En la fachada de una de las grandes piedras se aprecia una figura esculpida que semeja a un soldado. 
                        Otra leyenda de extracción un tanto popular y contada de boca en boca, asegura que esta singular construcción fue realizada por un prófugo de la justicia que encontró allí la forma de ocultarse de las autoridades. 
                        La curiosa imagen labrada que semeja un soldado, probablemente fue producto de la imaginación del individuo, aunque hubo quienes aseguraban que allí vivió un soldado que había desertado del servicio. 
                        Lo importante de ello, es que a partir de ahí se fundó la ciudad de Zacualtipan.</p>
                </div>
                </div>
            </div>
            <div class="turismo">
                <div class="img-tur"><img src="Imagenes/Index/centro_cultural_zacualtipan.jpg" width="210" height="130" alt="Mole"></div>
                <div class="name-tur">
                    <h3>Museo Casa de cultura</h3>
                    <button class="ver-mas">Ver más</button>
                <div class="info-extra" style="display: none;">
                    <p>Espacio dedicado a la región de la Sierra Alta del Estado de Hidalgo, contiene una colección de piezas de arte popular, así como imágenes y otros objetos históricos distribuidos en 8 temáticas que albergan una colección formada gracias a la participación y donaciones de piezas propias de artesanos residentes de la región y poblados aledaños a la cabecera municipal. Este recinto cultural se encuentra vinculado con el Centro Cultural Regional Zacualtipán donde se brindan cursos y talleres de formación artística y musical.</p>
                </div>
                </div>
            </div>
            <div class="turismo">
                <div class="img-tur"><img src="Imagenes/Index/museo_felipe.jpeg" width="210" height="130" alt="Piña"></div>
                <div class="name-tur">
                    <h3>Museo Felipe &Aacute;ngeles</h3>
                    <button class="ver-mas">Ver más</button>
                <div class="info-extra" style="display: none;">
                    <p>Pretende reconstruir la experiencia de un hombre formado en tiempo de grandes movilizaciones sociales, modelado por un proceso revolucionario del que fue a la vez producto y actor. Resguarda el conocimiento y la historia de este personaje revolucionario vistos desde varios periodos: 1908-1911, cuando el Partido Antirreleccionista postula a Francisco I. Madero a la presidencia de México; 1912-1913, cuando Madero gana las elecciones extraordinarias en 1911; 1915-1916, la etapa más violenta del movimiento revolucionario.</p>
                </div>
                </div>
            </div>
            <div class="turismo">
                <div class="img-tur"><img src="Imagenes/Index/Parroquia_encarnacion.jpg" width="210" height="130" alt="PayZ"></div>
                <div class="name-tur">
                    <h3>Parroquia Señora de la Encarnación</h3>
                    <button class="ver-mas">Ver más</button>
                <div class="info-extra" style="display: none;">
                    <p>Es considerada uno de los principales atractivos turísticos de la región. Su arquitectura colonial y su fachada barroca son impresionantes. En su interior, se pueden apreciar hermosos retablos y pinturas religiosas. Además, la parroquia alberga una imagen de la Virgen de la Encarnación, patrona del municipio. Cada año, se celebran festividades en honor a la Virgen, atrayendo a numerosos fieles y visitantes. La fiesta se celebra el dia 25 de marzo.</p>
                </div>
                </div>
            </div>
        </section>

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
    <script src="Js/index.js"></script>
</body>
</html>

