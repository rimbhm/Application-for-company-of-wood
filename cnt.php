<?php
  include 'connexion.php';
?>



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from 198.74.61.72/themes/preview/ace/tables.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 27 Feb 2014 11:19:22 GMT -->
<head>
  <meta charset="utf-8" />
  <title> liste des fournissuers</title>

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

                <li>
                <a href="fournisseur.php">Fournisseur</a>
              </li>
              <li class="active">Contact</li>

                        
              
            </ul><!-- .breadcrumb -->

          </div>

  


  
    <script type="text/javascript" src="js/jquery.min.js"></script>

   

    <SCRIPT TYPE="text/javascript">
    $(document).ready(function() {
    
      $('#contact_form').submit(function() {
        var nom = $('#nom').val();
        var prenom = $('#prenom').val();
        var email = $('#email').val();
        var tel = $('#tel').val();
        var objet = $('#objet option:selected').val();
        var message = $('#message').val();

        $.ajax({
          type: 'post',
          url: 'reqcontact.php',
          data: 'q=contact&nom='+nom+'&prenom='+prenom+'&email='+email+'&tel='+tel+'&objet='+objet+'&message='+message,
          success: function(data) {
            $('#notif').html('<p class="bg-success">Message envoyé. Merci!</p>');
          }
        })
      return false;
      })
    })
    </SCRIPT>


  <body>

    <div class="container">
     

      









      

      <div class="jumbotron">

        <form id="contact_form" method="post" class="form-horizontal">
        <fieldset>
        <!-- Form Name -->
        <legend>Contactez-fournisseur</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="nom">Nom</label>  
          <div class="col-md-6">
          <input id="nom" name="nom" type="text" placeholder="Votre nom" class="form-control input-md" required="">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="prenom">Prénom</label>  
          <div class="col-md-6">
          <input id="prenom" name="prenom" type="text" placeholder="Votre prénom" class="form-control input-md" required="">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="email">Email</label>  
          <div class="col-md-8">
          <input id="email" name="email" type="text" placeholder="Votre adresse mail" class="form-control input-md" required="">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="tel">Téléphone</label>  
          <div class="col-md-6">
          <input id="tel" name="tel" type="text" placeholder="Votre N°GSM" class="form-control input-md" required="">
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="objet">Objet</label>
          <div class="col-md-6">
            <select id="objet" name="objet" class="form-control">
              <option>Passer une commande</option>
              <option>Faire une réclamation</option>
              <option>autre</option>
             
            </select>
          </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="message">Message</label>
          <div class="col-md-4">                     
            <textarea class="form-control" id="message" name="message" rows="5" >Entrer votre message ici.</textarea>
          </div>
        </div>

        <!-- Notification -->
        <div class="form-group">
          <div class="col-md-12">                     
           <div id="notif"></div>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="submit"></label>
          <div class="col-md-2">
            <button id="submit" name="submit" type="submit" class="btn btn-success">Envoyer</button>
          </div>
        </div>

        </fieldset>
        </form>

      </div>

      <div class="footer">
        <p>Boumaiza bois et dérivées</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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

    <!-- inline scripts related to this page -->
  </body>

<!-- Mirrored from 198.74.61.72/themes/preview/ace/blank.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 27 Feb 2014 11:20:01 GMT -->
</html>
