<?php
    date_default_timezone_set("Mexico/General");
    $fecha_actual = date('Y-m-d');
    $timemex = date("H:i:s.v", time());
$link = mysqli_connect("localhost", "u759056297_tardig", "Shantiam10*", "u759056297_digitalizan") or die("No hay Conexion");
    $result = mysqli_query($link, "insert into cl0 (fecha, hora) values ('$fecha_actual','$timemex')");

$link = mysqli_connect("localhost", "u759056297_tardig", "Shantiam10*", "u759056297_digitalizan") or die("No hay Conexion");
    $result = mysqli_query($link, "SELECT idvisita FROM cl0 WHERE idvisita=(SELECT max(idvisita) as numvisi FROM cl0)");
     while ($fila = mysqli_fetch_array($result)) {
       $numvisita = $fila['idvisita'];
     }
?>




<!--
author: Ing. Victor Manuel Alarcón Hdez.
author URL: https://digitalizandote.online
License: Tarjeta Digital para: Alejandra Morales Vargas
NetRabbit, S.A. de C.V.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="img/profile.jpg">
<title>Alejandra Morales Vargas /Asesora Automotriz </title>

    <!-- Global stylesheets -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="css/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

<!-- =======================================================
  * DIGITALIZANDOTE.ONLINE
  * Plantilla Tarjeta Digital  1
  * Author: BootstrapMade.com
  * Integrador : NetRabbit, S.A. de C.V.
  * Lider Proyecto: Ing. Laura Patricia Nevares del Bosque
  * Dir Desarrollo: Ing. Victor Manuel Alarcón Hernández
======================================================== -->


<style type="text/css">

#Layer1 {
    position:absolute;
    width:41px;
    height:39px;
    z-index:100;
    left: 268px;
    top: 650px;
    bottom:10x;
    right:0px;
    position:fixed;
}

</style>
</head>

<body id="page-top">


<div id="Layer1">
    <a href="https://digitalizandote.digital/"><img src="img/regegresa_a_plantillas.png" width="150" height="40"alt=""></a>
</div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none  mx-0 px-0">
        <!--    <img src="img/logo-white.png" width="200" height="50"  class="img-fluid">  -->
            <img src="img/logoAsesor1.png" width="150" height="30"  class="img-fluid">
                </br>
            <img src="img/logoAsesor2.png" width="200" height="30"  class="img-fluid">
                
            <img src="img/profile.jpg" width="50" height="50"  class="img-fluid">
        <div style="color:#00025b";>
            Tarjeta Digital "Demo"
            </br>
        </div>
            </span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
              <div style="color:#00025b";>
                  Tarjeta Digital "Demo"
                  </br>
             </div>
        </span>
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Sobre mi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#experience">Nuestra Gama 2024</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Vehiculos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#skills">Lo nuevo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#awards">Los Seminuevos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid p-0">

    <!--====================================================
                        ABOUT
    ======================================================-->
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
          <div class="my-auto" >
              </br>
              </br>
              </br>
              </br>
              </br>

              <img src="img/logo-s.png" width="220" height="80"  alt="">
              <h2 style="color:#FFFFFF";>Alejandra Morales Vargas
              </h2>
              <h3 style="color:#FFFFFF";>Asesora Automotriz
                  <a style="color:#FFFFFF";>Ford Lomas</a>
                  <p class="mb-5" style="max-width: 500px;" >Siempre a tus ordenes</p>
              </h3>
         
              <ul class="list-inline list-social-icons mb-0">
                  <li class="list-inline-item">
                      <a href="tel:7224959025">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
                  </li>
                  <li class="list-inline-item">
                      <a href="https://api.whatsapp.com/send?phone=+7224959025&text= https://digitalizandote.digital/tardemo/ 👋😄 
                        %0A %0A*HOLA  Soy Alejandra Morales Vargas, tu Asesora Ford Lomas Automotriz 🚘🚙🚗🛻, Imagínate en tu Nuevo Ford, Me gustaria ayudarte a tomar una mejor decisión.*%0A %0A  *Estoy Siempre a tus ordenes*
                           %0A %0A  %0A %0A  %0A %0A  %0A %0A  *Esta es una Tarjetal Digital Demo, Por Digitalizandote una Marca de: NetRabbit, S.A. de C.V.*  https://netrabbit.online/" " target="_blank"">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
                  </li>
                  <li class="list-inline-item">
                      <a href="comparte.php">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-qrcode fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
                  </li>
                  <li class="list-inline-item">
                      <a href="mailto:alemv@fordlomas.com.mx">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
                  </li>
                        <li class="list-inline-item">
                        <a href="https://api.whatsapp.com/send?&text=&#128075;&#128512; *Hola vengo de la Tarjeta Digital de Alejandra Morales Vargas, Asesora  Ford Lomas Automotriz y te lo quiero recomendar para el auto que quieres comprar,* te comparto su Tarjeta Digital.
                        
                         %0A %0A  
