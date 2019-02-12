<?php
include('../conexao.php');
$sql = "SELECT * FROM imoveis WHERE destaque = 1";
$result = $mysqli->query($sql);

$sql2 = "SELECT diferenciais.*, icon.nome FROM diferenciais, icon WHERE diferenciais.icone_id = icon.id";
$result2 = $mysqli->query($sql2);
?>


<html>
<head>
    <meta charset="UTF-8">
    <title>Gabriel Chaves Imóveis</title>
    <link rel="icon" 
    type="image/png" 
    href="../images/logo.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="../css/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="../css/owl.transitions.css" rel="stylesheet" type="text/css"/>
    <link href="../css/main.css" rel="stylesheet" type="text/css"/>


</head>

<body>
    <!--header-->
    <header class="main-header" >
        <div class="bg-color">

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
                                <li class="active"><a href="../">Início</a></li>

                                <li><a href="#contact">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <!--/ nav-->

        </div>
    </div>
</header>

<section id="main-slider">
    <div class="owl-carousel">
        <?php
        while ($dados = $result->fetch_assoc()) {
            ?>
            <div class="item" style="background-image: url(../images/imoveis/<?= $dados['imagem1'] ?>);
            opacity: 1; ">
            <div class="slider-inner" style="background: rgba(0,0,0,0.5);">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="carousel-content">
                                <h2><?= $dados['titulo'] ?></h2>

                                <!--<a class="btn btn-primary btn-lg" href="#">Saiba mais</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.item-->
        <?php
    }
    ?>

</div><!--/.owl-carousel-->
</section><!--/#main-slider-->



    <!--
        <section id="cta-1">
            <div class="container">
                <div class="row">
                    <div class="cta-info text-center">
                        <h3><span class="dec-tec">“</span>Corretor é sinônimo de negócio teste 2 seguro e tranquilo<span class="dec-tec">”</span> -Gabriel Chaves</h3>
                    </div>
                </div>
            </div>
        </section>
    -->
    <!---->
<!--    <section id="feature" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 wow fadeInLeft delay-05s">
                    <div class="section-title">
                        <h2 class="head-title">Nossos diferenciais</h2>
                        <hr class="botm-line">
                        <p class="sec-para">Um corretor de imóveis é responsável por organizar e cuidar de toda documentação necessária para sua compra, venda ou permuta de imóveis residenciais, comerciais, rurais, apartamentos ou loteamentos, oferecendo toda a assistência necessária nas transações imobiliárias.</p>
                    </div>
                </div>
                <div class="col-md-9">
    <?php
    while ($dados2 = $result2->fetch_assoc()) {
        ?>


                                    <div class="col-md-6 wow fadeInRight delay-02s">
                                        <div class="icon">
                                            <i class="<?= $dados2['nome'] ?>"></i>
                                        </div>
                                        <div class="icon-text">
                                            <h3 class="txt-tl"><?= $dados2['titulo'] ?></h3>
                                            <p class="txt-para"><?= $dados2['descricao'] ?></p>
                                        </div>
                                    </div>
        <?php
    }
    ?>
                    
                </div>
            </div>
        </div>
    </section>-->
<button id='oi'>me clique</button>
    <?php
    include('../imoveis/index.php');

    include('../contato/index.php');
    ?>
    <!---->
    <!---->

    <footer class="" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 footer-copyright">
                    © Corretor Gabriel Chaves, CRECI nº52.472 F - Todos os direitos reservados
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
    <!---->
    <!--contact ends-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/wow.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../contactform/contactform.js"></script>
    <script src="../js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="../js/smoothscroll.js" type="text/javascript"></script>
    <script src="../js/mousescroll.js" type="text/javascript"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="../js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="../js/main.js" type="text/javascript"></script>
    <script src="../js/wow.min.js" type="text/javascript"></script>
    <script>
        $("#nav-fotos-tab").click(function () {
            $(".nav-item").removeClass('active');
            $("#nav-fotos-tab").addClass('active');
        });
        $("#nav-caracteristicas-tab").click(function () {
            console.log('oi');
            $(".nav-item").removeClass('active');
            $("#nav-caracteristicas-tab").addClass('active');

        });
        $("#nav-infra-tab").click(function () {
            $(".nav-item").removeClass('active');
            $("#nav-infra-tab").addClass('active');
        });
        $("#nav-localizacao-tab").click(function () {
            $(".nav-item").removeClass('active');
            $("#nav-localizacao-tab").addClass('active');
        });
    </script>
    <script type="text/javascript">
    $('#nav-caracteristicas-tab').click(function (){
        console.log('oi');
    });
</script>
    <script>

        $(document).ready(function () {
            // Add smooth scrolling to all links
            $("a").on('click', function (event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
    <script>

        $(document).ready(function ($) {
            $("#owl-example").owlCarousel();
        });

        $("body").data("page", "frontpage");

        $("#owl-example").owlCarousel({
            items: 3,
            /*        itemsDesktop : [1199,3],
             itemsDesktopSmall : [980,9],
             itemsTablet: [768,5],
             itemsTabletSmall: false,
             itemsMobile : [479,4]*/
         })

     </script>

 </body>
 </html>
