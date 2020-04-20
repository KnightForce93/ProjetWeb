<?php  include("testutilisateur.php"); 
    include("panierT.php"); ?>
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
      <link rel="stylesheet" type="text/css" href="navbar.css">      
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <script type="text/javascript">
          //utiliser jQuery pour que l’image s’étire sur l’écran
            $(document).ready(function(){ 
              $('.header').height($(window).height());
            });
        </script>

        <style type="text/css">
            footer {
      background-color: #555;
      color: white;
      padding: 15px;
      margin-top: -40px;
    }

        </style>
</head>
<body>

    <?php include ("navbar.php"); 
   ?>

    <div class="header" style="background-image: url('images/background.jpg'); background-size: cover; 
    background-position: center;
    position: relative; ">
    <br> 
        <div class="container text-center">    

    <?php 

    if (isset($_POST['submitP'])) {

      $adresse_id= isset($_POST["statusRadiosA"])? $_POST["statusRadiosA"] : "";

      $carte_id= isset($_POST["statusRadiosC"])? $_POST["statusRadiosC"] : "";
     
      $total= isset($_POST["total"])? $_POST["total"] : "";
       
        $sql0 = "SELECT paiement.solde FROM paiement ";
        $sql0 .= " WHERE id ='".$carte_id."' ";
        $result0 = mysqli_query($db_handle, $sql0);  
        while ($data0 = mysqli_fetch_assoc($result0)) 
        {
            $solde=$data0['solde'];
          }
          
            if($solde >= $total) {   
                echo '            
                <div class="row">
                        <br>
                        <div class="col-sm-12 well">
                            Paiement réussi
                        </div>
                </div>  
                ';
                $nb=0;
                $sql= "SELECT item.id, item.categorie_achat, item.prix_minimum, item.date_vente, item.prix_vente, item.id_acheteur, panier.id as id2 FROM item, panier";
                 $sql .= " WHERE panier.ach_id LIKE '%$id_acheteur%' And panier.item_id=item.id";
                 $result = mysqli_query($db_handle, $sql); 
                while ($data1 = mysqli_fetch_assoc($result)){
                            if($data1['categorie_achat']=='AchatImmediat')
                            {
                                $prix=$data1['prix_minimum'];
                                $sql3 = "UPDATE item SET date_vente=NOW(), prix_vente='$prix', id_acheteur = '$id_acheteur' ";
                                $sql3 .=" WHERE id ='".$data1['id']."' ";
                                $result3 = mysqli_query($db_handle, $sql3);
                            }
                            else if($data1['categorie_achat']=='Enchere')
                            {
                                $sql3 = "UPDATE item SET date_vente=NOW() ";
                                $sql3 .=" WHERE id ='".$data1['id']."' ";
                                $result3 = mysqli_query($db_handle, $sql3); 
                            }
                            else if($data1['categorie_achat']=='MeilleurOffre')
                            {
                              if($data1['prix_vente']!=0){
                                 $sql3 = "UPDATE item SET date_vente=NOW() ";
                                $sql3 .= " WHERE id ='".$data1['id']."' ";
                                $result3 = mysqli_query($db_handle, $sql3);
                                  }else{
                                $prix=$data1['prix_minimum'];
                                $sql3 = "UPDATE item SET date_vente=NOW(), prix_vente='$prix',id_acheteur = '$id_acheteur' ";
                                $sql3 .= " WHERE id ='".$data1['id']."' ";
                                $result3 = mysqli_query($db_handle, $sql3);
                                 $sql3 = "DELETE FROM meilleuroffre";
                               $sql3 .= " WHERE item_id != '".$data1['id']."'";
                                $result = mysqli_query($db_handle, $sql3);
                            
                                  }

                            }
                              $nb=$nb+1;
                        } 
        $solde=  $solde-$total;               
        $sql3 = "UPDATE paiement SET solde='$prix'";
        $sql3 .= " WHERE id ='".$carte_id."' ";
        $result0 = mysqli_query($db_handle, $sql0);                 
                        

                $to = $email;
                //$to = 'louis.donikian@gmail.com';
                 $subject = 'Vos achats sur ECE eBay !';
                 $message .= 'Vous avez acheté '.$nb.' pour un montant total de ' . $total . '€.' . "\n\n" . 'L\'équipe ECE Ebay.';
                 $headers = 'From: noreply@eceebay.com' . "\r\n" .
                 'Reply-To: noreply@eceebay.com' . "\r\n";
                 //$ok=mail($to, $subject, $message, $headers);
                 mail($to, $subject, $message, $headers);
                 // if($ok==true)
                 //     {echo "mail envoyé à ". $to . $email;}
                 // if($ok==false)
                 //     {echo "mail echec";}
                 // echo "ok2";
                 $sql4 = "DELETE FROM panier ";
                 $sql4 .= " WHERE ach_id LIKE '%$id_acheteur%'";
                 $result4 = mysqli_query($db_handle, $sql4); 
             
           }
             else {
                echo '            
                <div class="row">
                        <br>
                        <div class="col-sm-12 well">
                            <h3 class="titrepage2">Votre solde n\'est pas suffisant !</h3><br>
                            <p>Veuillez prendre contact avec votre établissement bancaire en cas d\'erreur ou changer de carte de crédit.</p>
                        </div>
                </div>  
                ';
             }
    
        mysqli_close($db_handle);
        exit;
         }
    
    ?>
   }
     ?>


    </div>
</div>

<footer class="page-footer"> 
    <div class="container">
      <div class="footer-copyright text-center">&copy; 2020 Copyright | Droits d'auteurs: Wassim Sebbahi & Thomas Popielski & Louis Donikian TD02</div><!--text-center : modifier la typographie-->
    </div>
</footer>
</body>
</html>