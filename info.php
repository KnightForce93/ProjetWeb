<?php include("testutilisateur.php"); 
include("infoT.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ECE Ebay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="profilacheteur.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
     <script type="text/javascript">
      //utiliser jQuery pour que l’image s’étire sur l’écran
        $(document).ready(function(){ 
          $('.header').height($(window).height());
        });
         function togg1(){
                     document.getElementById("div_nom").style.display = "block";
                     document.getElementById("div_prenom").style.display = "none";
                     document.getElementById("div_tel").style.display = "none";
                     document.getElementById("div_email").style.display = "none";
                      document.getElementById("div_mdp").style.display = "none";
                }; 
                function togg2(){
               
                     document.getElementById("div_prenom").style.display = "block";
                    document.getElementById("div_nom").style.display = "none";
                     document.getElementById("div_tel").style.display = "none";
                     document.getElementById("div_email").style.display = "none";
                      document.getElementById("div_mdp").style.display = "none";
                };
                function togg3(){
                     document.getElementById("div_tel").style.display = "block";
                     document.getElementById("div_prenom").style.display = "none";
                      document.getElementById("div_nom").style.display = "none";
                     document.getElementById("div_email").style.display = "none";
                      document.getElementById("div_mdp").style.display = "none";
                }; 
                function togg4(){
               
                     document.getElementById("div_email").style.display = "block";
                    document.getElementById("div_nom").style.display = "none";
                     document.getElementById("div_tel").style.display = "none";
                     document.getElementById("div_prenom").style.display = "none";
                      document.getElementById("div_mdp").style.display = "none";
                };
                function togg5(){
                     document.getElementById("div_mdp").style.display = "block";
                     document.getElementById("div_prenom").style.display = "none";
                      document.getElementById("div_tel").style.display = "none";
                     document.getElementById("div_email").style.display = "none";
                      document.getElementById("div_nom").style.display = "none";
                }; 
              
    </script>

<style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>

</head>
<body>

  
   <?php 
   include("navbar.php");
   ?>
   <br>
<div class="container text-center">    
  <div class="row">
     <div class="well">
          <div class="row">
            
        <div class="col-sm-6">
            <p>Nom: <?php echo $nom; ?></p>
                        <br>
                        <div class="card-body" id="div_nom" style="display:none">
                            <form  name="my-form"  action="modificationinfosT.php" method="post">
                                <fieldset>
                                <div class="form-group row">
                                    <label for="nom" class="col-md-4 col-form-label text-md-right">Entrez votre nouveau Nom</label>
                                        <input type="text" class="form-control" name="nom">
                                    </div>
                                  <div class="col-md-6 offset-md-4">
                                        <input type="submit" value="Enregistrer" class ="btn btn-primary btn-right" name="submit">
                                </div>
                               </fieldset>
                            </form>
                        </div>
                                </div>

          <div class="col-sm-6">
            <button type="button" onclick="togg1()" class="btn btn-primary">Modifier nom</button> 
          </div>
        </div>
      </div>
       <div class="well">
       <div class="row">
       
        <div class="col-sm-6">
            <p>Prénom: <?php echo $prenom; ?></p>
                        <br>
                        <div class="card-body" id="div_prenom" style="display:none">
                            <form  name="my-form"  action="modificationinfosT.php" method="post">
                                <fieldset>
                                <div class="form-group row">
                                    <label for="prenom" class="col-md-4 col-form-label text-md-right">Entrez votre nouveau Prénom</label>
                                        <input type="text" class="form-control" name="prenom">
                                    </div>
                                  <div class="col-md-6 offset-md-4">
                                        <input type="submit" value="Enregistrer" class ="btn btn-primary btn-right" name="submit">
                                </div>
                               </fieldset>
                            </form>
                        </div>
                                </div>
          <div class="col-sm-6">
            <button type="button" onclick="togg2()"class="btn btn-primary">Modifier prénom</button> 
          </div>
        </div>
      </div>
      <div class="well">
       <div class="row">
       
        <div class="col-sm-6">
            <p>Tel: <?php echo $tel; ?></p>
            <br>
                        <div class="card-body" id="div_tel" style="display:none">
                            <form  name="my-form"  action="modificationinfosT.php" method="post">
                                <fieldset>
                                <div class="form-group row">
                                    <label for="tel" class="col-md-4 col-form-label text-md-right">Entrez votre nouveau téléphone</label>
                                        <input type="text" class="form-control" name="tel">
                                    </div>
                                  <div class="col-md-6 offset-md-4">
                                        <input type="submit" value="Enregistrer" class ="btn btn-primary btn-right" name="submit">
                                </div>
                               </fieldset>
                            </form>
                        </div>
          </div>
          <div class="col-sm-6">
            <button type="button" onclick="togg3()" class="btn btn-primary">Modifier téléphone</button> 
          </div>
        </div>
      </div>
      <div class="well">
       <div class="row">
        
        <div class="col-sm-6">
  
            <p>Email: <?php echo $email;?></p>
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
          
          </div>
          <div class="col-sm-6">
            <button type="button" onclick="togg4()" class="btn btn-primary">Modifier email</button> 
          </div>
          </div>
        </div>
      </div>
       <div class="well">
       <div class="row">
       
        <div class="col-sm-6">
            <p>Mot de passe <?php echo $mdp;?></p>
            <br>
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
         
          </div>
          <div class="col-sm-6">
           <button type="button" onclick="togg5()"class="btn btn-primary">Modifier mot de passe</button> 
          </div>
        </div>
      </div>
       
 <div class="row">
        <div class="col-sm-12">
          <div class="well">
              <div class="panel panel-default text-left">
               <div class="panel-body">
                  <h2 class="deux"> Vos Adresses: </h2> 
                  <br>
                </div>
                <style type=text/css>
                   table tbody tr:nth-child(odd) { background-color: #d7d7d7; }
                </style>
                <table class ="table">
                  <tr>
                    <th><strong>Adresse</strong></th>
                    <th><strong>Ville</strong></th>
                    <th><strong>Code Postal</strong></th>
                    <th><strong>Pays</strong></th>
                    <th>Action</th>
                  </tr>
                  <?php
                        $sql = "SELECT * FROM adresse";
                    $sql .= " WHERE ach_id = $ach_id";
                    $result = mysqli_query($db_handle, $sql); 
                            while ($data = mysqli_fetch_assoc($result)) {

                            echo'
                              <tr>
                                <td>'.$data['adresse'].'</td>
                                <td>'.$data['ville'].'</td>
                                <td>'.$data['codepostal'].'</td>
                                <td>'.$data['pays'].'</td>
                                <td>
                                  <div>

                                <form action="modificationinfosT.php" method="post">
                                <input type="hidden"  name="adresseS_id" value="'.$data['id'].'">
                                <div class="offset-md-4">
                                <button type="submit" value="resend" name="submitSA" class="btn btn-danger">
                                    Supprimer
                                </button>
                            </div>
                        </form>

                                  </div>
                                </td>
                              </tr>
                            ';}
                            echo'    
                           </table>
                           </div>
                           ';
                            if (mysqli_num_rows($result) < 3) {     
      echo'
                            <a href="modificationinfos.php?info=adresse"><button type="button" class="btn btn-primary">Ajouter une Adresse</button></a> '
                           ;   
    } else{ 
      echo' <p> Vous avez atteint le nombre maximum d\'adresses, pour en ajouter une nouvelle veuillez en supprimer une.</p>';
  }
                           
                            
                        
                        ?>
                      
                      
                      
          </div>
        </div>
      </div>
       <div class="row">
        <div class="col-sm-12">
          <div class="well">
              <div class="panel panel-default text-left">
               <div class="panel-body">
                  <h2 class="deux"> Vos Cartes de Paiement: </h2> 
                  <br>
                </div>
                <style type=text/css>
                   table tbody tr:nth-child(odd) { background-color: #d7d7d7; }
                </style>
                <table class ="table">
                  <tr>
                    <th><strong>Nom Carte</strong></th>
                    <th><strong>Type</strong></th>
                    <th><strong>Numéro</strong></th>
                    <th><strong>Cryptogramme</strong></th>
                    <th><strong>Date expiration</strong></th>
                    <th>Action</th>
                  </tr>
                  <?php
                        $sql = "SELECT * FROM paiement";
                    $sql .= " WHERE ach_id = $ach_id";
                    $result = mysqli_query($db_handle, $sql); 
                            while ($data = mysqli_fetch_assoc($result)) {
                            echo'
                              <tr>
                                <td>'.$data['nom'].'</td>
                                <td>'.$data['typecarte'].'</td>
                                <td>'.$data['numero_carte'].'</td>
                                <td>'.$data['dateexp'].'</td>
                                <td>'.$data['code'].'</td>
                                <td>
                                  <div>

                                <form action="modificationinfosT.php" method="post">
                                <input type="hidden"  name="carteS_id" value="'.$data['id'].'">
                                <div class="offset-md-4">
                                <button type="submit" value="resend" name="submitSP" class="btn btn-danger">
                                    Supprimer
                                </button>
                            </div>
                        </form>

                                  </div>
                                </td>
                                </tr>
                            ';}
                            echo'    
                           </table>
                            </div>

                           ';
                            if (mysqli_num_rows($result) <3) {     
      echo'
                            <a href="modificationinfos.php?info=paiement"><button type="button" class="btn btn-primary">Ajouter une Carte de crédit</button></a> ';   
    } else{ 
      echo' <p> Vous avez atteint le nombre maximum de carte de crédit, pour en ajouter une nouvelle veuillez en supprimer une.</p>';
  }
                           
                            
                        
                        ?> 
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