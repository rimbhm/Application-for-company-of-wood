<?php 
	
	include 'connexion.php';

                  $cin = $_POST['cin'];
	              $nom = $_POST['nom'];
	              $prenom = $_POST['prenom'];
	              $email = $_POST['email'];
	              $adresse = $_POST['adresse'];
	              $ville = $_POST['ville'];
	              $tel = $_POST['tel'];
	              $login = $_POST['login'];
	              $mot = $_POST['mot'];
				

$query = @mysql_query("INSERT INTO client VALUES ('', '$cin','$nom','$prenom','$email','$adresse','$ville','$tel','$login','$mot')");
				
echo mysql_insert_id();
			
			

?>