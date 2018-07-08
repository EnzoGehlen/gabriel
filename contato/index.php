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
                                <div class="form-group">
                                    <input type="text" name="nome" class="form-control" id="name" placeholder="Nome" required />
                                   
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required />
                                    
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="titulo" id="subject" placeholder="Assunto" required />
                                   
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="mensagem"  required placeholder="Mensagem"></textarea>
                                    
                                </div>
                                     <input type="submit" class="btn btn-send">
                            </form>
                            <form action="../admin/crud.php" method="post"  class="contactForm">
                                 
                                     
                            </form>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6">
                        <h3 class="cont-title">Onde estamos</h3>
                        <div class="location-info">
                            <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Rua Borges de Medeiros, 86 - Três Passos</p>
                            <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>(55) 99623-7090</p>
                            <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email: <a href="mailto:gabrielchaves@creci.org.br" class="link-dec">gabrielchaves@creci.org.br</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-icon-container hidden-md hidden-sm hidden-xs">
                            <span aria-hidden="true" class="fa fa-envelope-o"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---->
    <!---->