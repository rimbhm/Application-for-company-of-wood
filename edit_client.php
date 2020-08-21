<?php 




include 'connexion.php'; 

    $id = intval($_GET['id']);
	$q = @mysql_query("SELECT * FROM client WHERE id=".$id);
	while ($r = mysql_fetch_assoc($q)) {
		$cin = $r['cin'];
		$nom = $r['nom'];
		$prenom = $r['prenom'];
		$email = $r['e-mail'];
		$adresse = $r['adresse'];
		$ville = $r['ville'];
		$tel = $r['telephone'];
		$login = $r['login'];
		$mot = $r['mot'];
											
	}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Modifier les coordonnées d'un client</title>

	<meta name="description" content="" />
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

	<body>
		
		<?php include 'navbar.php'; ?>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
			try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<?php include 'sidebar.php'; ?>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="blank.php">Accueil</a>
							</li>

							<li>
								<a href="client.php">Clients</a>
							</li>
							<li class="active">Modifier </li>

							
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
					<center><img src="image/image45.jpg" width="150"></center>
</br>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form id="formulaire" method="post" class="form-horizontal" role="form">
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> CIN </label>
									<div class="col-sm-9">
										<input name="cin" type="text"  class="col-xs-10 col-sm-5" value="<?php echo $cin; ?>">
									</div>

									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nom </label>
									<div class="col-sm-9">
										<input name="nom" type="text" class="col-xs-10 col-sm-5" value="<?php echo $nom; ?>">
									</div>

									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Prenom </label>
									<div class="col-sm-9">
										<input name="prenom" type="text"  class="col-xs-10 col-sm-5" value="<?php echo $prenom; ?>">
									</div>

									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>
									<div class="col-sm-9">
										<input name="email" type="email"  class="col-xs-10 col-sm-5" value="<?php echo $email; ?>">
									</div>

									

									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Adresse </label>
									<div class="col-sm-9">
										<textarea id="adresse" cols="40" rows="5"><?php echo $adresse; ?></textarea>
									</div>

									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ville </label>
									<div class="col-sm-9">
										<select name="ville" id="ville" class="col-xs-10 col-sm-5">
										<option >Choisissez...</option>
												<?php 
													$q = @mysql_query("SELECT * FROM ville");
													while ($r = mysql_fetch_assoc($q)) {
														if ($r['id'] == $ville) {
															echo '<option value="'.$r['id'].'" selected>'.$r['nom'].'</option>';
														} else {
															echo '<option value="'.$r['id'].'">'.$r['nom'].'</option>';
														}
														
													}
												?>
										</select>
									</div>

                                      <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tel </label>
									<div class="col-sm-9">
										<input name="tel" type="text"  class="col-xs-10 col-sm-5" value="<?php echo $tel; ?>">
									</div>

									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> login </label>
									<div class="col-sm-9">
										<input name="login" type="text"  class="col-xs-10 col-sm-5" value="<?php echo $login; ?>">
									</div>

									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> mot de passe </label>
									<div class="col-sm-9">
										<input name="mot" type="password"  class="col-xs-10 col-sm-5" value="<?php echo $mot; ?>">
									</div>

								
									<br />
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>
									<div class="col-sm-9">
										
											<button class="btn btn-info" type="submit">
												<i class="icon-ok bigger-110"></i>
												Enregistrer
											</button>
									</div>

								</div>
		                     </form>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->




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

		

		<script>
		$(document).ready(function() {

			

			$('#formulaire').submit(function() {

				var cin = $('input[name=cin]').val();
				var nom = $('input[name=nom]').val();
				var prenom = $('input[name=prenom]').val();
          		var email = $('input[name=email]').val();
          		var adresse = $('#adresse').val();
                var ville = $('#ville option:selected').val();
		        var tel = $('input[name=tel]').val();
		     	var login = $('input[name=login]').val();
				var mot = $('input[name=mot]').val();
				
			    var id = '<?php echo $_GET["id"]; ?>';




				$.ajax({
					type: 'post',
					url: 'editclient.php',
					data: 'cin='+cin+'&nom='+nom+'&prenom='+prenom+'&email='+email+'&adresse='+adresse+'&ville='+ville+'&tel='+tel+'&login='+login+'&mot='+mot+'&id='+id,
					success: function(resultat)  {
							alert(resultat);

					}

					
					
				})


			return false;
			})
		})
		</script>
</body>
</html>