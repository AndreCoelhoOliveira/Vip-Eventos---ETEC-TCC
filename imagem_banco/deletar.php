<?php  

	$username = 'root';
	$password = '';				

	$id = $_GET['id'];	

	try {
        
        $pdo = new PDO('mysql:host=localhost;dbname=vipeventos', $username, $password);				  

        $stmt = $pdo->prepare("DELETE FROM tb_arquivo WHERE arquivo_id=$id");
        $stmt->execute();				 				

        header ("Location: ../imagem_banco/exibir.php");
        
	} catch(PDOException $e) {
        
		echo 'Error: ' . $e->getMessage();
        
	}  

?>
