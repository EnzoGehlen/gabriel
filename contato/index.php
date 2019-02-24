<?php
$a = rand(0, 19);
$b = rand(0, 19);

?>
<section class="section-padding wow fadeInUp delay-05s" id="contact">
    <div class="container">
        <div class="row white">
            <div class="col-md-8 col-sm-12">
                <div class="section-title">
                    <h2 class="head-title black">Contato</h2>
                    <hr class="botm-line">
                    <p class="sec-para black">Entre em contato conosco para mais informações</p>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="col-md-4 col-sm-6" style="padding-left:0px;">
                    <h3 class="cont-title"><font style="color: black;">Envie-nos um email</font></h3>

                    <div class="contact-info">
                        <form action="../admin/crud.php" METHOD="post">
                            <input type="hidden" name='action' value='adiciona'>
                            <input type="hidden" name='tabela' value='contato'>

                            <div class="form-group col-md-12">
                                <input type="text" name="nome" class="form-control" id="name" placeholder="Nome *" required />

                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email *" required />

                            </div>

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="titulo" id="subject" placeholder="Assunto *" required />

                            </div>

                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="mensagem"  required placeholder="Mensagem"></textarea>

                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="op" disabled value="<?= '' . $a . ' + ' . $b . '' ?>">
                                <input type='hidden' class="form-control" name="op" value="<?= '' . $a . ' + ' . $b . '' ?>">
                                <input type="number" class="form-control" name="result" placeholder="Resultado da soma:">
                            </div>

                            <div id="quero-vender-meu-imovel" class='form-group col-md-12'> <input type="submit" class="btn btn-send"></div>

                        </form>

                    </div>


                </div> 


                <div class="col-md-4 col-sm-6">
                    <h3 class="cont-title">Onde estamos</h3>
                    <div class="location-info">
                        <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Av. Santos Dumont, 559, Centro, Três Passos</p>
                        <p class="white"><span aria-hidden="true" class="fa fa-phone"></span><a style="text-decoration: none;" href="tel:55996237090">(55) 9 9623-7090</a></p>
                        <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email: <a href="mailto:gabrielchaves@creci.org.br" class="link-dec">gabrielchaves@creci.org.br</a></p>
                        <p class="white"><span aria-hidden="true" class="fa fa-money"></span><button id="showr" class="btn">Quero vender meu imóvel</button></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-icon-container hidden-md hidden-sm hidden-xs">
                        <span aria-hidden="true" class="fa fa-envelope-o"></span>
                    </div>
                </div>

                <div id="contato" class="contact-info col-md-12" style="background-color: rgba(28, 26, 26, 0.1); border-radius: 10px; display: none; ">

                    <form action="../admin/crud.php" METHOD="post" enctype="multipart/form-data">
                        <input type="hidden" name='action' value='adiciona'>
                        <input type="hidden" name='tabela' value='vendas'>
                        <div class="col-md-12">
                            <h3 class="cont-title"><font style="color: black; font-size: 25px">Dados pessoais</font></h3>
                        </div>

                        <div class="form-group col-md-9">
                            <input type="text" name="nome" class="form-control" id="name" placeholder="Nome completo *" required />

                        </div>
                        <div class="form-group col-md-3">
                            <input type="text" class="form-control" name="telefone" id="email" placeholder="Telefone *" required />

                        </div>
                        <div class="form-group col-md-12">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email *" required />

                        </div>
                        <!--                        <div class="form-group col-md-4">
                                                    <input type="text" class="form-control" name="estado_pessoa" id="email" placeholder="Estado *" required />
                        
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="text" class="form-control" name="cep_pessoa" id="email" placeholder="CEP"  />
                        
                                                </div>
                                               
                                                <div class="form-group col-md-4">
                                                    <input type="text" class="form-control" name="telefone" id="email" placeholder="Telefone (Fixo / Whatsapp) *" required />
                        
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="telefone2" id="email" placeholder="Telefone 2 (Fixo / Whatsapp)"  />
                        
                                                </div>-->
                        <div class="col-md-12">  
                            <h3 class="cont-title"><font style="color: black; font-size: 25px">Dados do imóvel</font></h3>
                        </div>
                        <div class="form-group col-md-9">
                            <input type="text" name="endereco_imovel" class="form-control" id="name" placeholder="Endereço "  />

                        </div>
                        <div class="form-group col-md-3">
                            <input type="text" class="form-control" name="numero" id="email" placeholder="Número "  />

                        </div>
                        <div class="form-group col-md-3">
                            <input type="text" class="form-control" name="bairro_imovel" id="email" placeholder="Bairro "  />

                        </div>
                        <div class="form-group col-md-3">
                            <input type="text" class="form-control" name="cidade_imovel" id="email" placeholder="Cidade "  />

                        </div>
                        <div class="form-group col-md-3">
                            <input type="text" class="form-control" name="estado_imovel" id="email" placeholder="Estado "  />

                        </div>
                        <div class="form-group col-md-3">
                            <input type="text" class="form-control" name="cep_imovel" id="email" placeholder="CEP"  />

                        </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="descricao"  placeholder="Descrição (tipo de imóvel)"></textarea>

                        </div>
                        <div class="col-md-12">  
                            <h4 class="cont-title"><font style="color: black; font-size: 18px">Insira até 3 fotos:</font></h4>
                        </div>
                        <div class="form-group col-md-3">
                            <input type="file" class="form-control" name="img1"   />

                        </div>
                        <div class="form-group col-md-3">
                            <input type="file" class="form-control" name="img2"  />

                        </div>
                        <div class="form-group col-md-3">
                            <input type="file" class="form-control" name="img3"  />

                        </div>
                        <div class="col-md-12"></div>
                        <div class="form-group col-md-3">
                            <input type="text" class="form-control" name="op" disabled value="<?= '' . $a . ' + ' . $b . '' ?>">
                            <input type='hidden' class="form-control" name="op" value="<?= '' . $a . ' + ' . $b . '' ?>">
                            <input type="number" class="form-control" name="result" placeholder="Resultado da soma:">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-send">
                        </div>

                    </form>
                    <form action="../admin/crud.php" method="post"  class="contactForm">


                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="../admin/bower_components/jquery/dist/jquery.js" type="text/javascript"></script>
