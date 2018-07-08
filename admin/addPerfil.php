<?php
include('verifica.php');
include('cabecalho.php');
include('menu.php');

include('../conexao.php');

?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>

            <small>Gabriel Chaves Imóveiss</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Início</a></li>
            <li class="active">Perfil</li>
             
        </ol>
    </section>
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->

                <!-- /.box -->

                <!-- About Me Box -->

            </div>
            <!-- /.col -->
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">

                        <li ><a href="#settings"  data-toggle="tab"  aria-expanded='true'><u>Configurações</u></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane"  id="activity">

                            <!-- /.post -->


                            <!-- /.post -->

                            <!-- Post -->

                            <!-- /.post -->
                        </div>
                        <!-- /.tab-pane -->

                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="settings">
                            <form class="form-horizontal" method="POST" action="crud.php" enctype="multipart/form-data">
                                <input type="hidden" name="action" value="adiciona">
                                <input type="hidden" name="tabela" value="g_users">
                               
                                <div class="form-group">
                                    <label for="inputName"  class="col-sm-2 control-label">Nome</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  name='nome' id="inputName" placeholder="Nome">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input type="email"  class="form-control" name='email' id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                         
                                <div class="form-group">
                                    <label for="inputSkills" class="col-sm-2 control-label">Senha</label>

                                    <div class="col-sm-10">
                                        <input type="password"    class="form-control" name='senha' id="inputSkills" placeholder="Senha">
                                    </div>
                                </div>
                                
                               
                                    <div class="form-group col-sm-offset-2 col-md-8">
                                        <label>Nova imagem</label>
                                        <input type="file" name='imagem' >
                                        
                                    </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Salvar</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>



<?php
include('rodape.php');
?>
