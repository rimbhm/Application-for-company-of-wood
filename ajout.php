<?php 
	
	include 'connexion.php';


	            $nom = $_POST['nom'];
				$prix = $_POST['prix'];
				$desc = $_POST['desc'];
				$date = $_POST['date'];
			

				$query = @mysql_query("INSERT INTO produit VALUES ('', '$nom','$prix','$desc','$date','')");
				echo mysql_insert_id();
			
			

?>