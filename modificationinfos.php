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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
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
if(filter_has_var(INPUT_GET,'info')){
        $info=$_GET['info'];
    }
?>
<header class="page-header header container-fluid">
        <br><br><br>
    <main class="my-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                      <?php if($info=="email"){
                        echo'
                        <div class="card-header">Entrez votre nouvelle adresse email</div>
                        <div class="card-body">
                            <form  name="my-form"  action="modificationinfosT.php" method="post">
                                <fieldset>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>';
                              }
                              if($info=="mdp"){
                        echo'
                        <div class="card-header">Entrez votre nouveau mot de passe</div>
                        <div class="card-body">
                            <form  name="my-form"  action="modificationinfosT.php" method="post">
                                <fieldset>
                                <div class="form-group row">
                                    <label for="mdp" class="col-md-4 col-form-label text-md-right">Mot de passe</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="mdp">
                                    </div>
                                </div>';
                              }
                            
                              echo'
                                <div class="col-md-6 offset-md-4">
                                        <input type="submit" value="Modifier" class ="btn btn-primary" name="submit">
                                </div>
                               </fieldset>
                            </form>
                        </div>
                        </div>';
                        ?>
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