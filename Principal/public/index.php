<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  error_reporting(0); // Para que no sean visibles los errores en pantalla
  session_start(); // Renovar la sesión
  if (isset($_SESSION['usuario'])) {  // * El usuario ha iniciado sesión personal
    $acceso = 1; // El usuario inició sesión personal
    $UsuarioID = $_SESSION['usuario']; // OBTENCIÓN DE USUARIO DE SESIÓN
  }
  date_default_timezone_set('America/Mexico_City'); // Zona Horarioa de PHP
  $hoy = date("Y/m/d H:i:s"); // Fecha actual en formato estándar

  include '../../login/conn.php'; // * Incluyendo la Conexión
  ?>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>DIGITALIZANDOTE</title>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="build/css/tailwind.css" />



  <!-- libreias font -->
  <!-- Icon Font Stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.5.x/dist/component.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
</head>

<body>
  <?php
  // ! Validación de Sesión
  if ($acceso == 1) {  // * El usuario ha iniciado sesión, permite el acceso a la página protegida
  ?>
    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden'); setColors(color);" :class="{ 'dark': isDark}">
      <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
        <!-- Loading screen -->
        <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-primary-darker">
          Loading.....
        </div>
        <?php
        $query = $DB->query("SELECT nombre FROM usunegocios WHERE idusuneg = $UsuarioID");
        $dato = mysqli_fetch_assoc($query);
        $nombre = $dato['nombre'];
        ?>
        <!-- Sidebar -->
        <aside class="flex-shrink-0 hidden w-64 bg-white border-r dark:border-primary-darker dark:bg-darker md:block">
          <div class="flex flex-col h-full">
            <!-- Sidebar links -->
            <nav aria-label="Main" class="flex-1 px-2 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">
              <!-- Dashboards links -->
              <div x-data="{ isActive: true, open: true}">
                <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary" :class="{'bg-primary-100 dark:bg-primary': isActive || open}" role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                  <span aria-hidden="true">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                  </span>
                  <span class="ml-2 text-sm"> Digitalizandote </span>
                  <span class="ml-auto" aria-hidden="true">

                  </span>
                </a>
                <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                  <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                  <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                  <a href="index.php" role="menuitem" class="block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:text-light dark:hover:text-light hover:text-gray-700">
                    Panel Principal
                  </a>
                  <!-- <a href="#" role="menuitem"
                  class="block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:text-light dark:hover:text-light hover:text-gray-700">
                  Usuarios
                </a> -->

                </div>
              </div>

              <!-- Components links -->
              <div x-data="{ isActive: false, open: false }">
                <!-- active classes 'bg-primary-100 dark:bg-primary' -->
                <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary" :class="{ 'bg-primary-100 dark:bg-primary': isActive || open }" role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">

                  <span class="ml-2 text-sm"><i class="fa-solid fa-list"></i> Catálogos </span>
                  <span aria-hidden="true" class="ml-auto">
                    <!-- active class 'rotate-180' -->

                  </span>
                </a>
                <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Components">
                  <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                  <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->

                  <a href="../../Catalogos/categoria.php" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                    Categorias
                  </a>
                  <a href="../../Catalogos/clientes.php" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                    Clientes
                  </a>
                  <a href="../../Catalogos/plantillas.php" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                    Plantillas
                  </a>
                  <a href="../../Catalogos/pro.php" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                    Productos
                  </a>
                  <a href="../../Catalogos/servicio.php" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                    servicios
                  </a>
                  <!--  -->
                </div>
              </div>

              <!-- CATEGORIAS -->
              <div x-data="{ isActive: false, open: false }">
                <!-- active classes 'bg-primary-100 dark:bg-primary' -->
                <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary" :class="{ 'bg-primary-100 dark:bg-primary': isActive || open }" role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">

                  <span class="ml-2 text-sm"> <i class="fa-solid fa-layer-group"></i>Categorías </span>
                  <span aria-hidden="true" class="ml-auto">
                    <!-- active class 'rotate-180' -->

                  </span>
                </a>
                <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Pages">
                  <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                  <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                  <a href="../../Plantillas/plantillas/index.html" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                    Categorias disponibles
                  </a>

                </div>
              </div>

              <!-- Authentication links -->
              <div x-data="{ isActive: false, open: false}">
                <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary" :class="{'bg-primary-100 dark:bg-primary': isActive || open}" role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                  <span aria-hidden="true">

                  </span>
                  <span class="ml-2 text-sm"><i class="fa-solid fa-building"></i> Negocios</span>
                  <span aria-hidden="true" class="ml-auto">
                    <!-- active class 'rotate-180' -->

                  </span>
                </a>
                <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
                  <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                  <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                  <a href="pages/blank.php" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                    Mis Negocios
                  </a>
                </div>
              </div>

              <!-- Layouts links -->
              <div x-data="{ isActive: false, open: false}">
                <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary" :class="{'bg-primary-100 dark:bg-primary': isActive || open}" role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">

                  <span class="ml-2 text-sm"><i class="fa-solid fa-star"></i></i> Mis favoritos </span>
                  <span aria-hidden="true" class="ml-auto">

                  </span>
                </a>
                <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Layouts">
                  <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                  <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                  <a href="layouts/two-columns-sidebar.php" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                    Mis Favoritos
                  </a>

                </div>
              </div>

              <div x-data="{ isActive: false, open: false}">
                <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary" :class="{'bg-primary-100 dark:bg-primary': isActive || open}" role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">

                  <span class="ml-2 text-sm"><i class="fa-solid fa-pen-ruler"></i></i> Borradores </span>
                  <span aria-hidden="true" class="ml-auto">

                  </span>
                </a>
                <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Layouts">
                  <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                  <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                  <a href="layouts/two-columns-sidebar.php" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                    Mis borradores
                  </a>

                </div>
              </div>

            </nav>

            <!-- Sidebar footer -->
            <div class="flex-shrink-0 px-2 py-4 space-y-2">
              <button @click="openSettingsPanel" type="button" class="flex items-center justify-center w-full px-4 py-2 text-sm text-white rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring focus:ring-primary-dark focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark">

                <span><i class="fa-solid fa-sliders"></i>Configuracion</span>
              </button>
            </div>
          </div>
        </aside>

        <div class="flex-1 h-full overflow-x-hidden overflow-y-auto">
          <!-- Navbar -->
          <header class="relative bg-white dark:bg-darker">
            <div class="flex items-center justify-between p-2 border-b dark:border-primary-darker">
              <!-- Mobile menu button -->
              <button @click="isMobileMainMenuOpen = !isMobileMainMenuOpen" class="p-1 transition-colors duration-200 rounded-md text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark md:hidden focus:outline-none focus:ring">
                <!-- <span class="sr-only">Open main manu</span>
              <span aria-hidden="true">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
              </span> -->
              </button>

              <!-- Barra encabezado -->
              <a href="./index.php" class="inline-block text-2xl font-bold tracking-wider uppercase text-primary-dark dark:text-light">
                <img src="../../img/logoazul.png" width="110" height="20" alt="">
              </a>

              <!-- Mobile sub menu button -->
              <button @click="isMobileSubMenuOpen = !isMobileSubMenuOpen" class="p-1 transition-colors duration-200 rounded-md text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark md:hidden focus:outline-none focus:ring">
                <!-- <span class="sr-only">Open sub manu</span>
              <span aria-hidden="true">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
              </span> -->
              </button>

              <!-- Desktop Right buttons -->
              <nav aria-label="Secondary" class="hidden space-x-2 md:flex md:items-center">
                <!-- Toggle dark theme button -->
                <button aria-hidden="true" class="relative focus:outline-none" x-cloak @click="toggleTheme">
                  <div class="w-12 h-6 transition rounded-full outline-none bg-primary-100 dark:bg-primary-lighter"></div>
                  <div class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-150 transform scale-110 rounded-full shadow-sm" :class="{ 'translate-x-0 -translate-y-px  bg-white text-primary-dark': !isDark, 'translate-x-6 text-primary-100 bg-primary-darker': isDark }">

                    <svg x-show="isDark" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                  </div>
                </button>

                <!-- Settings button -->
                <button @click="openSettingsPanel" class="p-2 transition-colors duration-200 rounded-full text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker">
                  <span class="sr-only">Open settings panel</span>
                  <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </button>

                <!-- User avatar button -->
                <div class="relative" x-data="{ open: false }">
                  <button @click="open = !open; $nextTick(() => { if(open){ $refs.userMenu.focus() } })" type="button" aria-haspopup="true" :aria-expanded="open ? 'true' : 'false'" class="transition-opacity duration-200 rounded-full dark:opacity-75 dark:hover:opacity-100 focus:outline-none focus:ring dark:focus:opacity-100">
                    <span class="sr-only">Usuario</span>
                    <img class="w-10 h-10 rounded-full" src="../../img/logoazul.png" alt="Ahmed Kamel" />
                  </button>

                  <!-- User dropdown menu -->
                  <div x-show="open" x-ref="userMenu" x-transition:enter="transition-all transform ease-out" x-transition:enter-start="translate-y-1/2 opacity-0" x-transition:enter-end="translate-y-0 opacity-100" x-transition:leave="transition-all transform ease-in" x-transition:leave-start="translate-y-0 opacity-100" x-transition:leave-end="translate-y-1/2 opacity-0" @click.away="open = false" @keydown.escape="open = false" class="absolute right-0 w-48 py-1 bg-white rounded-md shadow-lg top-12 ring-1 ring-black ring-opacity-5 dark:bg-dark focus:outline-none" tabindex="-1" role="menu" aria-orientation="vertical" aria-label="User menu">
                    <a href="#" role="menuitem" class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary">
                      Mi perfil
                    </a>
                    <!-- <a href="#" role="menuitem"
                    class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary">
                    Configuracion
                  </a> -->
                    <a href="../../login/login.php" role="menuitem" class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary">
                      Cerrar sesion
                    </a>
                  </div>
                </div>
              </nav>

              <!-- Mobile sub menu -->
              <nav x-transition:enter="transition duration-200 ease-in-out transform sm:duration-500" x-transition:enter-start="-translate-y-full opacity-0" x-transition:enter-end="translate-y-0 opacity-100" x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500" x-transition:leave-start="translate-y-0 opacity-100" x-transition:leave-end="-translate-y-full opacity-0" x-show="isMobileSubMenuOpen" @click.away="isMobileSubMenuOpen = false" class="absolute flex items-center p-4 bg-white rounded-md shadow-lg dark:bg-darker top-16 inset-x-4 md:hidden" aria-label="Secondary">
                <div class="space-x-2">
                  <!-- Toggle dark theme button -->
                  <button aria-hidden="true" class="relative focus:outline-none" x-cloak @click="toggleTheme">
                    <div class="w-12 h-6 transition rounded-full outline-none bg-primary-100 dark:bg-primary-lighter">
                    </div>
                    <div class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-200 transform scale-110 rounded-full shadow-sm" :class="{ 'translate-x-0 -translate-y-px  bg-white text-primary-dark': !isDark, 'translate-x-6 text-primary-100 bg-primary-darker': isDark }">
                      <svg x-show="!isDark" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                      </svg>
                      <svg x-show="isDark" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                      </svg>
                    </div>
                  </button>



                  <!-- Settings button -->
                  <button @click="openSettingsPanel(); $nextTick(() => { isMobileSubMenuOpen = false })" class="p-2 transition-colors duration-200 rounded-full text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker">
                    <span class="sr-only">Panel de configuracion</span>
                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                  </button>
                </div>

                <!-- User avatar button -->

              </nav>
            </div>

          </header>

          <!-- Main content -->
          <main>
            <!-- Content header -->
            <div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
              <h1 class="text-2xl font-semibold">Digitalizandote</h1>
              <!-- <a href="https://github.com/Kamona-WD/kwd-dashboard" target="_blank"
              class="px-4 py-2 text-sm text-white rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring focus:ring-primary focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark">
              View on github
            </a> -->
            </div>


            <div class="grid grid-cols-1 p-4 space-y-8 lg:gap-8 lg:space-y-0 lg:grid-cols-3">

              <div class="col-span-2 bg-white rounded-md dark:bg-darker" x-data="{ isOn: false }">
                <!-- Card header -->
                <div class="flex items-center justify-between p-4 border-b dark:border-primary">
                  <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Plantillas</h4>
                </div>
              </div>
            </div>

            <!-- CAROUSEL -->
            <div class="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <a href="https://digitalizandote.digital/plantillas/td1/" target="_blank">
                    <img src="../../Plantillas/Plantilla1.png" alt="Plantilla 1">
                    <div class="col-10 col-lg-8">
                      <div class="text-container">
                        <h2>Plantillas para Diseño Web</h2>
                        <p> Estas plantillas ofrecen una estructura predefinida y elementos visuales que puedes personalizar según tus necesidades específicas.
                          Una plantilla de diseño web te proporciona una base sobre la cual puedes construir tu sitio web. Esta base incluye un diseño cohesivo, una estructura de navegación intuitiva, y una disposición visual atractiva.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="https://digitalizandote.digital/plantillas/td2/" target="_blank">
                    <img src="../../Plantillas/Plantilla2.png" alt="Plantilla 2">
                    <div class="col-10 col-lg-8">
                      <div class="text-container">
                        <h2>Plantillas para Contador</h2>
                        <p>Estas plantillas ofrecen una estructura predefinida que facilita la entrada y el análisis de datos, ahorrando tiempo y reduciendo errores.
                          Una plantilla para contadores te proporciona una base organizada sobre la cual puedes estructurar tus informes financieros y contables.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="https://digitalizandote.digital/plantillas/td3/" target="_blank">
                    <img src="../../Plantillas/Plantilla3.png" alt="Plantilla 3">
                    <div class="col-10 col-lg-8">
                      <div class="text-container">
                        <h2>Plantillas para Fotografos</h2>
                        <p>Estas plantillas ofrecen una estructura predefinida que facilita la organización y presentación de tus fotografías y servicios.
                          Puedes organizar y presentar tus mejores trabajos fotográficos en galerías atractivas y fáciles de navegar.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="https://digitalizandote.digital/plantillas/td4/" target="_blank">
                    <img src="../../Plantillas/Plantilla4.png" alt="Plantilla 4">
                    <div class="col-10 col-lg-8">
                      <div class="text-container">
                        <h2>Entrenador</h2>
                        <p>Estas plantillas ofrecen una estructura predefinida que facilita la organización y presentación de tu trabajo y servicios.
                          Puedes detallar rutinas de ejercicio, planes de entrenamiento y recomendaciones nutricionales de manera clara y profesional.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="https://digitalizandote.digital/plantillas/td5/" target="_blank">
                    <img src="../../Plantillas/Plantilla5.png" alt="Plantilla 5">
                    <div class="col-10 col-lg-8">
                      <div class="text-container">
                        <h2>Comida/ Gastronomia</h2>
                        <p>Estas plantillas ofrecen una estructura predefinida que facilita la organización y presentación de tu trabajo culinario y de tu negocio.
                          Puedes diseñar menús visualmente atractivos para restaurantes, cafés, o servicios de catering, incluyendo descripciones de platos y precios.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="https://digitalizandote.digital/plantillas/td6/" target="_blank">
                    <img src="../../Plantillas/Plantilla6.png" alt="Plantilla 6">
                    <div class="col-10 col-lg-8">
                      <div class="text-container">
                        <h2>Networker Profesional</h2>
                        <p>Estas plantillas ofrecen una estructura predefinida que facilita la gestión y presentación de tu red de contactos y actividades de networking.
                          Puedes mantener un registro detallado de tus contactos, incluyendo información relevante como nombres, empresas, cargos y detalles de contacto.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="https://digitalizandote.digital/plantillas/td7/" target="_blank">
                    <img src="../../Plantillas/Plantilla7.png" alt="Plantilla 7">
                    <div class="col-10 col-lg-8">
                      <div class="text-container">
                        <h2>Docentes</h2>
                        <p>Estas plantillas ofrecen una estructura predefinida que facilita la organización y presentación de tu trabajo educativo.
                          Una plantilla para maestros te proporciona una base organizada sobre la cual puedes estructurar tu contenido y la información de tus clases y estudiantes.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="https://digitalizandote.digital/plantillas/td8/" target="_blank">
                    <img src="../../Plantillas/Plantilla8.png" alt="Plantilla 8">
                    <div class="col-10 col-lg-8">
                      <div class="text-container">
                        <h2>Espacios de Coworking</h2>
                        <p>DEstas plantillas ofrecen una estructura predefinida que facilita la organización y presentación de tu espacio y servicios.
                          Puedes presentar de manera atractiva las diferentes áreas de trabajo, salas de reuniones, servicios adicionales y comodidades que ofreces.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="https://digitalizandote.digital/plantillas/td9/" target="_blank">
                    <img src="../../Plantillas/Plantilla9.png" alt="Plantilla 9">
                    <div class="col-10 col-lg-8">
                      <div class="text-container">
                        <h2>Arquitectura Moderna</h2>
                        <p>Estas plantillas ofrecen una estructura predefinida que facilita la organización y presentación de tus trabajos arquitectónicos.
                          Presenta tus diseños, planos, renders y fotografías de manera atractiva y organizada.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="https://digitalizandote.digital/plantillas/td10/" target="_blank">
                    <img src="../../Plantillas/Plantilla10.png" alt="Plantilla 10">
                    <div class="col-10 col-lg-8">
                      <div class="text-container">
                        <h2>Auditores Profesionales</h2>
                        <p>Esta base incluye formatos estandarizados y secciones predefinidas que puedes personalizar según los requerimientos específicos de cada auditoría.
                          Puedes incluir resúmenes ejecutivos, detalles de contacto y fechas clave para una comunicación efectiva.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="https://digitalizandote.digital/plantillas/td11/" target="_blank">
                    <img src="../../Plantillas/Plantilla11.png" alt="Plantilla 11">
                    <div class="col-10 col-lg-8">
                      <div class="text-container">
                        <h2>Construcciones</h2>
                        <p>Una plantilla para construcción te proporciona una base organizada sobre la cual puedes estructurar la información crucial de tus proyectos.
                          Puedes incluir informes de avance, detalles de contacto y fechas clave para una comunicación efectiva y transparente.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="https://digitalizandote.digital/plantillas/td12/" target="_blank">
                    <img src="../../Plantillas/Plantilla12.png" alt="Plantilla 12">
                    <div class="col-10 col-lg-8">
                      <div class="text-container">
                        <h2>Excursiones</h2>
                        <p> Estas plantillas ofrecen una estructura predefinida que facilita la organización y presentación de los detalles cruciales de tus excursiones.
                          Puedes incluir información sobre equipamiento necesario, recomendaciones de seguridad y requisitos de salud para los participantes.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="https://digitalizandote.digital/plantillas/td13/" target="_blank">
                    <img src="../../Plantillas/Plantilla13.png" alt="Plantilla 13">
                    <div class="col-10 col-lg-8">
                      <div class="text-container">
                        <h2>Diseñadores de Moda</h2>
                        <p>Estas plantillas ofrecen una estructura predefinida que facilita la organización y presentación de tus creaciones.
                          Puedes mostrar tus diseños, croquis, telas y colores de manera ordenada y profesional.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="https://digitalizandote.digital/plantillas/td14/" target="_blank">
                    <img src="../../Plantillas/Plantilla14.png" alt="Plantilla 14">
                    <div class="col-10 col-lg-8">
                      <div class="text-container">
                        <h2>Estilistas, Barberos y Peluqueros</h2>
                        <p>Estas plantillas ofrecen una estructura predefinida que facilita la organización y presentación de tus habilidades y servicios.
                          Puedes presentar cortes de pelo, peinados, coloraciones y tratamientos de manera visualmente atractiva.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="https://digitalizandote.digital/plantillas/td15/" target="_blank">
                    <img src="../../Plantillas/Plantilla15.png" alt="Plantilla 15">
                    <div class="col-10 col-lg-8">
                      <div class="text-container">
                        <h2>Freelancers</h2>
                        <p>Esta base incluye formatos estandarizados y secciones predefinidas que puedes personalizar según las necesidades específicas de tu especialidad.
                          Puedes mostrar tus habilidades, experiencia y servicios ofrecidos de forma clara y atractiva.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <button class="carousel-control prev" onclick="moveCarousel(-1)">&#10094;</button>
              <button class="carousel-control next" onclick="moveCarousel(1)">&#10095;</button>
            </div>


          </main>

          <!-- Main footer -->
          <footer class="flex items-center justify-between p-4 bg-white border-t dark:bg-darker dark:border-primary-darker">
            <div class="col-12 col-sm-12 ">
              Copyrights &copy; 2023 Digitalizandote es una Marca de Netrabbit Diseñado por: <a href="#"> Netrabbit, S.A.
                de C.V.</a>
            </div>
          </footer>
        </div>

        <!-- Panels -->

        <!-- Settings Panel -->
        <!-- Backdrop -->
        <div x-transition:enter="transition duration-300 ease-in-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300 ease-in-out" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-show="isSettingsPanelOpen" @click="isSettingsPanelOpen = false" class="fixed inset-0 z-10 bg-primary-darker" style="opacity: 0.5" aria-hidden="true"></div>
        <!-- Panel -->
        <section x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" x-ref="settingsPanel" tabindex="-1" x-show="isSettingsPanelOpen" @keydown.escape="isSettingsPanelOpen = false" class="fixed inset-y-0 right-0 z-20 w-full max-w-xs bg-white shadow-xl dark:bg-darker dark:text-light sm:max-w-md focus:outline-none" aria-labelledby="settinsPanelLabel">
          <div class="absolute left-0 p-2 transform -translate-x-full">
            <!-- Close button -->
            <button @click="isSettingsPanelOpen = false" class="p-2 text-white rounded-md focus:outline-none focus:ring">
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <!-- Panel content -->
          <div class="flex flex-col h-screen">
            <!-- Panel header -->
            <div class="flex flex-col items-center justify-center flex-shrink-0 px-4 py-8 space-y-4 border-b dark:border-primary-dark">
              <span aria-hidden="true" class="text-gray-500 dark:text-primary">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                </svg>
              </span>
              <h2 id="settinsPanelLabel" class="text-xl font-medium text-gray-500 dark:text-light">Configuracion</h2>
            </div>
            <!-- Content -->
            <div class="flex-1 overflow-hidden hover:overflow-y-auto">
              <!-- Colores del diseño de fondo -->
              <div class="p-4 space-y-4 md:p-8">
                <h6 class="text-lg font-medium text-gray-400 dark:text-light">Diseño</h6>
                <div class="flex items-center space-x-8">
                  <!-- Light button -->
                  <button @click="setLightTheme" class="flex items-center justify-center px-4 py-2 space-x-4 transition-colors border rounded-md hover:text-gray-900 hover:border-gray-900 dark:border-primary dark:hover:text-primary-100 dark:hover:border-primary-light focus:outline-none focus:ring focus:ring-primary-lighter focus:ring-offset-2 dark:focus:ring-offset-dark dark:focus:ring-primary-dark" :class="{ 'border-gray-900 text-gray-900 dark:border-primary-light dark:text-primary-100': !isDark, 'text-gray-500 dark:text-primary-light': isDark }">
                    <span>
                      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                      </svg>
                    </span>
                    <span>Light</span>
                  </button>

                  <!-- Dark button -->
                  <button @click="setDarkTheme" class="flex items-center justify-center px-4 py-2 space-x-4 transition-colors border rounded-md hover:text-gray-900 hover:border-gray-900 dark:border-primary dark:hover:text-primary-100 dark:hover:border-primary-light focus:outline-none focus:ring focus:ring-primary-lighter focus:ring-offset-2 dark:focus:ring-offset-dark dark:focus:ring-primary-dark" :class="{ 'border-gray-900 text-gray-900 dark:border-primary-light dark:text-primary-100': isDark, 'text-gray-500 dark:text-primary-light': !isDark }">
                    <span>
                      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                      </svg>
                    </span>
                    <span>Dark</span>
                  </button>
                </div>
              </div>

              <!-- Colores -->
              <div class="p-4 space-y-4 md:p-8">
                <h6 class="text-lg font-medium text-gray-400 dark:text-light">Colors</h6>
                <div>
                  <button @click="setColors('cyan')" class="w-10 h-10 rounded-full" style="background-color: var(--color-cyan)"></button>
                  <button @click="setColors('teal')" class="w-10 h-10 rounded-full" style="background-color: var(--color-teal)"></button>
                  <button @click="setColors('green')" class="w-10 h-10 rounded-full" style="background-color: var(--color-green)"></button>
                  <button @click="setColors('fuchsia')" class="w-10 h-10 rounded-full" style="background-color: var(--color-fuchsia)"></button>
                  <button @click="setColors('blue')" class="w-10 h-10 rounded-full" style="background-color: var(--color-blue)"></button>
                  <button @click="setColors('violet')" class="w-10 h-10 rounded-full" style="background-color: var(--color-violet)"></button>
                </div>
              </div>
            </div>
          </div>
        </section>


      </div>
    </div>

    <!-- All javascript code in this project for now is just for demo DON'T RELY ON IT  -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.bundle.min.js"></script>
    <script src="build/js/script.js"></script>
    <script src="build/js/car.js"></script>



    <script>
      const setup = () => {
        const getTheme = () => {
          if (window.localStorage.getItem('dark')) {
            return JSON.parse(window.localStorage.getItem('dark'))
          }

          return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
        }

        const setTheme = (value) => {
          window.localStorage.setItem('dark', value)
        }

        const getColor = () => {
          if (window.localStorage.getItem('color')) {
            return window.localStorage.getItem('color')
          }
          return 'cyan'
        }

        const setColors = (color) => {
          const root = document.documentElement
          root.style.setProperty('--color-primary', `var(--color-${color})`)
          root.style.setProperty('--color-primary-50', `var(--color-${color}-50)`)
          root.style.setProperty('--color-primary-100', `var(--color-${color}-100)`)
          root.style.setProperty('--color-primary-light', `var(--color-${color}-light)`)
          root.style.setProperty('--color-primary-lighter', `var(--color-${color}-lighter)`)
          root.style.setProperty('--color-primary-dark', `var(--color-${color}-dark)`)
          root.style.setProperty('--color-primary-darker', `var(--color-${color}-darker)`)
          this.selectedColor = color
          window.localStorage.setItem('color', color)
          //
        }

        const updateBarChart = (on) => {
          const data = {
            data: randomData(),
            backgroundColor: 'rgb(207, 250, 254)',
          }
          if (on) {
            barChart.data.datasets.push(data)
            barChart.update()
          } else {
            barChart.data.datasets.splice(1)
            barChart.update()
          }
        }

        const updateDoughnutChart = (on) => {
          const data = random()
          const color = 'rgb(207, 250, 254)'
          if (on) {
            doughnutChart.data.labels.unshift('Seb')
            doughnutChart.data.datasets[0].data.unshift(data)
            doughnutChart.data.datasets[0].backgroundColor.unshift(color)
            doughnutChart.update()
          } else {
            doughnutChart.data.labels.splice(0, 1)
            doughnutChart.data.datasets[0].data.splice(0, 1)
            doughnutChart.data.datasets[0].backgroundColor.splice(0, 1)
            doughnutChart.update()
          }
        }

        const updateLineChart = () => {
          lineChart.data.datasets[0].data.reverse()
          lineChart.update()
        }

        return {
          loading: true,
          isDark: getTheme(),
          toggleTheme() {
            this.isDark = !this.isDark
            setTheme(this.isDark)
          },
          setLightTheme() {
            this.isDark = false
            setTheme(this.isDark)
          },
          setDarkTheme() {
            this.isDark = true
            setTheme(this.isDark)
          },
          color: getColor(),
          selectedColor: 'cyan',
          setColors,
          toggleSidbarMenu() {
            this.isSidebarOpen = !this.isSidebarOpen
          },
          isSettingsPanelOpen: false,
          openSettingsPanel() {
            this.isSettingsPanelOpen = true
            this.$nextTick(() => {
              this.$refs.settingsPanel.focus()
            })
          },
          // isNotificationsPanelOpen: false,
          // openNotificationsPanel() {
          //   this.isNotificationsPanelOpen = true
          //   this.$nextTick(() => {
          //     this.$refs.notificationsPanel.focus()
          //   })
          // },
          // isSearchPanelOpen: false,
          // openSearchPanel() {
          //   this.isSearchPanelOpen = true
          //   this.$nextTick(() => {
          //     this.$refs.searchInput.focus()
          //   })
          // },
          isMobileSubMenuOpen: false,
          openMobileSubMenu() {
            this.isMobileSubMenuOpen = true
            this.$nextTick(() => {
              this.$refs.mobileSubMenu.focus()
            })
          },
          isMobileMainMenuOpen: false,
          openMobileMainMenu() {
            this.isMobileMainMenuOpen = true
            this.$nextTick(() => {
              this.$refs.mobileMainMenu.focus()
            })
          },
          updateBarChart,
          updateDoughnutChart,
          updateLineChart,
        }
      }
    </script>
  <?php
  } else { ?>
    <script>
      window.location.href = '../../login/login.php'; // ? Página de redireccionamiento en caso de no haber iniciado sesión.
    </script>
  <?php
  } // ! Fin de la validación de Sesión

  $DB->close(); // ? Cierre de BD
  ?>
  <!-- SCRIPT CARRUSEL -->
</body>

</html>