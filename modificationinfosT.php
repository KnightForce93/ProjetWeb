<?php session_start();
$_SESSION['id_global']="11";

include("Connexionbdd.php"); 

if($_SESSION['id_global']!=""){
		$id=$_SESSION['id_global'];
$email = isset($_POST["email"])? $_POST["email"] : "";  
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";    

$erreur="";

if($erreur!=""){

	 echo "Erreur: $erreur";
}else{
 
//verifie si l'utilisateur n'existe pas déja
if (isset($_POST['submit'])) {  
			if($email!=""){
   $sql = "UPDATE utilisateur SET email='$email'";  
   $sql .= " WHERE id LIKE '%$id%'";   
   $result = mysqli_query($db_handle, $sql);  
}
if($mdp!=""){
   $sql = "UPDATE utilisateur SET password='$mdp'";  
   $sql .= " WHERE id LIKE '%$id%'";   
   $result = mysqli_query($db_handle, $sql);  
}

		}
		}
		}
		?>	