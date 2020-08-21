<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recherche</title>

    <!-- Bootstrap -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
  </head>



      <?php include "navbar.php" ; ?>


                    <?php include "sidebar.php" ; ?>
                    <ul class="breadcrumb" >
              
              <li>
                <i class="icon-home home-icon"></i>
                <a href="blank.php">Accueil</a>

                <li>
                <a href="recherche.php">Rechercher</a>
              </li>
              
                        
              
            </ul>

  <body>


<form id="formulaire" method="post" class="form-horizontal">
 
<fieldset>

<!-- Form Name -->
<legend>Formulaire de recherche</legend>
 <center><img src="image/image48.jpg" width="150"></center>
                     </br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="produit">Produit</label>  
  <div class="col-md-5">
  <input id="nom" name="nom" type="text" placeholder="Nom de produit" class="form-control input-md">
  <span class="help-block">ex: MDF</span>  
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit">Validez</label>
  <div class="col-md-4">
    <button id="submit" type="submit" name="submit" class="btn btn-primary">Recherche</button>
  </div>
</div>

</fieldset>
</form>

<div id="resultats"></div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>

<SCRIPT TYPE="text/javascript">
  $(document).ready(function() {
    $('#formulaire').submit(function() {
      var nom = $('#nom').val();
     
      
      alert(nom);
      
      
    $.ajax({
      type: 'post',
      url: 'rqrecherche.php',
      data: 'q=recherche&nom='+nom,
      success: function(data) {
        $('#resultats').html(data);
      }
    })

    return false;
    })
  })
</SCRIPT>

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
