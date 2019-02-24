<?php
include('../conexao.php');
$imoveis = "SELECT * FROM imoveis";
$categorias = "SELECT * FROM categorias";
$result = $mysqli->query($imoveis);
$result2 = $mysqli->query($categorias);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gabriel Chaves Imóveis</title>
        <link rel="icon" 
              type="image/png" 
              href="../images/logo.png" />


        <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/animate.css">

        <link href="_include/css/main.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <!-- Responsive -->
        <link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="_include/css/responsive.css" rel="stylesheet">

        <!-- Supersized -->
        <link href="_include/css/supersized.css" rel="stylesheet">
        <link href="_include/css/supersized.shutter.css" rel="stylesheet">
        <!-- FancyBox -->
        <link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">
        <script src="_include/js/modernizr.js"></script>
        <style>
            #map {
                height: 400px;
                width: 100%;
                z-index: 99999;
            }
        </style>
        <style>
            .nav {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                padding-left: 0;
                margin-bottom: 0;
                list-style: none;
            }

            .nav-link {
                display: block;
                padding: 0.5rem 1rem;
            }

            .nav-link:hover, .nav-link:focus {
                text-decoration: none;
            }

            .nav-link.disabled {
                color: #6c757d;
            }

            .nav-tabs {
                border-bottom: 1px solid #dee2e6;
            }

            .nav-tabs .nav-item {
                margin-bottom: -1px;
            }

            .nav-tabs .nav-link {
                border: 1px solid transparent;
                border-top-left-radius: 0.25rem;
                border-top-right-radius: 0.25rem;
            }

            .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
                border-color: #e9ecef #e9ecef #dee2e6;
            }

            .nav-tabs .nav-link.disabled {
                color: #6c757d;
                background-color: transparent;
                border-color: transparent;
            }

            .nav-tabs .nav-link.active,
            .nav-tabs .nav-item.show .nav-link {
                color: #495057;
                background-color: #fff;
                border-color: #dee2e6 #dee2e6 #fff;
            }

            .nav-tabs .dropdown-menu {
                margin-top: -1px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }

            .nav-pills .nav-link {
                border-radius: 0.25rem;
            }

            .nav-pills .nav-link.active,
            .nav-pills .show > .nav-link {
                color: #fff;
                background-color: #007bff;
            }

            .nav-fill .nav-item {
                -webkit-box-flex: 1;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                text-align: center;
            }

            .nav-justified .nav-item {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                text-align: center;
            }
            .navbar-nav .nav-link {
                padding-right: 0;
                padding-left: 0;
            }

            .navbar-nav .dropdown-menu {
                position: static;
                float: none;
            }

            .navbar-text {
                display: inline-block;
                padding-top: 0.5rem;
                padding-bottom: 0.5rem;
            }

            .navbar-collapse {
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .navbar-toggler {
                padding: 0.25rem 0.75rem;
                font-size: 1.25rem;
                line-height: 1;
                background-color: transparent;
                border: 1px solid transparent;
                border-radius: 0.25rem;
            }

            .navbar-toggler:hover, .navbar-toggler:focus {
                text-decoration: none;
            }

            .navbar-toggler:not(:disabled):not(.disabled) {
                cursor: pointer;
            }

            .navbar-toggler-icon {
                display: inline-block;
                width: 1.5em;
                height: 1.5em;
                vertical-align: middle;
                content: "";
                background: no-repeat center center;
                background-size: 100% 100%;
            }

            @media (max-width: 575.98px) {
                .navbar-expand-sm > .container,
                .navbar-expand-sm > .container-fluid {
                    padding-right: 0;
                    padding-left: 0;
                }
            }

            @media (min-width: 576px) {
                .navbar-expand-sm {
                    -webkit-box-orient: horizontal;
                    -webkit-box-direction: normal;
                    -ms-flex-flow: row nowrap;
                    flex-flow: row nowrap;
                    -webkit-box-pack: start;
                    -ms-flex-pack: start;
                    justify-content: flex-start;
                }
                .navbar-expand-sm .navbar-nav {
                    -webkit-box-orient: horizontal;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: row;
                    flex-direction: row;
                }
                .navbar-expand-sm .navbar-nav .dropdown-menu {
                    position: absolute;
                }
                .navbar-expand-sm .navbar-nav .dropdown-menu-right {
                    right: 0;
                    left: auto;
                }
                .navbar-expand-sm .navbar-nav .nav-link {
                    padding-right: 0.5rem;
                    padding-left: 0.5rem;
                }
                .navbar-expand-sm > .container,
                .navbar-expand-sm > .container-fluid {
                    -ms-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                }
                .navbar-expand-sm .navbar-collapse {
                    display: -webkit-box !important;
                    display: -ms-flexbox !important;
                    display: flex !important;
                    -ms-flex-preferred-size: auto;
                    flex-basis: auto;
                }
                .navbar-expand-sm .navbar-toggler {
                    display: none;
                }
                .navbar-expand-sm .dropup .dropdown-menu {
                    top: auto;
                    bottom: 100%;
                }
            }

            @media (max-width: 767.98px) {
                .navbar-expand-md > .container,
                .navbar-expand-md > .container-fluid {
                    padding-right: 0;
                    padding-left: 0;
                }
            }

            @media (min-width: 768px) {
                .navbar-expand-md {
                    -webkit-box-orient: horizontal;
                    -webkit-box-direction: normal;
                    -ms-flex-flow: row nowrap;
                    flex-flow: row nowrap;
                    -webkit-box-pack: start;
                    -ms-flex-pack: start;
                    justify-content: flex-start;
                }
                .navbar-expand-md .navbar-nav {
                    -webkit-box-orient: horizontal;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: row;
                    flex-direction: row;
                }
                .navbar-expand-md .navbar-nav .dropdown-menu {
                    position: absolute;
                }
                .navbar-expand-md .navbar-nav .dropdown-menu-right {
                    right: 0;
                    left: auto;
                }
                .navbar-expand-md .navbar-nav .nav-link {
                    padding-right: 0.5rem;
                    padding-left: 0.5rem;
                }
                .navbar-expand-md > .container,
                .navbar-expand-md > .container-fluid {
                    -ms-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                }
                .navbar-expand-md .navbar-collapse {
                    display: -webkit-box !important;
                    display: -ms-flexbox !important;
                    display: flex !important;
                    -ms-flex-preferred-size: auto;
                    flex-basis: auto;
                }
                .navbar-expand-md .navbar-toggler {
                    display: none;
                }
                .navbar-expand-md .dropup .dropdown-menu {
                    top: auto;
                    bottom: 100%;
                }
            }

            @media (max-width: 991.98px) {
                .navbar-expand-lg > .container,
                .navbar-expand-lg > .container-fluid {
                    padding-right: 0;
                    padding-left: 0;
                }
            }

            @media (min-width: 992px) {
                .navbar-expand-lg {
                    -webkit-box-orient: horizontal;
                    -webkit-box-direction: normal;
                    -ms-flex-flow: row nowrap;
                    flex-flow: row nowrap;
                    -webkit-box-pack: start;
                    -ms-flex-pack: start;
                    justify-content: flex-start;
                }
                .navbar-expand-lg .navbar-nav {
                    -webkit-box-orient: horizontal;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: row;
                    flex-direction: row;
                }
                .navbar-expand-lg .navbar-nav .dropdown-menu {
                    position: absolute;
                }
                .navbar-expand-lg .navbar-nav .dropdown-menu-right {
                    right: 0;
                    left: auto;
                }
                .navbar-expand-lg .navbar-nav .nav-link {
                    padding-right: 0.5rem;
                    padding-left: 0.5rem;
                }
                .navbar-expand-lg > .container,
                .navbar-expand-lg > .container-fluid {
                    -ms-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                }
                .navbar-expand-lg .navbar-collapse {
                    display: -webkit-box !important;
                    display: -ms-flexbox !important;
                    display: flex !important;
                    -ms-flex-preferred-size: auto;
                    flex-basis: auto;
                }
                .navbar-expand-lg .navbar-toggler {
                    display: none;
                }
                .navbar-expand-lg .dropup .dropdown-menu {
                    top: auto;
                    bottom: 100%;
                }
            }

            @media (max-width: 1199.98px) {
                .navbar-expand-xl > .container,
                .navbar-expand-xl > .container-fluid {
                    padding-right: 0;
                    padding-left: 0;
                }
            }

            @media (min-width: 1200px) {
                .navbar-expand-xl {
                    -webkit-box-orient: horizontal;
                    -webkit-box-direction: normal;
                    -ms-flex-flow: row nowrap;
                    flex-flow: row nowrap;
                    -webkit-box-pack: start;
                    -ms-flex-pack: start;
                    justify-content: flex-start;
                }
                .navbar-expand-xl .navbar-nav {
                    -webkit-box-orient: horizontal;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: row;
                    flex-direction: row;
                }
                .navbar-expand-xl .navbar-nav .dropdown-menu {
                    position: absolute;
                }
                .navbar-expand-xl .navbar-nav .dropdown-menu-right {
                    right: 0;
                    left: auto;
                }
                .navbar-expand-xl .navbar-nav .nav-link {
                    padding-right: 0.5rem;
                    padding-left: 0.5rem;
                }
                .navbar-expand-xl > .container,
                .navbar-expand-xl > .container-fluid {
                    -ms-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                }
                .navbar-expand-xl .navbar-collapse {
                    display: -webkit-box !important;
                    display: -ms-flexbox !important;
                    display: flex !important;
                    -ms-flex-preferred-size: auto;
                    flex-basis: auto;
                }
                .navbar-expand-xl .navbar-toggler {
                    display: none;
                }
                .navbar-expand-xl .dropup .dropdown-menu {
                    top: auto;
                    bottom: 100%;
                }
            }

            .navbar-expand {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .navbar-expand > .container,
            .navbar-expand > .container-fluid {
                padding-right: 0;
                padding-left: 0;
            }

            .navbar-expand .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .navbar-expand .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand .navbar-nav .dropdown-menu-right {
                right: 0;
                left: auto;
            }

            .navbar-expand .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .navbar-expand > .container,
            .navbar-expand > .container-fluid {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }

            .navbar-expand .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }

            .navbar-expand .navbar-toggler {
                display: none;
            }

            .navbar-expand .dropup .dropdown-menu {
                top: auto;
                bottom: 100%;
            }

            .navbar-light .navbar-brand {
                color: rgba(0, 0, 0, 0.9);
            }

            .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
                color: rgba(0, 0, 0, 0.9);
            }

            .navbar-light .navbar-nav .nav-link {
                color: rgba(0, 0, 0, 0.5);
            }

            .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
                color: rgba(0, 0, 0, 0.7);
            }

            .navbar-light .navbar-nav .nav-link.disabled {
                color: rgba(0, 0, 0, 0.3);
            }

            .navbar-light .navbar-nav .show > .nav-link,
            .navbar-light .navbar-nav .active > .nav-link,
            .navbar-light .navbar-nav .nav-link.show,
            .navbar-light .navbar-nav .nav-link.active {
                color: rgba(0, 0, 0, 0.9);
            }

            .navbar-light .navbar-toggler {
                color: rgba(0, 0, 0, 0.5);
                border-color: rgba(0, 0, 0, 0.1);
            }

            .navbar-light .navbar-toggler-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
            }

            .navbar-light .navbar-text {
                color: rgba(0, 0, 0, 0.5);
            }

            .navbar-light .navbar-text a {
                color: rgba(0, 0, 0, 0.9);
            }

            .navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
                color: rgba(0, 0, 0, 0.9);
            }

            .navbar-dark .navbar-brand {
                color: #fff;
            }

            .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
                color: #fff;
            }

            .navbar-dark .navbar-nav .nav-link {
                color: rgba(255, 255, 255, 0.5);
            }

            .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
                color: rgba(255, 255, 255, 0.75);
            }

            .navbar-dark .navbar-nav .nav-link.disabled {
                color: rgba(255, 255, 255, 0.25);
            }

            .navbar-dark .navbar-nav .show > .nav-link,
            .navbar-dark .navbar-nav .active > .nav-link,
            .navbar-dark .navbar-nav .nav-link.show,
            .navbar-dark .navbar-nav .nav-link.active {
                color: #fff;
            }

            .navbar-dark .navbar-toggler {
                color: rgba(255, 255, 255, 0.5);
                border-color: rgba(255, 255, 255, 0.1);
            }

            .navbar-dark .navbar-toggler-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
            }

            .navbar-dark .navbar-text {
                color: rgba(255, 255, 255, 0.5);
            }

            .navbar-dark .navbar-text a {
                color: #fff;
            }

            .navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
                color: #fff;
            }
            
        </style>
    </head>

    <body>
        <!--header-->

        <?php
        include('imoveis.php');
        ?>



        <!---->

        <!---->
        <!---->

        <!--contact ends-->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/jquery.easing.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/wow.js"></script>
        <script src="../js/custom.js"></script>
        <script src="../contactform/contactform.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
        <script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
        <script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
        <script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
        <script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
        <script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
        <script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
        <script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
        <script src="_include/js/jquery.tweet.js"></script> <!-- Tweet -->
        <script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
        <script src="_include/js/main.js"></script> <!-- Default JS -->
       
    </body>
</html>
