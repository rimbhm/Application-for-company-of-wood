	
<?php include 'connexion.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Blank Page - Ace Admin</title>

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
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Other Pages</a>
							</li>
							<li class="active">Blank Page</li>
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
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form id="formulaire" method="post" class="form-horizontal" role="form">
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID de produit</label>
									<div class="col-sm-9">
										<input name="id" type="text" placeholder="Entrez l'id de produit" class="col-xs-10 col-sm-5">
									</div>

									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nom </label>
									<div class="col-sm-9">
										<input name="nom" type="text" placeholder="nom de produit" class="col-xs-10 col-sm-5">
									</div>

									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Prix </label>
									<div class="col-sm-9">
										<input name="prix" type="text" placeholder="prix" class="col-xs-10 col-sm-5">
									</div>

									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Photo </label>
									<div class="col-sm-9">
										<input name="photo" type="text" placeholder="photo" class="col-xs-10 col-sm-5">
									</div>



									

									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description </label>
									<div class="col-sm-9">
										<textarea id="description" cols="40" rows="5"></textarea>
									</div>

									


									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Catégorie </label>
									<div class="col-sm-9">
										<select name="categorie" id="categorie" class="col-xs-10 col-sm-5">
										<?php 
											$q = @mysql_query("SELECT * FROM _categorie");
											while ($r = mysql_fetch_assoc($q)) {
												echo '<option value="'.$r['id'].'">'.ucfirst(utf8_encode($r['name'])).'</option>';
											}
										?>
										</select>
									</div>

									
									<br />
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>
									<div class="col-sm-9">
										<button type="submit" class="btn btn-app btn-grey btn-xs radius-4">
												<i class="icon-save bigger-160"></i>

												Save
												<span class="badge badge-transparent">
													<i class="light-red icon-asterisk"></i>
												</span>
											</button>
									</div>

								</div>
		</form>