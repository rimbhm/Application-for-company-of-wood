<?php
	include 'connexion.php';
?>



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from 198.74.61.72/themes/preview/ace/tables.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 27 Feb 2014 11:19:22 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Ma liste de produit</title>

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

	
			<?php include "navbarc.php" ; ?>


                    <?php include "sidebarc.php" ; ?>

                    <div class="main-content">

					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb" >
							
							<li>
								<i class="icon-home home-icon"></i>
								<a href="blankc.php">Accueil</a>

								<li>
								<a href="choisir.php">Commander</a>
							</li>
							<li class="active">Contactez nous</li>

                        
							
						</ul><!-- .breadcrumb -->

					<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
							
      

							</form>

							   						    	
						</div><!-- #nav-search -->
					</div>





<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Contactez nous</legend>
<center><img src="image/image14.jpg" width="150"></center>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nom">Nom</label>  
  <div class="col-md-5">
  <input id="nom" name="nom" type="text" placeholder="tapez votre nom svp" class="form-control input-md" required="">
  <span class="help-block">ex: mohamed</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prenom">Prenom</label>  
  <div class="col-md-5">
  <input id="prenom" name="prenom" type="text" placeholder="Tapez votre prenom svp" class="form-control input-md" required="">
  <span class="help-block">ex: salah</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">E-mail</label>  
  <div class="col-md-5">
  <input id="email" name="email" type="text" placeholder="tapez votre e-mail svp" class="form-control input-md" required="">
  <span class="help-block">ex: mohamedsalah@yahoo.com</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tel">Téléphone</label>  
  <div class="col-md-5">
  <input id="tel" name="tel" type="text" placeholder="Taper votre GSM svp" class="form-control input-md" required="">
  <span class="help-block">ex: 98 123456</span>  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="objet">Objet</label>
  <div class="col-md-5">
    <select id="objet" name="objet" class="form-control">
      <option value="1">faire une réclamation</option>
      <option value="2">passer une commande</option>
      <option value="3">Autre</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="msg">Message</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="msg" name="msg">tapez votre msg</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Envoyer</button>
  </div>
</div>

</fieldset>
</form>
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
