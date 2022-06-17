<?php

    $username = 'root';
    $password = '';

    $nome = isset ($_POST['nome'])?$_POST['nome']:"";
    $sobrenome = isset ($_POST['sobrenome'])?$_POST['sobrenome']:"";
    $assunto =  isset ($_POST['assunto'])?$_POST['assunto']:"";
    $mensagem =  isset ($_POST['mensagem'])?$_POST['mensagem']:"";

    try {
    
        $conn = new PDO('mysql:host=localhost;dbname=vipeventos',$username,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        
        $stmt = $conn ->prepare("SELECT*FROM tbForm ");
        
        $stmt ->execute();

            
    } catch(PDOExceprion $e) {

        echo 'Erro:' . $e ->getMessage();
        
    }

?>

