<?php include("testutilisateur.php"); include("profilvendeurT.php"); ?>
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
  <link rel="stylesheet" type="text/css" href="navbar.css">
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
  <script type="text/javascript">
                function togg1(){
                     document.getElementById("Block_vente").style.display = "block";
                     document.getElementById("Block_offres").style.display = "none";
                     document.getElementById("Block_vendu").style.display = "none";
                }; 
                function togg2(){
                     document.getElementById("Block_offres").style.display = "block";
                    document.getElementById("Block_vente").style.display = "none";
                     document.getElementById("Block_vendu").style.display = "none";

                };
                function togg3(){
                  document.getElementById("Block_vendu").style.display = "block";
                     document.getElementById("Block_offres").style.display = "none";
                    document.getElementById("Block_vente").style.display = "none";
                };
                function togg4(){
                  document.getElementById("div_email").style.display = "block";
                     document.getElementById("div_mdp").style.display = "none";
                  
                };
                function togg5(){
                  document.getElementById("div_mdp").style.display = "block";
                     document.getElementById("div_email").style.display = "none";
            
                };
        </script>

</head>
<body>

  <?php include ("navbar.php"); ?>
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
              
              <p>Adresse email: <?php echo $email;?></p>
<<<<<<< HEAD
              <button type="button" onclick="togg4()"class="btn btn-primary">Modifier Email</button> 
               <br>
                        <div class="card-body" id="div_email" style="display:none">
                            <form  name="my-form"  action="modificationinfosT.php" method="post">
                                <fieldset>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Entrez votre nouveau email</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                  <div class="col-md-6 offset-md-4">
                                        <input type="submit" value="Enregistrer" class ="btn btn-primary btn-right" name="submit">
                                </div>
                               </fieldset>
                            </form>
                        </div>

              <p>Mot de passe: <?php echo $mdp;?> </p><br>
              <button type="button" onclick="togg5()"class="btn btn-primary">Modifier mot de passe</button> 
              <div class="card-body" id="div_mdp" style="display:none">
                            <form  name="my-form"  action="modificationinfosT.php" method="post">
                                <fieldset>
                                <div class="form-group row">
                                    <label for="mdp" class="col-md-4 col-form-label text-md-right">Entrez votre nouveau Mot de passe</label>
                                        <input type="text" class="form-control" name="mdp">
                                    </div>
                                  <div class="col-md-6 offset-md-4">
                                        <input type="submit" value="Enregistrer" class ="btn btn-primary btn-right" name="submit">
                                </div>
                               </fieldset>
                            </form>
                        </div>
         
=======
              <a href="modificationinfos.php?info=email"> <button type="button" class="btn btn-primary">Modifier email</button></a> <br><br>
              <p>Mot de passe: <?php echo $mdp;?> </p>
              <a href="modificationinfos.php?info=mdp"> <button type="button" class="btn btn-primary">Modifier mot de passe</button></a> 
