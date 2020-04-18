<!DOCTYPE html>
<html lang="fr">
<head>
  <title>ECE Ebay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- lien vers font awesome, library de emoticone -->
    <script src="https://kit.fontawesome.com/49d3300cf5.js" crossorigin="anonymous"></script> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="admin.css"> 
  <link rel="stylesheet" type="text/css" href="header.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <script type="text/javascript">
      //utiliser jQuery pour que l’image s’étire sur l’écran
        $(document).ready(function(){ 
          $('.header').height($(window).height());
        });
    </script>
</head>
<body>

    <?php include ("navbar.php");?>

  <div class="pageadmin">
  <div class="header"> 
    <div class="container text-center">    
      <div class="row">
        <br>
        <div class="col-sm-12 well">
            <h1 class="titrepage2">Compte Admin</h1>

        </div>
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default text-left">
                <div class="panel-body">
                  <h2 class="deux">Supprimer un vendeur</h2> <br><br>
                        <form action="adminSupprVendT.php" method="post">
                                <label for="id" class="offset-md-2 col-md-2 col-form-label text-md-right">Entrez l'id du vendeur</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="id" required autofocus>
                                </div>
                                <div class="offset-md-4">
                                <button type="submit" value="resend" name="submit"class="btn btn-danger">
                                    Supprimer
                                </button>
                            </div>
                        </form>

                  <br>
                </div>
                 
                
              </div>
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