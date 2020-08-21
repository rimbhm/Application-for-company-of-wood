<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="utf-8" />
		<title>S'authentifier</title>

		<meta name="description" content="User login page" />
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

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="icon-leaf green"></i>
									
									<span class="white">Bienvenue</span>
								</h1>
								<h3 class="blue"> Société Boumaiza Bois et Dérivées </h3>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<center><img src="image/image42.jpg" width="100"></center>
												
											 <center> SVP tapez vos coordonnées </center>
											</h4>

											<div class="space-6"></div>

											<form id="formulaire" method="post">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input name="username" type="text" class="form-control" placeholder="tapez votre CIN" required />
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input name="password" type="password" class="form-control" placeholder="tapez votre mot de passe"  required/>
															<i class="icon-lock"></i>
														</span>
													</label>


													

														<div class="space"></div>
														<div class="space"></div>


													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
														</label>
                                                       
														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="icon-key"></i>
															  Connecter
														</button> 
													</div>
													

													<div class="space-4"></div>
												</fieldset>
											</form>

											
										<hr>

										

										
										</div>
									</div><!-- /widget-body -->
								</div><!-- /login-box -->

								
		<!-- basic scripts -->

		<!--[if !IE]> -->

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

		<!-- inline scripts related to this page -->

		<script type="text/javascript">

		// Vérifier le chargement de jQuery
		$(document).ready(function() {

			// Authentification
			$('#formulaire').submit(function() {

				// Récupération des variables
				var login = $('input[name=username]').val();
				var mot = $('input[name=password]').val();

				alert(login);
				alert(mot);

				$.ajax({
					type: 'post',
					url: 'request2.php',
					data: 'login='+login+'&mot='+mot,
					success: function(data) {
						// alert(data);
						if (data == 'true') {
							window.location.href='blankc.php';
						} else {
							window.location.href='loginc.php';
						}
					}
				})

				return false; //éviter le rafraichissement de la page lors de la connexion
			})
		})

			function show_box(id) {
			 jQuery('.widget-box.visible').removeClass('visible');
			 jQuery('#'+id).addClass('visible');
			}
		</script>

      



	</body>

<!-- Mirrored from 198.74.61.72/themes/preview/ace/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 27 Feb 2014 11:20:01 GMT -->
</html>
