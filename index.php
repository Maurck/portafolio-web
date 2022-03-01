<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <!-- <link rel=stylesheet type="text/css" href="vendors/css/normalize.css"> -->
    <link rel="stylesheet" type="text/css" href="resources/css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap"
      rel="stylesheet"
    />
    <title>Portafolio</title>
  </head>
  <body>
    <header class="header">
        <p class="header__logo">ML</p>
        <nav class="header__sections-links">
          <a class="" href="#sections-project"> Proyectos </a>
          <a class="" href="#"> Acerca de mi </a>
          <a class="" href="#"> Contactos </a>
        </nav>
    </header>
    <div class="container hero">
      <h1 class="hero__presentation">
        ¡Hola! Mi nombre es Mauricio Linares, soy desarrollador web backend y de
        videojuegos en Unity.
      </h1>
    </div>
    <hr class="container separator" id="sections-project"/>
    <div class="container projects" >
      <h3 class="projects__title">
        Algunos de los proyectos en los que he participado
      </h3>
      <div class="project">
        <div class="project__body">
          <div class="project__info">
            <h3 class="project__title">Chroniverse</h3>
            <p class="project__description">
              Mi rol fue el de programador en Unity, además me encargué de las
              animaciones, creacion de texturas y programacion de multiples
              sistemas siguiendo diferentes patrones de diseño como el
              <strong class="project__description--highlighted">Singleton</strong>.
            </p>
          </div>
          <img src="resources/img/chroniverse.jpg" class="project__image" />
        </div>
        <div class="project__footer">
        </div>
      </div>

      <div class="project">
        <div class="project__body">
          <div class="project__info">
            <h3 class="project__title">FisiBici</h3>
            <p class="project__description">
              Mi rol fue el de desarrollador backend empleando tecnologias como
              la libreria <strong class="project__description--highlighted">Flask</strong> en python, despliegue en la
              plataforma <strong class="project__description--highlighted">Heroku</strong> y la base de datos no
              relacional <strong class="project__description--highlighted">mongoDB</strong> alojada en la nube.
            </p>
          </div>
          <img src="resources/img/fisibici.jpg" class="project__image" />
        </div>
        <div class="project__footer">
          <a href="https://fisi-bici.herokuapp.com/" target="_blank" class="project__link"
            >Link a fisibici</a
          >
        </div>
      </div>
    </div>
  </body>
</html>
