<?php
include('cabecalho.php');
include('menu.php');
include('../conexao.php');

$sql = "SELECT * FROM imoveis";
$result = $mysqli->query($sql);
$sql2 = "SELECT * FROM categorias";
$result2 = $mysqli->query($sql2);
$sql3 = "SELECT * FROM bairros";
$result3 = $mysqli->query($sql3);
?>
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <h1>

                <small>Gabriel Chaves Imóveis</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Início</a></li>
                <li><a href="imoveis.php">Imoveis</a></li>
                <li class="active">Adicionando imóvel</li>
            </ol>
        </section>
        <section >

            <div class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Adicionar novo imóvel</h3>
                            </div>
                            <div class="box-body">
                                <form action="crud.php" method='POST' enctype="multipart/form-data">
                                    <input type="hidden" name='action' value='adiciona'>
                                    <input type="hidden" name='tabela' value='imoveis'>
                                    <div class="form-group col-md-12">
                                        <label>Título da publicação:</label>
                                        <input type="text" name='titulo' class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Características:</label>
                                        <textarea type="textarea" name='descricao' class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Infraestrutura:</label>
                                        <textarea type="textarea" name='infra' class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Categoria:</label>

                                        <select name="categoria_id" class="form-control select2" >
                                            <?php
                                            while ($categorias = $result2->fetch_assoc()) {
                                                ?>
                                                <option  value="<?= $categorias['id'] ?>"><?= $categorias['nome'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>


                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Bairro:</label>

                                        <select name="bairro_id" class="form-control select2" >
                                            <?php
                                            while ($bairros = $result3->fetch_assoc()) {
                                                ?>
                                                <option  value="<?= $bairros['id'] ?>"><?= $bairros['nome'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>


                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Latitude:</label>
                                        <input type="text" name='latitude' class="form-control">
                                    </div>
                                    <div class="form-group col-md-4" >
                                        <label>Longitude:</label>
                                        <input type="text" name='longitude' class='form-control'>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Destaque?</label>
                                        <input type="checkbox" name='destaque' value="1" >
                                    </div>
                                    <?php
                                    for ($x = 1; $x < 7; $x++) {
                                        ?>
                                        <div class="form-group col-md-12">
                                            <label>Imagem <?= $x?></label>
                                            <input type="file" name='imagem<?=$x?>' id='imagem' >
                                        </div>
                                    <?php } ?>
                                    <div class="form-group col-md-12">

                                        <input type="submit" value="Adicionar" name="submit" class="btn btn-twitter">
                                    </div>






                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php
include('rodape.php');
?>