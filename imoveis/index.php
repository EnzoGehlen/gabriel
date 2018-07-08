<?php
include('../conexao.php');
$imoveis = "SELECT * FROM imoveis";
$bairros = "SELECT * FROM bairros";
$result = $mysqli->query($imoveis);
$result2 = $mysqli->query($bairros);
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
            }
        </style>

    </head>

    <body>
        <!--header-->
        <header class="main-header" style="
                background: url(../img/banner.jpeg) no-repeat;
                background-size: cover;
                min-height: 410px;
                " id="header">
            <div class="bg-color">
                <!--nav-->
                <nav class="nav navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="fa fa-bars"></span>
                                </button>

                            </div>
                            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
                                <ul class="nav navbar-nav">
                                    <li ><a href="../">Início</a></li>
                                    <li class="active"><a href="../imoveis/">Imóveis</a></li>
                                    <li><a href="#contact">Contato</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <!--/ nav-->
                <div class="container text-center">

                </div>
            </div>
        </header>
        <?php
        @$lat = $_GET['lat'];
        @$long = $_GET['long'];
        ?>


        <?php
        ?>

        <section id="feature" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <!-- Filter -->
                        <nav id="options" class="work-nav">
                            <ul id="filters" class="option-set" data-option-key="filter">

                                <li><a href="#filter" data-option-value="*" class="selected">Todos os bairros</a></li>
                                <?php
                                while ($dados = $result2->fetch_assoc()) {
                                    ?>
                                    <li><a href="#filter" data-option-value=".<?= $dados['id'] ?>"><?= $dados['nome'] ?></a></li>

                                    <?php
                                }
                                ?>
                            </ul>
                        </nav>
                        <!-- End Filter -->
                    </div>

                    <div class="span9">
                        <div class="row">
                            <section id="projects">
                                <ul id="thumbs">

                                    <?php
                                    while ($dados2 = $result->fetch_assoc()) {
                                        $id = $dados2['bairro_id'];
                                        $sql3 = "SELECT * FROM bairros where id = '$id' ";
                                        $result3 = $mysqli->query($sql3);
                                        $bairro = $result3->fetch_assoc();
                                        ?>
                                        <li class="item-thumbs span3 <?= $bairro['id'] ?>">
                                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                            <a  class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?= $dados2['titulo'] ?> &nbsp;<a href='?lat=<?= $dados2['latitude'] ?>&long=<?= $dados2['longitude'] ?>#map' title='ver no mapa'><span style='color: #FFF; font-size: 10px; position: absolute;' class='fa fa-external-link'> </span> </a>" href="../images/imoveis/<?= $dados2['imagem'] ?>">
                                                <span  class="overlay-img"></span>
                                                <span  class="overlay-img-thumb fa fa-plus"> </span>
                                            </a>

                                            <img class="img-responsive" style='max-height: 150px; object-fit: cover;' src="../images/imoveis/<?= $dados2['imagem'] ?>" alt="
                                                 <?= $dados2['descricao'] ?>">
                                        </li>
                                        <?php
                                    }
                                    ?>


                                </ul>
                            </section>

                        </div>
                    </div>
                </div>
                <!-- End Portfolio Projects -->
            </div>

        </section>

        <?php if (!empty(($long) and ( $lat))) { ?>
            <div id="map"></div>
        <?php } ?>



        <section class="section-padding parallax bg-image-2 section wow fadeIn delay-08s" id="cta-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="cta-txt">
                            <h3>ALgum título ou informação</h3>
                            <p>Peguei uma imagem qualquer de cidade em hd, pode trocar se quiser</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="#" class="btn btn-submit">butaum</a>
                    </div>
                </div>
            </div>
        </section>
        <!---->

        <!---->
        <!---->
        <?php
        include('../contato/index.php');
        ?>

        <footer class="" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 footer-copyright">
                        © Gabriel Chaves Imóveis - Todos os direitos reservados
                        <div class="credits">

                            Desenvolvido por <a href="mailto:enzo.gehlen@hotmail.com">Enzo Gehlen</a>
                        </div>
                    </div>
                    <div class="col-sm-5 footer-social">
                        <div class="pull-right hidden-xs hidden-sm">
                            <a href="https://www.facebook.com/imoveisgc/"><i class="fa fa-facebook"></i></a>

                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <script>
            function initMap() {
                var uluru = {lat: <?= @$lat ?>, lng: <?= @$long ?>};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 18,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>
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
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8iWtevhRlfBxjQ_DVFGjnZZ3ejFQXSz4&callback=initMap">
        </script>
    </body>
</html>
