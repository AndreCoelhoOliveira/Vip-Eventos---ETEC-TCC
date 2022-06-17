<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Vip Evento</title>
        
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
        <link href="css/lightbox.css" rel="stylesheet">   
    </head>
    <body class="fadeIn">
    
    <?php include 'header.php' ?>
        
    <div id="canvas">
        <div class="container" id="#gallery">
            <div class="row fadeIn">
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
                    //A quantidade de valor a ser exibida
                    $quantidade = "12";
                    //a pagina atual
                    $pagina  = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
                    //Calcula a pagina de qual valor será exibido
                    $inicio = ($quantidade * $pagina) - $quantidade;
                    $sql = "SELECT arquivo_id, arquivo_nome, arquivo_tipo FROM tb_arquivo LIMIT $inicio, $quantidade";
                    //Executa o SQL
                    $qr = $conecta->prepare($sql);
                    $qr->execute(array());
                        while($resultado = $qr->fetch()) {
                        echo 
                        " <a href='imagem_banco/abrir-arquivo.php?id=$resultado[arquivo_id]' data-gallery='gallery' class='col-md-4 mt-2' data-lightbox='image-2'>
                        <img src='imagem_banco/abrir-arquivo.php?id=$resultado[arquivo_id]' class='img-size rounded'>
                        </a> 
                        ";
                     } ?>                
                </div>
                <?php 

  $sqlTotal = "SELECT id_arquivo FROM tb_arquivo";
  $qrTotal  = $conecta->prepare($sqlTotal);
  $numTotal = $conecta->prepare("SELECT COUNT('id_arquivo') FROM tb_arquivo"); 
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

    }catch(PDOException $erro){
        echo("Errrooooo! foi esse: " . $erro->getMessage());
    }
 ?>                                               
    <div class="container mt-5">
        <hr style="background-color: #efc466;">
    </div>   
<?php include 'footer.php' ?>
