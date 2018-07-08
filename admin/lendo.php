<?php
include('../conexao.php');
$id = $_GET['id'];
$leu = ("UPDATE contato SET lido = true WHERE id = $id");
$mysqli->query($leu);    
$sql = "SELECT * FROM contato WHERE id = $id";
$result = $mysqli->query($sql);
$dados = $result->fetch_assoc();
$novaData = explode(" ", $dados['created']);
$data = explode("-", $novaData[0]);
?>
<div class="col-md-9">
    <div class="box box-primary">

        <!-- /.box-header -->
        <div class="box-body no-padding">
            <div class="mailbox-read-info">
                <h3><?= $dados['titulo'] ?></h3>
                <h5>De: <?= $dados['email'] ?>
                    <span class="mailbox-read-time pull-right">
                        <?= "$data[2]/$data[1]/$data[0] $novaData[1]" ?>
                    </span></h5>
            </div>
            <!-- /.mailbox-read-info -->
            <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                        <i class="fa fa-trash-o"></i></button>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                        <i class="fa fa-reply"></i></button>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                        <i class="fa fa-share"></i></button>
                </div>
                  
                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                    <i class="fa fa-print"></i></button>
            </div>
            <!-- /.mailbox-controls -->
            <div class="mailbox-read-message">
                <p><?= $dados['mensagem'] ?></p>

                
            </div>
            <!-- /.mailbox-read-message -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            
        </div>
        <!-- /.box-footer -->

