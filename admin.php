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
  

  <link rel="stylesheet" type="text/css" href="navbar.css">

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
  <br> 
    <div class="container text-center">    
      <div class="row">
        <br>
        <div class="col-sm-12 well">
            <h1 class="titrepage2">Compte Admin</h1><br>
            <a href="adminV3.php?table=vendeur"><button class="boutonitem2">Tableau des vendeurs</button></a>
             <a href="adminV3.php?table=item"><button class="boutonitem2">Tableau des items</button></a>
              <a href="adminV3.php?table=enchere"><button class="boutonitem2">Tableau des enchères</button></a>
        </div>
      </div>
     <div class="row">
        <div class="col-sm-12">
              <div class="panel panel-default text-left">
                
                   <?php 
                  if(filter_has_var(INPUT_GET,'table')){
        $table=$_GET['table'];
    }else{$table='vendeur';
}
if($table=="vendeur"){
  echo'<div class="panel-body">
                  <h2 class="deux"> Ensemble des vendeurs: </h2> 
                  <br>
                </div>
                <style type=text/css>
                   table tbody tr:nth-child(odd) { background-color: #d7d7d7; }
                </style>
                <table class ="table">
                  <tr>
                    <th><strong>Photo de Profil</strong></th>
                    <th><strong>ID</strong></th>
                    <th><strong>Nom</strong></th>
                    <th><strong>Date d\'inscription</strong></th>
                    <th>Action</th>
                  </tr>
  ';
                        $sql = "SELECT DATE_FORMAT(utilisateur.created_at, '%d %M %Y à %kh%i') as datee, vendeur.profil_photo, vendeur.prenom, vendeur.nom, vendeur.id  FROM utilisateur, vendeur";
                    $sql .= " WHERE utilisateur.id = vendeur.user_id";
                    $result = mysqli_query($db_handle, $sql); 
                            while ($data = mysqli_fetch_assoc($result)) {

                            echo'
                              <tr>
                                <td>
                                    <img src="imagesutilisateur/'.$data['profil_photo'].'" height="100"" width="100"" alt="Avatar">
                                </td>
                                <td>'.$data['id'].'</td>
                                <td>'.$data['nom'].' '.$data['prenom'].'</td>
                                <td>'.$data['datee'].'</td>
                                <td>
                                  <div>

                                <form action="adminSupprVendT.php" method="post">
                                <input type="hidden"  name="V_id" value="'.$data['id'].'">
                                <div class="offset-md-4">
                                <button type="submit" value="resend" name="submitSV"class="btn btn-danger">
                                    Supprimer
                                </button>
                            </div>
                        </form>

                                  </div>
                                </td>
                              </tr>
                                
                            ';
                            
                        }
                       echo ' </table>  ';
                    }
                  else if($table=="item"){
  echo'<div class="panel-body">
                  <h2 class="deux"> Ensemble des items: </h2> 
                  <br>
                </div>
                <style type=text/css>
                   table tbody tr:nth-child(odd) { background-color: #d7d7d7; }
                </style>
                <table class ="table">
                  <tr>
                    <th><strong>Photo </strong></th>
                    <th><strong>ID</strong></th>
                    <th><strong>Nom</strong></th>
                    <th><strong>Catégorie</strong></th>
                    <th><strong>Type de vente</strong></th>
                     <th><strong>Date publication</strong></th>
                     <th><strong>Date vente</strong></th>
                    <th>Action</th>
                  </tr>
  ';
                        $sql = "SELECT * , DATE_FORMAT(date_publication, '%d %M %Y à %kh%i') as datep, DATE_FORMAT(date_vente, '%d %M %Y à %kh%i') as datev FROM item";
                    $result = mysqli_query($db_handle, $sql); 
                            while ($data = mysqli_fetch_assoc($result)) {

                            echo'
                              <tr>
                                <td>
                                    <img src="imagesproduit/'.$data['photo1'].'" height="100"" width="100"" alt="Avatar">
                                </td>
                                <td>'.$data['id'].'</td>
                                <td>'.$data['nom'].'</td>
                                <td>'.$data['categorie_produit'].'</td>
                                <td>'.$data['categorie_achat'].'</td>
                                <td>'.$data['datep'].'</td>
                                ';
                                if($data['datev']==NULL){
                                 echo ' <td>Pas encore vendu</td>';
                                } else{
                                  echo '<td>'.$data['datev'].'</td>';
                                }
                                echo '
                                <td>
                                  <div>
                                    <form action="suppitem.php" method="post">
                                <input type="hidden"  name="item_id" value="'.$data['id'].'">
                                <div class="offset-md-4">
                                <button type="submit" value="resend" name="submitSI"class="btn btn-danger">
                                    Supprimer
                                </button>
                            </div>
                        </form>

                                  </div>
                                </td>
                              </tr>
                                
                            ';
                            
                        }
                       echo ' </table>  ';
                    }
                    else if($table=="enchere"){
  echo'<div class="panel-body">
                  <h2 class="deux"> Encheres en attente de validation: </h2> 
                  <br>
                </div>
                <style type=text/css>
                   table tbody tr:nth-child(odd) { background-color: #d7d7d7; }
                </style>
                <table class ="table">
                  <tr>
                    <th><strong>ID</strong></th>
                    <th><strong>Date de fin</strong></th>
                    <th><strong>Prix Initial</strong></th>
                    <th><strong>Prix Final</strong></th>
                     <th><strong>ID item</strong></th>
                     <th><strong>ID acheteur</strong></th>
                    <th>Action</th>
                  </tr>
  ';
                        $sql = "SELECT enchere.id, DATE_FORMAT(enchere.enddate, '%d %M %Y à %kh%i') as datee, enchere.item_id, max(offreenchere.prix) as prix, offreenchere.ach_id FROM enchere, offreenchere";
                      $sql .= " WHERE enchere.enddate < CURDATE()";
                      $sql .= " and enchere.id= offreenchere.enchere_id group by enchere.id";
                    $result= mysqli_query($db_handle, $sql); 
                       while ($data = mysqli_fetch_assoc($result)) {
                         $sql2 = "SELECT prix_minimum FROM item ";
                      $sql2 .= " WHERE ".$data['item_id']." = item.id ";
                       $result2= mysqli_query($db_handle, $sql2);   
                             while ($data2 = mysqli_fetch_assoc($result2)) {
                          $prixinit=$data2['prix_minimum'];
                        }

                        $sql3 = "SELECT max(offreenchere.prix) as prix FROM offreenchere ";
                      $sql3 .= " WHERE offreenchere.enchere_id = ".$data['id']." AND offreenchere.prix < (SELECT max(offreenchere.prix) FROM offreenchere)";
                  
                       $result3= mysqli_query($db_handle, $sql3);
                       while ($data3 = mysqli_fetch_assoc($result3)) {
                        if($data3['prix']==0){
                          $prix= $prixinit+1;}
                         else{ $prix=$data3['prix']+1;
                        }

                      }
                            echo'
                              <tr>
                                <td>'.$data['id'].'</td>
                                <td>'.$data['datee'].'</td>
                                <td>'.$prixinit.'</td>
                                <td>'.$prix.'</td>
                                <td>'.$data['item_id'].'</td> 
                               <td>'.$data['ach_id'].'</td>
                      
                                <td>
                                  <div>
                                    <form action="addpanierT3.php" method="post">
                                <input type="hidden"  name="item_id" value="'.$data['id'].'">
                                 <input type="hidden"  name="ach_id" value="'.$data['ach_id'].'">
                                <div class="offset-md-4">
                                <button type="submit" value="resend" name="submitVE"class="btn btn-danger">
                                    Valider
                                </button>
                            </div>
                        </form>

                                  </div>
                                </td>
                              </tr>
                                
                            ';
                            
                        
                      
                      
                  }
                       echo ' </table>  ';
                    
                }  ?>

                
            
               
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