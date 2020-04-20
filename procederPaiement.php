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
    include("Connexionbdd.php");
    include("panierT.php");?>

    <div class="header" style="background-image: url('images/background.jpg'); background-size: cover; 
    background-position: center;
    position: relative; ">
    <br> 
        <div class="container text-center">    

    <?php 

    if (isset($_POST['submit'])) {   
        $sql0 = "SELECT * FROM paiement ";
        $sql0 .= " WHERE ach_id LIKE '%$id_acheteur%'";
        $result0 = mysqli_query($db_handle, $sql0);  
        while ($data0 = mysqli_fetch_assoc($result0)) 
        {
            $solde=$data0['solde'];
            if($solde>=$tot) {   
                echo '            
                <div class="row">
                        <br>
                        <div class="col-sm-12 well">
                            <h3 class="titrepage2">Voici la liste des produits achetés :</h3><br>
                        </div>
                </div>  
                ';
                $sql= "SELECT * FROM panier";
                 $sql .= " WHERE ach_id LIKE '%$id_acheteur%'";
                 $result = mysqli_query($db_handle, $sql); 
                 $tot=0;
                 $nb=0;
                $message = 'Bonjour !' . "\n\n" . 'Nous vous remercierons pour vos achats, vous avez acheté : ' . "\n\n";
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
                            $message .= ' - ' . $data1['nom'] . ' de ' . $data2['prenom'] . ' ' .$data2['nom'] . "\n\n";
                            echo '
                            <div class="col-sm-7 text-left">
                                <div class="row">
                                    <div class="col-sm-3">
                                            <div class="well">
                                                <p><a href="ficheitem.php/{' . $data1['id'].'}">' . $data1['nom'] . '</a></p>
                                                    <img src="images/'.$data1['photo1'] .' "height="100%" width="100%" alt="photo1"> <br>
                                            </div>
                                    </div>
                            <div class="col-sm-9">
                                    <div class="well">
                                        <p class="description">
                                        <b>Prix : ' . $data1['prix_minimum'] . '€</b><br>
                                               Description : ' . $data1['description'] . '<br>
                                               <small>
                                               Catégorie d\'achat : ' . $data1['categorie_achat'] . '<br>
                                               </small> 
                                               <small>
                                                    <i>Vendu par : ' . $data2['prenom'] . ' ' .$data2['nom'] . '</i>
                                                </small> 
                                        </p>
                                    </div>
                            </div>
                            </div>
                            </div>';
                            $tot=$tot+$data1['prix_minimum'];
                            $nb++;

                            if($data1['categorie_achat']=='AchatImmediat')
                            {
                                $prix=$data1['prix_minimum'];
                                $sql3 = "UPDATE item SET date_vente=NOW(), prix_vente=$prix,id_acheteur = $id_acheteur ";
                                $sql3 .= " WHERE id LIKE '%$item_id%'";
                                $result3 = mysqli_query($db_handle, $sql3);
                            }
                            else if($data1['categorie_achat']=='Enchere')
                            {
                                //$prix=$data1['prix_minimum'];
                                $sql3 = "UPDATE item SET date_vente=NOW(),id_acheteur = $id_acheteur ";
                                $sql3 .= " WHERE id LIKE '%$item_id%'";
                                $result3 = mysqli_query($db_handle, $sql3); 
                            }
                            else if($data1['categorie_achat']=='MeilleureOffre')
                            {
                               // $prix=$data1['prix_minimum'];
                                $sql3 = "UPDATE item SET date_vente=NOW(),id_acheteur = $id_acheteur ";
                                $sql3 .= " WHERE id LIKE '%$item_id%'";
                                $result3 = mysqli_query($db_handle, $sql3);

                            }

                        } 
                    }
                }  
                $to = $email;
                //$to = 'louis.donikian@gmail.com';
                 $subject = 'Vos achats sur ECE eBay !';
                 $message .= 'Vous avez acheté : ' . $nb . ' item(s).' . "\n\n" . 'Pour un montant total de ' . $tot . '€.' . "\n\n" . 'L\'équipe ECE Ebay.';
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
                            <p>Veuillez prendre contact avec votre établissement bancaire en cas d\'erreur.</p>
                        </div>
                </div>  
                ';
             }
     }
        mysqli_close($db_handle);
        exit;
        
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