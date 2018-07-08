<?php
include('../conexao.php');
$sql = "SELECT * FROM imoveis WHERE destaque = 1";
$result = $mysqli->query($sql);
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
                                    <li><a href="../imoveis/">Imóveis</a></li>
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
                <div class="item" style="background-image: url(../images/imoveis/<?= $dados['imagem'] ?>);
                     opacity: 1; ">
                    <div class="slider-inner" style="background: rgba(0,0,0,0.5);">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <div class="carousel-content">
                                        <h2><?= $dados['titulo'] ?></h2>

                                        <a class="btn btn-primary btn-lg" href="#">Saiba mais</a>
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




    <section id="cta-1">
        <div class="container">
            <div class="row">
                <div class="cta-info text-center">
                    <h3><span class="dec-tec">“</span>Corretor é sinônimo de negócio seguro e tranquilo<span class="dec-tec">”</span> -Gabriel Chaves</h3>
                </div>
            </div>
        </div>
    </section>
    <!---->
    <!---->
    <section id="feature" class="section-padding">
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
                    <div class="col-md-6 wow fadeInRight delay-02s">
                        <div class="icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="icon-text">
                            <h3 class="txt-tl">Imóveis bem avaliados</h3>
                            <p class="txt-para">Possuímos alguma coisa, etc </p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight delay-02s">
                        <div class="icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <div class="icon-text">
                            <h3 class="txt-tl">Diferencial 2</h3>
                            <p class="txt-para">Texto teste de tipografia </p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight delay-04s">
                        <div class="icon">
                            <i class="fa fa-mobile"></i>
                        </div>
                        <div class="icon-text">
                            <h3 class="txt-tl">Acesse em qualquer lugar</h3>
                            <p class="txt-para">A qualquer momento, em todo o lugar. Estamos sempre prontos para lhe atender. </p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight delay-04s">
                        <div class="icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="icon-text">
                            <h3 class="txt-tl">Diferencial 4</h3>
                            <p class="txt-para">Texto teste de tipografiaTexto teste de tipografiaTexto teste de tipografiaTexto teste de tipografiaTexto teste de tipografiaTexto teste de tipografia </p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight delay-06s">
                        <div class="icon">
                            <i class="fa fa-lightbulb-o"></i>
                        </div>
                        <div class="icon-text">
                            <h3 class="txt-tl">Diferencial 5</h3>
                            <p class="txt-para">Texto teste de tipografiaTexto teste de tipografiaTexto teste de tipografiaTexto teste de tipografiaTexto teste de tipografia </p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight delay-06s">
                        <div class="icon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="icon-text">
                            <h3 class="txt-tl">Diferencial top</h3>
                            <p class="txt-para">Muito top. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---->
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
                    <a href="#" class="btn btn-submit">botãozin maroto</a>
                </div>
            </div>
        </div>
    </section>
    <!---->

    <!---->
    <!---->
    <section class="section-padding wow fadeInUp delay-05s" id="contact">
        <div class="container">
            <div class="row white">
                <div class="col-md-8 col-sm-12">
                    <div class="section-title">
                        <h2 class="head-title black">Contato</h2>
                        <hr class="botm-line">
                        <p class="sec-para black">Entre em contato conosco para mais informações</p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="col-md-4 col-sm-6" style="padding-left:0px;">
                        <h3 class="cont-title">Envie-nos um email</h3>
                        <div id="sendmessage">Sua mensagem foi enviada, obrigado</div>
                        <div id="errormessage"></div>
                        <div class="contact-info">
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Nome" data-rule="minlen:4" data-msg="No mínimo 4 caracteres" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Seu email não é válido" />
                                    <div class="validation"></div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Por favor, 4 caracteres no mínimo" />
                                    <div class="validation"></div>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor, escreva algo" placeholder="Mensagem"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <button type="submit" class="btn btn-send">Enviar</button>
                            </form>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6">
                        <h3 class="cont-title">Onde estamos</h3>
                        <div class="location-info">
                            <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Rua Borges de Medeiros, 86 - Três Passos</p>
                            <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>(55) 99623-7090</p>
                            <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email: <a href="mailto:gabrielchaves@creci.org.br" class="link-dec">gabrielchaves@creci.org.br</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-icon-container hidden-md hidden-sm hidden-xs">
                            <span aria-hidden="true" class="fa fa-envelope-o"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---->
    <!---->
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
