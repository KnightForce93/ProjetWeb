<!DOCTYPE html>
<html lang="en">
<head>
  <title>ECE Ebay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="ficheitem.css">
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
  
  <?php
      include("Tficheitem.php");
       ?>

    <div class="container text-center">    
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default text-left">
                <div class="panel-body">
                  <p contenteditable="true"><?php echo $nomvendeur;?></p>  
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default text-left">
                <div class="panel-body">
                  <p class="commande"><?php echo $nomitem;?></p>  
                </div>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-sm-3">
                <div class="well">
                 <?php echo '<img src="images/'.$photo1.'" height="100%" width="100%" alt="Avatar">'?>
                </div>
              </div>
              <div class="col-sm-9">
                <div class="well">
                  <p class="description"><strong><?php echo $nomitem;?></strong><br>
                      <?php echo $description;?>
                  </p>
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