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
    <link rel="stylesheet" href="../css/stylecrud.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
      
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
    

  </head>

    
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
        <div class="container">
            
            <a class="navbar-brand" href="../crud/index.php">Vip Eventos</a>

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
                    
                    //A quantidade de valor a ser exibida
                    $quantidade = "10";
                    //a pagina atual
                    $pagina  = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
                    //Calcula a pagina de qual valor será exibido
                    $inicio = ($quantidade * $pagina) - $quantidade;
                    
                    $sql = "SELECT arquivo_id, arquivo_nome, arquivo_tipo FROM tb_arquivo LIMIT $inicio, $quantidade";
                    //Executa o SQL
                    $qr = $conecta->prepare($sql);
                    $qr->execute(array());
                   // verifica o número total de páginas
                    
                    while($resultado = $qr->fetch()) {
                        echo "<div class='col-sm-4'>
                        
                                    <img src='../imagem_banco/abrir-arquivo.php?id=$resultado[arquivo_id]' class='img-size rounded img-thumbnail img-responsive img-fluid mx-auto d-block mb-3' width='260' height='320'>

                                  <div class='row'>

                                      <a class='btn btn-secondary ml-5' href='../imagem_banco/abrir-arquivo.php?id=$resultado[arquivo_id]'>abrir</a>
                                      <a class='btn btn-warning ml-5' href='../imagem_banco/edit-img.php?id=$resultado[arquivo_id]'>editar</a>
                                      <a class='btn btn-danger ml-5' href='../imagem_banco/deletar.php?id=$resultado[arquivo_id]'>excluir</a>

                                  </div>

                              </div>";

                    } ?>
            </div>
            <div class="col-sm-12">
    
            <?php
           //SQL para saber o total
  $sqlTotal = "SELECT id_arquivo FROM tb_arquivo";
  //Executa o SQL
  $qrTotal  = $conecta->prepare($sqlTotal);
  //Total de Registro na tabela
  $numTotal = $conecta->prepare("SELECT COUNT('id_arquivo') FROM tb_arquivo"); 
                    $numTotal->execute(array());
        while($row = $numTotal->fetch()){
            
            $total = $row['0'];
          
             // var_dump($jooj);
            
}   
                   
                    
                  
  //O calculo do Total de página ser exibido
  $totalPagina= ceil($total/$quantidade);
   /**
    * Defini o valor máximo a ser exibida na página tanto para direita quando para esquerda
    */
   $exibir = 3;
   /**
    * Aqui montará o link que voltará uma pagina
    * Caso o valor seja zero, por padrão ficará o valor 1
    */
   $anterior  = (($pagina - 1) == 0) ? 1 : $pagina - 1;
   /**
    * Aqui montará o link que ir para proxima pagina
    * Caso pagina +1 for maior ou igual ao total, ele terá o valor do total
    * caso contrario, ele pegar o valor da página + 1
    */
   $posterior = (($pagina+1) >= $totalPagina) ? $totalPagina : $pagina+1;
   /**
    * Agora monta o Link paar Primeira Página
    * Depois O link para voltar uma página
    */
  /**
    * Agora monta o Link para Próxima Página
    * Depois O link para Última Página
    */
      
        echo '<a href="?pagina=1">primeira</a> | ';
        echo "<a href=\"?pagina=$anterior\">anterior</a> | ";
  

         /**
    * O loop para exibir os valores à esquerda
    */
   for($i = $pagina-$exibir; $i <= $pagina-1; $i++){
       if($i > 0)
        echo '<a href="?pagina='.$i.'"> '.$i.' </a>';
  }

  echo '<a href="?pagina='.$pagina.'"><strong>'.$pagina.'</strong></a>';

  for($i = $pagina+1; $i < $pagina+$exibir; $i++){
       if($i <= $totalPagina)
        echo '<a href="?pagina='.$i.'"> '.$i.' </a>';
  }

   /**
    * Depois o link da página atual
    */
   /**
    * O loop para exibir os valores à direita
    */

 echo " | <a href=\"?pagina=$posterior\">próxima</a> | ";
 echo "  <a href=\"?pagina=$totalPagina\">última</a>";
    
                    

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