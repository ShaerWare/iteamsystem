<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Инновационная система генерации знаний в области стратегического менеджмента') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script src="../assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

        <!-- Main Theme Js -->
        <script src="../assets/js/main.js"></script>

        <!-- Bootstrap Css -->
        <link id="style" href="../assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

        <!-- Style Css -->
        <link href="../assets/css/styles.min.css" rel="stylesheet" >

        <!-- Icons Css -->
        <link href="../assets/css/icons.css" rel="stylesheet" >

        <!-- Node Waves Css -->
        <link href="../assets/libs/node-waves/waves.min.css" rel="stylesheet" >

        <!-- Simplebar Css -->
        <link href="../assets/libs/simplebar/simplebar.min.css" rel="stylesheet" >

        <!-- Color Picker Css -->
        <link rel="stylesheet" href="../assets/libs/flatpickr/flatpickr.min.css">
        <link rel="stylesheet" href="../assets/libs/@simonwep/pickr/themes/nano.min.css">

        <!-- Choices Css -->
        <link rel="stylesheet" href="../assets/libs/choices.js/public/assets/styles/choices.min.css">

    <!-- Jsvector Maps -->
    <link rel="stylesheet" href="../assets/libs/jsvectormap/css/jsvectormap.min.css">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>

            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)

                        {{ $header }}

            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <footer class="footer mt-auto py-3 bg-white text-center">
                <div class="container">
                    <span class="text-muted"> Copyright © <span id="year"></span>
                           All
                        rights
                        reserved
                    </span>
                </div>
            </footer>
            <!-- Footer End -->

        </div>


        <!-- Scroll To Top -->
        <div class="scrollToTop">
            <span class="arrow"><i class="las la-angle-double-up"></i></span>
        </div>
        <div id="responsive-overlay"></div>
        <!-- Scroll To Top -->

        <!-- Popper JS -->
        <script src="../assets/libs/@popperjs/core/umd/popper.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Defaultmenu JS -->
        <script src="../assets/js/defaultmenu.min.js"></script>

        <!-- Node Waves JS-->
        <script src="../assets/libs/node-waves/waves.min.js"></script>

        <!-- Sticky JS -->
        <script src="../assets/js/sticky.js"></script>

        <!-- Simplebar JS -->
        <script src="../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/js/simplebar.js"></script>

        <!-- Color Picker JS -->
        <script src="../assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>


        <!-- Apex Charts JS -->
        <script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- JSVector Maps JS -->
        <script src="../assets/libs/jsvectormap/js/jsvectormap.min.js"></script>

        <!-- JSVector Maps MapsJS -->
        <script src="../assets/libs/jsvectormap/maps/world-merc.js"></script>
        <script src="../assets/js/us-merc-en.js"></script>

        <!-- Chartjs Chart JS -->
        <script src="../assets/js/index.js"></script>


        <!-- Custom-Switcher JS -->
        <script src="../assets/js/custom-switcher.min.js"></script>
        <!-- Custom JS -->
        <script src="../assets/js/custom.js"></script>
    </body>
</html>
