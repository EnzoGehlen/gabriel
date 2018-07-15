<?php
include('../conexao.php');
$sql = "SELECT * FROM contato WHERE lido != true AND lixo != true";
$result = $mysqli->query($sql);
$lidos = mysqli_num_rows($result);

$sql2 = "SELECT * FROM vendas WHERE lido != true ";
$result2 = $mysqli->query($sql2);
$vendalidos = mysqli_num_rows($result2);


$idUser = $_SESSION["id_usuario"];
$sql2 = "SELECT * FROM g_users WHERE id = '$idUser' ";
$result2 = $mysqli->query($sql2);
$dados2 = $result2->fetch_assoc();
?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../images/profile/<?=$dados2['imagem']?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= $dados2['nome'] ?></p>
                <a ><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-home"></i> <span>Imóveis</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="imoveis.php"><i class="fa fa-list"></i> Listar</a></li>
                    <li><a href="addImovel.php"><i class="fa fa-plus"></i> Adicionar</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-server"></i> <span>Categorias</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="categorias.php"><i class="fa fa-list"></i> Listar</a></li>
                    <li><a href="addCategoria.php"><i class="fa fa-plus"></i> Adicionar</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-map"></i> <span>Bairros</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="bairros.php"><i class="fa fa-list"></i> Listar</a></li>
                    <li><a href="addBairro.php"><i class="fa fa-plus"></i> Adicionar</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-certificate"></i> <span>Diferenciais</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="diferenciais.php"><i class="fa fa-list"></i> Listar</a></li>
                    <li><a href="addDiferencial.php"><i class="fa fa-plus"></i> Adicionar</a></li>
                </ul>
            </li>

            <li>
                <a href="email.php">
                    <i class="fa fa-envelope"></i> <span>Contatos</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-purple"><?= $lidos ?></small>
                    </span>
                </a>
            </li>
            <li>
                <a href="contato_vendas.php">
                    <i class="fa fa-money"></i> <span>Contatos de venda</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-purple"><?= $vendalidos ?></small>
                    </span>
                </a>
            </li>
            <li>
                            <a href="perfil.php">
                                <i class="fa fa-users"></i> <span>Meu perfil</span>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg-purple"></small>
                                </span>
                            </a>
                        </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>