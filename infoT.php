<?php 
session_start(); 
$_SESSION['id_global']="10";

include("Connexionbdd.php"); 

if($_SESSION['id_global']!=""){
		$id=$_SESSION['id_global'];
		$sql = "SELECT * FROM utilisateur";       
	    $sql .= " WHERE id LIKE '%$id%'";               	    
		$result = mysqli_query($db_handle, $sql); 
//regarder s'il y a de résultat   
		while ($data = mysqli_fetch_assoc($result)) {   
		$email =$data['email'];
		$mdp = $data['password'];
		}

		$sql = "SELECT * FROM acheteur";       
	    $sql .= " WHERE user_id LIKE '%$id%'";               	    
		$result = mysqli_query($db_handle, $sql); 
		while ($data = mysqli_fetch_assoc($result)) { 
		$ach_id=$data['id'];
		$nom = $data['nom'];
		$prenom = $data['prenom'];
		}
	}
	?>