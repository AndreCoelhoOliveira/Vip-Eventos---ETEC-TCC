<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/stylecrud.css">
    <link rel="shortcut icon" href="../imgs/favicon.ico" >

  </head>

    
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
        <div class="container">
            
            <a class="navbar-brand" href="../crud/index.php">Vip eventos</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navSite" aria-controls="navSite" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navSite">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="../crud/index.php">Home <span class="sr-only">(current)</span></a></li>
                </ul>

            </div>

        </div>
        
    </nav>
    
    <div class='container'>
        
        <div class="row justify-content-sm-center">
        
            <?php
            $servidor = "localhost";
            $banco= "vipeventos";
            $usuario="root";
            $senha="";

                try {

                    $conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha);
                    $consultaSQL = "SELECT arquivo_id, arquivo_nome, arquivo_tipo FROM tb_arquivo";
                    $exComando = $conecta->prepare($consultaSQL); //testar o comando
                    $exComando->execute(array());

                    while($resultado = $exComando->fetch()) {
                        echo "<div class='col-sm-4'>
                        
                                    <img src='abrir-arquivo.php?id=$resultado[arquivo_id]' class='img-size rounded img-thumbnail img-responsive img-fluid mx-auto d-block mb-3' width='260' height='320'>

                                  <div class='row'>

                                      <a class='btn btn-secondary ml-5' href='abrir-arquivo.php?id=$resultado[arquivo_id]'>abrir</a>
                                      <a class='btn btn-warning ml-5' href='edit-img.php?id=$resultado[arquivo_id]'>editar</a>
                                      <a class='btn btn-danger ml-5' href='deletar.php?id=$resultado[arquivo_id]'>excluir</a>

                                  </div>

                              </div>";

                    } 

                } catch(PDOException $erro) {

                    echo("Errrooooo! foi esse: " . $erro->getMessage());
                } 

            ?>
        
        </div>
        
    </div>
    
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
    
</html>