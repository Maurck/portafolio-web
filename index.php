<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel=stylesheet type="text/css" href="vendors/css/normalize.css"> -->
    <link rel="stylesheet" type="text/css" href="resources/css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap"
      rel="stylesheet"
    />
    <title>Página personal</title>
  </head>
  <body>
    <header class="header">
      <p class="header__logo">ML</p>
      <nav class="header__sections-links">
        <a class="" href="/"> Acerca de mi </a>
        <a class="" href="#sections-projects"> Proyectos </a>
        <a class="" href="#sections-links"> Links </a>
      </nav>
    </header>
    <div class="container hero">
      <h1 class="hero__presentation">
        ¡Hola! Mi nombre es Mauricio Linares, soy estudiante de 9no ciclo de la
        carrera ing. de software y desarrollador Web Backend
      </h1>
    </div>
    <hr class="container separator" id="sections-projects" />
    <div class="container projects">
      <h3 class="projects__title">
        Algunos de los proyectos en los que he participado
      </h3>

      <div class="project">
        <div class="project__body">
          <div class="project__info">
            <h3 class="project__title">Fisiniús</h3>
            <p class="project__description">
              Mi rol fue el de desarrollador backend empleando tecnologias como
              la libreria
              <strong class="project__description--highlighted">Flask</strong>
              en
              <strong class="project__description--highlighted">Python</strong>,
              despliegue en la plataforma
              <strong class="project__description--highlighted">Heroku</strong>
              y la base de datos no relacional
              <strong class="project__description--highlighted">mongoDB</strong>
              alojada en la nube.
            </p>
          </div>
          <img src="resources/img/fisinius.jpg" class="project__image" />
        </div>
        <div class="project__footer">
          <a
            href="https://fisinius.netlify.app/"
            target="_blank"
            class="project__link"
            >Ir a Fisiniús</a
          >
        </div>
      </div>

      <div class="project">
        <div class="project__body">
          <div class="project__info">
            <h3 class="project__title">Artemis</h3>
            <p class="project__description">
              Mi rol fue el de desarrollador backend empleando tecnologias como
              la libreria
              <strong class="project__description--highlighted">Express</strong>
              en
              <strong class="project__description--highlighted"
                >Javascript</strong
              >, despliegue en la plataforma
              <strong class="project__description--highlighted">Heroku</strong>
              y la base de datos no relacional
              <strong class="project__description--highlighted">mongoDB</strong>
              alojada en la nube.
            </p>
          </div>
          <img src="resources/img/artemis.jpg" class="project__image" />
        </div>
        <div class="project__footer">
          <a
            href="https://artemis-art.netlify.app/"
            target="_blank"
            class="project__link"
            >Ir a Artemis</a
          >
        </div>
      </div>

      <div class="project">
        <div class="project__body">
          <div class="project__info">
            <h3 class="project__title">FisiBici</h3>
            <p class="project__description">
              Mi rol fue el de desarrollador backend empleando tecnologias como
              la libreria
              <strong class="project__description--highlighted">Flask</strong>
              en
              <strong class="project__description--highlighted">Python</strong>,
              despliegue en la plataforma
              <strong class="project__description--highlighted">Heroku</strong>
              y la base de datos no relacional
              <strong class="project__description--highlighted">mongoDB</strong>
              alojada en la nube.
            </p>
          </div>
          <img src="resources/img/fisibici.jpg" class="project__image" />
        </div>
        <div class="project__footer">
          <a
            href="https://fisi-bici.herokuapp.com/"
            target="_blank"
            class="project__link"
            >Ir a fisibici</a
          >
        </div>
      </div>
    </div>
    <hr class="container separator" id="sections-links" />
    <div class="container links">
      <h3 class="links__title">Links útiles</h3>
      <ul class="links__body">
        <li>
          <a href="https://github.com/Maurck" target="_blank" class="link__button"
          ><img class = "link__buttton-image" src="resources/img/github_logo.svg"/></a
        >
        </li>
        <li>
          <a href="https://www.facebook.com/mau.riccio.3" target="_blank" class="link__button"
          ><img class = "link__buttton-image" src="resources/img/facebook_logo.svg"/></a
        >
        </li>
        <li>
          <a href="https://www.linkedin.com/feed" target="_blank" class="link__button"
          ><img class = "link__buttton-image" src="resources/img/linkedin_logo.svg"/></a
        >
        </li>
      </ul>
    </div>
  </body>
</html>