<script>
    $("#showr").click(function () {
        $("#contato").first().show("slow", function showNext() {
            $(this).next("#contato").show("slow", showNext);
        });
    });
    
    $("#botao_quero").click(function () {
        $("#contato").first().show("slow", function showNext() {
            $(this).next("#contato").show("slow", showNext);
        });
    });


</script>
<script>
    $("#nav-fotos-tab").click(function () {
        $(".nav-item").removeClass('active');
        $("#nav-fotos-tab").addClass('active');
    });
    $("#nav-caracteristicas-tab").click(function () {
        $(".nav-item").removeClass('active');
        $("#nav-caracteristicas-tab").addClass('active');
    });
    $("#nav-infra-tab").click(function () {
        $(".nav-item").removeClass('active');
        $("#nav-infra-tab").addClass('active');
    });
    $("#nav-localizacao-tab").click(function () {
        $(".nav-item").removeClass('active');
        $("#nav-localizacao-tab").addClass('active');
    });
</script>
<script>

    $(".minu").click(function () {
        $("#movi").hide();
    });



    $(".movi").each(function () {

        $(this).click(function () {

            $("#movi").hide();
            var id = this.id;
            $("#movi").show("slow", function showNext() {
                $(this).next("#movi").show("slow", showNext);
            });
            buscar(id);


        });


    });

    function buscar(id) {
        console.log(id);
        var page = "ajax.php";

        $.ajax({
            type: 'POST',
            dataType: 'html',
            url: page,
            data: {id: id},
            success: function (msg) {
                $("#movi").html(msg);
            }


        });
    }





</script>



<!---->