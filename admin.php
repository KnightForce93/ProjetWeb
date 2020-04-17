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
        <!-- lien vers font awesome, library de emoticone -->
    <script src="https://kit.fontawesome.com/49d3300cf5.js" crossorigin="anonymous"></script> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="admin.css">
    <script type="text/javascript">
      //utiliser jQuery pour que l’image s’étire sur l’écran
        $(document).ready(function(){ 
          $('.header').height($(window).height());
        });
    </script>
    <script>
      function send() {
        alert("Message envoyé avec succès !")
      }
    </script>
</head>
<body>
    <?php include ("navbar.php"); ?>
      
    <div class="container text-center">    
      <div class="row">
        <div class="col-sm-3 well">
          <div class="well">
            <p><a href="#">Compte Admin</a></p>
          </div>
          <div class="well">
            <a href="#"><button class="btn btn-outline-secondary btn-lg">Tableau des items</button></a>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default text-left">
                <div class="panel-body">
                  <h2>Ensemble des vendeurs: </h2> 
                  <br>
                </div>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="well">
                     <p>ID</p>
                    </div>
                  </div>
                  <div class="col-sm-7">
                    <div class="well">
                      <p class="description">Nom du Vendeur</p>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="well">
                      <button class="buttonsup">Supprimer</button>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="well">
                     <p>ID</p>
                    </div>
                  </div>
                  <div class="col-sm-9">
                    <div class="well">
                      <p class="description">Nom du Vendeur</p>
                      <button style="margin-left: 500px;">Supprimer</button>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="well">
                     <p>ID</p>
                    </div>
                  </div>
                  <div class="col-sm-9">
                    <div class="well">
                      <p class="description">Nom du Vendeur</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <button>Ajouter un vendeur</button>
                  </div>
                  <div class="col-sm-6">
                    <button>Supprimer un vendeur</button>
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