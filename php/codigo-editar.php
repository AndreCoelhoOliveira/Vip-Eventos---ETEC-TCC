<?php
    session_start();
    

    $a = isset($_POST['ed-nome'])?$_POST['ed-nome']:"";
    $b = isset($_POST['ed-email'])?$_POST['ed-email']:"";
    $e = isset($_POST['ed-assunto'])?$_POST['ed-assunto']:"";
    $f = isset($_POST['ed-mensagem'])?$_POST['ed-mensagem']:"";
    
    $username = 'root';
    $password = '';	
    
    $id = $_GET['id'];
    try {
        
        $pdo = new PDO('mysql:host=localhost;dbname=vipeventos', $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        
        
        $stmt = $pdo->prepare("UPDATE tbForm SET nome = '$a', email = '$b', assunto = '$e', mensagem = '$f' WHERE idUser = '$id'");

        $stmt->execute();
        
        //echo "teste";
        header ("Location: ../crud/index.php");
        
    } catch (PDOException $e){

        echo 'Error: ' . $e->getMessage();

    }

    
?>      