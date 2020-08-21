
<?php 
	
	include 'connexion.php';


	            $nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$adresse = $_POST['adresse'];
				$email = $_POST['email'];
				$tel = $_POST['tel'];
	            $salaire = $_POST['salaire'];

			

				$query = @mysql_query("INSERT INTO ouvrier VALUES ('', '$nom','$prenom','$adresse','$email','$tel','$salaire')");
				echo mysql_insert_id();
			
			

?>