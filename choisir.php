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
							<li class="active">choix de produit</li>

                        
							
						</ul><!-- .breadcrumb -->

					<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
							
        <a href="recherche.php">
        <span id="submit" type="submit" name="submit" class="label label-sm label-primary arrowed arrowed-right">Rechercher</span>
							<i class="icon-search nav-search-icon"></i>
								</span>
								</a>


							</form>

							   						    	
						</div><!-- #nav-search -->
					</div>









                     <div class="row">


						<div class="page-content">
			              <div class="page-header">



									<div class="col-xs-12">
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>nom</th>
														<th>prix</th>
														<th>description</th>
														<th>image</th>

													

														
														
													</tr>
												</thead>

												<tbody>


													<?php 
												$q = @mysql_query("SELECT * FROM produit");
												while ($r = mysql_fetch_assoc($q)) {
													echo '
													
                                                          <tr>

                                                          <td class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>
															
															<td> '.$r['nom'].'</td>

	                                                          
															<td> '.$r['prix'].'</td>

															<td> '.$r ['desc'].'</td>


															<td> <img src="upload/'.$r['logo'].'" width="100" /></td>


															
												
														
													</tr>  ' ;

												} 
											?>	

	<a href="cmd.php" class="btn btn-app btn-yellow btn-xs">
			<i class="icon-shopping-cart bigger-160"></i>
            
			</a>
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
