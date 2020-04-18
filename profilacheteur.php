<!DOCTYPE html>
<html lang="en">
<head>
  <title>ECE Ebay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="profilacheteur.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
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

  
   <?php 
   include("navbar.php");
   include("profilacheteurT.php"); ?>
<div class="container text-center">    
  <div class="row">
        <div class="col-sm-3 well">
          <div class="well">
            <p><a href="#"><?php echo $nom." ".$prenom; ?> </a></p>
            <p><a href="#"><?php echo $email;?></a></p>
            <p><a href="#"><?php echo $mdp;?></a></p>
            <p><a href="#"><?php echo $tel;?></a></p>
          </div>
          <div class="well">
            <p class="info">Adresse: <?php echo $adresse;?><br>
               Ville:<?php echo $ville;?><br>
               Code Postal: <?php echo $tel;?><br>
               Pays:<?php echo $pays;?><br>
            </p>
          </div>
          <div class="well">
            <p class="info">
               Nom de la carte: <?php echo $nomcarte;?><br>
               Type de carte: <?php echo $typecarte;?><br>
               Numéro:<?php echo $numero_carte;?><br>
               Cryptogramme: <?php echo $code;?><br>
               Date expiration: <?php echo $dateexp;?>
            </p>
          </div>
        </div>

        <div class="col-sm-7">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default text-left">
                <div class="panel-body">
                  <p contenteditable="true">Statut: <?php echo $statut;?></p>
                  <p contenteditable="true"><?php echo $nom." ".$prenom;?> est inscrit sur ECE Ebay depuis le <?php echo$datecreation;?></p>    
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default text-left">
                <div class="panel-body">
                  <p class="commande">Commandes passées: </p>  
                </div>
              </div>
            </div>
          </div>

        <?php $sql = "SELECT * FROM item";       
            $sql .= " WHERE id_acheteur LIKE '%$id_acheteur%'"; 

    $result = mysqli_query($db_handle, $sql); 
    while ($data = mysqli_fetch_assoc($result)) {

      echo'<div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>'.$data['nom'].'</p>
           <img src="images/'.$data['photo1'].'" height="100%" width="100%" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p class="description">Prix de vente: '.$data['prix_vente']."€<br> 
           Date d'achat: ".$data['date_vente']."</p>
          </div>
        </div>
      </div>  
      ";
    }
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