<?php
include('cabecalho.php');
include('menu.php');
include('../conexao.php');

$sql = "SELECT * FROM icon";
$result = $mysqli->query($sql);



?>


<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <h1>

                <small>Gabriel Chaves Imóveis</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Início</a></li>
                <li><a href="diferenciais.php">Diferenciais</a></li>
                <li class="active">Adicionando diferencial</li>
            </ol>
        </section>
        <section >

            <div class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Adicionar novo diferencial</h3>
                            </div>
                            <div class="box-body">
                                <form action="crud.php" method='POST' enctype="multipart/form-data">
                                    <input type="hidden" name='action' value='adiciona'>
                                    <input type="hidden" name='tabela' value='diferenciais'>
                                    <div class="form-group col-md-12">
                                        <label>Título</label>
                                        <input type="text" name='titulo' class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Ícone </label>
                                        <select name='icone' class="selectpicker" data-live-search="true">
                                            <?php
                                            while($dados = $result->fetch_assoc()){
                                                ?>
                                           
                                            <option value='<?= $dados['id'] ?>' data-icon="<?= $dados['nome'] ?>"><?= $dados['nome'] ?></option>
                                             <?php
                                            }
                                            ?>
                                            
                                        </select>
                                       
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Descrição</label>
                                        <textarea name="descricao"  id="" cols="30" rows="10"></textarea>
                                        
                                    </div>


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