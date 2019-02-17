
<style type="text/css">
    a.minu{
        background-color: #187891;
        margin: 10px;
        border-radius: 4px;
        border: 2px solid #2B4A7A;
        color: red;
        height: 30px;
    }

    .minu:hover{
        background-color: #2B4A7A;
        margin: 10px;
        border-radius: 4px;
        border: 2px solid #187891;
        color: #FFF;
    }

    #feature{
        background-color: #FFF;
    }

    .categorias{
        background-color: #F7F7F7;
        border-radius: 5px;
    }
</style>
<link rel="stylesheet" href="../css/uikit.min.css" />
<?php
include('../conexao.php');
$imoveis = "SELECT * FROM imoveis";
$categorias = "SELECT * FROM categorias ORDER BY nome ASC";
$result = $mysqli->query($imoveis);
$result2 = $mysqli->query($categorias);
?>


<?php
?>

<section id="feature" >
    <div class="container">
        <div class="row categorias">
            <div class="col-md-12 ">
                <!-- Filter -->
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">

                        <li><a href="#filter" data-option-value="*" style="color: #FFF" class=" minu selected text-center ">Todas as categorias</a></li>
                        <?php
                        while ($dados = $result2->fetch_assoc()) {
                            ?>
                            <li><a href="#filter" class="minu col-md-3 text-center" style="color: #FFF" data-option-value=".<?= $dados['id'] ?>"><?= $dados['nome'] ?></a></li>

                            <?php
                        }
                        ?>
                    </ul>
                </nav>
                <!-- End Filter -->
            </div>

            <div class="container-fluid">
                <div   class="row">
                    <section id="projects" class="col-md-12 col-sm-12 col-lg-12" >
                        <ul id="thumbs" class="col-md-12 col-sm-12 col-lg-12">

                            <?php
                            while ($dados2 = $result->fetch_assoc()) {
                                $id = $dados2['categoria_id'];
                                $sql3 = "SELECT * FROM categorias where id = '$id' ";
                                $result3 = $mysqli->query($sql3);
                                $bairro = $result3->fetch_assoc();
                                ?>
                                <li class="item-thumbs span3 col-md-2 col-lg-2 col-xs-12 <?= $bairro['id'] ?>" style="max-width: 90%;"  >
                                    <input type="hidden" id="idImovi" value="<?= $dados2['id'] ?>">
                                    <a href="#fotos" class="hover-wrap movi" id="<?= $dados2['id'] ?>"  >
                                        <span  class="overlay-img"></span>
                                        <span  class="overlay-img-thumb fa fa-plus"> </span>
                                    </a>

                                    <img class="img-responsive" style='max-height: 150px; max-width: 90%; object-fit: cover;' src="../images/imoveis/<?= $dados2['imagem1'] ?>" >
                                </li>
                                
                                <?php
                            }
                            ?>


                        </ul>
                        
                    </section>
                    <div style="height: 50px;" id="fotos"></div>
                    <div id="movi" class="contact-info col-md-12" style="background-color: rgba(28, 26, 26, 0.1); border-radius: 10px; display: block; ">
                      
                    </div>

                </div>
                
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>



</section>

<script src="../js/uikit.min.js"></script>
<script src="../js/uikit-icons.min.js"></script>

<script src="../js/bootstrap.min.js"></script>

