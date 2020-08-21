

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="bootstrap/assets/ico/favicon.ico">

    <title>Liste de produit</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/pagination.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="bootstrap/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    #entreprises span { width: 64px; height: 64px; display: block; float: left; margin-right: 10px; }
    .entreprise { background: #e0e0e0; padding: 10px; margin-bottom: 5px; border-radius: 5px;}
    .entreprise p { float: left; }
    .entreprise img { border: solid 2px #fff;  }
    .clear { clear: both; }
    </style>
  </head>
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
          url: 'rqcommande.php',
          data: 'q=contact&nom='+nom+'&prenom='+prenom+'&email='+email+'&tel='+tel+'&objet='+objet+'&message='+message,
          success: function(data) {
            $('#notif').html('<p class="bg-success">Message envoyé. Merci!</p>');
          }
        })
      return false;
      })
    })
    </SCRIPT>
  </head>

  <body>



 <div class="container">
 <?php include'header.php'; ?>

      <br>
      <br>
     

      <div class="row marketing">
    <center>  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3208.9495607788344!2d10.747180237908614!3d36.458775222914426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1397823659549" width="1140" height="400" frameborder="0" style="border:0"></iframe></iframe> </center>
      </div>

      <div class="jumbotron">

        <form id="contact_form" method="post" class="form-horizontal">
        <fieldset>

        <!-- Form Name -->
        <legend>Contactez-nous</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="nom">Nom</label>  
          <div class="col-md-6">
          <input id="nom" name="nom" type="text" placeholder="Votre nom" class="form-control input-md" required="">
          <span class="help-block">ex: Mohamed</span>  
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="prenom">Prénom</label>  
          <div class="col-md-6">
          <input id="prenom" name="prenom" type="text" placeholder="Votre prénom" class="form-control input-md" required="">
          <span class="help-block">ex: Salah</span>  
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="email">Email</label>  
          <div class="col-md-8">
          <input id="email" name="email" type="text" placeholder="Votre adresse mail" class="form-control input-md" required="">
          <span class="help-block">ex: medsalah@gmail.com</span>  
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="tel">Téléphone</label>  
          <div class="col-md-6">
          <input id="tel" name="tel" type="text" placeholder="Votre N°GSM" class="form-control input-md" required="">
          <span class="help-block">ex: 98 100 200</span>  
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="objet">Objet</label>
          <div class="col-md-6">
            <select id="objet" name="objet" class="form-control">
              <option>Passer une commande</option>
              <option>Faire une réclamation</option>
              <option>Autre</option>
            
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
        <p> Boumaiza Bois et dérivées </p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
