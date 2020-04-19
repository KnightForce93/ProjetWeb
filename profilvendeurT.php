<?php session_start();
$_SESSION['id_global']="11";

include("Connexionbdd.php"); 
if($_SESSION['id_global']!=""){
		$id=$_SESSION['id_global'];
		$sql = "SELECT * FROM utilisateur";       
	    $sql .= " WHERE id LIKE '%$id%'";               	    
		$result = mysqli_query($db_handle, $sql); 
//regarder s'il y a de résultat   
		while ($data = mysqli_fetch_assoc($result)) {   
		$id=$data['id'];
		$email =$data['email'];
		$mdp = $data['password'];
		$statut = $data['statut'];
		$datecreation=$data['created_at'];
		}
		$sql = "SELECT * FROM vendeur";       
	    $sql .= " WHERE user_id LIKE '%$id%'";               	    
		$result = mysqli_query($db_handle, $sql); 
		while ($data = mysqli_fetch_assoc($result)) { 
		$id_vendeur=$data['id'];
		$nom = $data['nom'];
		$prenom = $data['prenom'];
		$pphoto = $data['profil_photo'];
		$bphoto = $data['background_photo'];
		}
		}
?>	       

