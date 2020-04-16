<?php
session_start();

include("Connexionbdd.php");
//$_SESSION['id_global']="11";

include("Connexionbdd.php"); 
if($_SESSION['id_global']!=""){
	    $id=$_SESSION['id_global'];
		$nom = isset($_POST["nom"])? $_POST["nom"] : ""; 
		$photo1 = isset($_POST["photo1"])? $_POST["photo1"] : "";  
		$photo2= isset($_POST["photo2"])? $_POST["photo2"] : "";  
		$photo3 = isset($_POST["photo3"])? $_POST["photo2"] : "";
		$video = isset($_POST["video"])? $_POST["video"] : "";   
		$description = isset($_POST["description"])? $_POST["description"] : ""; 
		$prixmin = isset($_POST["prixmin"])? $_POST["prixmin"] : "";
		$categoriedachat = isset($_POST["categoriedachat"])? $_POST["categoriedachat"] : "";
		$categorieitem = isset($_POST["categorieitem"])? $_POST["categorieitem"] : "";

		$erreur="";

if($nom==""){
	$erreur .= "Nom est vide.<br>";
}
if($description==""){
	$erreur .= "description est vide.<br>";
}if($prixmin==""){
	$erreur .= "prixminest vide.<br>";
}if($categoriedachat==""){
	$erreur .= "categoriedachat est vide.<br>";
}if($categorieitem==""){
	$erreur .= "categorieitem est vide.<br>";
}


$target_dir = "imagesproduit/";
$filename = '/path/to/foo.txt';

if (file_exists($_FILES["photo1"]["tmp_name"])) {
	
//$imageFileType = pathinfo($_FILES["pphoto"]["name"],PATHINFO_EXTENSION);
$target_file = $target_dir . basename($_FILES["photo1"]["name"],$imageFileType).$;

if (move_uploaded_file($_FILES["photo1"]["tmp_name"], $target_file)) {
	
$photo1=basename( $_FILES["photo1"]["name"]); //used to store the filename in a variable
			        } else {
			            $erreur .= "error uploading photo1.";
			        }
}else{$erreur .= "la photo1 est obligatoire";}

if (file_exists($_FILES["photo2"]["tmp_name"])) {
	
$target_file = $target_dir . basename($_FILES["photo2"]["name"]);

if (move_uploaded_file($_FILES["photo2"]["tmp_name"], $target_file)) {
	
$photo2=basename( $_FILES["photo2"]["name"]); //used to store the filename in a variable
			        } else {
			            $erreur .= "error uploading photo2.";
			        }
			    }
			        

if (file_exists($_FILES["photo3"]["tmp_name"])) {
$target_file = $target_dir . basename($_FILES["photo3"]["name"]);
if (move_uploaded_file($_FILES["photo3"]["tmp_name"], $target_file)) {
	
$photo3=basename( $_FILES["photo3"]["name"]); //used to store the filename in a variable
			        } else {
			            $erreur .= "error uploading photo3.";
			        }
			    }
if (file_exists($_FILES["video"]["tmp_name"])) {

			        $target_file = $target_dir . basename($_FILES["video"]["name"]);

if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
	
$video=basename( $_FILES["video"]["name"]); //used to store the filename in a variable
			        } else {
			            $erreur .= "error uploading video.";
			        }
			    }

	if($erreur!=""){

	 echo "Erreur: $erreur";
}else{		        
 	if (isset($_POST['submit'])) {  

			 if ($db_found) {
	$sql = "SELECT * FROM vendeur";       
	    $sql .= " WHERE user_id LIKE '%$id%'";          	    
		$result = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result)) { 
		$id_vendeur=$data['id'];
		} 		 	
	$sql =  "INSERT INTO item(nom, photo1,";
	 if($photo2!=""){
	 	$sql .=  " photo2,";
	 	}
	 	if($photo3!=""){
	 	$sql .=  " photo3,";
	 	}
	 	if($video!=""){
	 	$sql .=  " video,";
	 	}
	 $sql .=  " description, prix_minimum, categorie_achat, categorie_produit, v_id)VALUES('$nom', '$photo1',";
	  if($photo2!=""){
	 	$sql .=  " '$photo2',";
	 	}
	 	if($photo3!=""){
	 	$sql .=  " '$photo3',";
	 	}
	 	if($video!=""){
	 	$sql .=  " '$video',";
	 	}
	 $sql .=" '$description', '$prixmin', '$categoriedachat', '$categorieitem','$id_vendeur')";   
	$result = mysqli_query($db_handle, $sql); 
	 mysqli_close($db_handle);
		}	else {
				echo "Database not found";
 			} 
		}
	}
}
//fermer la connexion
	
?>