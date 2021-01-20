<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercici 3</title>
    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <!--Tipo de fuente-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Petrona:wght@300;500&display=swap" rel="stylesheet">
    <!--hoja de estilos-->
    <link rel="stylesheet" href="estilos/estilos.css">
</head>

<body>
    <!--BOTÓN PARA EL MENÚ RESPONSIVE-->
    <a class="boton-menu" href="#"><i class="fas fa-bars"></i> </a>
    
    <div class="container">
        <!--CABECERA DE LA PÁGINA/DIRECCIONA AL INCLUDE-->
       <?php include("./includes/header.php") ?>
        <!--BARRA DE NAVEGACIÓN-->

        <nav class="navegador">
            <ul class= "nav-menu">
                <li>
                    <a href="#">Contenido 1</a>
                </li>
                <li>
                    <a href="#">Contenido 2</a>
                </li>
                <li>
                    <a href="#">Contenido 3</a>
                </li>
                <li>
                    <a href="#">Contenido 3</a>
                </li>
                <li>
                    <a href="#">Contenido 4</a>
                </li>
                <li>
                    <a href="#">Contenido 5</a>
                </li>
            </ul>
        </nav>

        <!--INFORMACIÓN PRINCIPAL-->
        <div class="main">
            <section class="noticias-destacadas">
                <article class="card">
                    <img src="./img/titulo11.jpg" alt="">
                    <h3>Titulo 1</h3>
                    <a href="#">Quiero saber más<i class="fas fa-angle-double-right"></i></a>
                </article>
                <article class="card">
                    <img src="./img/titulo11.jpg" alt="">
                    <h3>Titulo 2</h3>
                    <a href="#">Quiero saber más<i class="fas fa-angle-double-right"></i></a>
                </article>
                <article class="card">
                    <img src="./img/titulo11.jpg" alt="">
                    <h3>Titulo 3</h3>
                    <a href="#">Quiero saber más<i class="fas fa-angle-double-right"></i></a>
                </article>
            </section>
            <section class="noticias generales">
                <article class="noticia">
                    <img src="./img/titulo11.jpg" alt="">
                    <h3>Titulo</h3>
                    <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa, perspiciatis?</div>
                    <a href="#">Saber más<i class="fas fa-angle-double-right"></i></a>
                </article>
                <article class="noticia">
                    <img src="./img/titulo11.jpg" alt="">
                    <h3>Titulo</h3>
                    <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa, perspiciatis?</div>
                    <a href="#">Saber más<i class="fas fa-angle-double-right"></i></a>
                </article>
                <article class="noticia">
                    <img src="./img/titulo11.jpg" alt="">
                    <h3>Titulo</h3>
                    <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa, perspiciatis?</div>
                    <a href="#">Saber más<i class="fas fa-angle-double-right"></i></a>
                </article>
           
            </section>
        </div>
        <!--PIE DE PÁGINA/DIRECCIONA AL INCLUDES-->
        <?php include("./includes/footer.php") ?>

    </div>
    <!--scripts-->
    <script src="./scripts/main.js"></script>
</body>

</html>
