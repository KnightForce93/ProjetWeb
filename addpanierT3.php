<?php 
session_start();
$_SESSION['id_global']="10";

include("Connexionbdd.php"); 

if($_SESSION['id_global']!=""){
  $id=$_SESSION['id_global']; 
$item_id = isset($_POST["item_id"])? $_POST["item_id"] : ""; 
$ach_id = isset($_POST["ach_id"])? $_POST["ach_id"] : ""; 
   if ($db_found) {
   if (isset($_POST['submitVE'])) {   
   $sql = "INSERT INTO panier(ach_id, item_id)VALUES('$ach_id', '$item_id')";
   $result = mysqli_query($db_handle, $sql); 
    header("Location: adminV3.php");
      exit; }
      
 }
}
?>