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
			$statut = $data['statut'];
			$datecreation=$data['created_at'];
		}
//regarder s'il y a de résultat   
		$sql = "SELECT * FROM acheteur";       
	    $sql .= " WHERE user_id LIKE '%$id%'";               	    
		$result = mysqli_query($db_handle, $sql); 
		while ($data = mysqli_fetch_assoc($result)) { 
			$id_acheteur=$data['id'];
			$nom = $data['nom'];
			$prenom = $data['prenom'];
		}

		$sql = "SELECT * FROM adresse";       
	    $sql .= " WHERE ach_id LIKE '%$id_acheteur%'";               	    
		$result = mysqli_query($db_handle, $sql); 
		while ($data = mysqli_fetch_assoc($result)) { 
			$adresse =$data['adresse'];
			$ville = $data['ville'];
			$cp = $data['codepostal'];
			$pays=$data['pays'];
			$tel=$data['telephone'];
		}

		$sql = "SELECT * FROM paiement";       
	    $sql .= " WHERE ach_id LIKE '%$id_acheteur%'";               	    
		$result = mysqli_query($db_handle, $sql); 
		while ($data = mysqli_fetch_assoc($result)) { 
			$typecarte =$data['typecarte'];
			$nomcarte = $data['nom'];
			$numero_carte = $data['numero_carte'];
			$dateexp=$data['dateexp'];
			$code=$data['code'];
		}

		$sql= "SELECT * FROM panier";
		$sql .= " WHERE ach_id LIKE '%$id_acheteur%'";
		$result = mysqli_query($db_handle, $sql); 
		while ($data = mysqli_fetch_assoc($result)) {   
			$id_panier=$data['id'];
			$item_id = $data['item_id'];

			$sql1 = "SELECT * FROM item";       
	    	$sql1 .= " WHERE id LIKE '%$item_id%'";               	    
		$result1 = mysqli_query($db_handle, $sql1);
		while ($data1 = mysqli_fetch_assoc($result1)) {   
			$nom_item=$data1['nom'];
			$photo1 = $data1['photo1'];
			$prix_minimum=$data1['prix_minimum'];
			$description=$data1['description'];
			$categorie_achat=$data1['categorie_achat'];
			$categorie_produit=$data1['categorie_produit'];
			$vendeur_id=$data1['v_id'];
		} 
		}

		$sql = "SELECT * FROM item";       
	    $sql .= " WHERE id LIKE '%$item_id%'";               	    
		$result = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result)) {   
			$nom_item=$data['nom'];
			$photo1 = $data['photo1'];
			$prix_minimum=$data['prix_minimum'];
			$description=$data['description'];
			$categorie_achat=$data['categorie_achat'];
			$categorie_produit=$data['categorie_produit'];
			$vendeur_id=$data['v_id'];
		} 
		$sql= "SELECT * FROM vendeur";
		$sql .=  " WHERE id LIKE '%$vendeur_id%'";
		$result = mysqli_query($db_handle, $sql); 
		while ($data = mysqli_fetch_assoc($result)) {   
			$prenom_vendeur=$data['prenom'];
			$nom_vendeur=$data['nom'];
		}   
	}
?>	       
