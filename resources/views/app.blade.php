<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Somos una empresa dedicada a la asesoría, producción y logística de
                todo tipo de evento, con alta experiencia a nivel Nacional, ofreciéndole gran calidad, inspección y
                extremado profesionalismo con más de 5 años de experiencia en el Área.

                Disponemos de una gran variedad de mobiliario
                le ofrecemos diversas decoración, arquetipos de escenarios, centros de mesa, montajes de Stands entre
                otros.

                Poseemos todo lo concerniente al entretenimiento de su evento.
                tenemos los dispositivos tecnológicos para Audio, Sonido y Luces de múltiples categorías."/>


    <meta name="keywords"
          content="cafeproducciones, cafe producciones, eventos, logistica, producciones, luces, sonidos, pirotecnia, la guajira, riohacha"/>
    <meta name="author" content="GEILER ELIAS RADILLO SARMIENTO"/>
    <meta name="copyright" content="cafeproducciones.com"/>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
@inertia
</body>
</html>
