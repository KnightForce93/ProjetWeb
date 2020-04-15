<?php 
include("Connexionbdd.php"); 
 //récupérer les données venant de formulaire  
$email = isset($_POST["email"])? $_POST["email"] : "";  
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";  
$status = isset($_POST["statusRadios"])? $_POST["statusRadios"] : "";  
$nom = isset($_POST["nom"])? $_POST["nom"] : ""; 
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";  
$adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";  
$ville = isset($_POST["ville"])? $_POST["ville"] : "";  
$pays = isset($_POST["pays"])? $_POST["pays"] : ""; 
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
if($status==""){
	$erreur .="status est vide.<br>";
}
if($nom==""){
	$erreur .="Nom est vide.<br>";
}
if($prenom==""){
	$erreur .= "Prenom est vide.<br>";
}
if($status=="acheteur"){
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
if($status == "vendeur"){
	

		$target_dir = "imagesutilisateur/";
        $target_file = $target_dir . basename($_FILES["pphoto"]["name"]);

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if (move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_file)) {
echo "The file ". basename( $_FILES["pphoto"]["name"]). " has been uploaded.";
$pphoto=basename( $_FILES["pphoto"]["name"],".jpg"); //used to store the filename in a variable
echo "<td><img src='imagesutilisateur/$pphoto.jpg' height='150px' width='300px'></td>";
} else {
$erreur .= "error uploading pphoto.";
}
$target_dir = "imagesutilisateur/";
        $target_file = $target_dir . basename($_FILES["bphoto"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if (move_uploaded_file($_FILES["bphoto"]["tmp_name"], $target_file)) {
echo "The file ". basename( $_FILES["bphoto"]["name"]). " has been uploaded.";
$bphoto=basename( $_FILES["bphoto"]["name"],".jpg"); //used to store the filename in a variable
echo "<td><img src='imagesutilisateur/$bphoto.jpg' height='150px' width='300px'></td>";
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
	    $sql .= " WHERE login LIKE '%$email%'";          
		$sql .= " AND password LIKE '%$mdp%'";     
			    
		$result = mysqli_query($db_handle, $sql); 
//regarder s'il y a de résultat    
		if (mysqli_num_rows($result) != 0) {     
			header("Location: Firstpage.php?log=existant");
			mysqli_close($db_handle);  
			exit;    
		} else {     
			
   $sql = "INSERT INTO utilisateur(login, password, statut)VALUES('$email', '$mdp', '$status')";     
   $result = mysqli_query($db_handle, $sql);  
   $sql = "SELECT * FROM utilisateur";       
	    $sql .= " WHERE login LIKE '%$email%'";          
		$sql .= " AND password LIKE '%$mdp%'";     
		$result = mysqli_query($db_handle, $sql); 
		while ($data = mysqli_fetch_assoc($result)) {   
		$id=$data['id'];
		}	       
   if ($status=="acheteur")  {
   	  $sql = "INSERT INTO acheteur(id, prenom, nom, user_id)VALUES('$id', '$prenom', '$nom', '$id')";     
   $result = mysqli_query($db_handle, $sql);  
   }  else if($status=="vendeur"){
   	  $sql = "INSERT INTO vendeur(id, prenom, nom, photo, backgroundphoto, user_id)VALUES('$id', '$nom', '$prenom', '$pphoto', '$bphoto' , '$id')";   
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