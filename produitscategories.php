<!DOCTYPE html>
<html lang="en">
<head>
  <title>ECE Ebay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- lien vers font awesome, library de emoticone -->
    <script src="https://kit.fontawesome.com/49d3300cf5.js" crossorigin="anonymous"></script> 
  <link rel="stylesheet" type="text/css" href="produitscategories.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
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
              <a href="vente.php" class="navbar-menu-link">Vente</a>
              <a href="profilacheteur.php" class="navbar-menu-link">Votre Compte</a>
              <a href="" class="navbar-menu-link"><i class="fas fa-shopping-basket"></i> Panier</a>
              <a href="plus.php" class="navbar-menu-link">Plus</a>
            </div>
          </ul>
        </div>
      </div>
    </nav>
    <?php
      include("Connexionbdd.php");
        if(filter_has_var(INPUT_GET,'categorie')){
         $categorie=$_GET['categorie'];
         echo   "<h1>". $categorie."</h1>";
     }else{
       $categorie="Accessoires VIP";
         echo   "<h1>Accessoires VIP</h1>";
     }
     ?>  

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/bijoux.jpg" alt="Image">
            <div class="carousel-caption">
              <h3>Joaillerie</h3>
              <p>Bijoux d'exceptions</p>
            </div>      
          </div>

          <div class="item">
            <img src="images/montres.jpg" alt="Image">
            <div class="carousel-caption">
              <h3>Horlogerie de Collection</h3>
              <p>Montres de toutes marques</p>
            </div>      
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <br>

     <div class='container text-center'>    
      <div class='row'>
            <div class='col-sm-12'>
              <div class="well">
                <h2>Produits en vente dans la catégorie <?php echo $categorie; ?></h2>
              </div>
            </div>
          </div>

            <div class='row'>

            <div class='col-sm-3'>
              <div class='well'>

              <div class='row'>
              <div class='col-sm-12'>
              
                <p><strong> Afficher les produits par type de vente:</strong></p>
              
            </div>
          </div>

          <div class='row'>
              <div class='col-sm-12'>
              
                <button type="button" class="btn btn-primary">Achat Immediat</button> <br><br>
                <button type="button" class="btn btn-primary">Faire une enchère</button> <br><br>
                <button type="button" class="btn btn-primary">Proposer une offre</button>
                
              </div>
            </div>

          </div>
</div>
            <div class="col-sm-9">
     <?php 
     //if(filter_has_var(INPUT_GET,'categorie')){
      $sql = "SELECT * FROM item";       
            $sql .= " WHERE categorie_produit LIKE '%$categorie%'";                    
            $result = mysqli_query($db_handle, $sql); 
    while ($data = mysqli_fetch_assoc($result)) {
      echo'
      <div class="well">
       <div class="row">
        

       <div class="col-sm-3">
                <div class="well">
                 <img src="images/'.$data['photo1'].'" height="100%" width="100%" alt="Avatar">
                </div>
              </div>

              <div class="col-sm-9">

                <div class="row">
                <div class="col-sm-12">
                <div class="panel-body">
                  <p class="commande"><strong>'.$data['nom'].'</strong></p>  
                </div>
              </div>
            </div>

             <div class="row">
                <div class="col-sm-6">
                <div class="panel-body">
                  <p class="commande"> Type de vente:  '.$data['categorie_achat'].'</p>  
                </div>
              </div>
              <div class="col-sm-6">
                <div class="panel-body">
               <a href=ficheitem.php?item_id='.$data['id'].'><button>En savoir plus</button></a>  
                </div>
              </div>
            </div>
            
            </div>
</div>
              </div>
               ';
    }
//  }
    ?>
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