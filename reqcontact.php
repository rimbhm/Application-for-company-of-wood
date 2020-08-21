<?php 
	if (isset($_POST["q"])) {
		$q = $_POST["q"];

		switch ($q) {
		
		case 'contact':

		 $nom = $_POST['nom'];
		 $prenom = $_POST['prenom'];
		 $email = $_POST['email'];
		 $tel = $_POST['tel'];
		 $objet = $_POST['objet'];
		 $msg = $_POST['message'];

		 // REQ SQL

		  $headers ='From: "'.$nom.' '.$prenom.'"<'.$email.'>'."\n"; 
     $headers .='Reply-To: $email'."\n"; 
     $headers .='Content-Type: text/html; charset="utf-8"'."\n"; 
     $headers .='Content-Transfer-Encoding: 8bit'; 

 $message ='<html><head><title>Un titre ici</title></head>
 <body>

nom et prenom: '.$nom.' '.$prenom.' <br>
email: '.$email.' <br>
tel: '.$tel.'<br>
objet:'.$objet.'<br>
msg:'.$msg.' 

 </body>
 </html>'; 
 mail('', $objet, $message,$headers);
	     
		 break;
		}
	}
?>