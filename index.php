<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercici 3</title>
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
        <!--ESTILOS DE FUENTES-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Overlock&display=swap" rel="stylesheet">
        <!--ESTILOS CSS-->
        <link rel="stylesheet" href="./estilos/estilos.css">
</head>
<body>
    <!--BOTÓN PARA EL MENÚ RESPONSIVE-->
    <a class="boton-menu" href="#"><i class="fas fa-bars"></i> </a>
    <!--INICIO DE LOS CONTENIDOS-->
    <div class="contenedor">
        
         <!--CABECERA DE LA PÁGINA/DIRECCIONA AL INCLUDE -->
         <?php include("./includes/header.php") ?>

        <!--NAVEGADOR-->
        <nav class="navegador">
            <ul class="navegador-barra">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Contenidos</a></li>
                <li><a href="#">Recomendaciones</a></li>
                <li><a href="#">Interés</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
        <!--NOTICIAS DESTACADAS-->
        <article class="contenido">
            <aside class="lateral">
                
                <section class="tarjeta-lateral">
                    <img src="./img/imagen5.jpg" alt="gato">
                    <h2>Título</h2>
                    <a href="#" class= "boton">Saber más<i class="fas fa-angle-double-right"></i></a>
                </section>
                <section class="tarjeta-lateral">
                    <img src="./img/imagen2.jpg" alt="gato">
                    <h2>Título</h2>
                    <a href="#" class= "boton">Saber más<i class="fas fa-angle-double-right"></i></a>
                </section>
                <section class="tarjeta-lateral">
                    <img src="./img/imagen3.jpg" alt="gato">
                    <h2>Título</h2>
                    <a href="#" class= "boton">Saber más<i class="fas fa-angle-double-right"></i></a>
                </section>
            </aside>
            <!--CONTENIDO PRINCIPAL-->
            <main class="contenido-principal">
                <article class="noticia">
                    <img src="./img/imagen4.jpg" alt="gato">
                    <section>
                        <h3>Titulo de la peli</h3>
                        <div>Un gato llamado «Tido» vivía en un cesto. Sucedió que un día el gato Tido se murió.
                            ¿Cómo se llamó la película?
                            «El Cesto Sin Tido»</div>
                        <a href="#">Saber más<i class="fas fa-angle-double-right"></i></a>
                    </section>    
                </article>
                <article class="noticia">
                    <img src="./img/imagen1.jpg" alt="gato">
                    <section>
                        <h3>Cómo hacen los gatos?</h3>
                        <div>-¡Mami! ¿Los pollos maúllan?
                            -No hijo, los pollos no maúllan.
                            -Entonces,  ¡el gato esta en el horno!</div>
                        <a href="#">Saber más<i class="fas fa-angle-double-right"></i></a>
                    </section>    
                </article>
                <article class="noticia">
                    <img src="./img/imagen6.jpg" alt="gato">
                    <section>
                        <h3>En que se parecen...</h3>
                        <div>¿En qué se parecen los borrachos y los gatos? 
                            En que nadie sabe como, ¡pero siempre regresan a casa!</div>
                        <a href="#">Saber más<i class="fas fa-angle-double-right"></i></a>
                    </section>    
                </article>
            </main>
        </article>    

        <!--PIE DE PÁGINA/DIRECCIONA AL INCLUDES -->
        <?php include("./includes/footer.php") ?>
       
    </div>
     <!--scripts para el botón de navegación-->
    <script src="./scripts/main.js"></script>
</body>
</html>