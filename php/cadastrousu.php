<?php
    $username = 'root';
    $password = '';

    $usuario = isset($_POST['usuario'])?$_POST['usuario']:"";
    $email = isset($_POST['email'])?$_POST['email']:"";
    $senha = sha1(isset($_POST['senha'])?$_POST['senha']:"");

    
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=vipeventos', $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        
        $stmt = $pdo->prepare("SELECT * FROM tbCadastro WHERE nomeUsuario ='$usuario' OR email = '$email'");
        
        $stmt->execute();
        
        $nlinhas=$stmt->rowCount(); 
        
            if ($nlinhas!=0)
            {
                echo"<script> alert('O usuário já está cadastrado no sistema')</script>
                    <script>window.location = '../cadastro.php';</script>";

            } else {

                $stmt = $pdo->prepare("INSERT INTO tbCadastro VALUES(NULL, '$usuario', '$email', '$senha')");

                $stmt->execute();
                
                 echo"<script> alert('Usuário cadastrado com sucesso!')</script>
                    <script>window.location = '../login.php';</script>";

            }
        
        
    } catch (PDOException $e){
        
        echo 'Error: ' . $e->getMessage();
        
    }
    
    
    //header("Location: ../cadastro.php");
        
?>


