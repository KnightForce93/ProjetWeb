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

<?php include("navbar.php"); ?>
<?php include("panierT.php"); ?>
  <br>
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
			$sql .= " INNER JOIN item ON item.id = panier.item_id WHERE panier.ach_id = '%$id_acheteur%' AND item.id = '%$item_id%'";
			$result = mysqli_query($db_handle, $sql); 
			while ($data = mysqli_fetch_assoc($result))
			{

				echo $data['panier.ach_id']. " ".$data['panier.item_id']."ok
				<div class='row'>
                <div class='col-sm-3'>
                        <div class='well'>
                        	<p><a href='ficheitem.php/{" . $data['item.id']."}''>" . $data['i.nom'] . "</a></p>
	                        	<img src='images/".$data['item.photo1'] ." 'height='100%' width='100%'' alt='photo1'> <br>
	                    </div>
                </div>
                <div class='col-sm-9'>
                        <div class='well'>
	                        <p class='description'>
	                        <b>Prix : " . $data['i.prix_minimum'] . "€</b><br>
                                   Description : " . $data['i.description'] . "<br>
                                   <small>
                                   		<i>Vendu par : " . $data['v.prenom'] . ' ' .$data['v.nom'] . "</i>
                                   	</small> 
                            </p>
                		</div>
                </div>
            </div>
                ";
			}
			?>
            <div class="row">
                <div class="col-sm-3">
                        <div class="well">
                                <p><a href="ficheitem.php/{<?php $item_id;?>}"><?php echo $nom_item;?></a></p>
                                <?php echo '<img src="images/'.$photo1.'" height="100%" width="100%" alt="photo1">';?><br>
                        </div>
                </div>
                <div class="col-sm-9">
                        <div class="well">
                              <p class="description">
                              	<b>Prix : <?php echo $prix_minimum;?>€</b><br>
                                   Description : <?php echo $description; ?><br>
                                   <small>
                                   		<i>Vendu par : <?php echo $prenom_vendeur . " " .$nom_vendeur;?></i>
                                   	</small> 
                              <?php echo $nb;?>
                            </p>
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