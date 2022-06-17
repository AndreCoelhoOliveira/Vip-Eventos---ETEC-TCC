<?php include('../php/codigo.php');
        include('../protect.php');

    session_start();
protect();
?>

<!doctype html>
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

    <title>Painel</title>
      
  </head>
    
  <body>
      
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          
        <div class="container">
            
            <a class="navbar-brand" href="index.php">Vip Eventos</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navSite" aria-controls="navSite" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navSite">
                
                <div class="container"></div>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item active"><a class="nav-link" href="exibir.php">Galeria </a></li>
                    <li class="nav-item active"><a class="nav-link" href="imagem.php">Imagem </a></li>
                    <?php echo "<li class='nav-item active'><a class='nav-link' href='../php/sair.php?token=".md5(session_id())."' >Logoff </a></li>" ?>
                </ul>

            </div>
            
        </div>
          
      </nav>
      
      <div class="container-fluid mt-5" id="main">
      
        <div id="top" class="row">
          
            <div class="col-md-3">
            
                <h2>Itens</h2>
            
            </div>
            <div class="col-md-9">
                <a href="cadastro.php" class="col-sm-4 btn btn-lg btn-danger btn-block float-right" type="submit" name="entrar" >Cadastro de Administrador</a>
            </div>
        </div>
        
        <hr />
        
        <div id="list" class="row">
          
            <div class="table-responsive col-md-12">
          
                <table class="table table-striped" cellspacing="0" cellpadding="0">

                    <thead>

                        <tr>

                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Assunto</th>
                            <th>Mensagem</th>
                            <th class="actions">Ações</th>

                        </tr>  

                    </thead>

                    <tbody>


                    <?php 
                        $quantidade = "10";
                        //a pagina atual
                        $pagina  = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
                        //Calcula a pagina de qual valor será exibido
                        $inicio = ($quantidade * $pagina) - $quantidade;

                        $sql = "SELECT * FROM tbForm LIMIT $inicio, $quantidade";
                        //Executa o SQL
                        $qr = $conn->prepare($sql);
                        $qr->execute(array());
    
                            while ($row = $qr->fetch()) {

                                $id = $row['idUser'];
                                $nome = $row['nome'];
                                $email = $row['email'];
                                $assunto = $row['assunto'];
                                $mensagem = $row['mensagem'];

                                echo'<tr>';
                                echo '<td>'.$id.'</td>';
                                echo '<td>'.$nome.'</td>';
                                echo '<td>'.$email.'</td>';
                                echo '<td>'.$assunto.'</td>';
                                echo '<td>'.$mensagem.'</td>';

                                echo '<td class="actions">';
                                echo"<a href='edit.php?id=$row[idUser]' class='btn btn-warning btn-xs ml-2'>Editar</a>";
                                echo"<a href='../php/excluir.php?id=$row[idUser]' class='btn btn-danger btn-xs ml-2'>Excluir</a>";
                                echo '</td>';
                                echo '</tr>';

                            } ?>
                           </tbody>

                </table>
                        <?php 
                    
                          $sqlTotal = "SELECT idUser FROM tbForm";

  $qrTotal  = $conn->prepare($sqlTotal);

  $numTotal = $conn->prepare("SELECT COUNT('idUser') FROM tbForm"); 
                    $numTotal->execute(array());
        while($row = $numTotal->fetch()){
            
            $total = $row['0'];
            
}   
                   
                    
                  

  $totalPagina= ceil($total/$quantidade);
 
   $exibir = 3;

   $anterior  = (($pagina - 1) == 0) ? 1 : $pagina - 1;

   $posterior = (($pagina+1) >= $totalPagina) ? $totalPagina : $pagina+1;

      
        echo '<div class="row" ><div class="col-md-6"><a align="center" class="btn btn-outline-warning" href="?pagina=1">primeira</a>  ';
        echo "<a align='center' class='btn btn-outline-warning' href=\"?pagina=$anterior\">anterior</a> ";
  


   for($i = $pagina-$exibir; $i <= $pagina-1; $i++){
       if($i > 0)
        echo '<a align="center" class="btn btn-outline-warning" href="?pagina='.$i.'"> '.$i.' </a>';
  }

  echo '<a align="center" class="btn btn-outline-warning" href="?pagina='.$pagina.'"><strong>'.$pagina.'</strong></a>';

  for($i = $pagina+1; $i < $pagina+$exibir; $i++){
       if($i <= $totalPagina)
        echo '<a align="center" class="btn btn-outline-warning" href="?pagina='.$i.'"> '.$i.' </a>';
  }



 echo "  <a align='center' class='btn btn-outline-warning' href=\"?pagina=$posterior\">próxima</a>  ";
 echo "  <a align='center' class='btn btn-outline-warning' href=\"?pagina=$totalPagina\">última</a>";
 echo "</div></div>"; 

                    ?> 


                 
              
            </div>
        
        </div>
      
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  </body>
</html>