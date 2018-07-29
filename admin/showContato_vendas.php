<?php
include('verifica.php');
include('cabecalho.php');
include('menu.php');
include('../conexao.php');

$id = $_GET['id'];
$leu = ("UPDATE vendas SET lido = true WHERE id = $id");
$mysqli->query($leu);

$sql = "SELECT * FROM vendas where id = $id";
$result = $mysqli->query($sql);
$dados = $result->fetch_assoc();
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
                <li><a href="contato_vendas.php">Contatos de vendas</a></li>
                <li class="active">Exibindo registro</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Contatos de vendas</h3>

                        </div>

                        <div class="box-body">

                            <table class="vertical-table table table-bordered table-hover">
                                Dados pessoais:
                                <tr>
                                    <th>Nome:</th>
                                    <td><?= $dados['nome_pessoa'] ?></td>
                                </tr>
                                <tr>
                                    <th>Cpf:</th>
                                    <td><?= $dados['cpf_pessoa'] ?></td>
                                </tr>
                                <tr>
                                    <th>Cidade:</th>
                                    <td><?= $dados['cidade_pessoa'] ?></td>
                                </tr>
                                <tr>
                                    <th>Estado:</th>
                                    <td><?= $dados['estado_pessoa'] ?></td>
                                </tr> <tr>
                                    <th>CEP:</th>
                                    <td><?= $dados['cep'] ?></td>
                                </tr>
                                <tr>
                                    <th>Email:</th>
                                    <td><?= $dados['email_pessoa'] ?></td>
                                </tr>
                                <tr>
                                    <th>Telefone nº 1:</th>
                                    <td><?= $dados['telefone_pessoa'] ?></td>
                                </tr> <tr>
                                    <th>Telefone nº 2:</th>
                                    <td><?= $dados['telefone_pessoa2'] ?></td>
                                </tr>




                            </table>
                            <hr>
                            <table class="vertical-table table table-bordered table-hover">
                                Dados do imóvel:
                                <tr>
                                    <th>Endereço:</th>
                                    <td><?= $dados['endereco_imovel'] ?></td>
                                </tr>
                                <tr>
                                    <th>Número:</th>
                                    <td><?= $dados['numero_imovel'] ?></td>
                                </tr>
                                
                                <tr>
                                    <th>Bairro:</th>
                                    <td><?= $dados['bairro_imovel'] ?></td>
                                </tr>
                                <tr>
                                    <th>Cidade:</th>
                                    <td><?= $dados['cidade_imovel'] ?></td>
                                </tr>
                                <tr>
                                    <th>Estado:</th>
                                    <td><?= $dados['estado_imovel'] ?></td>
                                </tr> <tr>
                                    <th>CEP:</th>
                                    <td><?= $dados['cep_imovel'] ?></td>
                                </tr>
                                <tr>
                                    <th>Descricao:</th>
                                    <td><?= $dados['descricao_imovel'] ?></td>
                                </tr>
                                <tr>
                                    <th>Imagem 1:</th>
                                    <td><img class='img img-responsive' style='max-height: 250px;' src="../images/contato_venda/<?= $dados['img1'] ?>" alt="" />
                                  </td>
                                     
                                </tr>
                                <tr>
                                    <th>Imagem 2:</th>
                                    <td><img class='img img-responsive' style='max-height: 250px;' src="../images/contato_venda/<?= $dados['img2'] ?>" alt="" />
                                  </td>
                                     
                                </tr>
                                <tr>
                                    <th>Imagem 3:</th>
                                    <td><img class='img img-responsive' style='max-height: 250px;' src="../images/contato_venda/<?= $dados['img3'] ?>" alt="" />
                                  </td>
                                     
                                </tr>




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