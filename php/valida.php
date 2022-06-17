
<?php

    session_start();
    include_once("conexao.php");

    if((isset($_POST['usuario'])) && (isset($_POST['senha']))) {
        
        $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        $senha = sha1($senha);
        
        $sql = "SELECT * FROM tbCadastro WHERE nomeUsuario = '$usuario' AND senha = '$senha' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $resultado = mysqli_fetch_assoc($result);
        
        if(empty($resultado)) {
            
            $_SESSION['loginErro'] = "Usuário ou senha inválido";
            header("Location: ../login.php");
            
        } elseif(isset($resultado)) {
            $_SESSION['usuario'] = $resultado['idCadastro'];
            header("Location: ../crud/index.php");
            
        } else {
            
            $_SESSION['loginErro'] = "Usuário ou senha inválido";
            header("Location: ../login.php");
                
        }
        
        } else {
        
            $_SESSION['loginErro'] = "Usuário ou senha inválido";
            header("Location: ../login.php");
        
            
                
        }



?>