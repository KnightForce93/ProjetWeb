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
  <link rel="stylesheet" type="text/css" href="navbar.css">
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

  <div class="pageadmin"> 
    <div class="container text-center">    
      <div class="row">
        <br>
        <div class="col-sm-12 well">
            <h1 class="titrepage2">Compte Admin</h1><br>


            <a href="#"><button class="boutonitem2">Tableau des items</button></a>

        </div>
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default text-left">
                <div class="panel-body">
                  <h2 class="deux"> Ensemble des vendeurs: </h2> 
                  <br>
                </div>
                <table class ="table">
                  <tr class ="table">
                    <th><strong>Photo de Profil</strong></th>
                    <th><strong>ID</strong></th>
                    <th><strong>Nom</strong></th>
                    <th><strong>Date d'inscription</strong></th>
                    <th>Supprimer</th>
                  </tr>
                  <tr class="warning">
                    <td>
                      <div>
                        <?php echo "<img src='images/".$pphoto."' height='70%' width='70%' alt='Avatar'>"; ?>
                      </div>
                    </td>
                    <th><strong>ID</strong></th>
                    <th><strong>Nom</strong></th>
                    <th><strong>Date d'inscription</strong></th>
                    <td>
                      <div>
                        <a href=""><button class="bouton-supprimer">Supprimer</button></a>
                      </div>
                    </td>
                  </tr>
                  <tr class= "success">
                    <td>
                      <div>
                        <?php echo "<img src='images/".$pphoto."' height='70%' width='70%' alt='Avatar'>"; ?>
                      </div>
                    </td>
                    <td>ID</td>
                    <td>MAIL</td>
                    <td>20/07/2000</td>
                    <td>
                      <div>
                        <a href=""><button class="bouton-supprimer">Supprimer</button></a>
                      </div>
                    </td>
                  </tr>
                  <tr class="danger">
                    <td>
                      <div>
                        <?php echo "<img src='images/".$pphoto."' height='70%' width='70%' alt='Avatar'>"; ?>
                      </div>
                    </td>
                    <td>ID</td>
                    <td>MAIL</td>
                    <td>20/07/2000</td>
                    <td>
                      <div>
                        <a href=""><button class="bouton-supprimer">Supprimer</button></a>
                      </div>
                    </td>
                  </tr>
                  <tr class= "info">
                    <td>
                      <div>
                        <?php echo "<img src='images/".$pphoto."' height='70%' width='70%' alt='Avatar'>"; ?>
                      </div>
                    </td>
                    <td>ID</td>
                    <td>MAIL</td>
                    <td>20/07/2000</td>
                    <td>
                      <div>
                        <a href=""><button class="bouton-supprimer">Supprimer</button></a>
                      </div>
                    </td>
                  </tr>
                </table>  
                
                
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