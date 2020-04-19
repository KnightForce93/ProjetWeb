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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="accueil.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>

    <!-- lien vers font awesome, library de emoticone -->
    <script src="https://kit.fontawesome.com/49d3300cf5.js" crossorigin="anonymous"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
</head>
<body>

<?php include("navbar.php"); 
if(filter_has_var(INPUT_GET,'meilleuroffre_id')){
        $offre_id=$_GET['meilleuroffre_id'];
    }
?>
<header class="page-header header container-fluid">
        <br><br><br>
    <main class="my-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Entrez votre Offre</div>
                        <div class="card-body">
                            <form  name="my-form"  action="modificationmeilleuroffreT.php" method="post">
                                <fieldset>
                              <?php 
                              echo'
                               <input type="hidden"  name="meilleuroffre_id" value="'.$offre_id.'">'; ?>
                                <div class="form-group row">
                                    <label for="prix" class="col-md-4 col-form-label text-md-right">Prix</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="prix">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="msg" class="col-md-4 col-form-label text-md-right">Message</label>
                                    <div class="col-md-6">
                                        <textarea type="text" class="form-control" name="msg"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                        <input type="submit" value="Envoyer l'offre" class ="btn btn-primary" name="submit">
                                </div>
                               </fieldset>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</main>
</header>

<footer class="page-footer"> 
    <div class="container">
      <div class="footer-copyright text-center">&copy; 2020 Copyright | Droits d'auteurs: Wassim Sebbahi & Thomas Popielski & Louis Donikian TD02</div><!--text-center : modifier la typographie-->
    </div>
  </footer>

</body>
</html>