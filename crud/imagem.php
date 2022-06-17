<!doctype html>
<?php
include('../protect.php');
protect();
?>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="pragma" content="no-cache">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/stylecrud.css" rel="stylesheet">
    
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../img/crudicon//ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    <link rel="apple-touch-icon" sizes="57x57" href="../img/crudicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../img/crudicon//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/crudicon//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../img/crudicon//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/crudicon//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../img/crudicon//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../img/crudicon//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../img/crudicon//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/crudicon//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../img/crudicon//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/crudicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../img/crudicon//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/crudicon//favicon-16x16.png">
    <link rel="manifest" href="../img/crudicon/manifest.json">

    <title>Upload de imagem</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
        <div class="container">
            
            <a class="navbar-brand" href="index.php">Vip Eventos</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navSite" aria-controls="navSite" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navSite">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
                </ul>

            </div>

        </div>
        
    </nav>

    <div class="container mt-5" id="main">

            <h1 class="text-center">Upload de Imagem</h1>

            <form id="formulario" method="post" enctype="multipart/form-data" action="../imagem_banco/inserir.php">
                
                <div class="form-group row mt-1">
                    
                  <label for="inputImagem" class="col-sm-1 col-form-label">Imagem</label>
                    
                  <div class="col-sm-10">
                      
                    <input type="file" multiple class="form-control" id="inputImagem" name = "arquivo[]"  placeholder="Escolha o arquivo..." multiple>
                      
                  </div>

                </div>
                    
                    <input id="salvar" class="btn btn-primary" type="submit" value="Salvar">
                
            </form>
        
     </div>
         

    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    

</body>

</html>