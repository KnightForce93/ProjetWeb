<?php session_start();
$_SESSION['id_global']="10";

include("Connexionbdd.php");
if($_SESSION['id_global']!=""){ 
	$id=$_SESSION['id_global'];
if(filter_has_var(INPUT_GET,'item_id')){
        $item_id=$_GET['item_id'];
    }else{$item_id='15';
}
		$sql = "SELECT * FROM item";       
	    $sql .= " WHERE id LIKE '%$item_id%'";               	    
		$result = mysqli_query($db_handle, $sql); 
//regarder s'il y a de résultat   
		while ($data = mysqli_fetch_assoc($result)) {   
		$nomitem =$data['nom'];
		$photo1 = $data['photo1'];
		$photo2 = $data['photo2'];
		$photo3 = $data['photo3'];
		$video = $data['video'];
		$description= $data['description'];
		$prix= $data['prix_minimum'];
		$categorie_achat = $data['categorie_achat'];
		$categorie_produit = $data['categorie_produit'];
		$date_publication=$data['date_publication'];
		$v_id =$data['v_id'];
		}
		$sql = "SELECT * FROM vendeur";       
	    $sql .= " WHERE id LIKE '%$v_id%'";               	    
		$result = mysqli_query($db_handle, $sql); 
		while ($data = mysqli_fetch_assoc($result)) { 
		$nomvendeur = $data['nom'];
		$prenomvendeur = $data['prenom'];
		}
		if($categorie_achat=="Enchere"){
			$sql = "SELECT * FROM enchere";       
	    $sql .= " WHERE item_id LIKE '%$item_id%'";               	    
		$result = mysqli_query($db_handle, $sql); 
//regarder s'il y a de résultat   
		while ($data = mysqli_fetch_assoc($result)) {   
		$enchere_id =$data['id'];

		}
		}
	}
	
?>	       

