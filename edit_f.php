

<?php 
	
	include 'connexion.php';

                $id = $_POST['id'];
				$nom = mysql_real_escape_string($_POST['nom']);
				$adresse = $_POST['adresse'];
				$tel = mysql_real_escape_string($_POST['tel']);
			
				
			

		$q = @mysql_query("UPDATE fournisseur SET nom='$nom', adresse='$adresse', tel='$tel' WHERE idfournisseur=".$id);
				echo $id;

?>