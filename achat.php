<?php include("testutilisateur.php"); ?>
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
  <link rel="stylesheet" type="text/css" href="achat.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <style>
   
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

    <?php include("navbar.php"); ?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/meubles.jpg" alt="Image">
            <div class="carousel-caption">
              <h3>Inventaires et Collections</h3>
              <p>Meubles anciens</p>
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
  
    <div class="container text-center">    
      <h3><u>Catégories:</u></h3><br>
      <div class="row">
        <div class="col-sm-4">
          <h2>Ferrailles ou Trésors</h2>   
          <a href="produitscategories.php?categorie=Ferrailles ou Trésors"><img src="images/tresor.jpg" class="img-responsive" alt="Image"></a>
          <p>Bijoux</p>
        </div>
        <div class="col-sm-4"> 
          <h2>Bon pour le musée</h2>   
          <a href="produitscategories.php?categorie=Bon pour le musée"><img src="images/paint.jpg" class="img-responsive" alt="Image">
          </a>
          <p>Ecole de Guler ou Kangra, 1775</p>    
        </div>
        <div class="col-sm-4">
          <h2>Accessoires VIP</h2>    
          <a href="produitscategories.php?categorie=Accessoires VIP"><img src="images/ferrari.jpg" class="img-responsive" alt="Image"></a>
          <p>1957 Ferrari 335 sport Scaglietti</p>    
        </div>
      </div>
    </div><br>

    <footer class="page-footer"> 
        <div class="container">
          <div class="footer-copyright text-center">&copy; 2020 Copyright | Droits d'auteurs: Wassim Sebbahi & Thomas Popielski & Louis Donikian TD02</div><!--text-center : modifier la typographie-->
        </div>
      </footer>

</body>
</html>