<?php session_start();
$_SESSION['id_global']="10";

include("Connexionbdd.php"); 

if($_SESSION['id_global']!=""){
  $id=$_SESSION['id_global'];
   if ($db_found) {
    $sql = "SELECT * FROM utilisateur";       
     $sql .= " WHERE id LIKE '%$id%'";  
     $result = mysqli_query($db_handle, $sql);
    while ($data = mysqli_fetch_assoc($result)) {
      $statut=$data['statut'];
    }
}
}else{
	unset($_SESSION['id_global']);
	header("Location: Firstpage.php");
		exit;
}