<?php

    $servidor = "localhost";
    $banco= "vipeventos";
    $usuario="root";
    $senha="";

    $file = $_FILES['arquivo'];
    $numFile = count($file['name']);




    if($numFile <= 0){
        echo "Tomou no cu";
    }else{
        for($i = 0; $i < $numFile; $i++){
    

    $arquivo = $_FILES["arquivo"]["tmp_name"][$i];
    $tamanho = $_FILES["arquivo"]["size"][$i];
    $tipo = $_FILES["arquivo"]["type"][$i];
    $nome = $_FILES["arquivo"]["name"][$i]; 

  

 if ( $arquivo != null ) {
        
    $fp = fopen($arquivo, "rb");
    $conteudo = fread($fp, $tamanho);
    $conteudo = addslashes($conteudo);
    fclose($fp);

        try {
            
          $conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha); //istancia a classe PDO
          $inserir = "INSERT INTO tb_arquivo VALUES (null,'$nome','$conteudo','$tipo')";
          $grava = $conecta->prepare($inserir); //testa o comando SQL
          $grava->execute(array()); 
            
          echo '<br/><div class="alert alert-success" role="alert">
                Arquivo enviado com sucesso para o servidor!
                </div>';
            
        } catch(PDOException $e) { // caso retorne erro
            
           echo '<br/><div class="alert alert-error" role="alert">
                  Erro ' . $e->getMessage() .
                 '</div>';
            
        }
       
    }
            
  }
}  
    header("location:exibir.php");
?>