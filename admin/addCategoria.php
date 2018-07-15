<?php
include('verifica.php');
include('cabecalho.php');
include('menu.php');
include('../conexao.php');

$sql = "SELECT * FROM categorias";
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
                <li><a href="categorias.php">Categorias</a></li>
                <li class="active">Adicionando categoria</li>
            </ol>
        </section>
        <section >

            <div class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Adicionar nova categoria</h3>
                            </div>
                            <div class="box-body">
                                <form action="crud.php" method='POST' enctype="multipart/form-data">
                                     <input type="hidden" name='action' value='adiciona'>
                                     <input type="hidden" name='tabela' value='categorias'>
                                    <div class="form-group col-md-12">
                                        <label>Nome</label>
                                        <input type="text" name='nome' class="form-control">
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