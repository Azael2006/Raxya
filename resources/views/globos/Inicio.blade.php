<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raxya</title>
  @vite('resources/css/app.css')
  <link rel="shortcut icon" href="images/_f9551261-a6f5-44a0-b277-4960dd85113e.jfif" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <link rel="stylesheet" href="resources/css/Inicio.css">
  <style>
    .bg-primary {
      background-color: rgba(0, 29, 55); /* Establece la opacidad directamente en el color de fondo */
    }
    .bg-secundary{
      background-color: #f2f2f2;
    }
  </style>
</head>
<body id="inicio2" class="font-sans">
  <header class="nuevnav bg-primary bg-opacity-75">
    <nav class="nave flex items-center justify-between px-10 py-2">
      <div class="flex items-center">
      <img src="images/_f9551261-a6f5-44a0-b277-4960dd85113e.jfif" alt="Logo" class="h-16 w-auto mr-2">
        <h1 class="text-2xl font-bold text-white">Inicio</h1>
      </div>
      <ul class="menu flex">
        <li><a href="/" class="text-white hover:bg-white hover:text-black px-3 py-2">Inicio</a></li>
        <li><a href="#contactos" class="text-white hover:bg-white hover:text-black px-3 py-2">Contactos</a></li>
        @if (Route::has('login'))
                <div>
                    @auth
                        <a href="/globos" class="text-white hover:bg-white hover:text-black px-3 py-2">
                            {{ __('Dashboard')}}
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-white hover:bg-white hover:text-black px-3 py-2">
                            {{ __('Login') }}
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-white hover:bg-white hover:text-black px-3 py-2">
                                {{ __('Register') }}
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
      </ul>
      
    </nav>
  </header>
  
  <section class="contenedor nosotros flex flex-col items-center justify-center mt-8">
  <h2 class="titulo text-purple-800 mb-8 text-center font-bold text-5xl">Vision</h2>

  <div class="contenedor-nosotros flex items-center justify-center">
    <img src="https://scubica.s3.us-west-2.amazonaws.com/granatrio/4a0e734c8373a4f69a4e4a72ff355db2.jpg" alt="" class="image-about-us w-1/4 ml-4 mt-8">
    
    <div class="contenido-texto w-1/2 ml-4">
      <h3 class="mb-3"><span class="bg-purple-800 text-white p-1 rounded">1</span>Nuestra visión es crear una plataforma integral que empodere a las personas para tomar medidas significativas y eficientes en la gestión del agua en sus hogares y comunidades. </h3>
      <p class="text-justify">Queremos ser la herramienta preferida para aquellos que buscan reducir su impacto ambiental, ahorrar dinero y contribuir al bienestar del planeta, convirtiendo la gestión del agua en una experiencia simple, educativa y gratificante.</p>
    </div>
  </div>
</section>
<div class="contenedor bg-secundary">
  <h2 class="titulo text-purple-800 text-center font-bold text-5xl mb-8 mt-8">Importancia</h2>
  <div class="tramite-cont flex justify-between">
    <div class="servicio-ind w-1/6 ml-12">
      <img src="https://blogs.iadb.org/sostenibilidad/wp-content/uploads/sites/26/2016/07/agua.jpg" class="w-full" alt="sostenibilidad">
      <h3 class="text-center"><b>Sostenibilidad</b></h3>
      <p class="text-justify">Raxya promueve prácticas sostenibles que ayudan a conservar los recursos hídricos, preservar los ecosistemas y mitigar el impacto ambiental.</p>
    </div>
    <div class="servicio-ind w-1/6">
      <img src="https://s1.eestatic.com/2019/01/11/como/ahorro-como_hacer_367724102_112042136_1706x960.jpg" class="w-full" alt="Ahorro">
      <h3 class="text-center"><b>Ahorro economico</b></h3>
      <p class="text-justify">Al reducir el consumo de agua, los usuarios experimentan ahorros significativos en sus facturas, generando un impacto positivo en sus finanzas personales.</p>
    </div>
    <div class="servicio-ind w-1/6 mr-12">
      <img src="https://divem.accem.es/wp-content/uploads/2017/04/DIVEM_web_foto-10-1030x615.jpg" class="w-full" alt="Comunidad">
      <h3 class="text-center"><b>Contribución a la comunidad</b></h3>
      <p class="text-justify">Raxya crea una red de usuarios comprometidos con la sostenibilidad, fomentando un cambio colectivo y contribuyendo al bienestar de la comunidad.</p>
    </div>
  </div>
</div>
<section class="contenedor nosotros flex flex-col items-center justify-center mt-8">
  <h2 class="titulo text-purple-800 mb-8 text-center font-bold text-5xl">Integración Tecnológica</h2>

  <div class="contenedor-nosotros flex items-center justify-center">
    <img src="https://scubica.s3.us-west-2.amazonaws.com/granatrio/4a0e734c8373a4f69a4e4a72ff355db2.jpg" alt="" class="image-about-us w-1/4 ml-4 mt-8">
    
    <div class="contenido-texto w-1/2 ml-4">
      <h3 class="mb-3"><span class="bg-purple-800 text-white p-1 rounded">2</span>Raxya ofrece a los usuarios una visión detallada de su consumo de agua.  La plataforma proporciona datos precisos sobre el uso diario, semanal o mensual. Esto incluye información específica sobre patrones de consumo, identificación de picos y horas de mayor uso.</h3>
       
    </div>
  </div>
</section>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Selector del enlace "Contactos"
    const linkContactos = document.querySelector('a[href="#contactos"]');

    // Manejador de eventos para el clic en el enlace "Contactos"
    linkContactos.addEventListener('click', function(e) {
      e.preventDefault();

      // Obtenemos el elemento del footer
      const footer = document.getElementById('contactos');

      // Hacemos scroll suave al footer
      footer.scrollIntoView({ behavior: 'smooth' });
    });
  });
</script>
</body> 
<br>
<br>
<br>
<br>
<br>
<footer id="contactos" class="bg-primary text-white">
    <div class="contenedor-footer flex justify-between p-6">
      <div class="cont-foo text-center">
        <h4 class="text-white border-b-2 border-orange-400 pb-2 mb-4">Teléfono</h4>
        <p class="text-gray-500">461 386 5504</p>
      </div>
      <div class="cont-foo text-center">
        <h4 class="text-white border-b-2 border-orange-400 pb-2 mb-4">Email</h4>
        <p class="text-gray-500">raxyamexico@gmail.com</p>
      </div>
      <div class="cont-foo text-center">
        <h4 class="text-white border-b-2 border-orange-400 pb-2 mb-4">Locación</h4>
        <a href="https://www.google.com/maps/place/Celaya,+Gto./@20.5285363,100.8861969,12z/data=!3m1!4b1!4m6!3m5!1s0x842cba641e60c675:0x998fd3ad9a7d2747!8m2!3d20.5279612!4d-100.8112885!16zL20vMDFmc3Nz?entry=ttu" class="text-gray-500">Celaya.Gto.</a>
      </div>
    </div>
    <h2 class="titulo-final text-center text-gray-500 text-lg mt-6">&copy; Equipo | <a href="#" class="text-white">Ismael</a> | <a href="#" class="text-white">Manuel</a> | <a href="#" class="text-white">Luis</a> | <a href="curriculum2.html" class="text-white">Jorge</a></h2>
  </footer>
</html>

