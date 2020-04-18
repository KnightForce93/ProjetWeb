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
  <link rel="stylesheet" type="text/css" href="profilvendeur.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
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
  }
  </style>
  <script type="text/javascript">
                function togg1(){
                     document.getElementById("Block_vente").style.display = "block";
                     document.getElementById("Block_offres").style.display = "none";
                }; 
                function togg2(){
                     document.getElementById("Block_offres").style.display = "block";
                    document.getElementById("Block_vente").style.display = "none";
                };
        </script>

</head>
<body>

  <?php include ("navbar.php"); ?>
  
    <?php include("profilvendeurT.php"); ?>
    <div class="photocouverture">
      <div class="container text-center">   
        <div class="overlay"></div>
        <br>
          <div class="row">
            <div class="col-sm-3 well">
              <div class="well">
               <p><a href="#"> <?php echo $nom." ".$prenom; ?> </a></p>
            <?php echo "<img src='images/".$pphoto."' height='100%' width='100%' alt='Avatar'>"; ?>
              </div>
              
              <p>Adresse email: <?php echo $email;?></p>
              <p>Mot de passe: <?php echo $mdp;?> </p><br>
              <a href="modificationdonnées.php"> <button type="button" class="btn btn-primary">Modifier données personnelles</button></a> 
            </div>

            <div class="col-sm-7">
            
              <div class="row">
                <div class="col-sm-12">
                  <div class="panel panel-default text-left">
                    <div class="panel-body">
                      <p contenteditable="true">Statut: <?php echo $statut;?></p>
                  <p contenteditable="true">Vous est inscrit sur ECE Ebay depuis le <?php echo$datecreation;?></p>      
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
              <div class="col-sm-12">
              <div class="btn-group btn-group-toggle" data-toggle="buttons" style="background-color: white;">
                  
                 <button class="bouton" onclick="togg1()">Vente</button>
                 
                 <button class="bouton" onclick="togg2()">Négociation</button>
                  
                </div>
              </div>
            </div>
                <br>
                <br>
              <div class="row">
              <div class="col-sm-12">
              


                 <div id="Block_vente" > 
              <?php 
              $sql = "SELECT * FROM item";       
                        $sql .= " WHERE v_id LIKE '%$id_vendeur%'";                    
                $result = mysqli_query($db_handle, $sql); 
                while ($data = mysqli_fetch_assoc($result)) {

                  echo'
                     <div class="well">
                     <div class="row">
                    <div class="col-sm-3">
                      <div class="well">
                       <p>'.$data['nom'].'</p>
                       <img src="images/'.$data['photo1'].'" height="100%" width="100%" alt="Avatar">
                      </div>
                    </div>
                    <div class="col-sm-9">
                      <div class="well">
                        <p class="description">'.$data['description'].'</p>
                      </div>
                    </div>
                  </div>
                  </div>
                  ';
                }
                ?>
              </div> 
              <div id="Block_offres" >
              <?php 
              $sql = "SELECT item.id, item.nom ,item.photo1, item.description FROM item, meilleuroffre";      
              $sql .= " WHERE item.id = meilleuroffre.item_id";  
              $sql .= " AND item.v_id = '$id_vendeur%'";                  
                $result = mysqli_query($db_handle, $sql); 
                while ($data = mysqli_fetch_assoc($result)) {

                  echo'
                     <div class="well">
                     <div class="row">
                    <div class="col-sm-3">
                      <div class="well">
                       <p>'.$data['nom'].'</p>
                       <img src="images/'.$data['photo1'].'" height="100%" width="100%" alt="Avatar">
                      </div>
                    </div>
                    <div class="col-sm-9">
                      <div class="well">
                        <p class="description">'.$data['description'].'</p>
                      </div>
                    </div>
                  </div>
                  </div>
                  ';
                }
                ?>
                </div> 
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