<?php
 
include("Connexionbdd.php");
 //récupérer les données venant de formulaire  
$email = isset($_POST["email"])? $_POST["email"] : "";  
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";  

$erreur="";

if($email==""){
	$erreur .= "Email est vide.<br>";
}
if($mdp==""){
	$erreur .= "Mot de passe est vide.<br>";
}

if($erreur!=""){

	 echo "Erreur: $erreur";
}else{
 

//verifie si l'utilisateur n'existe pas déja
if (isset($_POST['submit'])) {   
	if ($db_found) {    
		$sql = "SELECT * FROM utilisateur";       
	    $sql .= " WHERE email LIKE '%$email%'";          
		$sql .= " AND password LIKE '%$mdp%'";     
			    
		$result = mysqli_query($db_handle, $sql); 
//regarder s'il y a de résultat    
		if (mysqli_num_rows($result) == 0) {     
			header("Location: Firstpage.php?log=inexistant");
			mysqli_close($db_handle);  
			exit;

		} else {      
		while ($data = mysqli_fetch_assoc($result)) {   
		$id=$data['id'];
		}
		session_start();
		$_SESSION["id"]=$id;
		mysqli_close($db_handle);  
		header("Location: index.html");
		exit;
   }

  
} else {    
	echo "Database not found";   
}  
}
}
 
  ?>   