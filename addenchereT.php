<?php 
session_start();
$_SESSION['id_global']="10";

include("Connexionbdd.php"); 

if($_SESSION['id_global']!=""){
	$id=$_SESSION['id_global'];
$prix = isset($_POST["prix"])? $_POST["prix"] : "";  
$item_id = isset($_POST["item_id"])? $_POST["item_id"] : ""; 
   if ($db_found) {
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
}
}
?>