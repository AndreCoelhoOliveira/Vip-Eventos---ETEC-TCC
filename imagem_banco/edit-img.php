<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href=../css/stylecrud.css rel="stylesheet">
    <link rel="shortcut icon" href="../imgs/favicon.ico" >

    <title>Upload de imagem</title>
</head>

<body>
    
    <?php
    
        $servidor = "localhost";
        $banco= "vipeventos";
        $usuario="root";
        $senha="";
    
        $id = $_GET['id'];
    
        try {
            
            $conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha);
            $consultaSQL = "SELECT arquivo_id, arquivo_nome, arquivo_tipo FROM tb_arquivo where arquivo_id = $id";
            $exComando = $conecta->prepare($consultaSQL); //testar o comando
            $exComando->execute(array());

        //foreach($exComando as $resultado)

            while($resultado = $exComando->fetch()) {

                
            } 

        } catch(PDOException $erro) {
            
                echo("Errrooooo! foi esse: " . $erro->getMessage());
            
        } 

    ?>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
        <div class="container">
            
            <a class="navbar-brand" href="index.php">Sigma's Code</a>

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

            <form id="formulario" method="post" enctype="multipart/form-data" action="<?php echo 'editar.php?id=' . $id ?>">
                
                <div class="form-group row mt-1">
                    
                  <label for="inputImagem" class="col-sm-1 col-form-label">Imagem</label>
                    
                  <div class="col-sm-10">
                      
                    <input type="file" class="form-control" id="inputImagem" name = "arquivo"  placeholder="Escolha o arquivo..." >
                      
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