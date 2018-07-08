<?php
include('../conexao.php');
include('cabecalho.php');
include('menu.php');
$sql = "SELECT * FROM contato WHERE lido != true AND lixo != true";
$result = $mysqli->query($sql);
$lidos = mysqli_num_rows($result);
?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>

            <small>Lucca Lounge & Fun</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Início</a></li>
            <li class="active">Emails</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <a href="compose.html" class="btn btn-primary btn-block margin-bottom">Escrever</a>

                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Pastas</h3>

                        <div class="box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                            <?php
                            @$url = $_GET['url'];
                            if ($url == 'lixo') {
                                ?>
                                <li >
                                    <a href="email.php"><i class="fa fa-inbox"></i> Inbox
                                        <span class="label label-primary pull-right"><?= $lidos ?></span></a></li>

                                <li class="active"><a href="?url=lixo"><i class="fa fa-trash-o"></i>Excluídos</a></li>
                            <?php } else { ?>
                                <li class="active" >
                                    <a href="email.php"><i class="fa fa-inbox"></i> Inbox
                                        <span class="label label-primary pull-right"><?= $lidos ?></span></a></li>

                                <li ><a href="?url=lixo"><i class="fa fa-trash-o"></i>Excluídos</a></li>
                                    <?php }
                                ?>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>


            </div>
            <?php
            @$url = $_GET['url'];
            @$id = $_GET['id'];
            switch ($url) {
                case 'lendo': include("lendo.php");
                    break;
                case 'inbox': include('inbox.php');
                    break;
                case 'lixo': include('excluidos.php');
                    break;
                default: include('inbox.php');
            }
            ?>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>




<?php
include('rodape.php');
?>
