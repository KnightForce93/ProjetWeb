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

    <?php include ("navbar.php"); ?>
  
  <?php
      include("ficheitemT.php");
       ?>

    <div class="container text-center">  
    <br>  
          <div class="row">
              <div class="col-sm-5">
                <div class="panel panel-default text-left">
                  <div class="panel-body">
                    <p class="commande"><?php echo $nomitem;?></p>  
                  </div>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="panel panel-default text-left">
                  <div class="panel-body">
                    <p contenteditable="true"><strong>Nom du vendeur: </strong><?php echo $nomvendeur;?></p>  
                  </div>
                </div>  
              </div>
          </div>
          <div class="row">
              <div class="col-sm-5">
                <div class="well">
                 <?php echo '<img src="images/'.$photo1.'" height="100%" width="100%" alt="Avatar">'?>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="well">
                    <p class="titre"><strong>Titre: </strong><?php echo $nomitem;?><br></p>
                    <p class="titre"><strong>Catégorie: </strong><?php echo $nomitem;?><br></p> <!--Ajouter la catégorie svp-->
                    <p class="description"> <strong>Description: </strong><?php echo $description;?></p><br>
                    <p class="prix"><strong>Prix: </strong>250 euros</p> <!--Ajouter le prix svp-->
                     <br><br>
                </div>
                <button class="buttonachat">Achat immédiat</button>
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