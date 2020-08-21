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

  <body>

    <div class="container">
      <?php include 'header.php'; ?>

      <div id="entreprises" class="row marketing">


      <?php 
include_once('pagination.php');

  // Connexion à la BDD (à vous de configurer les paramètres de connexion à la base)
  $dbc = @mysqli_connect('localhost', 'root', '', 'boumaizabois');
  if (!$dbc) {
    trigger_error('Connexion à la BDD impossible : ' . mysqli_connect_error() );
    exit();
  }

  // Calcul du nombre total d'entrées $total dans la table pagination
  $res = mysqli_query($dbc, 'SELECT COUNT(*) FROM produit');
  $row = mysqli_fetch_row($res);
  $total = $row[0];

  // Libération de la mémoire associée au résultat
  mysqli_free_result($res);

  $epp = 3; // nombre d'entrées à afficher par page (entries per page)
  $nbPages = ceil($total/$epp); // calcul du nombre de pages $nbPages (on arrondit à l'entier supérieur avec la fonction ceil())

  // Récupération du numéro de la page courante depuis l'URL avec la méthode GET
  // S'il s'agit d'un nombre on traite, sinon on garde la valeur par défaut : 1
  $current = 1;
  if (isset($_GET['p']) && is_numeric($_GET['p'])) {
    $page = intval($_GET['p']);
    if ($page >= 1 && $page <= $nbPages) {
      // cas normal
      $current=$page;
    } else if ($page < 1) {
      // cas où le numéro de page est inférieure 1 : on affecte 1 à la page courante
      $current=1;
    } else {
      //cas où le numéro de page est supérieur au nombre total de pages : on affecte le numéro de la dernière page à la page courante
      $current = $nbPages;
    }
  }

  // $start est la valeur de départ du LIMIT dans notre requête SQL (dépend de la page courante)
  $start = ($current * $epp - $epp);

  // Récupération des données à afficher pour la page courante
  $qry = "SELECT id, nom, `desc`,logo FROM produit LIMIT $start, $epp";
  $res = @mysqli_query($dbc, $qry);

  if ($res) {
    // Affichage des données
    while($r = mysqli_fetch_array($res)) {

        echo '<div class="entreprise"><h3>'.strtoupper($r['nom']).'</h3><p><span><img src="upload/'.$r['logo'].'" width="64" height="64" /></span>'.substr($r['desc'], 0, 325).'...<br /><a href="fiche.php?id='.$r['id'].'">Lire la suite</a></p><div class="clear"></div></div>';

    }

    mysqli_free_result($res);
  } else {
    echo mysqli_error($dbc);
  }
  ?>

  <?php echo paginate('http://localhost/admin/liste.php', '?p=', $nbPages, $current); ?>


     

  
      </div>

      <div class="footer">
        <p>Boumaiza Bois et dérivées </p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
