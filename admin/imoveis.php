<?php
include('verifica.php');
include('cabecalho.php');
include('menu.php');
include('../conexao.php');

$sql = "SELECT * FROM imoveis ORDER BY id DESC";
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
                <li><a href="imoveis.php">Imóveis</a></li>
                <li class="active">Listando todos</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Imóveis</h3>
                            <a href='addImovel.php'> <button class='btn btn-adn pull-right'>Adicionar</button></a>

                        </div>

                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Título</th>
                                        <th>Descrição</th>
                                        <th>Categoria</th>
                                        <th>Está em destaque?</th>
                                        <th>Imagem</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($dados = $result->fetch_assoc()) {
                                        $id = $dados['categoria_id'];
                                        $sql2 = "SELECT * FROM categorias WHERE id = '$id'";
                                        $result2 = $mysqli->query($sql2);
                                        $nome_bairro = $result2->fetch_assoc();
                                        ?>
                                        <tr>
                                             <td><?= $dados['id'] ?></td>       
                                            <td><?= $dados['titulo'] ?></td>                                       

                                             <td>  <?= substr($dados['descricao'], 0, 40); ?> ... </td>

                                            <td><?= $nome_bairro['nome'] ?></td>
                                           <?php
                                        if ($dados['destaque'] == 1) {
                                            ?>
                                           <td>Sim</td>
                                            <?php
                                        } else {
                                            ?>
                                            <td>Não</td>
                                            <?php
                                        }
                                        ?>
                                            <td><img class='enzo' src="../images/imoveis/<?= $dados['imagem1'] ?>" alt=""/></td>



                                            <td>
                                                <a href='../home/#imovel-<?=$dados['id']?>' target="_blank"><i class='fa fa-plus' title="Ver no site"></i></a>
                                                <a href='editImovel.php?id=<?= $dados['id'] ?>'><i class='fa fa-edit' title="Editar"></i></a>
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
                                                    <p>Você tem certeza que deseja excluir o imóvel <?= $dados['titulo'] ?>?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                                                    <a href='crud.php?action=deleta&tabela=imoveis&id=<?= $dados['id'] ?>&usr=<?=$usr?>'><button type="button"  class="btn btn-outline">Excluir</button></a>
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
