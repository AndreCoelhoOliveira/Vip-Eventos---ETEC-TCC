<!doctype html>
<?php include 'header.php' ?>

    <div id="box-imagem-contato">
        <div class="textura-form-contato">
    
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-12 col-lg-12 margem-contato ">

                        <form method="post" id="formulario" action="php/insertContato.php" class="bg-transparent" name="form1">
                            <div class="bg-transparent">
                                <div class="bg-transparent">
                                    <h3 class="text-white text-center mb-5">Entre em contato!</h3>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12">
                                            <input type="text" required class="form-control form-control-lg border bg-transparent text-white" id="inputNome" placeholder="Nome" name="nome">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12 mt-2">
                                            <input type="email" required class="form-control form-control-lg border bg-transparent text-white" id="inputSobrenome" placeholder="Email" name="email" >
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12 mt-2">
                                            <input type="text" class="form-control form-control-lg border bg-transparent text-white" id="inputAssunto" placeholder="Assunto" name="assunto" required maxlength="100">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12 mt-2">
                                            <textarea type="text" class="form-control form-control-lg border bg-transparent text-white" id="inputMensagem" placeholder="Mensagem" name="mensagem" required data-ls-module="charCounter" maxlength="240" cols="5" rows="3" style="resize: none" data-ls-module="charCounter"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row col-sm-12 col-md-12 col-lg-12">

                                        <button type="submit" class="btn btn-danger col-sm-12 col-md-12 col-lg-12 " target="">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>     
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php' ?>
