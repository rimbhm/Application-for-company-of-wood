
<?php include 'connexion.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Ajouter un produit</title>

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
								<a href="produit.php">Mes produits</a>
							</li>
							<li class="active">Ajouter un produit</li>

							
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form id="formulaire" method="post" class="form-horizontal" role="form">
					            <center> <img src="image/image41.jpg" width="200"> </center>  

								<div class="form-group">
									

									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nom </label>
									<div class="col-sm-9">
										<input name="nom" type="text" placeholder="Nom" class="col-xs-10 col-sm-5">
									</div>

									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Prix </label>
									<div class="col-sm-9">
										<input name="prix" type="text" placeholder="prix" class="col-xs-10 col-sm-5">
									</div>

									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description </label>
									<div class="col-sm-9">
										<textarea id="desc" cols="40" rows="5"></textarea>
									</div>

								    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Entrée </label>
									<div class="col-sm-9">
										<input name="date" type="date" placeholder="date" class="col-xs-10 col-sm-5">
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Image </label>

										<div class="col-sm-9">
											<input type="file" name="file_upload" id="file_upload" />
										</div>
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

	<link rel="stylesheet" type="text/css" href="uploadify/uploadify.css">
	<script type="text/javascript" src="uploadify/jquery.uploadify-3.1.min.js"></script>

<!-- ace scripts -->

<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>


	<script type="text/javascript">
	    $(function() {
	        $('#file_upload').uploadify({
	        	'auto'	   : false,
	        	'multi'    : false,
	        	'method'   : 'post',
	            'swf'      : 'uploadify/uploadify.swf',
	            'uploader' : 'uploadify/uploadify.php',
	            'buttonText' : 'Parcourir ..',
	            'onUploadComplete' : function() {
            		alert("OK");
            		window.location.reload();
        		}
	            
	        });

	    });
	    </script>




<script>
$(document).ready(function() {
	
	// Soumission du formulaire
	$('#formulaire').submit(function() {
		var nom = $('input[name=nom]').val();
		var prix = $('input[name=prix]').val();
		var desc = $('#desc').val();
		var date = $('input[name=date]').val();
	
		
		/*
		alert(nom);
		alert(prix);
		*/
		

		$.ajax({
			type: 'post',
			url: 'ajout.php',
			data: 'nom='+nom+'&prix='+prix+'&desc='+desc +'&date='+date,
			success: function(data) {
				

				$('#file_upload').uploadify("settings", "formData", {"id": data});
				$('#file_upload').uploadify('upload');
			}
		})

	return false;
	})
})
</script>
