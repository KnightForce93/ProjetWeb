<?php 
include("Connexionbdd.php"); 

$email = isset($_POST["email"])? $_POST["email"] : "";  
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";  
$statut = isset($_POST["statusRadios"])? $_POST["statusRadios"] : "";  
$nom = isset($_POST["nom"])? $_POST["nom"] : ""; 
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : ""; 
$adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";  
$ville = isset($_POST["ville"])? $_POST["ville"] : ""; 
$pays= isset($_POST["pays"])? $_POST["pays"] : "";  
$cp = isset($_POST["cp"])? $_POST["cp"] : ""; 
$tel = isset($_POST["tel"])? $_POST["tel"] : "";   
$pphoto = isset($_POST["pphoto"])? $_POST["pphoto"] : "";  
$bphoto = isset($_POST["bphoto"])? $_POST["bphoto"] : "";  

$erreur="";

if($email==""){
	$erreur .= "Email est vide.<br>";
}
if($mdp==""){
	$erreur .= "Mot de passe est vide.<br>";
}
if($statut==""){
	$erreur .="statut est vide.<br>";
}
if($nom==""){
	$erreur .="Nom est vide.<br>";
}
if($prenom==""){
	$erreur .= "Prenom est vide.<br>";
}
if($statut=="acheteur"){
if($adresse==""){
	$erreur .= "adresse est vide.<br>";
}if($ville==""){
	$erreur .= "ville est vide.<br>";
}if($pays==""){
	$erreur .= "pays est vide.<br>";
}if($cp==""){
	$erreur .= "cp est vide.<br>";
}if($tel==""){
	$erreur .= "tel est vide.<br>";
}
}
if($statut == "vendeur"){
	

		$target_dir = "imagesutilisateur/";
		//$imageFileType = pathinfo($_FILES["pphoto"]["name"],PATHINFO_EXTENSION);
		
        $target_file = $target_dir . basename($_FILES["pphoto"]["name"]);


if (move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_file)) {
$pphoto=basename( $_FILES["pphoto"]["name"]); //used to store the filename in a variable
} else {
$erreur .= "error uploading pphoto.";
}

        $target_file = $target_dir . basename($_FILES["bphoto"]["name"]);

if (move_uploaded_file($_FILES["bphoto"]["tmp_name"], $target_file)) {
$bphoto=basename( $_FILES["bphoto"]["name"]); //used to store the filename in a variable
} else {
$erreur .= "error uploading bphoto.";
}

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
		if (mysqli_num_rows($result) != 0) {     
			header("Location: Firstpage.php?log=existant");
			mysqli_close($db_handle);  
			exit;    
		} else {     
			
   $sql = "INSERT INTO utilisateur(email, password, statut)VALUES('$email', '$mdp', '$statut')";     
   $result = mysqli_query($db_handle, $sql);  
   $sql = "SELECT * FROM utilisateur";       
	    $sql .= " WHERE email LIKE '%$email%'";          
		$sql .= " AND password LIKE '%$mdp%'";     
		$result = mysqli_query($db_handle, $sql); 
		while ($data = mysqli_fetch_assoc($result)) {   
		$id=$data['id'];
		}	

   if ($statut=="acheteur")  {
   	  $sql = "INSERT INTO acheteur(prenom, nom, user_id)VALUES('$prenom', '$nom', '$id')";     
      $result = mysqli_query($db_handle, $sql); 
        $sql = "SELECT * FROM acheteur";       
	    $sql .= " WHERE user_id LIKE '%$id%'";             
		$result = mysqli_query($db_handle, $sql); 

		while ($data = mysqli_fetch_assoc($result)) {   
		$id2= $data['id'];
		
		}	

   		$sql = "INSERT INTO adresse(adresse, ville, codepostal, pays, telephone, ach_id)VALUES('$adresse', '$ville', '$cp', '$pays', '$tel', '$id2')"; 
   		$result = mysqli_query($db_handle, $sql);  
   		}
     else if($statut=="vendeur"){
   	  $sql = "INSERT INTO vendeur(prenom, nom, profil_photo, background_photo, user_id)VALUES('$prenom', '$nom', '$pphoto', '$bphoto' , '$id')";   
  	  $result = mysqli_query($db_handle, $sql);  
   }
  header("Location: Firstpage.php");
			mysqli_close($db_handle);  
			exit;    
}   
} else {    
	echo "Database not found";   
}  
}
}
 
  ?>   