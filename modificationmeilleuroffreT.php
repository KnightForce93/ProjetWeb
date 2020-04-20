<?php include("testutilisateur.php"); 
$prix = isset($_POST["prix"])? $_POST["prix"] : ""; 
$msg = isset($_POST["msg"])? $_POST["msg"] : ""; 
$meilleuroffre_id= isset($_POST["meilleuroffre_id"])? $_POST["meilleuroffre_id"] : "";

$sql = "SELECT * FROM meilleuroffre";       
     $sql .= " WHERE id LIKE '%$meilleuroffre_id%'";  
     $result = mysqli_query($db_handle, $sql);
    while ($data = mysqli_fetch_assoc($result)) {
      $statutm=$data['statut'];
    }

    if($statut=="acheteur") {
     $sql = "UPDATE meilleuroffre SET prixAch='$prix', msg_ach='$msg', statutm='vendeur'";  
   $sql .= " WHERE id LIKE '%$meilleuroffre_id%'";   
   $result = mysqli_query($db_handle, $sql);  }

   if($statut=="vendeur") {
    $sql = "UPDATE meilleuroffre SET prixVen='$prix', msg_vend='$msg', repetition= repetition + 1, statutm='acheteur'";  
   $sql .= " WHERE id LIKE '%$meilleuroffre_id%'";   
   $result = mysqli_query($db_handle, $sql); }


?>