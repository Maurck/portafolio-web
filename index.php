
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel=stylesheet type="text/css" href="vendors/css/normalize.css">
        <link rel=stylesheet type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
        <title>
            Portafolio
        </title>
    </head>
    <body>
        <header>
            <nav>
                <div class="NavFixedWrapper">
                    <div class="Title">
                        <p>
                            ML
                        </p>
                    </div>
                    <div class="HeaderNavRight">
                        <a class="Button Button-full" href="/">
                            Proyectos
                        </a>
                        <a class="Button Button-ghost" href="/">
                            Acerca de mi
                        </a>
                        <a class="Button Button-ghost" href="/">
                            Contactos
                        </a>  
                    </div>
                </div>
            </nav>
            <div class="background-text-box">
                <h1>
                    ¡Hola! Mi nombre es Mauricio Linares, soy desarrollador web backend y de videojuegos en Unity.
                </h1>
            </div>
        </header>
        <div class="projects">
            <div class="projects-title">
                <h2>
                    Algunos de los proyectos en los que he participado:
                </h2>
            </div>
            <div class="project-title">
                <h1>
                    Chroniverse
                </h1>
            </div>
            <img src="resources/img/chroniverse.jpg" class="image-center">
            <div class="project-description">
                <p>
                    Mi rol fue el de programador en Unity, además me encargué de las animaciones, creacion de texturas y programacion de multiples sistemas
                    siguiendo diferentes patrones de diseño como el <b>Singleton</b>.
                </p>
            </div>

            <div class="project-title">
                <h1>
                    FisiBici
                </h1>
            </div>
            <img src="resources/img/fisibici.jpg" class="image-center">
            <div class="project-description">
                <p>
                    Mi rol fue el de desarrollador backend empleando tecnologias como la libreria <strong>Flask</strong> en python, despliegue en
                    la plataforma <strong>Heroku</strong> y la base de datos no relacional <strong>mongoDB</strong> alojada en la nube.
                </p>
            </div>
            <div class="project-link">
                <a href="http://fisi-bici.herokuapp.com/" target="_blank" class="link">link de la pagina web</a>
            </div>

        </div>
    </body>
</html>