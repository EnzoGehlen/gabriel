
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

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">







        <link rel="stylesheet" type="text/css" href="../css/style.css">

        <script src="../js/jquery.min.js"></script>


        <script src="../js/wow.js"></script>
        <script src="../js/custom.js"></script>

        <link rel="stylesheet" href="../css/uikit.css" />
        <script src="../js/uikit.js"></script>
        <script src="../js/uikit-icons.min.js"></script>

        <style>
            a.categorias-botao{
                text-decoration: none;
            }
            .uk-offcanvas-bar{
                z-index: 9999;
                width: 50%; 
            }
            .navbar-fixed-top{
                z-index: 500;
            }
            * + .uk-margin {
                margin-top: 0px !important;
            }




        </style>




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
                                <a href="../" class="navbar-brand"> <img src="../images/logo-gabriel.png" style="max-height: 50px;" class="logo img-responsive pull-left" alt=""/></a>
                                <!-- 
                               
                                -->
                            </div>

                            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
                                <ul class="nav navbar-nav">


                                    <li class="active"><a href="../">Início</a></li>
                                    <li><a href="#contact">Contato</a></li>
                                    <li><a id="botao_quero" href="#quero-vender-meu-imovel">Quero vender meu imóvel</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

                <!--/ nav-->

            </div>
        </div>
    </header>


    <div class="uk-margin js-slideshow-animation uk-slideshow" uk-slideshow="ratio: false; autoplay: true; autoplayInterval: 3000">

        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

            <ul class="uk-slideshow-items" uk-height-viewport="min-height: 300" style="min-height: calc(100vh);">
                <?php
                while ($dados = $result->fetch_assoc()) {
                    ?>
                    <li class="" style="">
                        <img src="../images/imoveis/<?= $dados['imagem1'] ?>" alt="" uk-cover="" class="uk-cover" style="height: 1056px; width: 1584px;">
                        <div class="uk-position-center uk-position-medium uk-text-center">
                            <h1 class="uk-heading-hero" uk-slideshow-parallax="x: 200,-200" style="transform: translate3d(-200px, 0px, 0px);"><?= $dados['titulo'] ?></h1>
                            <a style='border-radius:30px;' class="btn btn-primary btn-lg" href="#modal-full-<?= $dados['id'] ?>" uk-toggle>Saiba mais</a> 
                            <p class="uk-h1" uk-slideshow-parallax="x: 400,-400" style="transform: translate3d(-400px, 0px, 0px);"></p>
                        </div>
                    </li>
                <?php } ?>

            </ul>

            <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-previous uk-icon uk-slidenav" href="#" uk-slidenav-previous="" uk-slideshow-item="previous"><svg width="25" height="40" viewBox="0 0 25 40" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-previous-large"><polyline fill="none" stroke="#000" stroke-width="2" points="20.527,1.5 2,20.024 20.525,38.547 "></polyline></svg></a>
            <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-next uk-icon uk-slidenav" href="#" uk-slidenav-next="" uk-slideshow-item="next"><svg width="25" height="40" viewBox="0 0 25 40" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-next-large"><polyline fill="none" stroke="#000" stroke-width="2" points="4.002,38.547 22.527,20.024 4,1.5 "></polyline></svg></a>


            <div class="uk-position-bottom-center uk-position-medium">
                <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"><li uk-slideshow-item="0" class=""><a href="#"></a></li><li uk-slideshow-item="1" class="uk-active"><a href="#"></a></li><li uk-slideshow-item="2"><a href="#"></a></li><li uk-slideshow-item="3"><a href="#"></a></li></ul>

            </div>

        </div>

    </div>

    <hr class="uk-divider-icon">

    <?php
    $categoriasSQL = "SELECT * FROM categorias ORDER BY nome ASC";
    $resultCat = $mysqli->query($categoriasSQL);
    ?>

    <div class="container" uk-filter="target: .js-filter">
        <div class="row">

            <div class=" uk-flex-center uk-child-width-1-4@s uk-child-width-1-5@xl uk-text-center" uk-grid>
                <?php
                while ($dadosCat = $resultCat->fetch_assoc()) {
                    ?>

                    <div>
                        <a class="categorias-botao" type="button" uk-toggle="target: #offcanvas-push-<?= $dadosCat['id'] ?>">

                            <div class="uk-card uk-card-cinza uk-card-body" >


                                <img src="../images/categorias/<?= $dadosCat['img'] ?>" alt="" class='img img-responsive' onmouseover="this.src = '../images/categorias/<?= $dadosCat['img_hover'] ?>';" onmouseout="this.src = '../images/categorias/<?= $dadosCat['img'] ?>';"/>
                                <?= $dadosCat['nome'] ?>


                            </div>
                        </a>
                    </div>
                    <div id="offcanvas-push-<?= $dadosCat['id'] ?>" uk-offcanvas="mode: push; overlay: true">
                        <div class="uk-offcanvas-bar">

                            <button class="uk-offcanvas-close" type="button" uk-icon="arrow-left" ></button>

                            <ul class="uk-thumbnav" uk-margin>
                                <?php
                                $imoveisSQL = "SELECT * FROM imoveis WHERE categoria_id = {$dadosCat['id']}";
                                $resultImoveis = $mysqli->query($imoveisSQL);
                                while ($dadosImv = $resultImoveis->fetch_assoc()) {
                                    ?>
                                    <li><a href="#modal-full-<?= $dadosImv['id'] ?>" uk-toggle><img src="../images/imoveis/<?= $dadosImv['imagem1']; ?>" width="200" alt=""></a></li>
                                    <div id="modal-full-<?= $dadosImv['id'] ?>" class="uk-modal-full" uk-modal>
                                        <div class="uk-modal-dialog">
                                            <button class="uk-modal-close-full" uk-icon="arrow-left" type="button" ></button>
                                            <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" style="min-height: 100%;" uk-grid>
                                                
                                                    <img src="../images/imoveis/<?= $dadosImv['imagem1'] ?>" class="img img-responsive"  alt="">
                                                
                                                <div class="uk-padding-large">
                                                  
                                                    <h1><?= $dadosImv['titulo'] ?></h1>
                                                    <p><?= $dadosImv['descricao'] ?></p>
                                                    <hr class="uk-divider-icon">
                                                    <div uk-lightbox> 
                                                        <ul class="uk-thumbnav" uk-margin>
                                                            <?php
                                                            for ($x = 1; $x < 7; $x++) {
                                                                if (!empty($dadosImv['imagem' . $x . ''])) {
                                                                    ?>
                                                                    <li>
                                                                        <a href="../images/imoveis/<?= $dadosImv['imagem' . $x] ?>" data-caption="Imagem <?= $x ?>" >
                                                                            <img src="../images/imoveis/<?= $dadosImv['imagem' . $x]; ?>" width="200" alt="" onerror="this.style.display='none'"/>
                                                                        </a>
                                                                    </li>


                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>

    </div>







    <hr class="uk-divider-icon">



    <?php
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

                        Desenvolvido por <a style="text-decoration: none;" href="mailto:enzo.gehlen@hotmail.com">Enzo Gehlen</a>
                    </div>
                </div>
                <a href="https://www.facebook.com/imoveisgc/" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
                <a href="https://www.instagram.com/gabrielchaves_corretor/?hl=pt-br" class="uk-icon-button uk-margin-small-right" uk-icon="instagram"></a>
                <a href="https://api.whatsapp.com/send?phone=5555996237090&text=Ol%C3%A1%20Gabriel,%20estou%20no%20seu%20site.%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es." class="uk-icon-button uk-margin-small-right" uk-icon="whatsapp"></a>
            </div>
        </div>
    </footer>
    <!---->
    <!--contact ends-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>



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


</body>
</html>
