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
         $tot=0;
		while ($pmt = mysqli_fetch_assoc($result))
		{
            $item_id=$pmt['item_id'];
            $sql1 = "SELECT * FROM item ";
            $sql1 .= " WHERE id LIKE '%$item_id%'";
            $result1 = mysqli_query($db_handle, $sql1);  
            while ($pmt1 = mysqli_fetch_assoc($result1)) 
            {
                $tot=$tot+$pmt1['prix_minimum'];
           		
           	}
		}
	}
?>	       

