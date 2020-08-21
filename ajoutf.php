<?php 
	
	include 'connexion.php';


	            $nom = $_POST['nom'];
				$adresse = $_POST['adresse'];
				$tel = $_POST['tel'];
			

				$query = @mysql_query("INSERT INTO fournisseur VALUES ('', '$nom','$adresse','$tel')");
				echo mysql_error();
			
			

?>