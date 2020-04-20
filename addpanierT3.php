<?php 
session_start();
$_SESSION['id_global']="10";

include("Connexionbdd.php"); 

if($_SESSION['id_global']!=""){
  $id=$_SESSION['id_global']; 
$prixfinal = isset($_POST["prixfinal"])? $_POST["prixfinal"] : ""; 
$item_id = isset($_POST["item_id"])? $_POST["item_id"] : ""; 
$ach_id = isset($_POST["ach_id"])? $_POST["ach_id"] : ""; 
   if ($db_found) {
   if (isset($_POST['submitVE'])) {   
   $sql = "INSERT INTO panier(ach_id, item_id)VALUES('$ach_id', '$item_id')";
   $result = mysqli_query($db_handle, $sql); 

   $sql = "UPDATE item SET prix_vente='$prixfinal', id_acheteur='$ach_id'";  
   $sql .= " WHERE id LIKE '%$item_id%'";   
   $result = mysqli_query($db_handle, $sql);  

      $sql = "SELECT * FROM enchere";
        $sql .= " WHERE item_id LIKE '%$item_id%'";
        $result = mysqli_query($db_handle, $sql);
            while ($data = mysqli_fetch_assoc($result)) {
                $sql21 = "DELETE FROM offreenchere";
                $sql21 .= " WHERE enchere_id ='".$data['id']."'";
                $result21 = mysqli_query($db_handle, $sql21);
            }

            $sql = "DELETE FROM enchere";
            $sql .= " WHERE item_id LIKE '%$item_id%'";
            $result = mysqli_query($db_handle, $sql);
          
       
    header("Location: admin.php");
      exit;
      }
      
 }
}
?>