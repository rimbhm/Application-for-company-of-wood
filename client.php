<?php
	include 'connexion.php';
?>



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from 198.74.61.72/themes/preview/ace/tables.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 27 Feb 2014 11:19:22 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Ma liste de client</title>

	<meta name="description" content="Static &amp; Dynamic Tables" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- basic styles -->

	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		  <![endif]-->

		  <!-- page specific plugin styles -->

		  <!-- fonts -->

		  <link rel="stylesheet" href="assets/css/ace-fonts.css" />

		  <!-- ace styles -->

		  <link rel="stylesheet" href="assets/css/ace.min.css" />
		  <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		  <link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		  <![endif]-->

		  <!-- inline styles related to this page -->

		  <!-- ace settings handler -->

		  <script src="assets/js/ace-extra.min.js"></script>

		  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>


			<?php include "navbar.php" ; ?>

				<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

		

				<?php include "sidebar.php" ; ?>

				<div class="main-content">

					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb" >
							
							<li>
								<i class="icon-home home-icon"></i>
								<a href="blank.php">Accueil</a>

                           </li>

                           <li>
								<a href="client.php">Mes clients</a>
							</li>
							<li class="active">Liste des clients</li>
						
							
						</ul><!-- .breadcrumb -->

						
					</div>


						<div class="page-content">
			              <div class="page-header">

		                	<div class="row">
									<div class="col-xs-12">
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>



														<tr>
														
														 


															<th>ID client</th>
															<th>cin</th>
															<th>Nom </th>
															<th>Prénom </th>

															<th>E_mail</th>

															<th>Adresse</th>
															<th>Ville</th>

															<th>Téléphone</th>
															<th>Login </th>
															<th>Mot de passe </th>

															

													<?php 
												$q = @mysql_query("SELECT * FROM client");
												while ($r = mysql_fetch_assoc($q)) {
													echo '



                                                          <tr>

                                                          
															<td> '.$r['id'].'</td>
															<td> '.$r['cin'].'</td>
															<td> '.$r['nom'].'</td>
															<td> '.$r['prenom'].'</td>
															<td> '.$r['e-mail'].'</td>
															<td> '.$r['adresse'].'</td>
															<td> '.$r['ville'].'</td>
															<td> '.$r['telephone'].'</td>
															<td> '.$r['login'].'</td>
															<td> '.$r['mot'].'</td>
														






														


															<td>
															
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																
															<a class="green" href="edit_client.php?id='.$r['id'].'" onclick="return confirm(\'Voulez vous vraiment modifier les coordonnées de ce client ?\')">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="deleteclient.php?t=client&id='.$r['id'].'" onclick="return confirm(\'Voulez vous vraiment supprimer ce client ?\')">
																	<i class="icon-trash bigger-130"></i>
																</a>
																 </td>

												
														
													</tr>
												
                                                                              
                                                   ' ;	
												}
											?>	
 <script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	</body>

<!-- Mirrored from 198.74.61.72/themes/preview/ace/blank.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 27 Feb 2014 11:20:01 GMT -->
</html>
