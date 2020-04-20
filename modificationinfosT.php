<?php include("testutilisateur.php"); 
	$nom = isset($_POST["nom"])? $_POST["nom"] : "";  
	$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";    
	$email = isset($_POST["email"])? $_POST["email"] : "";  
	$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";    

	$adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";  
	$ville = isset($_POST["ville"])? $_POST["ville"] : "";    
	$codepostal = isset($_POST["cp"])? $_POST["cp"] : "";  
	$pays = isset($_POST["pays"])? $_POST["pays"] : "";
	$telephone = isset($_POST["tel"])? $_POST["tel"] : "";    

	$typecarte = isset($_POST["typecarte"])? $_POST["typecarte"] : "";  
	$nomC = isset($_POST["nomC"])? $_POST["nomC"] : "";    
	$numero_carte = isset($_POST["numero_carte"])? $_POST["numero_carte"] : "";  
	$dateexp = isset($_POST["dateexp"])? $_POST["dateexp"] : "";
	$code = isset($_POST["code"])? $_POST["code"] : "";
	$solde = isset($_POST["solde"])? $_POST["solde"] : "";
	$adresseS_id= isset($_POST["adresseS_id"])? $_POST["adresseS_id"] : "";
$carteS_id= isset($_POST["carteS_id"])? $_POST["carteS_id"] : "";
	$erreur="";

	if($erreur!=""){
		echo "Erreur: $erreur";
	}else{
	 
	//verifie si l'utilisateur n'existe pas déja
		if (isset($_POST['submit'])) {  
		   if($nom!=""){
			   $sql = "UPDATE acheteur SET nom='$nom'";  
			   $sql .= " WHERE user_id LIKE '%$id%'";   
			   $result = mysqli_query($db_handle, $sql);  
			   header("Location: info.php");
			   exit;
			}
			if($prenom!=""){
			   $sql = "UPDATE acheteur SET prenom='$prenom'";  
			   $sql .= " WHERE user_id LIKE '%$id%'";   
			   $result = mysqli_query($db_handle, $sql); 
			   header("Location: info.php"); 
			   exit;
			}
			if($telephone!=""){
			   $sql = "UPDATE acheteur SET telephone='$telephone'";  
			   $sql .= " WHERE user_id LIKE '%$id%'";   
			   $result = mysqli_query($db_handle, $sql); 
			   header("Location: info.php"); 
			   exit;
			}

		   if($email!=""){
			   $sql = "UPDATE utilisateur SET email='$email'";  
			   $sql .= " WHERE id LIKE '%$id%'";   
			   $result = mysqli_query($db_handle, $sql);

			   $sql1 = "SELECT * FROM utilisateur";  
			   $sql1 .= " WHERE id LIKE '%$id%'";   
			   $result1 = mysqli_query($db_handle, $sql1);
			   while ($data1 = mysqli_fetch_assoc($result1)) {
			   		$statut=$data1['statut'];
			   }
			   if($statut=='vendeur')
			   {
			   		header("Location: profilvendeur.php");
			   		exit;
			   }
			   if($statut=='acheteur')
			   {
			   		header("Location: info.php");
			   		exit;
			   }
			}
			if($mdp!=""){
			   $sql = "UPDATE utilisateur SET password='$mdp'";  
			   $sql .= " WHERE id LIKE '%$id%'";   
			   $result = mysqli_query($db_handle, $sql);  

			   $sql1 = "SELECT * FROM utilisateur";  
			   $sql1 .= " WHERE id LIKE '%$id%'";   
			   $result1 = mysqli_query($db_handle, $sql1);
			   while ($data1 = mysqli_fetch_assoc($result1)) {
			   		$statut=$data1['statut'];
			   }
			   if($statut=='vendeur')
			   {
			   		header("Location: profilvendeur.php");
			   		exit;
			   }
			   if($statut=='acheteur')
			   {
			   		header("Location: info.php");
			   		exit;
			   }
			}

			if($adresse!=""){
				$sql = "SELECT * FROM acheteur";  
			   $sql .= " WHERE user_id LIKE '%$id%'";   
			   $result = mysqli_query($db_handle, $sql);  
			   while ($data = mysqli_fetch_assoc($result)) {
			   		$ach_id=$data['id'];
			   	   	$sql1 = "INSERT INTO adresse(adresse, ville, codepostal, pays, telephone, ach_id)VALUES('$adresse', '$ville', '$codepostal', '$pays', '$telephone', '$ach_id')";
				   	$result1 = mysqli_query($db_handle, $sql1);  
				   	header("Location: info.php");
				   	exit;
				}
			}

			if($typecarte!=""){
				$sql = "SELECT * FROM acheteur";  
			   $sql .= " WHERE user_id LIKE '%$id%'";   
			   $result = mysqli_query($db_handle, $sql);  
			   while ($data = mysqli_fetch_assoc($result)) {
			   		$ach_id=$data['id'];
			   		$sql1 = "INSERT INTO paiement(typecarte, nom, numero_carte, dateexp, code, solde, ach_id)VALUES('$typecarte', '$nomC', '$numero_carte', '$dateexp', '$code', '$solde', '$ach_id')";
				   	$result1 = mysqli_query($db_handle, $sql1);  
				   	header("Location: info.php");
				   	exit;
				}
			}
		}
		if (isset($_POST['submitSA'])) {
			if($adresseS_id!=""){
			$sql3 = "DELETE FROM adresse";
                               $sql3 .= " WHERE id = '".$adresseS_id."'";
                                $result = mysqli_query($db_handle, $sql3);
                                header("Location: info.php");
				   	exit;
}}
if (isset($_POST['submitSP'])) {
			if($carteS_id!=""){
			$sql3 = "DELETE FROM paiement";
                               $sql3 .= " WHERE id = '".$carteS_id."'";
                                $result = mysqli_query($db_handle, $sql3);
                                header("Location: info.php");
				   	exit;
}}

	}

?>	