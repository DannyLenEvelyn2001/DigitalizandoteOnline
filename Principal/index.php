<?php

$pre = 2;

include '../login/conn.php'; // * Incluyendo la Conexión
?>
<!DOCTYPE html>
<html lang="en">
<?php
include "../componentes/head.php";
?>

<body>
  <?php
  // ! Validación de Sesión
  if ($acceso == 1) {  // * El usuario ha iniciado sesión, permite el acceso a la página protegida
  ?>
    <div class="wrapper">
      <?php
      $query = $link->query("SELECT nombre FROM usuario WHERE idUsuario = $SesionID");
      $dato = mysqli_fetch_assoc($query);
      $nombre = $dato['nombre'];
      ?>
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.php" class="logo">
              <img
                src="../img/logoazul.png"
                alt="navbar brand"
                class="navbar-brand"
                height="79" width="200" />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <!-- INICIO DEL MENU -->
        <?php
        include "../componentes/menu.php";

        ?>
        <!-- FINAL DEL MENU -->
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.php" class="logo">
                <img
                  src="../img/logoazul.png"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20" />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- NAVBAR DE LA CABEZA  -->
          <!-- Navbar Header -->
          <?php
          include "../componentes/navbar.php";
          ?>
          <!-- FINAL DEL NAVBAR -->
        </div>
        <!-- cuerpo -->
        <div id="seccion-con-fondo" class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
              <div>
                <h3 class="fw-bold mb-3" style="color: black; font-weight: bold; font-size: 40px; border-radius: 20px;">DIGITALIZÁNDOTE</h3>
              </div>

            </div>
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small">
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Colaboradores</p>
                          <h4 class="card-title">
                            <?php
                            $plantillas = 0;
                            $colaboradores = -1;
                            $query = $link->query("SELECT idEmpresa FROM relempresa WHERE idUsuario = $SesionID");
                            while ($dato = mysqli_fetch_array($query)) {
                              $idEmpresa = $dato['idEmpresa'];

                              $query1 = $link->query("SELECT idColaborador FROM relcolaborador WHERE idEmpresa = $idEmpresa");
                              $colaboradores = $colaboradores + mysqli_num_rows($query1);

                              while ($dato = mysqli_fetch_array($query1)) {
                                $idColaborador = $dato['idColaborador'];

                                $query2 = $link->query("SELECT idReltarjeta FROM reltarjeta WHERE idColaborador = $idColaborador");
                                $plantillas = $plantillas + mysqli_num_rows($query2);
                              }
                            }
                            echo "$colaboradores";
                            ?>
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-secondary bubble-shadow-small">
                          <i class="far fa-check-circle"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Plantillas</p>
                          <h4 class="card-title">
                            <?= "$plantillas"; ?>
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="col-sm-6 col-md-3">
                <button id="plantilla-1" class="btn btn-primary btn-lg">Prueba</button>
              </div> -->
            </div>

            <!-- INICIO DEL CORROSEL -->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <!-- Generate indicators dynamically for 15 slides -->
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="10" aria-label="Slide 11"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="11" aria-label="Slide 12"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="12" aria-label="Slide 13"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="13" aria-label="Slide 14"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="14" aria-label="Slide 15"></button>
              </div>
              <div class="carousel-inner">
                <!-- Carousel items for 15 slides -->
                <div class="carousel-item active">
                  <img src="../Plantillas/Plantilla1.png" class="d-block w-100" alt="Descripción de la imagen 1">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Plantillas para Diseño Web</h5>
                    <p>Estas plantillas ofrecen una estructura predefinida y elementos visuales que puedes personalizar
                      según tus necesidades específicas.
                      Una plantilla de diseño web te proporciona una base sobre la cual puedes construir tu sitio web.
                      Esta base incluye un diseño cohesivo, una estructura de navegación intuitiva, y una disposición
                      visual atractiva.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../Plantillas/Plantilla2.png" class="d-block w-100" alt="Descripción de la imagen 2">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Plantillas para Contador</h5>
                    <p>Estas plantillas ofrecen una estructura predefinida que facilita la entrada y el análisis de datos,
                      ahorrando tiempo y reduciendo errores.
                      Una plantilla para contadores te proporciona una base organizada sobre la cual puedes estructurar
                      tus informes financieros y contables.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../Plantillas/Plantilla3.png" class="d-block w-100" alt="Descripción de la imagen 3">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Plantillas para Fotografos</h5>
                    <p>Estas plantillas ofrecen una estructura predefinida que facilita la organización y presentación de
                      tus fotografías y servicios.
                      Puedes organizar y presentar tus mejores trabajos fotográficos en galerías atractivas y fáciles de
                      navegar.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../Plantillas/Plantilla4.png" class="d-block w-100" alt="Descripción de la imagen 4">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Entrenador</h5>
                    <p>Estas plantillas ofrecen una estructura predefinida que facilita la organización y presentación de
                      tu trabajo y servicios.
                      Puedes detallar rutinas de ejercicio, planes de entrenamiento y recomendaciones nutricionales de
                      manera clara y profesional.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../Plantillas/Plantilla5.png" class="d-block w-100" alt="Descripción de la imagen 5">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Comida/ Gastronomia</h5>
                    <p>Estas plantillas ofrecen una estructura predefinida que facilita la organización y presentación de
                      tu trabajo culinario y de tu negocio.
                      Puedes diseñar menús visualmente atractivos para restaurantes, cafés, o servicios de catering,
                      incluyendo descripciones de platos y precios.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../Plantillas/Plantilla6.png" class="d-block w-100" alt="Descripción de la imagen 6">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Networker Profesional</h5>
                    <p>Estas plantillas ofrecen una estructura predefinida que facilita la gestión y presentación de tu
                      red de contactos y actividades de networking.
                      Puedes mantener un registro detallado de tus contactos, incluyendo información relevante como
                      nombres, empresas, cargos y detalles de contacto.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../Plantillas/Plantilla7.png" class="d-block w-100" alt="Descripción de la imagen 7">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Docentes</h5>
                    <p>Estas plantillas ofrecen una estructura predefinida que facilita la organización y presentación de
                      tu trabajo educativo.
                      Una plantilla para maestros te proporciona una base organizada sobre la cual puedes estructurar tu
                      contenido y la información de tus clases y estudiantes.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../Plantillas/Plantilla8.png" class="d-block w-100" alt="Descripción de la imagen 8">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Espacios de Coworking</h5>
                    <p>Estas plantillas ofrecen una estructura predefinida que facilita la organización y presentación de
                      tu espacio y servicios.
                      Puedes presentar de manera atractiva las diferentes áreas de trabajo, salas de reuniones, servicios
                      adicionales y comodidades que ofreces.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../Plantillas/Plantilla9.png" class="d-block w-100" alt="Descripción de la imagen 9">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Arquitectura Moderna</h5>
                    <p>Estas plantillas ofrecen una estructura predefinida que facilita la organización y presentación de
                      tus trabajos arquitectónicos.
                      Presenta tus diseños, planos, renders y fotografías de manera atractiva y organizada.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../Plantillas/Plantilla10.png" class="d-block w-100" alt="Descripción de la imagen 10">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Auditores Profesionales</h5>
                    <p>Esta base incluye formatos estandarizados y secciones predefinidas que puedes personalizar según
                      los requerimientos específicos de cada auditoría.
                      Puedes incluir resúmenes ejecutivos, detalles de contacto y fechas clave para una comunicación
                      efectiva.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../Plantillas/Plantilla11.png" class="d-block w-100" alt="Descripción de la imagen 11">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Construcciones</h5>
                    <p>Una plantilla para construcción te proporciona una base organizada sobre la cual puedes estructurar
                      la información crucial de tus proyectos.
                      Puedes incluir informes de avance, detalles de contacto y fechas clave para una comunicación
                      efectiva y transparente.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../Plantillas/Plantilla12.png" class="d-block w-100" alt="Descripción de la imagen 12">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Excursiones</h5>
                    <p>Estas plantillas ofrecen una estructura predefinida que facilita la organización y presentación de
                      los detalles cruciales de tus excursiones.
                      Puedes incluir información sobre equipamiento necesario, recomendaciones de seguridad y requisitos
                      de salud para los participantes.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../Plantillas/Plantilla13.png" class="d-block w-100" alt="Descripción de la imagen 13">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Diseñadores de Moda</h5>
                    <p>Estas plantillas ofrecen una estructura predefinida que facilita la organización y presentación de
                      tus creaciones.
                      Puedes mostrar tus diseños, croquis, telas y colores de manera ordenada y profesional.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../Plantillas/Plantilla14.png" class="d-block w-100" alt="Descripción de la imagen 14">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Estilistas, Barberos y Peluqueros</h5>
                    <p>Estas plantillas ofrecen una estructura predefinida que facilita la organización y presentación de
                      tus habilidades y servicios.
                      Puedes presentar cortes de pelo, peinados, coloraciones y tratamientos de manera visualmente
                      atractiva.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../Plantillas/Plantilla15.png" class="d-block w-100" alt="Descripción de la imagen 15">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Freelancers</h5>
                    <p>Esta base incluye formatos estandarizados y secciones predefinidas que puedes personalizar según
                      las necesidades específicas de tu especialidad.
                      Puedes mostrar tus habilidades, experiencia y servicios ofrecidos de forma clara y atractiva.
                    </p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
              </button>
            </div>
            <!-- FIN DEL CARROSEL -->

          </div>
        </div>
        <?php
        include "../componentes/footer.php";
        ?>
      </div>

      <!--LOS COLRES DE CONFIGURACION DEL SISTEMA
     Custom template | don't include it in your project! -->

      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <!-- jQuery Scrollbar -->
    <!-- Chart JS -->
    <!-- jQuery Sparkline -->
    <!-- Chart Circle -->
    <!-- Datatables -->
    <!-- Bootstrap Notify -->
    <!-- jQuery Vector Maps -->
    <!-- Sweet Alert -->
    <!-- Kaiadmin JS -->
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <?php
    include "../componentes/script.php";
    ?>

    <script>
      document.getElementById('plantilla-1').addEventListener('click', function() {
        var Ancho = screen.width / 3 - 100;
        var Alto = screen.height;
        const opciones1 = 'width=' + Ancho + ',height=' + Alto;
        window.open('../Plantillas/td1/landing-form.php?a=1', 'formularioPopup', opciones1);
        // window.open('../Plantillas/td1/landing-form.php?a=1', 'formularioPopup', 'width=400,height=400');
      });
    </script>

  <?php
  } else { ?>
    <script>
      window.location.href = '../login/login.php'; // ? Página de redireccionamiento en caso de no haber iniciado sesión.
    </script>
  <?php
  } // ! Fin de la validación de Sesión

  $DB->close(); // ? Cierre de BD
  ?>
</body>

</html>