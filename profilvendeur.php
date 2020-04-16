<!DOCTYPE html>
<html lang="en">
<head>
  <title>ECE Ebay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="profilvendeur.css">
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body>

<nav>
  <div class="container-fluid">
    <div class="navbar-header">
         <a href="index.php"><img src="images/logo.png" width="80"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar"  style="padding-top: 20px;">
      <ul class="nav navbar-nav">
        <div class = "dropdown">
        <a href="" class="bouton-dropdown">Catégories</a>
          <ul class="bouton-categorie-liste">
            <li><a href="ferraille_tresor.php">Férrailles et Trésor</a></li>
            <li><a href="#">Bon pour le musée</a></li>
            <li><a href="#">Accessoire VIP</a></li>
          </ul>
        </div>
      </ul>
      <div class="nav navbar-nav">
        <input type="search" id="recherche" name="recherche" placeholder="Rechercher dans ECE Ebay... ">
      </div> 
      <ul class="nav navbar-nav navbar-right">
        <div class="navbar-menu">
          <a href="achat.php" class="navbar-menu-link">Achat</a>
          <a href="vente.php" class="navbar-menu-link">Enchère</a>
           <a href="newitem.php" class="navbar-menu-link"><i class="fas fa-shopping-basket"></i> Vendre</a>
          <a href="inscription.php" class="navbar-menu-link">Votre Compte</a>
          <a href="plus.php" class="navbar-menu-link">Plus</a>
        </div>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="#">Louis Donikian</a></p>
        <img src="images/louis.jpg" alt="Avatar">
      </div>
      <div class="well">
        <p><a href="#">Types de Produits</a></p>
        <p>
          <span class="label label-success">Montre de luxe</span>
          <span class="label label-primary">Bijoux</span>
          <span class="label label-warning">Or</span>
          <span class="label label-info">Diamand</span>
          <span class="label label-default">Argent</span>
        </p>
      </div>
      <p><a href="#">Louis.donikian@edu.ece.fr</a></p>
      <p><a href="#">Facebook</a></p>
      <p><a href="#">Numéro de tel</a></p>
    </div>
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <p contenteditable="true">Statut: Vendeur</p>
              <p contenteditable="true">Louis Donikian est inscrit sur ECE Ebay depuis le 15 avril 2020</p>    
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Sac Hermès KELLY 35</p>
           <img src="images/sac.jpg" height="100%" width="100%" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p class="description">Crocodile d'estuaire vert Émeraude (Crocodylus porosus) II/B source C
              Garniture métal argenté palladié.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Autoportrait Peinture de Vincent van Gogh</p>
           <img src="images/vangogh.jpg" height="100%" width="100%" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p class="description">L'artiste hollandais postimpressionniste Vincent van Gogh a peint un autoportrait à l'huile sur toile en septembre 1889. L'œuvre, qui pourrait être le dernier autoportrait de Van Gogh, a été peinte peu de temps avant son départ de Saint-Rémy-de-Provence dans le sud France.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Patek Philippe Nautilus « Jumbo »</p>
           <img src="images/montrePP.jpg" height="100%" width="100%" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p class="description">Montre bracelet extra-large en acier <br>
                Boîtier : coussin, fermeture à vis sur la carrure, signé<br>
                Cadran : anthracite tramé, index "bâton" appliqués, aiguilles luminescentes, date à guichet, signé<br>
                Mouvement : automatique, 28.255, 36 rubis, ajusté 5 positions, signé<br>
                Bracelet / Boucle : intégré en acier / déployante, signée<br>
                Tour de poignet : approx. 185 mm<br>
                Dim. : 42 x 44 mm<br>
                Avec : son certificat d'identité et garantie d'origine mentionnant la date de vente du 12 août 1978 à Genève, un extrait des registres confirmant la date de manufacture en 1977 et sa vente le 31 juillet 1978, un livret</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="page-footer"> 
    <div class="container">
      <div class="footer-copyright text-center">&copy; 2020 Copyright | Droits d'auteurs: Wassim Sebbahi & Thomas Popielski & Louis Donikian TD02</div><!--text-center : modifier la typographie-->
    </div>
  </footer>

</body>
</html>