<!doctype html>
<html class="no-js" lang="en">
    
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/variable.scss">
    <link rel="stylesheet" href="css/flyer_hackaton.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="css/gallery_style.scss">
    <link rel="stylesheet" href="css/button_neon.css">
    <link rel="stylesheet" href="css/botones.scss">
  <?php include 'header.php'; ?>
  </head>

  <!-- start hero section --> <!-- PORTADA INICIAL DE LA PAGINA-->
    <section id="inicio" class="parallax p-0" data-parallax-background-ratio="0.5" style="background-image: url(images/fondo.png); background-size: cover; background-position: center center; height: 100vh; display: flex; justify-content: center; align-items: center;">
      <div class="opacity-extra-medium-2 bg-extra-dark-gray" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.5;"></div>

        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-wrap="true">
          <div class="carousel-inner">

            <div class="carousel-item active">
              <img src="images/banner.png" class="d-block" style="width: 75%; margin: 0 auto;" alt="...">
            </div>

            <div class="carousel-item">
              <img src="logos/ilab_logo.png" class="d-block w-100" alt="...">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <!-- icono mouse -->
    <div class="down-section text-center"><a href="#calendario" class="section-link up-down-ani"><i class="ti-mouse icon-small bounce text-iris-blue"></i></a></div>

  <!-- GALERIA DE IMAGENES -->
  <section id="gallery" class="parallax p-0" data-parallax-background-ratio="0.5" style="background-image: url(images/fondo_simple.png); background-size: cover; background-position: center center; height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div class="opacity-extra-medium-2 bg-extra-dark-gray" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.5;"></div>
      <div class="cards_gallery">

        <div class="card">
          <img src="flyers/musical.jpg" alt="Musical" class="card-image" data-large="flyers/musical.jpg">
          <div class="card__head">Tecnología musical</div>
        </div>

        <div class="card">
          <img src="flyers/innovacion.jpg" alt="Innovacion" class="card-image" data-large="flyers/innovacion.jpg">
          <div class="card__head">Innovacion como estrategia de vida</div>
        </div>

        <div class="card">
          <img src="flyers/abundancia.jpg" alt="Abundancia" class="card-image" data-large="flyers/abundancia.jpg">
          <div class="card__head">Mentalidad de inversionista</div>
        </div>

        <div class="card">
          <img src="flyers/emprendimiento.jpg" alt="Emprendimiento" class="card-image" data-large="flyers/emprendimiento.jpg">
          <div class="card__head">Mi primer emprendimiento</div>
        </div>

        <div class="card">
          <img src="flyers/publi.jpg" alt="Publicidad" class="card-image" data-large="flyers/publi.jpg">
          <div class="card__head">Estrategias para el negocio moderno</div>
        </div>

      </div>
      
      <div class="buttons">
        <button class="my-button fill" onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSdP5aKwmTKI2Cv-V2NgUFSnaz4OlIdpHsrlmms2KDXdpGjdmw/viewform?usp=sharing', '_blank');">¿Quieres ser ponente? ¡Registrate aquí!</button>
      </div>

    </section>

    <div id="modal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImage">
        <div id="caption"></div>
    </div>

    <!-- hackaton -------------------------------------------------------------------------------------------------------------------------------------------------->
    <section id="hackaton" class="parallax p-0" data-parallax-background-ratio="0.5" style="background-image: url(images/fondo_simple2.png); background-size: cover; background-position: center center; height: 100vh; display: flex; justify-content: center; align-items: center;">
      <img src="flyers/hackaton.png" alt="Descripción de la imagen" class="centered-image">
      
      <button class='glowing-btn' style="position: absolute; left: 40px; bottom: 80px;" onclick="window.location.href='https://docs.google.com/forms/d/e/1FAIpQLSd8vRv3B7zbtpu3IXSHamk56GTk1JkJpX4Xq-sRfAXNawgS_w/viewform?usp=sharing'">
        <span class='glowing-txt'>RE<span class='faulty-letter'>GIS</span>TRO</span>
      </button>

      
      <button class="glowing-btn" style="position: absolute; right: 40px; bottom: 80px;" onclick="window.location.href='doc/convocatoria_hackaton.pdf'">
        <span class='glowing-txt'>B<span class='faulty-letter'>AS</span>ES</span>
      </button>

    </section>








    <!-- CALENDARIO -------------------------------------------------------------------------------------------------------------------------------------------------->
    <section id="calendario" class="parallax p-0" data-parallax-background-ratio="0.5" style="background-image: url(images/fondo_simple.png); background-size: cover; background-position: center center; height: 100vh; display: flex; justify-content: center; align-items: center;">
      <div class="opacity-extra-medium-2 bg-extra-dark-gray" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.5;"></div>
      <div class="calendar-container">
          <iframe src="https://embed.styledcalendar.com/#vflib8RX2pkHX1KSmEDg" title="Styled Calendar" class="styled-calendar-container" data-cy="calendar-embed-iframe"></iframe>
      </div>
      <script async type="module" src="https://embed.styledcalendar.com/assets/parent-window.js"></script>
    </section>

    <!-- TERMINA CALENDARIO -------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- ubicacion de maps-->
      <section id="ubicacion" class="parallax p-0" data-parallax-background-ratio="0.5" style="background-image: url(images/fondo_simple.png); background-size: cover; background-position: center center; height: 100vh; display: flex; justify-content: center; align-items: center;">
      
          <div class="calendar-container" style="width: 90%; height: 700px; overflow: auto; position: relative; z-index: 1; padding: 20px;">
            <iframe class="w-100 h-650px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d933.3234388599988!2d-103.32773284390981!3d20.657624599999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b38268b83b7b%3A0x12ce6c421639d8b3!2sModulo%20Z2!5e0!3m2!1ses!2smx!4v1680202144864!5m2!1ses!2smx"></iframe>
          </div>
        </div>  
      </section>
    <!-- ubicacion de maps-->

  <!-- SLIDER -->
  <div id= "sponsor">
    <?php include'slider_patrocinadores.php' ?>
  </div>
    
  <!-- video de youtube-->
  <div id="youtube">
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-486daba5-2373-4094-be85-5b4528730e98" data-elfsight-app-lazy></div>
  </div>
    <!-- video de youtube-->

    <!-- start footer -->
    <div id="footer">
      <?php include'footer.php' ?>
    </div>
    <!-- end footer -->
              
    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
    <!-- end scroll to top -->

    <!-- javascript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/theme-vendors.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/gallery.js"></script>
    </body>
</html>






