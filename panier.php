<!DOCTYPE html>
<html lang="en">
<head>
  <title>ECE Ebay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <!-- lien vers font awesome, library de emoticone -->
    <script src="https://kit.fontawesome.com/49d3300cf5.js" crossorigin="anonymous"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="panier.css">
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="accueil.php"><img src="images/logo.png" width="80"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
                  <div class = "dropdown">
                    <a href="achat.php" class="bouton-dropdown">Catégories</a>
                      <ul class="bouton-categorie-liste">
                          <li><a href="ferraille_tresor.php">Férrailles et Trésor</a></li>
                        <li><a href="#">Bon pour le musée</a></li>
                        <li><a href="#">Accessoire VIP</a></li>
                      </ul>
                  </div>
      </ul>
      <form class="navbar-form" role="search">
         <div class="nav navbar-nav">
            <input type="search" id="recherche" name="recherche" placeholder="Rechercher dans ECE Ebay... ">
          </div>       
      </form>
     <ul class="nav navbar-nav navbar-right">
                  <div class="navbar-menu">
                    <a href="achat.php" class="navbar-menu-link">Achat</a>
                    <a href="vente.php" class="navbar-menu-link">Vente</a>
                    <a href="profilvendeur.php" class="navbar-menu-link">Votre Compte</a>
                    <a href="panier.php" class="navbar-menu-link"><i class="fas fa-shopping-basket"></i> Panier</a>
                    <a href="plus.php" class="navbar-menu-link">Plus</a>
                     <a href="admin.php" class="navbar-menu-link">admin</a>
                  </div>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container text-center">    
  <div class="row">
        <div class="col-sm-3 well">
          <div class="well">
            <p><a href="#">Wassim Sebbahi</a></p>
            <p><a href="#">adresse@mail.com</a></p>
            <p><a href="#">Numéro de tel</a></p>
          </div>
          <div class="well">
            <p class="info">Adresse:<br>
               Ville:<br>
               Code Postal: <br>
               Pays:<br>
            </p>
          </div>
          <div class="well">
            <p class="info">Type de carte:<br>
               Code:<br>
               Cryptogramme: <br>
            </p>
          </div>
        </div>

        <div class="col-sm-7">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default text-left">
                <div class="panel-body">
                 <p class="commande">Panier:</p>  
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
                  <p class="description">PRIX: 10000€<br>
                  Nom du vendeur</p>
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
                  <p class="description">PRIX: 1M€<br>
                  Nom du vendeur</p>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="well">
                  <p class="total">Total: </p>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
            <a href=""><button class="bouton-paiement">Procéder au paiement</button></a>
              </div>
            </div>
          </div>
        </div>
  </div>
</div>
<br>
<br>

<footer class="page-footer"> 
    <div class="container">
      <div class="footer-copyright text-center">&copy; 2020 Copyright | Droits d'auteurs: Wassim Sebbahi & Thomas Popielski & Louis Donikian TD02</div><!--text-center : modifier la typographie-->
    </div>
  </footer>

</body>
</html>