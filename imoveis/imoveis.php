

<?php
include('../conexao.php');
$imoveis = "SELECT * FROM imoveis";
$categorias = "SELECT * FROM categorias";
$result = $mysqli->query($imoveis);
$result2 = $mysqli->query($categorias);
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

                        <li><a href="#filter" data-option-value="*"  class=" minu selected">Todas as categorias</a></li>
                        <?php
                        while ($dados = $result2->fetch_assoc()) {
                            ?>
                            <li><a href="#filter" class="minu" data-option-value=".<?= $dados['id'] ?>"><?= $dados['nome'] ?></a></li>

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
                                $id = $dados2['categoria_id'];
                                $sql3 = "SELECT * FROM categorias where id = '$id' ";
                                $result3 = $mysqli->query($sql3);
                                $bairro = $result3->fetch_assoc();
                                ?>
                                <li class="item-thumbs span3 <?= $bairro['id'] ?>"  >
                                    <input type="hidden" id="idImovi" value="<?= $dados2['id'] ?>">
                                    <a href="#fotos" class="hover-wrap movi" id="<?= $dados2['id'] ?>"  >
                                        <span  class="overlay-img"></span>
                                        <span  class="overlay-img-thumb fa fa-plus"> </span>
                                    </a>

                                    <img class="img-responsive" style='max-height: 150px; object-fit: cover;' src="../images/imoveis/<?= $dados2['imagem1'] ?>" >
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



<script src="../js/bootstrap.min.js"></script>

