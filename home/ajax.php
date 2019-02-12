<?php
include('../conexao.php');

$id = $_POST['id'];
$imoveis = "SELECT * FROM imoveis WHERE id = '$id'";
$result = $mysqli->query($imoveis);
$dados2 = $result->fetch_assoc();
$lat = $dados2['latitude'];
$long = $dados2['longitude'];
?>


<section>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active " id="nav-fotos-tab" style="color: black;" data-toggle="tab" href="#nav-fotos" role="tab" aria-controls="nav-fotos" aria-selected="false">Fotos</a>
            <a class="nav-item nav-link " id="nav-caracteristicas-tab" style="color: black;" data-toggle="tab" href="#nav-caracteristicas" role="tab" aria-controls="nav-caracteristicas" aria-selected="false">Características</a>
            <a class="nav-item nav-link" id="nav-infra-tab" style="color: black;" data-toggle="tab" href="#nav-infra" role="tab" aria-controls="nav-infra" aria-selected="false">Infraestrutura</a>
            <a class="nav-item nav-link" id="nav-localizacao-tab" style="color: black;" data-toggle="tab" href="#nav-localizacao" role="tab" aria-controls="nav-localizacao" aria-selected="false">Localização</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent" style="padding-bottom: 15px;">

        <div class="tab-pane fade " id="nav-fotos" role="tabpanel" aria-labelledby="nav-fotos-tab" style="background-color: #FFF; border-radius: 10px; padding: 15px;   min-height: 300px;">
            <div class="content" >
                <ul id="thumbs" >
                    <?php
                    for ($x = 1; $x < 7; $x++) {
                        if (!empty($dados2['imagem' . $x . ''])) {
                            ?>
                            <li class="item-thumbs span3" >
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a  class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="../images/imoveis/<?= $dados2['imagem' . $x . ''] ?>">
                                    <span  class="overlay-img"></span>
                                    <span  class="overlay-img-thumb fa fa-plus"> </span>
                                </a>

                                <img class="img img-responsive" style='max-height: 100px; object-fit: cover;' onerror="this.style.display='none'" src="../images/imoveis/<?= $dados2['imagem' . $x . ''] ?>" alt="">
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>

        </div>
        <div class="tab-pane fade " id="nav-caracteristicas" role="tabpanel" aria-labelledby="nav-caracteristicas-tab">
            <div class="content" style="background-color: #FFF; border-radius: 10px; padding: 15px;">
                <table class="table">
                    <tbody>
                        <?= $dados2['descricao'] ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-infra" role="tabpanel" aria-labelledby="nav-infra-tab">
            <div class="content" style="background-color: #FFF; border-radius: 10px; padding: 15px;">
                <table class="table">
                    <tbody>
                        <?= $dados2['infraestrutura'] ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-localizacao" role="tabpanel" aria-labelledby="nav-localizacao-tab">
            <div id="map" style="z-index: 99999;"></div>
        </div>
    </div>



</section>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8iWtevhRlfBxjQ_DVFGjnZZ3ejFQXSz4&callback=initMap">
</script>
<script>
    function initMap() {
        var uluru = {lat: <?= $lat ?>, lng: <?= $long ?>};
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
<script>
    $("#nav-fotos-tab").click(function () {
        $(".nav-item").removeClass('active');
        $("#nav-fotos-tab").addClass('active');
    });
    $("#nav-caracteristicas-tab").click(function () {
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