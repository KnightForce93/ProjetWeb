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
              <p><a href="#"><?php echo $email;?></a></p>
              <p><a href="#"><?php echo $mdp;?></a></p>
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

              <div class="btn-group btn-group-toggle" data-toggle="buttons" style="background-color: white;">
                  <label class="btn btn-secondary active">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked> En vente
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option2" autocomplete="off"> Négociation
                  </label>
                </div>
                <br>
                <br>
              
              <?php $sql = "SELECT * FROM item";       
                        $sql .= " WHERE v_id LIKE '%$id_vendeur%'";                    
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
                        <p class="description">'.$data['description'].'</p>
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


<footer class="page-footer"> 
    <div class="container">
      <div class="footer-copyright text-center">&copy; 2020 Copyright | Droits d'auteurs: Wassim Sebbahi & Thomas Popielski & Louis Donikian TD02</div><!--text-center : modifier la typographie-->
    </div>
  </footer>

</body>
</html>