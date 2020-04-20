<?php include("testutilisateur.php"); 
include("panierT.php"); ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>ECE Ebay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <!-- lien vers font awesome, library de emoticone -->
    <script src="https://kit.fontawesome.com/49d3300cf5.js" crossorigin="anonymous"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="panier.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <script type="text/javascript">
      //utiliser jQuery pour que l’image s’étire sur l’écran
        $(document).ready(function(){ 
          $('.header').height($(window).height());
        });
         function toggC1(){
                     document.getElementById("P1").style.display = "block";
                     document.getElementById("P2").style.display = "none";
                }; 
                function toggC2(){
               
                     document.getElementById("P2").style.display = "block";
                    document.getElementById("P1").style.display = "none";
                };
                 function toggC3(){
                 
                     document.getElementById("P1").style.display = "block";
                    document.getElementById("P2").style.display = "none";
                    document.getElementById("P3").style.display = "none";
                };
                 function toggC4(){
                  
                     document.getElementById("P2").style.display = "block";
                    document.getElementById("P1").style.display = "none";
                    document.getElementById("P3").style.display = "none";
                };
                 function toggC5(){
                  
                     document.getElementById("P3").style.display = "block";
                    document.getElementById("P1").style.display = "none";
                    document.getElementById("P2").style.display = "none";
                };
                 function toggA1(){
                  
                     document.getElementById("A1").style.display = "block";
                     document.getElementById("A2").style.display = "none";
                }; 
                function toggA2(){
                  
                     document.getElementById("A2").style.display = "block";
                    document.getElementById("A1").style.display = "none";
                };
                 function toggA3(){
                  
                     document.getElementById("A1").style.display = "block";
                    document.getElementById("A2").style.display = "none";
                    document.getElementById("A3").style.display = "none";
                };
                 function toggA4(){
                
                     document.getElementById("A2").style.display = "block";
                    document.getElementById("A1").style.display = "none";
                    document.getElementById("A3").style.display = "none";
                };
                 function toggA5(){
                 
                     document.getElementById("A3").style.display = "block";
                    document.getElementById("A1").style.display = "none";
                    document.getElementById("A2").style.display = "none";
                };
    </script>

  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
      margin-top: -40px;
    }
  </style>
</head>
<body>

<?php include("navbar.php"); 

 ?>
<div class="header" style="background-image: url('images/background.jpg'); background-size: cover; 
    background-position: center;
    position: relative; "> 
    <br>
