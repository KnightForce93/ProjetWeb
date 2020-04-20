<?php include("testutilisateur.php");

$item_id = isset($_POST["item_id"])? $_POST["item_id"] : ""; 
  
   if (isset($_POST['submitAchat'])) {   
   $sql = "INSERT INTO panier(ach_id, item_id)VALUES('$id', '$item_id')";
   $result = mysqli_query($db_handle, $sql); 
    header("Location: ficheitem.php?item_id=$item_id");
      exit; }
      
 

?>