Da Click AQUI 👉  https://digitalizandote.digital/tardemo/
%0A %0A  %0A %0A  %0A %0A  *Esta es una Tarjetal Digital Demo, Por Digitalizandote una Marca de: NetRabbit, S.A. de C.V.*  https://netrabbit.online/" target="_blank">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-share-alt fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                        </li>

                  
              </ul>
                   <div align="center">
                        <p style="color: #000080; text-align:center">Eres el visitante # <?php echo $numvisita ;?>
                       </p>
                   </div>

                                               
          </div>
                       
      </section>

    <!--====================================================
                                        Nuestra Gama 2024
    ======================================================-->
      <section class="resume-section p-3 p-lg-5 " id="experience">
          <div class="row my-auto">
              <div class="col-12">
                <h2 class="  text-center">Nuestra Gama 2024</h2>
                <div class="mb-5 heading-border"></div>
              </div>
              <div class="resume-item col-md-6 col-sm-12 " > 
                <div class="card mx-0 p-4 mb-5" style="border-color: #17a2b8; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                  <div align="center" class=" resume-content mr-auto">
                      <h4 class="mb-3"><i class="fa fa-globe mr-3 text-info"></i> MUSTANG MACH-E</h4>
                        <img src="img/banner0.jpg" width="250" height="70"  class="img-fluid">
                         <p>Ford Mustang 2024: 7 Generaciones de Deportividad Conoce al Heredero de la Tradición de los Muscle Car: Ford Mustang 2024, que en su Séptima Generación es el Vehículo Deportivo ideal para los entusiastas de una conducción Dinámica y Deportiva. Enamórate de las líneas de su espectacular rediseño y descubre cada elemento que ofrece a este Poderoso Auto.</p>
                            </br>
                           </br>
                                             </br>

                  </div>
                  <div class="resume-date text-md-right">
                      <span class="text-primary">2024</span>
                  </div>
                </div>  
              </div>
              <div class="resume-item col-md-6 col-sm-12">
                <div class="card mx-0 p-4 mb-5" style="border-color: #17a2b8; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                    <div align="center" class=" resume-content mr-auto">
                      <h4 class="mb-3"><i class="fa fa-globe mr-3 text-warning"></i>  BRONCO HERITAGE LIMITED</h4>
                       <img src="img/banner1.jpg" width="250" height="70"  class="img-fluid">
                      <p>Ford Bronco Heritage Limited
                        hace Honor a sus Raíces Todoterreno En la década de los 60, el mundo conoció a un vehículo único, que revolucionaría el mundo todoterreno: Ford Bronco.  La Edición Especial Ford Bronco Heritage Limited 2023 es la máxima expresión del legado de Ford Bronco, ya que fue creada y diseñada como un homenaje  a sus orígenes para recorrer terrenos indomables sin dejar de lado el estilo y la tecnología que la caracteriza.  Este año, revive su legado gracias al exclusivo tiraje de producción. </p>
                  </div>
                  <div class="resume-date text-md-right">
                      <span class="text-primary">2024</span>
                  </div>
                </div>  
              </div>
              <div class="resume-item col-md-6 col-sm-12">
                <div class="card mx-0 p-4 mb-5" style="border-color: #17a2b8; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                   <div align="center" class=" resume-content mr-auto">
                   <h4 class="mb-3"><i class="fa fa-globe mr-3 text-warning"></i>  MAVERICK</h4>
                       <img src="img/banner2.jpg" width="250" height="70"  class="img-fluid">
                      <p>Ford Maverick Híbrida 2024
                         Atrévete a conducir la espectacular pickup Ford Maverick Híbrida, que llega a imponer nuevos paradigmas, ya que brinda una experiencia de manejo tecnológica, con eficiente consumo de gasolina y un bajo nivel de emisiones que te acompañarán en tu dinámico estilo de vida.
                              Conoce la primer SUT (Sport Utility Truck) del mercado mexicano.
                      </p>
                  </div>
                  <div class="resume-date text-md-right">
                      <span class="text-primary">2024</span>
                  </div>
                </div>  
              </div>
              <div class="resume-item col-md-6 col-sm-12">
                <div class="card mx-0 p-4 mb-5" style="border-color: #17a2b8; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                   <div align="center" class=" resume-content mr-auto">
                   <h4 class="mb-3"><i class="fa fa-globe mr-3 text-warning"></i>  ESCAPE</h4>
                     <img src="img/banner3.jpg" width="250" height="70"  class="img-fluid">
                      <p>Ford Escape Híbrida 2024
                         Descubre el desempeño y tecnología que Ford Escape Híbrida 2024 tiene para ti. Ofrece gran eficiencia, ya que cuenta con un Motor Híbrido de 192HP de potencia combinada que ofrece una conducción con bajo consumo de gasolina y emisiones.
                       </p>
                       </br>
                           </br>
                  </div>
                  <div class="resume-date text-md-right">
                      <span class="text-primary">2024</span>
                  </div>
                </div>  
              </div>
          </div>
      </section>

    <!--====================================================
                                            Vehiculos 2024
    ======================================================-->
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="portfolio"> 
          <div class="row my-auto">
              
              <div class="col-12">
                <h2 class="  text-center">Vehiculos 2024</h2>
                <div class="mb-5 heading-border"></div>
              </div>
              
              <div class="col-md-12">
                <div class="port-head-cont">
                  <button class="btn btn-general btn-green filter-b" data-filter="all">Todos</button>
                  <button class="btn btn-general btn-green filter-b" data-filter="autos">Autos</button>
                  <button class="btn btn-general btn-green filter-b" data-filter="suvs">SUVs & Crossovers</button>
                  <button class="btn btn-general btn-green filter-b" data-filter="hibelec">Híbridos y Eléctricos</button>
                  <button class="btn btn-general btn-green filter-b" data-filter="camiones">Camiones</button>
                  <button class="btn btn-general btn-green filter-b" data-filter="performance">Performance</button>
                  <button class="btn btn-general btn-green filter-b" data-filter="edesp">Ediciones Especiales</button>
                </div>
              </div>
          
          </div>
          
          
          <div class="row my-auto">
              
              
                            
                            <div class="col-sm-4 portfolio-item filter autos">
                                <a class="portfolio-link" href="#portfolioModal1" data-toggle="modal">
                                    <div class="caption-port">
                                        <div class="caption-port-content">
                                            <i class="fa fa-search-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="img/autos/Mustang 2024.avif" alt="">
                                </a>
                            </div>
                            
           
              
                            <div class="col-sm-4 portfolio-item filter suvs">
                                 <a class="portfolio-link" href="#portfolioModal2" data-toggle="modal">
                                     <div class="caption-port">
                                          <div class="caption-port-content">
                                               <i class="fa fa-search-plus fa-3x"></i>
                                           </div>
                                      </div>
                                      <img class="img-fluid" src="img/Suvs/Bronco Sport 2024.avif" alt="">
                                </a>
                          </div>
                                        
                          
                          <div class="col-sm-4 portfolio-item filter suvs">
                              <a class="portfolio-link" href="#portfolioModal3" data-toggle="modal">
                                  <div class="caption-port">
                                      <div class="caption-port-content">
                                          <i class="fa fa-search-plus fa-3x"></i>
                                      </div>
                                  </div>
                                  <img class="img-fluid" src="img/Suvs/Edge 2024.avif" alt="">
                              </a>
                          </div>
                            
                            <div class="col-sm-4 portfolio-item filter suvs">
                                <a class="portfolio-link" href="#portfolioModal4" data-toggle="modal">
                                    <div class="caption-port">
                                        <div class="caption-port-content">
                                            <i class="fa fa-search-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="img/Suvs/Expedition 2024.avif" alt="">
                                </a>
                            </div>
                            
                            <div class="col-sm-4 portfolio-item filter suvs">
                                <a class="portfolio-link" href="#portfolioModal5" data-toggle="modal">
                                    <div class="caption-port">
                                        <div class="caption-port-content">
                                            <i class="fa fa-search-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="img/Suvs/Territory 2024.avif" alt="">
                                </a>
                            </div>
              

              
              
              
              <div class="col-sm-4 portfolio-item filter hibelec">
                  <a class="portfolio-link" href="#portfolioModal6" data-toggle="modal">
                      <div class="caption-port">
                          <div class="caption-port-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img class="img-fluid" src="img/Hibelec/Escape Hibrida 2024.avif" alt="">
                  </a>
              </div>
         
              
        
              <div class="col-sm-4 portfolio-item filter hibelec">
                  <a class="portfolio-link" href="#portfolioModal7" data-toggle="modal">
                      <div class="caption-port">
                          <div class="caption-port-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img class="img-fluid" src="img/Hibelec/Maverick Hibrida 2024.avif" alt="">
                  </a>
              </div>
              
              <div class="col-sm-4 portfolio-item filter camiones">
                  <a class="portfolio-link" href="#portfolioModal8" data-toggle="modal">
                      <div class="caption-port">
                          <div class="caption-port-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img class="img-fluid" src="img/camiones/Maverick 2024.avif" alt="">
                  </a>
              </div>
  
              <div class="col-sm-4 portfolio-item filter camiones">
                  <a class="portfolio-link" href="#portfolioModal9" data-toggle="modal">
                      <div class="caption-port">
                          <div class="caption-port-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img class="img-fluid" src="img/camiones/Ranger 2024.avif" alt="">
                  </a>
              </div>

              <div class="col-sm-4 portfolio-item filter camiones">
                  <a class="portfolio-link" href="#portfolioModal10" data-toggle="modal">
                      <div class="caption-port">
                          <div class="caption-port-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img class="img-fluid" src="img/camiones/Super Duty Chasis 2024.avif" alt="">
                  </a>
              </div>
      
              <div class="col-sm-4 portfolio-item filter camiones">
                  <a class="portfolio-link" href="#portfolioModal11" data-toggle="modal">
                      <div class="caption-port">
                          <div class="caption-port-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img class="img-fluid" src="img/camiones/Super Duty F-250 2024.avif" alt="">
                  </a>
              </div>
              <div class="col-sm-4 portfolio-item filter camiones">
                  <a class="portfolio-link" href="#portfolioModal12" data-toggle="modal">
                      <div class="caption-port">
                          <div class="caption-port-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img class="img-fluid" src="img/camiones/Transit Chasis 2024.avif" alt="">
                  </a>
              </div>
      
              <div class="col-sm-4 portfolio-item filter camiones">
                  <a class="portfolio-link" href="#portfolioModal13" data-toggle="modal">
                      <div class="caption-port">
                          <div class="caption-port-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img class="img-fluid" src="img/camiones/Transit Pasajeros 2024.avif" alt="">
                  </a>
              </div>
      
              <div class="col-sm-4 portfolio-item filter camiones">
                  <a class="portfolio-link" href="#portfolioModal14" data-toggle="modal">
                      <div class="caption-port">
                          <div class="caption-port-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img class="img-fluid" src="img/camiones/Transit Van 2024.avif" alt="">
                  </a>
              </div>
      
                    <div class="col-sm-4 portfolio-item filter performance">
                        <a class="portfolio-link" href="#portfolioModal15" data-toggle="modal">
                            <div class="caption-port">
                                <div class="caption-port-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="img/Performance/Ford Edge ST 2024.avif" alt="">
                        </a>
                    </div>
      
                          <div class="col-sm-4 portfolio-item filter performance">
                              <a class="portfolio-link" href="#portfolioModal16" data-toggle="modal">
                                  <div class="caption-port">
                                      <div class="caption-port-content">
                                          <i class="fa fa-search-plus fa-3x"></i>
                                      </div>
                                  </div>
                                  <img class="img-fluid" src="img/Performance/Ranger Raptor 2024.avif" alt="">
                              </a>
                          </div>
      
                                
                                <div class="col-sm-4 portfolio-item filter edesp">
                                    <a class="portfolio-link" href="#portfolioModal17" data-toggle="modal">
                                        <div class="caption-port">
                                            <div class="caption-port-content">
                                                <i class="fa fa-search-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="img/EdiEsp/Mustang Dark Horse.avif" alt="">
                                    </a>
                                </div>
                                
                                <div class="col-sm-4 portfolio-item filter edesp">
                                    <a class="portfolio-link" href="#portfolioModal18" data-toggle="modal">
                                        <div class="caption-port">
                                            <div class="caption-port-content">
                                                <i class="fa fa-search-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="img/EdiEsp/Maverick Tremor 2024.avif" alt="">
                                    </a>
                                </div>
                                
                                <div class="col-sm-4 portfolio-item filter edesp">
                                    <a class="portfolio-link" href="#portfolioModal19" data-toggle="modal">
                                        <div class="caption-port">
                                            <div class="caption-port-content">
                                                <i class="fa fa-search-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="img/EdiEsp/Expedition Timberline 2024.avif" alt="">
                                    </a>
                                </div>
                                
   
      
      
      
      
          </div>
      </section>

    <!--====================================================
                        SKILLS
    ======================================================-->       
      <section class=" d-flex flex-column" id="skills">
         <div class="p-lg-5 p-3 skill-cover">
          <h3 class="text-center text-white">El nuevo ford mustang 2024</h3>
          <div align="center">
              <video width="340" height="340" controls>
                     <source src="NuevoFordMustang 2024.mp4" type="video/mp4">
                     <source src="NuevoFordMustang 2024.mp4" type="video/ogg">
              </video>
          </div>
         </div> 
      </section>

    <!--====================================================
                           los Seminuevos
    ======================================================-->
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
          <div class="row my-auto">
              <div class="col-16">
                <h2 class="  text-center">Los Seminuevos</h2>
                <div class="mb-5 heading-border"></div>
              </div>
              
              
            
                  <div align="center" class="award">

                      <div class="award-content">
                          <img src="img/logo-s.png" width="200" height="50"  class="img-fluid">
                          <h1><span class="date">2024</span></h1>
                          <h5 class="title">Ford Lomas Automotriz</h5>
                          <p class="description">
                              Toda una gama de automoviles para tu gusto.
                          </p>
                      </div>
                            <div class="award-content">
                                <a href="https://www.fordlomas.mx/Seminuevos/"  target="_blank"><img src="img/Semi.jpg" width="340" height="200" class="img-fluid"></a>
                            </div>
      
              </div>
          </div>
      </section> 

    <!--====================================================
                          CONTACT
    ======================================================-->       
      <section class="resume-section p-3 p-lg-5 d-flex flex-column">
          <div class="row my-auto" id="contact"> 
            <div class="col-md-8">
              <div class="contact-cont">
                <h3>CONTACTAME</h3>
                <div class="heading-border-light"></div>
                <p>Envíame un correo electrónico, siempre estoy aquí para ayudar, SEGURAMENTE surgirá algo interesante en nuestra conversación..</p>
              </div>
            <form action="sendmail.php" method="post" role="form" class="php-email-form">
              <div class="row con-form">
                <div class="col-md-12">
                  <input type="text" name="nombre"  id="nombre" placeholder="Tu nombre completo " class="form-control">
                </div>
                <div class="col-md-12">
                  <input type="text" name="email" id="email" placeholder="Tu Email " class="form-control">
                </div>
                <div class="col-md-12">
                  <input type="tel" name="celular" id="celular" placeholder="Tu Celular" class="form-control">
                </div>
                <div class="col-md-12">
                  <input type="tel" name="teloficina" id="teloficina" placeholder="Tu Teléfono de Oficina" class="form-control">
                </div>
                <div class="col-md-12"><textarea name="mensaje" id="mensaje" placeholder="Cuentame cual es el vehículo de tu agrado."></textarea></div>
                <div class="col-md-12 sub-but"><button class="btn btn-general btn-white" role="button">Enviar</button></div>
              </form>
              </div>
            
            </div>
            <div class="col-md-4 col-sm-12 mt-5"> 
              <div class="contact-cont2"> 
                <div class="contact-add contact-box-desc">
                  <h3><i class="fa fa-map-marker cl-atlantis fa-2x"></i> Address</h3>
                  <p>Carretera México Toluca No. 3006, El Molinito Cuajimalpa<br>
                  CIUDAD DE MÉXICO y ZONA METROPOLITANA<br></p>
                </div>
                <div class="contact-phone contact-side-desc contact-box-desc">
                  <h3 style="color: #000000;" ><a href="tel:7224959025"><i class="fa fa-phone cl-atlantis fa-2x"></i> Celular</h3>
                  <p>7224959025</p></a>
                </div>

                <div class="contact-mail contact-side-desc contact-box-desc">
                  <h3><a href="mailto:alemv@fordlomas.com.mx" class=""><i class="fa fa-envelope-o cl-atlantis fa-2x"></i> Email</h3>
                <address class="address-details-f">
                  Email: alemv@fordlomas.com.mx</a>
                </address>
                

                
                
                
                
                <!--
                <ul class="list-inline social-icon-f top-data">
                  <li><a href="#" target="_empty"><i class="fa top-social fa-facebook" style="color: #4267b2; border-color:#4267b2;"></i></a></li>
                  <li><a href="#" target="_empty"><i class="fa top-social fa-twitter" style="color: #4AB3F4; border-color:#4AB3F4;"></i></a></li>
                  <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus" style="color: #e24343; border-color:#e24343;"></i></a></li> 
                </ul>
      -->
                </div>
              </div>
            </div> 
          </div>
      </section>

      <section class=" d-flex flex-column" id="maps">
        <div id="map">
                  <img src="img/image.imgs.full.high1.avif"   class="img-fluid">
                  <img src="img/image.imgs.full.high2.webp"   class="img-fluid">
                  <img src="img/image.imgs.full.high3.jpg"   class="img-fluid">
                  <img src="img/image.imgs.full.high4.jpg"   class="img-fluid">
          <div class="map-responsive">

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15056.49441094401!2d-99.2824893!3d19.3638!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20733b4f7b319%3A0xe654f979ccd20318!2sFord%20Lomas%20Automotriz!5e0!3m2!1ses!2smx!4v1709454924678!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    
    
   
          </div>
        </div>
      </section>


    </div>