<div class="container text-center">    
  <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default text-left">
                <div class="panel-body">
                 <p class="commande">Votre panier :</p>  
                </div>
              </div>
            </div>
          </div>


          	<?php 
          	     $sql= "SELECT * FROM panier";
			     $sql .= " WHERE ach_id LIKE '%$id_acheteur%'";
			     $result = mysqli_query($db_handle, $sql); 
                 $tot=0;
      			while ($data = mysqli_fetch_assoc($result))
      			{
                    $item_id=$data['item_id'];
                    $sql1 = "SELECT * FROM item ";
                    $sql1 .= " WHERE id LIKE '%$item_id%'";
                    $result1 = mysqli_query($db_handle, $sql1);  
                    while ($data1 = mysqli_fetch_assoc($result1)) 
                    {
                        $v_id=$data1['v_id'];
                        $sql2 = "SELECT * FROM vendeur ";
                        $sql2 .= " WHERE id LIKE '%$v_id%'";
                        $result2 = mysqli_query($db_handle, $sql2);
                        while ($data2 = mysqli_fetch_assoc($result2)) {
            				echo '
                    <div class="well">
            				<div class="row">
                            <div class="col-sm-3">
                                    
                                    	<p><a href="ficheitem.php/{' . $data1['id'].'}">' . $data1['nom'] . '</a></p>
            	                        	<img src="images/'.$data1['photo1'] .' "height="100%" width="100%" alt="photo1"> <br>
            	                    
                            </div>
                            <div class="col-sm-6">
                                   
            	                        <p class="description">
            	                        <b>ID : ' . $data1['id'] .' <br>
                                       ';
                                       if($data1['categorie_achat']=="MeilleurOffre" && $data1['prix_vente']!=0){
                                        echo'Prix : ' . $data1['prix_vente'] . '€</b><br>';
                            } elseif($data1['categorie_achat']=="Enchere"){
                                      echo 'Prix : ' . $data1['prix_vente'] . '€</b><br>';
                                       } else
                                       { echo' Prix : ' . $data1['prix_minimum'] . '€</b><br>';}

                                         echo'      Description : ' . $data1['description'] . '<br>
                                               <small>
                                               Catégorie d\'achat : ' . $data1['categorie_achat'] . '<br>
                                               </small> 
                                               <small>
                                               		<i>Vendu par : ' . $data2['prenom'] . ' ' .$data2['nom'] . '</i>
                                               	</small>
                                        </p>
                            		</div>
                           
                            <div class="col-sm-3">';
                              if($data1['categorie_achat']=="Enchere"){
                                        
                               } else if($data1['categorie_achat']=="MeilleurOffre" && $data1['prix_vente']!=0){
                                      
                                       } else{
                     echo'       <form action="SuppItemPanierT.php" method="post">
                            <input type="hidden"  name="item_id" value="'.$item_id.'">
                    <button type="submit" value="resend" name="submit"class="btn btn-danger">
                        Supprimer
                    </button>
               
            </form>
            ';}
            echo'
            </div>
            </div>
                        </div>';
                         if($data1['categorie_achat']=="Enchere"){
                                         $tot=$tot+$data1['prix_vente'];
                                       } else if($data1['categorie_achat']=="MeilleurOffre" && $data1['prix_vente']!=0){
                                     $tot=$tot+$data1['prix_vente'];
                                       } else
                                       { 
                        $tot=$tot+$data1['prix_minimum'];
                   } }}
			}
            echo '
            <div class="row">
                <div class="col-sm-12">
                    <div class="well">
                        <p class="total">Total : ' . $tot . '€</p>
                    </div>
                </div>
            </div>
            ';?>
            
            
          </div>
        </div>
        <div class="row">
        <div class="col-sm-12 well">
          <div class="well">
            <p><a href="#"><?php echo $nom." ".$prenom; ?> </a></p>
            <p><a href="#"><?php echo $email;?></a></p>
            <p><a href="#"><?php echo $tel;?></a></p>
          </div>
        </div>
      </div>
      
            <form action="procederPaiement.php" method="post">
<div class="row">
        <div class="col-sm-12 well">

          <?php
          echo ' <input type="hidden"  name="total" value="'.$tot.'">';
     $sql = "SELECT * FROM adresse";        
      $sql .= " WHERE ach_id ='".$id_acheteur."' ";      
    $result = mysqli_query($db_handle, $sql); 
//regarder s'il y a de résultat    
    if (mysqli_num_rows($result) == 0) {     
    echo'  <a href="info.php"> <button type="button" class="btn btn-primary">Veuillez ajouter une adresse</button></a> ';    
    }  if (mysqli_num_rows($result) == 1) {     
   
   while ($data = mysqli_fetch_assoc($result)) {
  echo'   <div class="form-group row">
                                    <div class="form-check row col-form-label col-md-6 text-md-right">
                                        <input type="radio" class="form-check-input" id="adresse1" name="statusRadiosA" value="'.$data['id'].'">
                                        <label class="form-check-label" for="adresse1">Adresse 1</label>
                                    </div>
                                </div>
                                 <div class="well">
            <p class="info">
            <input type="hidden"  name="Adresse_id1" value="'.$data['id'].'">
               Adresse : '.$data['adresse'].'<br>
               Ville : '.$data['ville'].'<br>
               Code Postal : '.$data['codepostal'].'<br>
               Pays : '.$data['pays'].'<br>
            </p>
          </div> ';

    }
    } 
     if (mysqli_num_rows($result) == 2) {     
   $count=0; 
   while ($data = mysqli_fetch_assoc($result)) {
    $count= $count+1;

  echo '<div class="col-sm-6">
   <div class="form-group row">
                                    <div class="form-check row col-form-label col-md-6 text-md-right">
                                        <input type="radio" onclick="toggA'.$count.'()" class="form-check-input" id="adresse'.$count.'" name="statusRadiosA" value="'.$data['id'].'" >
                                        <label class="form-check-label" for="adresse'.$count.'">Adresse '.$count.'</label>
                                    </div>
                                    </div>
                                    <div class="well" id="A'.$count.'"'; if($count>1){echo'style="display:none"'; }echo '>
            <p class="info">
            <input type="hidden"  name="Adresse_id'.$count.'" value="'.$data['id'].'">
               Adresse : '.$data['adresse'].'<br>
               Ville : '.$data['ville'].'<br>
               Code Postal : '.$data['codepostal'].'<br>
               Pays : '.$data['pays'].'<br>
            </p>
          </div>
          </div> ';
         
    }  
    } 
     if (mysqli_num_rows($result) == 3) {     
    $count=0; 
     $count2=0; 
   while ($data = mysqli_fetch_assoc($result)) {
     $count= $count+1;
     $count2= $count2+1;
  echo '
  <div class="col-sm-4">
  <div class="form-group row">
                                    <div class="form-check row col-form-label col-md-6 text-md-right">
                                        <input type="radio" onclick="toggA'.$count2.'()" class="form-check-input" id="adresse'.$count.'" name="statusRadiosA" value="'.$data['id'].'" >
                                        <label class="form-check-label" for="adresse'.$count.'">Adresse '.$count.'</label>
                                    </div>
                                    </div>
                                    <div class="well" id="A'.$count.'"'; if($count>1){echo'style="display:none"'; }echo '>
            <p class="info">
            <input type="hidden"  name="Adresse_id'.$count.'" value="'.$data['id'].'">
               Adresse : '.$data['adresse'].'<br>
               Ville : '.$data['ville'].'<br>
               Code Postal : '.$data['codepostal'].'<br>
               Pays : '.$data['pays'].'<br>
            </p>
          </div> 
          </div>';
    }    
    } 
     ?> 
   </div>
 </div>
   <div class="row">
        <div class="col-sm-12 well">
          <?php
            $sql = "SELECT * FROM paiement";        
      $sql .= " WHERE ach_id ='".$id_acheteur."' ";       
    $result = mysqli_query($db_handle, $sql); 
//regarder s'il y a de résultat    
    if (mysqli_num_rows($result) == 0) {     
    echo'  <a href="info.php"> <button type="button" class="btn btn-primary">Veuillez ajouter Carte de crédit</button></a> ';    
    }  if (mysqli_num_rows($result) == 1) {      
   while ($data = mysqli_fetch_assoc($result)) {
  echo'  <div class="form-group row">
                                    <div class="form-check row col-form-label col-md-6 text-md-right">
                                        <input type="radio" class="form-check-input" id="carte1" name="statusRadiosC" value="'.$data['id'].'" >
                                        <label class="form-check-label" for="carte1">Carte 1</label>
                                    </div>
                                </div>
                                <div class="well">
            <p class="info">
            <input type="hidden"  name="Carte_id1" value="'.$data['id'].'">
               Nom de la carte :  '.$data['nom'].'<br>
               Type de carte : '.$data['typecarte'].'<br>
               Numéro : '.$data['numero_carte'].'<br>
               Cryptogramme : '.$data['dateexp'].'<br>
               Date expiration : '.$data['code'].'
            </p>
          </div> ';
    }
    } 
     if (mysqli_num_rows($result) == 2) {     
     
   $count=0; 
   while ($data = mysqli_fetch_assoc($result)) {
    $count= $count+1;
  echo '<div class="col-sm-6">
  <div class="form-group row">
                                    <div class="form-check row col-form-label col-md-6 text-md-right">
                                        <input type="radio" onclick="toggC'.$count.'()" class="form-check-input" id="carte'.$count.'" name="statusRadiosC" value="'.$data['id'].'" >
                                        <label class="form-check-label" for="carte'.$count.'">Carte '.$count.'</label>
                                    </div>
                                    </div>
                                    <div class="well" id="P'.$count.'"'; if($count>1){echo'style="display:none"'; }echo '>
            <p class="info">
      
            <input type="hidden"  name="Carte_id'.$count.'" value="'.$data['id'].'">
               Nom de la carte :  '.$data['nom'].'<br>
               Type de carte : '.$data['typecarte'].'<br>
               Numéro : '.$data['numero_carte'].'<br>
               Cryptogramme : '.$data['dateexp'].'<br>
               Date expiration : '.$data['code'].'
            </p>
          </div> 
          </div>';
    }  
    } 
     if (mysqli_num_rows($result) == 3) {     
    
    $count=0; 
    $count2=2;
   while ($data = mysqli_fetch_assoc($result)) {
    $count= $count+1;
    $count2= $count2+1;
    '<div class="col-sm-6">
    <div class="form-group row">
                                    <div class="form-check row col-form-label col-md-6 text-md-right">
                                        <input type="radio" onclick="toggC'.$count2.'()" class="form-check-input" id="carte'.$count.'" name="statusRadiosC" value="'.$data['id'].'" >
                                        <label class="form-check-label" for="carte'.$count.'">Carte '.$count.'</label>
                                    </div>
                                    </div>
 <div class="well" id="P'.$count.'"'; if($count>1){echo'style="display:none"';}echo'>
            <p class="info">
           
             <input type="hidden"  name="Carte_id'.$count.'" value="'.$data['id'].'">
               Nom de la carte :  '.$data['nom'].'<br>
               Type de carte : '.$data['typecarte'].'<br>
               Numéro : '.$data['numero_carte'].'<br>
               Cryptogramme : '.$data['dateexp'].'<br>
               Date expiration : '.$data['code'].'
            </p>
          </div> 
          </div>';
    }    
    } 
     ?> 
   </div>
 </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" value="connexion" name="submitP" class="bouton-paiement">Procéder au paiement</button> <br><br>
                    </div>
                </div>
            </form>
          
        </div>
      </div>

  </div>
</div>

<br>

<footer class="page-footer"> 
    <div class="container">
      <div class="footer-copyright text-center">&copy; 2020 Copyright | Droits d'auteurs: Wassim Sebbahi & Thomas Popielski & Louis Donikian TD02</div><!--text-center : modifier la typographie-->
    </div>
</footer>
</div>
</body>
</html>