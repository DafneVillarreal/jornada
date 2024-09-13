<!doctype html>
<html class="no-js" lang="en">
    
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <?php include 'header.php'; ?>
    </head>

    <!-- start hero section --> <!-- PORTADA INICIAL DE LA PAGINA-->
     <section class="parallax p-0" data-parallax-background-ratio="0.5" style="background-image: url(images/fondo.png); background-position: inherit;">
            <div class="opacity-extra-medium-2 bg-extra-dark-gray"></div>
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-8 col-md-10 col-lg-8 full-screen flex-column d-flex justify-content-center text-center md-landscape-h-600px">
                        <div class="">
                            
                            <!-- COMIENZO DE SLIDER CON LOGOS -->
                            <div id="carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="images/banner_nuevo.png" class="d-block w-100" alt="Banner informativo">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="images/logo_ilab.png" class="d-block w-100" alt="Logo iLabTDI">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                    </div>

                    <!-- icono mouse -->
                    <div class="down-section text-center"><a href="#about" class="section-link up-down-ani"><i class="ti-mouse icon-small bounce text-iris-blue"></i></a></div>
               
                </div>
            </div>
        </section>
        


        <!-- CALENDARIO -------------------------------------------------------------------------------------------------------------------------------------------------->
         <section id="calendario" class="parallax p-0" data-parallax-background-ratio="0.5" style="background-image: url(images/fondo_simple.png); background-size: cover; background-position: center center; height: 100vh; display: flex; justify-content: center; align-items: center;">
          <div class="opacity-extra-medium-2 bg-extra-dark-gray" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.5;"></div>
          
          <div class="calendar-container" style="width: 90%; height: 650px; overflow: auto; position: relative; z-index: 1; padding: 20px;">
            <iframe src="https://embed.styledcalendar.com/#vflib8RX2pkHX1KSmEDg" title="Styled Calendar" class="styled-calendar-container" style="width: 100%; height: 100%; border: none;" data-cy="calendar-embed-iframe"></iframe>
          </div>
          
          <script async type="module" src="https://embed.styledcalendar.com/assets/parent-window.js"></script>
        </section>


        <!-- TERMINA CALENDARIO -------------------------------------------------------------------------------------------------------------------------------------------------->


        <!-- ubicacion de maps-->

         <section id="ubicacion" class="parallax p-0" data-parallax-background-ratio="0.5" style="background-image: url(images/fondo_simple.png); background-size: cover; background-position: center center; height: 100vh; display: flex; justify-content: center; align-items: center;">
          <div class="opacity-extra-medium-2 bg-extra-dark-gray" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.5;"></div>
              <div class="calendar-container" style="width: 90%; height: 700px; overflow: auto; position: relative; z-index: 1; padding: 20px;">

                <iframe class="w-100 h-650px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d933.3234388599988!2d-103.32773284390981!3d20.657624599999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b38268b83b7b%3A0x12ce6c421639d8b3!2sModulo%20Z2!5e0!3m2!1ses!2smx!4v1680202144864!5m2!1ses!2smx"></iframe>
              </div>
          </div>  
        </section>
        <!-- ubicacion de maps-->


         <!-- video de youtube-->

         <section class="parallax p-0" data-parallax-background-ratio="0.5" style="background-image: url(images/fondo_simple.png); background-size: cover; background-position: center center; height: 100vh; display: flex; justify-content: center; align-items: center;">
          <div class="opacity-extra-medium-2 bg-extra-dark-gray" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.5;"></div>
              <div class="calendar-container" style="width: 90%; height: 700px; overflow: auto; position: relative; z-index: 1; padding: 20px;">
                    <iframe class="w-100 h-650px"  src="https://www.youtube.com/embed/Su4ktK9fZ_I?si=OvbHAf-4Rn7cSmL-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

              </div>
          </div>  
        </section>
        <!-- video de youtube-->


        
        <?php include 'slider_patrocinadores.php';?>

        <!-- start footer -->

        <?php include'footer.php' ?>

        <!-- end footer -->
                

        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/theme-vendors.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        
    </body>
</html>