>>>>>>> Front
            </div>

            <div class="col-sm-7">
            
              <div class="row">
                <div class="col-sm-12">
                  <div class="panel panel-default text-left">
                    <div class="panel-body">
                      <p contenteditable="true">Statut: <?php echo $statut;?></p>
                  <p contenteditable="true">Vous est inscrit sur ECE Ebay depuis le <?php echo$datecreation;?></p>      
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
              <div class="col-sm-12">
              <div class="btn-group btn-group-toggle" data-toggle="buttons" style="background-color: white;">
                  
                 <button class="bouton" onclick="togg1()">Ventes en cours</button>
                 <button class="bouton" onclick="togg3()">Articles vendus</button>
                 <button class="bouton" onclick="togg2()">Négociation</button>
                  
                </div>
              </div>
            </div>
                <br>
                <br>
              <div class="row">
              <div class="col-sm-12">
              


                 <div id="Block_vente" > 
              <?php 
              $sql = "SELECT * FROM item";       
              $sql .= " WHERE v_id LIKE '%$id_vendeur%' and prix_vente=0";                    
                $result = mysqli_query($db_handle, $sql); 
                while ($data = mysqli_fetch_assoc($result)) {

                  echo'
                     <div class="well">
                     <div class="row">
                    <div class="col-sm-3">
                      <div class="well">
                       <p>'.$data['nom'].'</p>
                       <img src="images/'.$data['photo1'].'" height="100%" width="100%" alt="Avatar">
                      </div>
                    </div>
                    <div class="col-sm-9">
                      <div class="well">
                     ';
                        if($data['categorie_achat']=="AchatImmediat" || $data['categorie_achat']=="MeilleurOffre" ){
                   echo' <p class="description">Prix: '.$data['prix_minimum'].'€</p>';
                 }else if ($data['categorie_achat']=="Enchere")
                 { echo '<p class="description">Les encheres doivent commencer à: '.$data['prix_minimum'].'€</p>';
               }
                    echo'    <p class="description">Catégorie d\'achat: '.$data['categorie_achat'].'</p>
                      
                      </div>
                    </div>
                  </div>
                  </div>
                  ';
                }
                ?>
              </div>
                  <div id="Block_vendu" style="display:none"> 
              <?php 
              $sql = "SELECT * FROM item";       
              $sql .= " WHERE v_id LIKE '%$id_vendeur%' and prix_vente!=0";                    
                $result = mysqli_query($db_handle, $sql); 
                while ($data = mysqli_fetch_assoc($result)) {

                  echo'
                     <div class="well">
                     <div class="row">
                    <div class="col-sm-3">
                      <div class="well">
                       <p>'.$data['nom'].'</p>
                       <img src="images/'.$data['photo1'].'" height="100%" width="100%" alt="Avatar">
                      </div>
                    </div>
                    <div class="col-sm-9">
                      <div class="well">
                     <p class="description">Prix de vente: '.$data['prix_vente'].'€</p>';;
                        if($data['date_vente']==0){
                   echo '<p class="description">L\'item se trouve dans le panier de l\'acheteur, en attente de paiement</p>';
                 }
                    echo'    <p class="description">Catégorie d\'achat: '.$data['categorie_achat'].'</p>
                      </div>
                    </div>
                  </div>
                  </div>
                  ';
                }
                ?>
              </div> 
              
              <div id="Block_offres" style="display:none">
              <?php 
              $sql = "SELECT item.id, item.nom ,item.photo1, item.description, meilleuroffre.prixAch, meilleuroffre.msg_ach, meilleuroffre.prixVen, meilleuroffre.msg_vend, meilleuroffre.statut, meilleuroffre.repetition, meilleuroffre.validation, meilleuroffre.id AS id2 FROM item, meilleuroffre";      
              $sql .= " WHERE item.id = meilleuroffre.item_id";  
              $sql .= " AND item.v_id = '$id_vendeur%'";                  
                $result = mysqli_query($db_handle, $sql); 
                while ($data = mysqli_fetch_assoc($result)) {

                  echo'
                     <div class="well">
                     <div class="row">
                    <div class="col-sm-3">
                      <div class="well">
                       <p>'.$data['nom'].'</p>
                       <img src="images/'.$data['photo1'].'" height="100%" width="100%" alt="Avatar">
                      </div>
                    </div>
                    <div class="col-sm-9">
                      <div class="well">
                      ';
                       if($data['statut']=="vendeur"){
                       echo' <p class="description">Prix proposé par l\'acheteur: '.$data['prixAch'].'</p>
                         <p class="description">Message de l\'acheteur: '.$data['msg_ach'].'</p>
                         ';
                         if($data['validation']==1){
                     echo '<p class="description">Vous avez validé l\'offre </p>';
                   }else{
                       echo' <a href="modificationmeilleuroffre.php?meilleuroffre_id='.$data['id2'].'"><button class="buttonachat">Répondre</button></a>

                          <br>
                          <form  name="my-form"  action="addpanierT2.php" method="post">
                                <fieldset>
                               <input type="hidden"  name="meilleuroffre_id" value="'.$data['id2'].'">

                                <div class="col-md-6 offset-md-4">
                                        <input type="submit" value="Validation" class ="btn btn-primary" name="submitValidation">
                                </div>
                               </fieldset>
                            </form>
                ';}
              }
                 if($data['statut']=="acheteur"){

                          echo' <p class="description">Prix que vous avez proposé: '.$data['prixVen'].'</p>
                         <p class="description">Votre message: '.$data['msg_vend'].'</p>
                         <br>
                         <br>
                          ';
                          if($data['validation']==1){
                     echo '<p class="description">L\'acheteur a validé l\'offre</p>';
                   }
                        else  if($data['repetition']>=5){
                    echo '<p class="description">le nombre d\'echange maximum est atteint</p>';
                  }else{
                        echo ' <p class="description">En attente de réponse</p>';
                      }
                         
                }

                     echo' </div>
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