<!--====================================================
                    PORTFOLIO MODALS
======================================================-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                            <div class="modal-body">
                                <div class="title-bar">
                                  <div class="col-md-12">
                                    <h2 class="text-center">MUSTANG MACH-E</h2>
                                    <div class="heading-border"></div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <img class="img-fluid img-centered" src="img/autos/Mustang 2024.avif" alt="">
                                  </div>
                                  <div class="col-md-6">
                                    <p>Ford Mustang 2024: 7 Generaciones de Deportividad Conoce al Heredero de la Tradición de los Muscle Car: Ford Mustang 2024, que en su Séptima Generación es el Vehículo Deportivo ideal para los entusiastas de una conducción Dinámica y Deportiva. Enamórate de las líneas de su espectacular rediseño y descubre cada elemento que ofrece a este Poderoso Auto.</p>
                                    <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                        <i class="fa fa-times"></i> Close
                                    </button>
                                </div>
                              </div>
                            </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

       
       <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="close-modal" data-dismiss="modal">
                       <div class="lr">
                           <div class="rl"></div>
                       </div>
                   </div>
                   <div class="container">
                   <div class="row">
                           <div class="modal-body">
                               <div class="title-bar">
                                 <div class="col-md-12">
                                   <h2 class="text-center">Bronco Sport 2024</h2>
                                   <div class="heading-border"></div>
                                 </div>
                               </div>
                               <div class="row">
                                 <div class="col-md-6">
                                   <img class="img-fluid img-centered" src="img/Suvs/Bronco Sport 2024.avif" alt="">
                                 </div>
                                 <div class="col-md-6">
                                   <p>Ford Bronco Sport 2024
                                   Descubre nuevos caminos fuera del pavimento y experimenta viajes llenos de diversión a bordo de la SUV con capacidades todoterreno Ford Bronco Sport 2024.

                                   Ya sea que desees ir de campamento, conocer la montaña, llevar tu equipo deportivo o cualquier viaje que te propongas, Ford Bronco Sport 2024 te acompañará a explorar tu lado aventurero.</p>
                                   
                                   <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                       <i class="fa fa-times"></i> Close
                                   </button>
                               </div>
                             </div>
                           </div>
                   </div>
               </div>
               </div>
           </div>
       </div>
       
       <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="close-modal" data-dismiss="modal">
                       <div class="lr">
                           <div class="rl"></div>
                       </div>
                   </div>
                   <div class="container">
                   <div class="row">
                           <div class="modal-body">
                               <div class="title-bar">
                                 <div class="col-md-12">
                                   <h2 class="text-center">Edge 2024</h2>
                                   <div class="heading-border"></div>
                                 </div>
                               </div>
                               <div class="row">
                                 <div class="col-md-6">
                                   <img class="img-fluid img-centered" src="img/Suvs/Edge 2024.avif" alt="">
                                 </div>
                                 <div class="col-md-6">
                                   <p>Ford Edge 2024 Prepárate para disfrutar de un manejo excepcional a bordo de Ford Edge 2024.Recorre nuevos lugares en Carretera o Ciudad, y descubre la Gran Tecnología, Asistencias y Seguridad equipadas que brindan una experiencia llena de confort total en cada viaje.

                                      Ford Edge 2024 es la SUV que se adapta a tu dinámico estilo de vida.</p>
                               
                                   <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                       <i class="fa fa-times"></i> Close
                                   </button>
                                 </div>
                             </div>
                           </div>
                   </div>
               </div>
               </div>
           </div>
       </div>
       
       <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="close-modal" data-dismiss="modal">
                       <div class="lr">
                           <div class="rl"></div>
                       </div>
                   </div>
                   <div class="container">
                   <div class="row">
                           <div class="modal-body">
                               <div class="title-bar">
                                 <div class="col-md-12">
                                   <h2 class="text-center">Expedition 2024</h2>
                                   <div class="heading-border"></div>
                                 </div>
                               </div>
                               <div class="row">
                                 <div class="col-md-6">
                                   <img class="img-fluid img-centered" src="img/Suvs/Expedition 2024.avif" alt="">
                                 </div>
                                 <div class="col-md-6">
                                   <p>Ford Expedition: Tecnología que te acompaña
                                   Redefine la experiencia de viajar con las Asistencias, Conectividad y Confort de Ford Expedition 2024, la SUV inteligente de gran equipamiento que está lista para acompañarte a ti y a las personas que amas en cada trayecto.</p>
                                  
                                   <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                       <i class="fa fa-times"></i> Close
                                   </button>
                                 </div>
                             </div>
                           </div>
                   </div>
               </div>
               </div>
           </div>
       </div>
       
       <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="close-modal" data-dismiss="modal">
                       <div class="lr">
                           <div class="rl"></div>
                       </div>
                   </div>
                   <div class="container">
                   <div class="row">
                           <div class="modal-body">
                               <div class="title-bar">
                                 <div class="col-md-12">
                                   <h2 class="text-center">Territory 2024</h2>
                                   <div class="heading-border"></div>
                                 </div>
                               </div>
                               <div class="row">
                                 <div class="col-md-6">
                                   <img class="img-fluid img-centered" src="img/Suvs/Territory 2024.avif" alt="">
                                 </div>
                                 <div class="col-md-6">
                                   <p>Ford Edge 2024
                                   Prepárate para disfrutar de un manejo excepcional a bordo de Ford Edge 2024.
                                   Recorre nuevos lugares en Carretera o Ciudad, y descubre la Gran Tecnología, Asistencias y Seguridad equipadas que brindan una experiencia llena de confort total en cada viaje.

                                   Ford Edge 2024 es la SUV que se adapta a tu dinámico estilo de vida.</p>
                                  
                                   <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                       <i class="fa fa-times"></i> Close
                                   </button>
                               </div>
                             </div>
                           </div>
                   </div>
               </div>
               </div>
           </div>
       </div>
       
       
    
    
    
    
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true" >
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                      <div class="rl"></div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                          <div class="modal-body">
                              <div class="title-bar">
                                <div class="col-md-12">
                                  <h2 class="text-center">Escape Híbrida 2024</h2>
                                  <div class="heading-border"></div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <img class="img-fluid img-centered" src="img/Hibelec/Escape Hibrida 2024.avif" alt="">
                                </div>
                                <div class="col-md-6">
                                  <p>Ford Escape Híbrida 2024
                                  Descubre el desempeño y tecnología que Ford Escape Híbrida 2024 tiene para ti. Ofrece gran eficiencia, ya que cuenta con un Motor Híbrido de 192HP de potencia combinada que ofrece una conducción con bajo consumo de gasolina y emisiones.</p>
                                  
                                  <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                      <i class="fa fa-times"></i> Close
                                  </button>
                              </div>
                            </div>
                          </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    
    
    
    
  
    
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">Maverick Híbrida 2024</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/Hibelec/Maverick Hibrida 2024.avif" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Ford Maverick Híbrida 2024
                                Atrévete a conducir la espectacular pickup Ford Maverick Híbrida, que llega a imponer nuevos paradigmas, ya que brinda una experiencia de manejo tecnológica, con eficiente consumo de gasolina y un bajo nivel de emisiones que te acompañarán en tu dinámico estilo de vida.

                                Conoce la primer SUT (Sport Utility Truck) del mercado mexicano.</p>
                                
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">Ford Maverick 2024</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/camiones/Maverick 2024.avif" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Ford Maverick 2024, Orgullosamente Hecha en México
                                
                                
                                Innovadora, Versátil y Tecnológica: La pickup que rompe estereotipos. Con un diseño audaz, amplio espacio interior y grandes capacidades para adaptarse a tu estilo de vida.

                                Déjate sorprender por Ford Maverick, la Pickup que no sabías que necesitabas.</p>
                                
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    
    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">Ford Ranger 2024</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/camiones/Ranger 2024.avif" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Ford Ranger 2024: La Camioneta Pickup lista para todo
                                Prepárate para vivir una conducción llena de Potencia y Emoción gracias a la Gran Capacidad, Fuerza y Tecnología de Ford Ranger 2024, la icónica Pickup respaldada por décadas de experiencia que te acompañará a descubrir nuevos terrenos.</p>
                               
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>    

    
        <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                            <div class="modal-body">
                                <div class="title-bar">
                                  <div class="col-md-12">
                                    <h2 class="text-center">Ford Super Duty Chasis 2024</h2>
                                    <div class="heading-border"></div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <img class="img-fluid img-centered" src="img/camiones/Super Duty Chasis 2024.avif" alt="">
                                  </div>
                                  <div class="col-md-6">
                                    <p>Ford Super Duty Chasis 2024
                                    
                                    Listo para cumplir con las tareas más rudas de cada jornada, Ford Super Duty Chasis 2024 cuenta con el torque más poderoso del segmento lo que lo convierte en el Vehículo Comercial ideal para cualquier tipo de negocio.
                                    Ford Super Duty Chasis 2024, es el camión para el jale de cada mexicano.</p>
                                   
                                    <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                        <i class="fa fa-times"></i> Close
                                    </button>
                                </div>
                              </div>
                            </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

    
    
        <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                            <div class="modal-body">
                                <div class="title-bar">
                                  <div class="col-md-12">
                                    <h2 class="text-center">Super Duty F-250 2024</h2>
                                    <div class="heading-border"></div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <img class="img-fluid img-centered" src="img/camiones/Super Duty F-250 2024.avif" alt="">
                                  </div>
                                  <div class="col-md-6">
                                    <p>Ford Super Duty F-250:
                                    El camión con el mayor torque del segmento
                                     

                                    No importa qué tan difícil sea el reto que se le ponga enfrente, Ford Super Duty F-250 2024 tiene la Capacidad, Tecnología y Fuerza para superarlo. Con diversas opciones de motorización, la Pickup con más poder del segmento te brinda una experiencia de manejo excepcional.

                                    Ford Super Duty F-250 2024: el Vehículo Construido para aquellos que no esperan el éxito, lo crean.</p>
                                   
                                    <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                        <i class="fa fa-times"></i> Close
                                    </button>
                                </div>
                              </div>
                            </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

    
        <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                            <div class="modal-body">
                                <div class="title-bar">
                                  <div class="col-md-12">
                                    <h2 class="text-center">Transit Chasis 2024</h2>
                                    <div class="heading-border"></div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <img class="img-fluid img-centered" src="img/camiones/Transit Chasis 2024.avif" alt="">
                                  </div>
                                  <div class="col-md-6">
                                    <p>Conoce Ford Transit Chasis 2023: El Vehículo de Trabajo que se adapta a tus necesidades
                                    Ford Transit Chasis 2023 es el Vehículo Comercial ideal para tu Empresa gracias a la infinidad de posibilidades para adaptarse a tu Negocio. Elige las versión que se ajuste mejor a tus requerimientos para así llevar tu empresa al siguiente nivel.</p>
                                   
                                    <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                        <i class="fa fa-times"></i> Close
                                    </button>
                                </div>
                              </div>
                            </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

    
    
        <div class="portfolio-modal modal fade" id="portfolioModal13" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                            <div class="modal-body">
                                <div class="title-bar">
                                  <div class="col-md-12">
                                    <h2 class="text-center">Transit Pasajeros 2024</h2>
                                    <div class="heading-border"></div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <img class="img-fluid img-centered" src="img/camiones/Transit Pasajeros 2024.avif" alt="">
                                  </div>
                                  <div class="col-md-6">
                                    <p>Ford Transit Pasajeros 2024
                                    Transporta hasta 18 ocupantes con Gran Estilo y Comodidad con Ford Transit Pasajeros 2024, la Van Comercial con el Rendimiento y Tecnología capaz de transformar el transporte corporativo y organizacional en una experiencia llena de Confort y Seguridad en cada viaje para todos. Elige entre las versiones Gasolina o Diésel la que mejor se adapte a las necesidades de tu empresa.</p>
                                   
                                    <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                        <i class="fa fa-times"></i> Close
                                    </button>
                                </div>
                              </div>
                            </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

    
    
        <div class="portfolio-modal modal fade" id="portfolioModal14" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                            <div class="modal-body">
                                <div class="title-bar">
                                  <div class="col-md-12">
                                    <h2 class="text-center">Transit Van 2024</h2>
                                    <div class="heading-border"></div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <img class="img-fluid img-centered" src="img/camiones/Transit Van 2024.avif" alt="">
                                  </div>
                                  <div class="col-md-6">
                                    <p>El Vehículo Comercial que se adapta a tu negocio
                                    
                                    Ford Transit Van 2024 está diseñada con la flexibilidad y versatilidad para adaptarse a las necesidades de tu Empresa o Negocio y ofrecerte todo lo que necesitas de un Vehículo Comercial. Porque de eso se trata el éxito, de seguir avanzando.</p>
                                   
                                    <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                        <i class="fa fa-times"></i> Close
                                    </button>
                                </div>
                              </div>
                            </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

    
            <div class="portfolio-modal modal fade" id="portfolioModal15" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl"></div>
                            </div>
                        </div>
                        <div class="container">
                        <div class="row">
                                <div class="modal-body">
                                    <div class="title-bar">
                                      <div class="col-md-12">
                                        <h2 class="text-center">Ford Edge ST 2024</h2>
                                        <div class="heading-border"></div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <img class="img-fluid img-centered" src="img/Performance/Ford Edge ST 2024.avif" alt="">
                                      </div>
                                      <div class="col-md-6">
                                        <p>Ford Edge ST 2024, la SUV Deportiva
                                        de Gran Performance
                                        Experimenta la Deportividad que brinda Ford Edge ST 2024 en cada uno de tus viajes y déjate sorprender por sus Asistencias de Manejo desarrolladas para tu seguridad.</p>
                                       
                                        <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                            <i class="fa fa-times"></i> Close
                                        </button>
                                    </div>
                                  </div>
                                </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
    
                <div class="portfolio-modal modal fade" id="portfolioModal16" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="close-modal" data-dismiss="modal">
                                <div class="lr">
                                    <div class="rl"></div>
                                </div>
                            </div>
                            <div class="container">
                            <div class="row">
                                    <div class="modal-body">
                                        <div class="title-bar">
                                          <div class="col-md-12">
                                            <h2 class="text-center">Ranger Raptor 2024</h2>
                                            <div class="heading-border"></div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <img class="img-fluid img-centered" src="img/Performance/Ranger Raptor 2024.avif" alt="">
                                          </div>
                                          <div class="col-md-6">
                                            <p>Ford Ranger Raptor 2024
                                            Atrévete a conquistar nuevos senderos y tomar el control sobre cualquier tipo de terreno. Vive la emoción de una conducción llena de potencia y adrenalina en la aventura con la Camioneta Pickup Off-Road más potente y veloz de su segmento.

                                            Ford Ranger Raptor 2024, la poderosa y capaz Pickup para vivir la aventura dentro y fuera del camino.</p>
                                           
                                            <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                                <i class="fa fa-times"></i> Close
                                            </button>
                                        </div>
                                      </div>
                                    </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
    
                
                            <div class="portfolio-modal modal fade" id="portfolioModal17" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-modal" data-dismiss="modal">
                                            <div class="lr">
                                                <div class="rl"></div>
                                            </div>
                                        </div>
                                        <div class="container">
                                        <div class="row">
                                                <div class="modal-body">
                                                    <div class="title-bar">
                                                      <div class="col-md-12">
                                                        <h2 class="text-center">Mustang Dark Horse</h2>
                                                        <div class="heading-border"></div>
                                                      </div>
                                                    </div>
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                        <img class="img-fluid img-centered" src="img/EdiEsp/Mustang Dark Horse.avif" alt="">
                                                      </div>
                                                      <div class="col-md-6">
                                                        <p>Ford Mustang Dark Horse 2024: El inicio de una Nueva Era
                                                        
                                                        
                                                        Desarrollado para romper paradigmas de forma poderosa y dinámica, Ford Mustang Dark Horse 2024 es el auto deportivo de líneas elegantes cuyo diseño está optimizado aerodinámicamente para destacar por su velocidad y deportividad en las pistas.

                                                        Ford Mustang Dark Horse 2024 es la Nueva Definición del Poder.</p>
                                                       
                                                        <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                                            <i class="fa fa-times"></i> Close
                                                        </button>
                                                    </div>
                                                  </div>
                                                </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="portfolio-modal modal fade" id="portfolioModal18" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-modal" data-dismiss="modal">
                                            <div class="lr">
                                                <div class="rl"></div>
                                            </div>
                                        </div>
                                        <div class="container">
                                        <div class="row">
                                                <div class="modal-body">
                                                    <div class="title-bar">
                                                      <div class="col-md-12">
                                                        <h2 class="text-center">Maverick Tremor 2024</h2>
                                                        <div class="heading-border"></div>
                                                      </div>
                                                    </div>
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                        <img class="img-fluid img-centered" src="img/EdiEsp/Maverick Tremor 2024.avif" alt="">
                                                      </div>
                                                      <div class="col-md-6">
                                                        <p>Explora tu lado Off-Road
                                                        con Ford Maverick Tremor 2024
                                                         

                                                        Descubre el Diseño y Equipamiento de Ford Maverick Tremor 2024, la Pickup Todoterreno de uso personal que ofrece una experiencia de conducción única y emocionante. Ya sea que estés atravesando un camino rocoso o cruzando un terreno lodoso, Ford Maverick Tremor está lista para enfrentar cualquier desafío.

                                                        Orgullosamente producida en México.</p>
                                                       
                                                        <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                                            <i class="fa fa-times"></i> Close
                                                        </button>
                                                    </div>
                                                  </div>
                                                </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="portfolio-modal modal fade" id="portfolioModal19" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="close-modal" data-dismiss="modal">
                                            <div class="lr">
                                                <div class="rl"></div>
                                            </div>
                                        </div>
                                        <div class="container">
                                        <div class="row">
                                                <div class="modal-body">
                                                    <div class="title-bar">
                                                      <div class="col-md-12">
                                                        <h2 class="text-center">Expedition Timberline 2024</h2>
                                                        <div class="heading-border"></div>
                                                      </div>
                                                    </div>
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                        <img class="img-fluid img-centered" src="img/EdiEsp/Expedition Timberline 2024.avif" alt="">
                                                      </div>
                                                      <div class="col-md-6">
                                                        <p>Ford Expedition Timberline 2024
                                                        Experimenta en familia las mejores rutas todoterreno a bordo de la SUV Edición Especial 4x4: Ford Expedition Timberline, el vehículo con capacidades Off-Road diseñado para hacer realidad las aventuras más divertidas dentro de la naturaleza.</p>
                                                       
                                                        <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                                            <i class="fa fa-times"></i> Close
                                                        </button>
                                                    </div>
                                                  </div>
                                                </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
    
<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div align="center" class="copyright-box">
          <p class="copyright"><strong>Alejandra Morales Vargas</strong> Tarjeta Digital "Demo"</p>
          <p class="copyright">&copy; Copyright <strong>Digitalizandote.digital es una Marca de NetRabbit, S.A. DE C.V.</strong> Todos los derechos reservados</p>
          <div class="credits">

            Diseñada  Por: <a href="https://netrabbit.online/" target="_blank">Net Rabbit, S.A. de C.V. Online</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer><!-- End  Footer -->

    
    
    

    <!-- Global javascript -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/counter/jquery.waypoints.min.js"></script>
    <script src="js/counter/jquery.counterup.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).ready(function(){

        $(".filter-b").click(function(){
            var value = $(this).attr('data-filter');
            if(value == "all")
            { 
                $('.filter').show('1000');
            }
            else
            { 
                $(".filter").not('.'+value).hide('3000');
                $('.filter').filter('.'+value).show('3000');
            }
        });
        
        if ($(".filter-b").removeClass("active")) {
          $(this).removeClass("active");
        }
        $(this).addClass("active");
        });

        // SKILLS
        $(function () {
            $('.counter').counterUp({
                delay: 10,
                time: 2000
            });

        });
    </script> 
</body>

</html>
