<?php include("testutilisateur.php");

  $sql = "SELECT * FROM meilleuroffre";       
     $sql .= " WHERE id LIKE '%$meilleuroffre_id%'";  
     $result = mysqli_query($db_handle, $sql);
    while ($data = mysqli_fetch_assoc($result)) {
      $item_id=$data['item_id'];
       $ach_id=$data['ach_id'];
       $prix_acheteur=$data['prixAch'];
        $prix_vendeur=$data['prixVen'];
    }
    $sql = "DELETE FROM meilleuroffre";
            $sql .= " WHERE id != '$meilleuroffre_id'";
            $result = mysqli_query($db_handle, $sql);


$sql = "SELECT * FROM utilisateur";       
     $sql .= " WHERE id LIKE '%$id%'";  
     $result = mysqli_query($db_handle, $sql);
    while ($data = mysqli_fetch_assoc($result)) {
    	$statutS=$data['statut'];
    }

    if($statutS=="acheteur"){
   $sql = "INSERT INTO panier(ach_id, item_id)VALUES('$id','$item_id')";
   $result = mysqli_query($db_handle, $sql); 
    $sql = "UPDATE item SET prix_vente='$prix_vendeur', id_acheteur='$ach_id'";  
   $sql .= " WHERE id LIKE '%$item_id%'";   
   $result = mysqli_query($db_handle, $sql);  
    header("Location: profilacheteur.php");
      exit; }

      else if($statutS=="vendeur"){
   $sql = "INSERT INTO panier(ach_id, item_id)VALUES('$ach_id','$item_id')";
   $result = mysqli_query($db_handle, $sql); 
   $sql = "UPDATE item SET prix_vente='$prix_acheteur', id_acheteur='$ach_id'";  
   $sql .= " WHERE id LIKE '%$item_id%'";   
   $result = mysqli_query($db_handle, $sql);  
    header("Location: profilvendeur.php");
      exit; }
      
 }


?>
