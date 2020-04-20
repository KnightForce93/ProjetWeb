<?php include("testutilisateur.php"); 

$prix = isset($_POST["prix"])? $_POST["prix"] : "";  
$item_id = isset($_POST["item_id"])? $_POST["item_id"] : ""; 

   if (isset($_POST['submitEnchere'])) {   
    $sql = "SELECT * FROM enchere";       
     $sql .= " WHERE item_id LIKE '%$item_id%'";  
     $result = mysqli_query($db_handle, $sql);
    while ($data = mysqli_fetch_assoc($result)) {
      $enchere_id=$data['id'];
    }
   $sql = "INSERT INTO offreenchere(prix, enchere_id, ach_id)VALUES('$prix', '$enchere_id', '$id')";
   $result = mysqli_query($db_handle, $sql);  
   header("Location: ficheitem.php?item_id=$item_id");
    exit;
  }


?>