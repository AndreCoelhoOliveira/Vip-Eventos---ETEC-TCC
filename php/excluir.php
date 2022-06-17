<?php  
	$username = 'root';
	$password = '';				

	$id = $_GET['id'];	

	try {
        
	  $pdo = new PDO('mysql:host=localhost;dbname=vipeventos', $username, $password);				  
	   
		$stmt = $pdo->prepare("DELETE FROM tbForm WHERE idUser=$id");
		$stmt->execute();				 				
	 
        header ("Location: ../crud/index.php");
        
	} catch(PDOException $e) {
        
		echo 'Error: ' . $e->getMessage();
        
	}  

?>


