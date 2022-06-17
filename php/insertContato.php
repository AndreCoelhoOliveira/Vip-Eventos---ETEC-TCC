<?php
    $username = 'root';
    $password = '';

    $nome = isset ($_POST['nome'])?$_POST['nome']:"";
    $email = isset ($_POST['email'])?$_POST['email']:"";
    $assunto =  isset ($_POST['assunto'])?$_POST['assunto']:"";
    $mensagem =  isset ($_POST['mensagem'])?$_POST['mensagem']:"";

    try {
        
        $pdo = new PDO('mysql:host=localhost;dbname=vipeventos', $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        
        $stmt = $pdo->prepare("INSERT INTO tbForm VALUES(NULL, '$nome', '$email', '$assunto', '$mensagem')");
        
        $stmt->execute();
        
        header("Location: ../contato.php");
        
        
    } catch (PDOException $e){
        
        echo 'Error: ' . $e->getMessage();
        
    }

    
  
?>


