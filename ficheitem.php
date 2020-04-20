<?php include("testutilisateur.php");
  include("ficheitemT.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ECE Ebay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="ficheitem.css">
   <link rel="stylesheet" type="text/css" href="navbar.css">
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
    <script type="text/javascript">
            //utiliser jQuery pour que l’image s’étire sur l’écran
                function change(imageaffiche){
                     document.getElementById("Big_image").src =imageaffiche; 
                     
                     if (document.getElementById("div_Bigimage").style.display == "none"){
                     document.getElementById("div_Bigimage").style.display = "block";
                     document.getElementById("div_Bigvideo").style.display = "none";

                   }
            };
            function vid1(){
                     document.getElementById("div_Bigimage").style.display = "none";
                     document.getElementById("div_Bigvideo").style.display = "block";
                }; 

                function togg1(){
                     document.getElementById("Form_enchere").style.display = "block";
                     document.getElementById("Form_offre").style.display = "none";
                }; 
                function togg2(){
                     document.getElementById("Form_offre").style.display = "block";
                    document.getElementById("Form_enchere").style.display = "none";
                };
        
        </script>
</head>
<body>
<?php include ("navbar.php");?>

    <div class="container text-center">  
    <br>  
          <div class="row">
              <div class="col-sm-5">
                <div class="panel panel-default text-left">
                  <div class="panel-body">
                    <p class="commande"><?php echo $nomitem;?></p>  
                  </div>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="panel panel-default text-left">
                  <div class="panel-body">
                    <p contenteditable="true"><strong>Nom du vendeur: </strong><?php echo $nomvendeur;?></p>  
                  </div>
                </div>  
              </div>
          </div>
          
          <div class="row">
              <div class="col-sm-5">
                 <div class="row">
                  <div class="col-sm-12">
                <div class="well" id="div_Bigimage">
                 <?php echo '<img id="Big_image" src="imagesproduit/'.$photo1.'" height="100%" width="100%" alt="Avatar" >';
                 ?>
                </div>
                <div class="well" id="div_Bigvideo"style="display:none">

               <?php if($video!=""){
                echo ' <iframe id="Big_video" src="videosproduit/'.$video.'" height="100%" width="100%" alt="Avatar"></iframe>';
                } ?>
              </div>
              </div>
            </div>
            <div class="row">
                  <div class="col-sm-3">
                <div class="well">
                 <?php echo '<img src="imagesproduit/'.$photo1.'" height="100%" width="100%" alt="Avatar" onclick="change(\'imagesproduit/'.$photo1.'\')">' ;
                 ?>
                </div>

              </div>

              <?php 
              if($photo2!=""){
             echo '
              <div class="col-sm-3">
                <div class="well">
                  <img src="imagesproduit/'.$photo2.'" height="100%" width="100%" alt="Avatar" onclick="change(\'imagesproduit/'.$photo2.'\')">
               </div>
              </div>';
              }

              if($photo3!=""){
             echo '
              <div class="col-sm-3">
                <div class="well">
                 <img src="imagesproduit/'.$photo3.'" height="100%" width="100%" alt="Avatar" onclick="change(\'imagesproduit/'.$photo3.'\')">
               </div>
              </div>';
              }
               if($video!=""){
             echo '
              <div class="col-sm-3">
                <div class="well">
                  <p onclick="vid1()">Vidéo</p>
               </div>
              </div>';
              }
         ?>
                </div>
              </div>
           
       <div class="col-sm-7">
                <div class="well">
                    <p class="titre"><strong>Titre: </strong><?php echo $nomitem;?><br></p>
                    <p class="titre"><strong>Catégorie: </strong><?php echo $categorie_produit;?><br></p> <!--Ajouter la catégorie svp-->
                    <p class="description"> <strong>Description: </strong><?php echo $description;?></p><br>

                <?php if($categorie_achat=="AchatImmediat" || $categorie_achat=="MeilleurOffre"){
                      echo '
                    <p class="prix"><strong>Prix: </strong>'.$prix.' €</p> 
                    <br>';}
                     elseif($categorie_achat=="Enchere"){
                      echo '
                    <p class="prix"><strong>Début de l\'Enchere à: </strong>'.$prix.' €</p> 
                     <br>
                     <p>L\'enchère débute le: '.$dateS.' </p> 
                     <br>
                  <p>L\'enchère se termine le: '.$dateE.' </p> 
                     <br>';
                   }
                   ?>

                </div>
                <?php
                if($statut=="vendeur" || $statut=="admin"){
                  echo' vous ne pouvez pas faire d\'achat avec votre type de compte';
                }else{
                $sql = "SELECT * FROM panier";        
                $sql .= " WHERE item_id LIKE '%$item_id%'";          
                $sql .= " AND ach_id LIKE '%$id%'";         
        
               $result = mysqli_query($db_handle, $sql); 
//regarder s'il y a de résultat    
               if (mysqli_num_rows($result) != 0) {     
      echo "Article présent dans votre panier";    
    } else {     
                if($categorie_achat=="AchatImmediat"){
                echo'
                 <form  name="my-form"  action="addpanierT.php" method="post">
                                <fieldset>
                               <input type="hidden"  name="item_id" value="'.$item_id.'">

                                <div class="col-md-6 offset-md-4">
                                        <input type="submit" value="Achat Immediat" class ="btn btn-primary" name="submitAchat">
                                </div>
                               </fieldset>
                            </form>
                ';
              }
                elseif ($categorie_achat=="Enchere"){
                  if($fin=="yes" ){
                    echo "L'enchere est terminé";
                  }
                  else if ($debut=="no"){
                     echo "L'enchere n'a pas débuté";
                   }else{
                $sql = "SELECT * FROM offreenchere";        
                $sql .= " WHERE ach_id LIKE '%$id%'";          
                $sql .= " AND enchere_id LIKE '%$enchere_id%'";         
        
               $result2 = mysqli_query($db_handle, $sql); 
//regarder s'il y a de résultat    
               if (mysqli_num_rows($result2) != 0) { 
               echo "Vous avez déjà enchérie";  }else{    
                echo'
               <button class="buttonachat" onclick="togg1()">Faire une Enchere</button></a>
                ';}
              }
            }

                elseif ($categorie_achat=="MeilleurOffre"){
                echo'
                <a href="addpanierT.php"><button class="buttonachat">Achat immédiat</button></a>';
                $sql = "SELECT * FROM meilleuroffre";        
                $sql .= " WHERE item_id LIKE '%$item_id%'";          
                $sql .= " AND ach_id LIKE '%$id%'";         
        
               $result = mysqli_query($db_handle, $sql); 
//regarder s'il y a de résultat    
               if (mysqli_num_rows($result) != 0) {
                echo "<br> Vous avez envoyé une demande de negociation, pour voir la réponse du vendeur allez dans votre compte, onglet negociation. <br>
                 Vous pouvez toujours acheter l'objet immediatement";  }else{   
               echo' <button class="buttonachat" onclick="togg2()">Proposer un prix</button></a>
                ';}
              }
            }
          }
                ?>
                <div id="Form_enchere" style="display:none">
                     <form  name="my-form"  action="addenchereT.php" method="post">
                                <fieldset>
                                   <?php echo'
                               <input type="hidden"  name="item_id" value="'.$item_id.'">'; ?>
                                <div class="form-group row">
                                    <label for="prix" class="col-md-4 col-form-label text-md-right">Prix</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="prix">
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                        <input type="submit" value="Encherire" class ="btn btn-primary" name="submitEnchere">
                                </div>
                               </fieldset>
                            </form>
                        </div>
                    <div id="Form_offre" style="display:none">
                    <form  name="my-form"  action="addmeilleuroffreT.php" method="post">
                                <fieldset>
                              <?php echo'
                               <input type="hidden"  name="item_id" value="'.$item_id.'">'; ?>
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
                                        <input type="submit" value="Envoyer l'offre" class ="btn btn-primary" name="submitOffre">
                                </div>
                               </fieldset>
                            </form>
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