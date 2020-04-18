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

    <?php include ("navbar.php"); 
    include("Connexionbdd.php");?>

  <div class="pageadmin">
  <div class="header"> 
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
                  <tr>
                    <th><strong>Photo de Profil</strong></th>
                    <th><strong>ID</strong></th>
                    <th><strong>Nom</strong></th>
                    <th><strong>Date d'inscription</strong></th>
                    <th>Action</th>
                  </tr>
                  <?php 
                        $sql = "SELECT * FROM vendeur";
                        $result = mysqli_query($db_handle, $sql); 

                        while ($data = mysqli_fetch_assoc($result)) {
                            $user_id=$data['user_id'];
                            $sql1 = "SELECT *, DATE_FORMAT(created_at, '%d %M %Y à %kh%i') as datee FROM utilisateur ";
                            $sql1 .= "WHERE id LIKE '%$user_id%'";
                            $result1 = mysqli_query($db_handle, $sql1); 
                            while ($data1 = mysqli_fetch_assoc($result1)) {

                            echo'
                              <tr>
                                <td>
                                    <img src="imagesutilisateur/'.$data['profil_photo'].'" height="100"" width="100"" alt="Avatar">
                                </td>
                                <td>'.$data['id'].'</th>
                                <td>'.$data['nom'].' '.$data['prenom'].'</td>
                                <td>'.$data1['datee'].'</td>
                                <td>
                                  <div>
                                    <a href="adminV2.php"><button class="bouton-supprimer">Supprimer</button></a>
                                  </div>
                                </td>
                              </tr>
                            ';
                        }}
                  ?>
                </table>  
                
                
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