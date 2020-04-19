<!DOCTYPE html>
<html lang="en">
<head>
  <title>ECE Ebay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <!-- lien vers font awesome, library de emoticone -->
    <script src="https://kit.fontawesome.com/49d3300cf5.js" crossorigin="anonymous"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="panier.css">
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

<?php include("navbar.php"); 
include("Connexionbdd.php");
 include("panierT.php"); 
 ?>

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
            <p class="info"> 
               Adresse : <?php echo $adresse;?><br>
               Ville : <?php echo $ville;?><br>
               Code Postal : <?php echo $cp;?><br>
               Pays : <?php echo $pays;?><br>
            </p>
          </div>
          <div class="well">
            <p class="info">
               Nom de la carte : <?php echo $nomcarte;?><br>
               Type de carte : <?php echo $typecarte;?><br>
               Numéro : <?php echo $numero_carte;?><br>
               Cryptogramme : <?php echo $code;?><br>
               Date expiration : <?php echo $dateexp;?>
            </p>
          </div>
        </div>

        <div class="col-sm-7">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default text-left">
                <div class="panel-body">
                 <p class="commande">Votre panier :</p>  
                </div>
              </div>
            </div>
          </div>


          	<?php 
          	     $sql= "SELECT * FROM panier";
			     $sql .= " WHERE ach_id LIKE '%$id_acheteur%'";
			     $result = mysqli_query($db_handle, $sql); 
                 $tot=0;
      			while ($data = mysqli_fetch_assoc($result))
      			{
                    $item_id=$data['item_id'];
                    $sql1 = "SELECT * FROM item ";
                    $sql1 .= " WHERE id LIKE '%$item_id%'";
                    $result1 = mysqli_query($db_handle, $sql1);  
                    while ($data1 = mysqli_fetch_assoc($result1)) 
                    {
                        $v_id=$data1['v_id'];
                        $sql2 = "SELECT * FROM vendeur ";
                        $sql2 .= " WHERE id LIKE '%$v_id%'";
                        $result2 = mysqli_query($db_handle, $sql2);
                        while ($data2 = mysqli_fetch_assoc($result2)) {
            				echo '
            				<div class="row">
                            <div class="col-sm-3">
                                    <div class="well">
                                    	<p><a href="ficheitem.php/{' . $data1['id'].'}">' . $data1['nom'] . '</a></p>
            	                        	<img src="images/'.$data1['photo1'] .' "height="100%" width="100%" alt="photo1"> <br>
            	                    </div>
                            </div>
                            <div class="col-sm-9">
                                    <div class="well">
            	                        <p class="description">
            	                        <b>Prix : ' . $data1['prix_minimum'] . '€</b><br>
                                               Description : ' . $data1['description'] . '<br>
                                               <small>
                                               		<i>Vendu par : ' . $data2['prenom'] . ' ' .$data2['nom'] . '</i>
                                               	</small> 
                                        </p>
                            		</div>
                            </div>
                        </div>';
                        $tot=$tot+$data1['prix_minimum'];
                   } }
			}
            echo '
          <div class="row">
            <div class="col-sm-12">
              <div class="well">
                  <p class="total">Total : ' . $tot . '€</p>
                </div>
              </div>
            </div>
            ';?>
            <form action="procederPaiement.php" method="post">
                <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" value="connexion" name="submit" class="bouton-paiement">Procéder au paiement</button>
                    </div>
                </div>
            </form>
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