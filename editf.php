<?php 

include 'connexion.php';


    $idfournisseur = intval($_GET['id']);
	$q = @mysql_query("SELECT * FROM fournisseur WHERE idfournisseur=".$idfournisseur);
	while ($r = mysql_fetch_assoc($q)) {
		$nom = $r['nom'];
		$adresse = $r['adresse'];
		$tel = $r['tel'];
					
	}

   
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Modifier un fournisseur</title>

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
								<a href="fournisseur.php"> Fournisseur</a>
							</li>
							<li class="active">Modifier </li>

							
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
				    <center><img src="image/image45.jpg" width="150"></center>
                     </br>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form id="formulaire" method="post" class="form-horizontal" role="form">
								<div class="form-group">
									

									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nom </label>
									<div class="col-sm-9">
										<input name="nom" type="text"  class="col-xs-10 col-sm-5" value="<?php echo $nom; ?>">
									</div>

									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> adresse </label>
									<div class="col-sm-9">
										<input name="adresse" type="text"  class="col-xs-10 col-sm-5" value="<?php echo $adresse; ?>">
									</div>

									

								    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">tel </label>
									<div class="col-sm-9">
										<input name="tel" type="text" class="col-xs-10 col-sm-5" value="<?php echo $tel; ?>">
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

<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/markdown/markdown.min.js"></script>
<script src="assets/js/markdown/bootstrap-markdown.min.js"></script>
<script src="assets/js/jquery.hotkeys.min.js"></script>
<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
<script src="assets/js/bootbox.min.js"></script>


<!-- uplodify -->

	

<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>


	


<script>
$(document).ready(function() {
	
	// Soumission du formulaire
	$('#formulaire').submit(function() {
		var nom = $('input[name=nom]').val();
		var adresse = $('input[name=adresse]').val();
		var tel = $('input[name=tel]').val();

		
        var id = '<?php echo $_GET["id"]; ?>';
		
		/*
		alert(nom);
		alert(prix);
		*/
		

		$.ajax({
			type: 'post',
			url: 'edit_f.php',
			data: 'nom='+nom+'&adresse='+adresse+'&tel='+tel+'&id='+id,
			success: function(data) {
				
                        alert(data);
			}
		})

	return false;
	})
})
</script>

</body>
</html>
