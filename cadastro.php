<?php session_start(); ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/crudicon//ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/crudicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/crudicon//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/crudicon//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/crudicon//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/crudicon//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/crudicon//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/crudicon//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/crudicon//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/crudicon//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/crudicon//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/crudicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/crudicon//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/crudicon//favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
    <link rel="stylesheet" href="css/bootstrap.css" />
      
    <link rel="stylesheet" href="css/stylecrud.css">
    

    <title>Cadastro painel</title>
      
  </head>
    
  <body>
        
    <div class="form-center">
        
        <form class="form-login" method="post" action="php/cadastrousu.php">

            <div class="text-center mb-4">

                <img class="mb-4 rounded-circle" src="img/login-bg.png" alt="" width="100" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Cadastro</h1>

                <div class="form-label-group">
                    <input type="text" id="inputUsuario" class="form-control mb-4" placeholder="Nome de usuario" required autofocus name="usuario">
                </div>
                
                <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control mb-4" placeholder="Email" required autofocus name="email">
                </div>

                <div class="form-label-group">
                    <input type="password" id="inputSenha" class="form-control mb-4" placeholder="Senha" required  name="senha">
                </div>

                <button class="btn btn-lg btn-danger btn-block" type="submit" name="entrar">Cadastrar</button>
                <a href="login.php" class="btn btn-lg btn-primary btn-block" type="submit" name="entrar">Cancelar</a>
                
                

            </div>

        </form>
        
        
        
    </div>
      
      
      
      
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>