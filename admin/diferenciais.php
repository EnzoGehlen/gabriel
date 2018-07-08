<?php
include('verifica.php');
include('cabecalho.php');
include('menu.php');
include('../conexao.php');

$sql = "SELECT diferenciais.*, icon.nome FROM diferenciais, icon WHERE diferenciais.icone_id = icon.id";
$result = $mysqli->query($sql);
?>




<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>

                <small>Gabriel Chaves Imóveis</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Início</a></li>
                <li><a href="diferenciais.php">Diferenciais</a></li>
                <li class="active">Listando todos</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Diferenciais</h3>
                            <a href='addDiferencial.php'> <button class='btn btn-adn pull-right'>Adicionar</button></a>
                          
                        </div>

                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                         <th>Ícone</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($dados = $result->fetch_assoc()) {
                                        
                                        ?>
                                        <tr>
                                            <td><?= $dados['titulo'] ?></td>      
                                            <td><i class='<?= $dados['nome'] ?>'></i></td> 

                                           
                                            <td>
                                               
                                                <a href='editDiferencial.php?id=<?= $dados['id'] ?>'><i class='fa fa-edit' title="Editar"></i></a>
                                                <a href=''  data-toggle="modal" data-target="#<?= $dados['id'] ?>"><i class='fa fa-trash' title="Excluir"></i></a></td>
                                        </tr>

                                    <div class="modal modal-danger fade" id="<?= $dados['id'] ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Atenção</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Você tem certeza que deseja excluir o diferencial <?= $dados['titulo'] ?>?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                                                    <a href='crud.php?action=deleta&tabela=diferenciais&id=<?= $dados['id'] ?>'><button type="button"  class="btn btn-outline">Excluir</button></a>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>

                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
</div>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<?php
include('rodape.php');
?>
