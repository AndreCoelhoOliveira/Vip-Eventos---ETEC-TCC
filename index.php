<!doctype html>
<?php include ('header.php') ?>

    <div class="container-fluid">
        <div id="box-header">

        </div>
    </div>

    <div id="canvas">
        <div class="container">
            <p class="header-nav-subtitle mt-5">Somos uma empresa familiar que vem realizando eventos com <b>perfeição</b> e <b>qualidade</b>, a equipe da <b class="negrito">Vip Eventos</b> esta a disposição de atender ao seu evento com serviços de diversas variedades como som e iluminação, decoração em led, barman, fotografo, telão e retrospectiva tudo para fazer o seu evento inesquecível, venha em nosso escritório e saiba mais dos nossos serviços.</p>
        </div>
                      
        <hr style="background-color: #efc466;">
    
    
       <!-- Video -->
        
        <div class="jumbotron-color jumbotron mt-5" id="box1">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/NItrk-xttiU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
        
        <!-- /Video -->
        
    </div>
        
    <!-- Section imagem -->
      
    <div id="box-imagem">
        <h2>Venha realizar seu <b class="b-sublinhado">evento</b> conosco!</h2>
    </div>
      
    <!-- /Section imagem -->
    
    <!-- Section descrição -->
    <div class="container mt-5 esconder-info">
        <hr style="background-color: #efc466;">
    </div>
      
    <section id="box-descricao">
        <div class="container mt-5">
            
            <div class="row info-section">
                
                <img src="img/header-bg.jpg" alt="" class="info-emp esconder-info">
                <h2 class="text-center col-md-6">Você imagina, nós criamos!
                    <hr>

                    <div class="border-texto">
                        <img src="img/p-diamante.png" alt="" class="info-img" />
                        <p class="text-center header-nav-subtitle">As festas marcam etapas e fases da vida, como o casamento, as bodas, o primeiro aniversário, o aniversário de 15, 40, 90 anos ou independente da idade, as festas de fim de ano e as comemorações empresariais, todos esses são motivos para celebrar.</p>
                        <hr style="background-color: #efc466;">
                        <img src="img/p-diamante2.png" alt="" class="info-img" />
                        <p class="text-center header-nav-subtitle">Cada comemoração marca o início de uma nova fase, um novo ciclo, com novos desafios, novas responsabilidades, expectativas e aprendizagens.</p>
                        <hr style="background-color: #efc466;">
                        <img src="img/p-diamante3.png" alt="" class="info-img" />
                        <p class="text-center header-nav-subtitle">Cada festa tem uma preparação especial e uma expectativa totalmente particular, é um momento único e exclusivo, por isso, a festa é planejada, esperada e elaborada cuidadosamente, pensando nos detalhes para que a diversão e a emoção tomem conta do ambiente.</p>
                        <hr style="background-color: #efc466;">
                        <img src="img/p-diamante4.png" alt="" class="info-img" />
                        <p class="text-center header-nav-subtitle">Valorizar esses momentos é indispensável, imprescindível, fundamental! Ter um dia especial só para a gente faz muito bem para o emocional, alegra, aproxima as pessoas e traz boas energias para entrar com o pé direito na nova fase!</p>
                        
                    </div>
                </h2>
                
            </div> 
            
        </div>
    </section>
    
    <!-- /Section descrição -->
    
    <!-- Section Serviços -->
    <div class="container">
        <hr class="mt-5" style="background-color: #efc466;">
    </div>
      
    <div class="container-fluid mt-5" id="box-servicos">
        <div class="container mt-5">
        <h3 class="text-center"><b>NOSSOS SERVIÇOS</b></h3>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="service-box">

                        <i class="far fa-gem"></i>
                        <h4 class="title">Casamentos</h4>
                        <p class="description">As melhores histórias, lugares mágicos e casamentos inesquecíveis. Tudo o que um casal sempre desejou ter no seu grande dia!</p>

                    </div>
                </div>

               <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="service-box">

                        <i class="fas fa-birthday-cake"></i>
                        <h4 class="title">Aniversários</h4>
                        <p class="description">Comemorar é o que mais gostamos de fazer, e o seu aniversário é um momento muito especial e um ótimo motivo para celebrar.</p>

                    </div>
                </div>

               <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="service-box">

                        <i class="fas fa-wine-glass"></i>
                        <h4 class="title">Eventos corporativos</h4>
                        <p class="description">Eventos corporativos podem ser ótimos instrumentos de, gestão de pessoas. Nosso compromisso é viabilizar o evento da sua empresa contemplando todos os detalhes.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- /Section Serviços -->
      
    <div id="box-form">
        <div class="textura-form">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-12 col-lg-6 ">


                        <form method="post" id="formulario" action="php/insert.php" name="form1">
                            <h3 class="text-white">Fale Conosco!</h3>
                            <div class="form-row">

                                <div class="form-group col-sm-12">

                                    <input type="text" class="form-control form-control-lg bg-transparent border text-white" id="inputNome" placeholder="Nome" name="nome" required>

                                </div>

                            </div>

                            <div class="form-row">

                                <div class="form-group col-sm-12 mt-2">

                                    <input type="email" class="form-control form-control-lg bg-transparent border text-white" id="inputEmail" placeholder="Email" name="email" required>

                                </div>

                            </div>
                            <div class="form-row">

                                <div class="form-group col-sm-12 mt-2">


                                    <input type="text" class="form-control form-control-lg bg-transparent border text-white" id="inputAssunto" placeholder="Assunto" name="assunto" required maxlength="100">

                                </div>

                            </div>

                            <div class="form-row">
                            <div class="form-group col-sm-12 mt-2">


                                    <textarea type="text" class="form-control form-control-lg bg-transparent border text-white" id="inputMensagem" placeholder="Mensagem" name="mensagem" required data-ls-module="charCounter" maxlength="240" cols="5" rows="3" style="resize: none" data-ls-module="charCounter"></textarea>


                                </div></div>
                            <div class="form-row col-sm-12 col-md-12 col-lg-12">

                                    <button type="submit" class="btn btn-danger col-sm-12 col-md-12 col-lg-12" target="">Enviar</button>

                            </div>

                        </form>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
      
    <div class="container mt-5">
        <hr style="background-color: #efc466;">
    </div>
      
    <?php include 'footer.php' ?>