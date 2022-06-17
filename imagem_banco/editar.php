<?php

    session_start();

         
    $arquivo = $_FILES["arquivo"]["tmp_name"];
    $tamanho = $_FILES["arquivo"]["size"];
    $tipo = $_FILES["arquivo"]["type"];
    $nome = $_FILES["arquivo"]["name"];

    if ( $arquivo != null ) {
        $fp = fopen($arquivo, "rb");
        $conteudo = fread($fp, $tamanho);
        $conteudo = addslashes($conteudo);
        fclose($fp); 
        $username = 'root';
        $password = '';	

        $id = $_GET['id'];
        
            try {
        
                $pdo = new PDO('mysql:host=localhost;dbname=vipeventos', $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));


                $stmt = $pdo->prepare("UPDATE tb_arquivo SET arquivo_nome ='$nome', arquivo_conteudo='$conteudo', arquivo_tipo='$tipo' WHERE arquivo_id = '$id'");

                $stmt->execute();
        
                //echo "teste";
                header ("Location: exibir.php");
        
            } catch (PDOException $e) {

                echo 'Error: ' . $e->getMessage();
                
            }
    }
    
?>      


