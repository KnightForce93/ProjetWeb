<?php include("testutilisateur.php"); 

$prix = isset($_POST["prix"])? $_POST["prix"] : ""; 
$msg = isset($_POST["msg"])? $_POST["msg"] : ""; 
$item_id = isset($_POST["item_id"])? $_POST["item_id"] : "";

	if (isset($_POST['submitOffre'])) {  
    $sql = "SELECT * FROM item";       
     $sql .= " WHERE id LIKE '%$item_id%'";  
     $result = mysqli_query($db_handle, $sql);
    while ($data = mysqli_fetch_assoc($result)) {
      $v_id=$data['v_id'];
    }
   $sql = "INSERT INTO meilleuroffre (prixAch, msg_ach, ach_id, vend_id, item_id)VALUES('$prix', '$msg', '$id', '$v_id', '$item_id')";
   $result = mysqli_query($db_handle, $sql);  
  header("Location: ficheitem.php?item_id=$item_id");
      exit; }

  


?>