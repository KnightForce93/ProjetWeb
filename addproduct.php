<?php
//recuperer les données venant de la page HTML
		$nom = isset($_POST["nom"])? $_POST["nom"] : ""; 
		$photo = isset($_POST["photo"])? $_POST["photo"] : ""; 
		$description = isset($_POST["description"])? $_POST["description"] : ""; 
		$prixmin = isset($_POST["prixmin"])? $_POST["prixmin"] : "";
		$video = isset($_POST["video"])? $_POST["video"] : "";
		$categoriedachat = isset($_POST["categoriedachat"])? $_POST["categoriedachat"] : "";
		$categorieitem = isset($_POST["categorieitem"])? $_POST["categorieitem"] : "";
		
//identifier votre BDD

		$database = "projetweb";

//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost | votre login = root |votre password = <rien> 
    $db_handle = mysqli_connect('localhost', 'root', 'root');
    $db_found = mysqli_select_db($db_handle, $database);
		
 		if ($_POST["button"]) { 
			 if ($db_found) {
			 	
			 		$target_dir = "imagesproduit/";
        			$target_file = $target_dir . basename($_FILES["photo"]["name"]);
			        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
			            echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
			            $photo=basename( $_FILES["photo"]["name"],".jpg"); //used to store the filename in a variable
			            echo "<td><img src='imagesproduit/$photo.jpg' height='150px' width='300px'></td>";
			        } else {
			        	echo "erreur";
			            $erreur .= "error uploading photo.";
			        }
			     /*
			        $target_dir = "videosproduit/";
			        $target_file = $target_dir . basename($_FILES["video"]["name"]);
			        $uploadOk = 1;
			        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			        if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
			            echo "The file ". basename( $_FILES["video"]["name"]). " has been uploaded.";
			            $video=basename( $_FILES["video"]["name"],".jpg"); //used to store the filename in a variable
			            echo "<td><img src='videosproduit/$video.mp4' height='150px' width='300px'></td>";
			        } else {
			            $erreur .= "error uploading video.";
			        }
			    */
					$sql = "INSERT INTO Item(nom, photos, descrptions, prix_minimum, video, categoriedachat, categorie) 
							VALUES('$nom', '$photo', '$description', '$prixmin', '$video', '$categoriedachat', '$categorieitem')";
					$result = mysqli_query($db_handle, $sql); 

					 echo "Add successful." . "<br>";

//on affiche le livre ajouté
					$sql = "SELECT * FROM Item";
					if ($nom != "") {
//on cherche le livre avec les paramètres titre et auteur 
						$sql .= " WHERE nom LIKE '%$nom%'";
						if ($photo != "") {
							$sql .= " AND photos LIKE '%$photo%'";
						} 
					}
					$result = mysqli_query($db_handle, $sql);

					while ($data = mysqli_fetch_assoc($result)) {
						echo "Informations sur le produit ajouté:" . "<br>"; 
						echo "ID: " . $data['id'] . "<br>";
						echo "Nom: " . $data['nom'] . "<br>";
						echo "Description: " . $data['descrptions'] . "<br>";
						echo "Prix Minimum: " . $data['prix_minimum'] . "<br>";
						echo "Catégorie d'achat: " . $data['categoriedachat'] . "<br>";
						echo "Catégorie de l'item: " . $data['categorie'] . "<br>";
						echo '<img style="width:200px;" src= '. $data["photos"] .' >';
						//echo '<embed id="movie_player" width="640" height="363" bgcolor="#000000" allowfullscreen="true" allowscriptaccess="always" flashvars="video_id=iP6XpLQM2Cs" src='. $data["video"] .'  />';
						//echo '<video id="video" src="bague.mp4">';
						echo '<video id="video" src='. $data["video"] .' >';
					} 
			} 
			else {
				echo "Database not found";
 			} 
		}
//fermer la connexion
	mysqli_close($db_handle);
?>