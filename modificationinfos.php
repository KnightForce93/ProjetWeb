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
if(filter_has_var(INPUT_GET,'info')){
        $info=$_GET['info'];
    }
?>
<header class="page-header  container-fluid">
        <br><br><br>
    <main class="my-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                      <?php
                              if($info=="adresse"){
                        echo'
                        <div class="card-header">Entrez une nouvelle adresse</div>
                        <br>
                        <div class="card-body">
                            <form  name="my-form"  action="modificationinfosT.php" method="post">
                                <fieldset>
                                <div class="form-group row">
                                    <label for="adresse" class="col-md-4 col-form-label text-md-right">Adresse</label>
                                    <div class="col-md-6">
                                          <input type="text" name="adresse" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                   <label for="ville" class="col-md-4 col-form-label text-md-right">Ville</label>
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" name="ville">
                                    </div>
                                </div>  
                                <div class="form-group row">
                                   <label for="cp" class="col-md-4 col-form-label text-md-right">Code postal</label>
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" name="cp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                   <label for="pays" class="col-md-4 col-form-label text-md-right">Pays</label>
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" name="pays">
                                    </div>
                                </div>

                                ';
                              }

                              if($info=="paiement"){
                        echo'
                        <div class="card-header">Entrez une nouvelle carte bancaire</div>
                        <br>
                        <div class="card-body">
                            <form  name="my-form"  action="modificationinfosT.php" method="post">
                                <fieldset>
                                <div class="form-group row">
                                    <label for="typecarte" class="col-md-4 col-form-label text-md-right">Type de carte</label>
                                    <div class="col-md-6">
                                          <input type="text" name="typecarte" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                   <label for="nomC" class="col-md-4 col-form-label text-md-right">Nom</label>
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" name="nomC">
                                    </div>
                                </div>  
                                <div class="form-group row">
                                   <label for="numero_carte" class="col-md-4 col-form-label text-md-right">Numéro de la carte</label>
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" name="numero_carte">
                                    </div>
                                </div>
                                <div class="form-group row">
                                   <label for="dateexp" class="col-md-4 col-form-label text-md-right">Date d\'expiration</label>
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" name="dateexp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                   <label for="code" class="col-md-4 col-form-label text-md-right">Cryptogramme</label>
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" name="code">
                                    </div>
                                </div>
                                <div class="form-group row">
                                   <label for="solde" class="col-md-4 col-form-label text-md-right">Solde</label>
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" name="solde">
                                    </div>
                                </div>';
                              }


                              echo'
                                <div class="col-md-6 offset-md-4">
                                        <input type="submit" value="Enregistrer" class ="btn btn-primary btn-right" name="submit">
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