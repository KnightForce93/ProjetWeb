<!DOCTYPE html>
<html>
<head>
	<title>Supprimer un objet</title>
	<meta charset="utf-8"> </head> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
		<h2>Suppression d'un produit</h2>
		<div class="container">
		<div>Affichage de tous les produits</div><br>
		
		<?php $database = "projetweb";
   			  $db_handle = mysqli_connect('localhost', 'root', 'root');
    		  $db_found = mysqli_select_db($db_handle, $database);
    		  $sql = "SELECT * FROM Item";
    		  $result = mysqli_query($db_handle, $sql);
    		  while ($data = mysqli_fetch_assoc($result)) {
						echo "ID: " . $data['id'] . "<br>";
						echo "Nom: " . $data['nom'] . "<br>";
						 echo "Description: " . $data['descrptions'] . "<br>";
						 echo "Prix Minimum: " . $data['prix_minimum'] . "<br>";
						 echo "Catégorie d'achat: " . $data['categoriedachat'] . "<br>";
						 echo "Catégorie de l'item: " . $data['categorie'] . "<br>";
						 echo '<img style="width:200px;" src= '. $data["photos"] .' >';
						 echo "<br>";
						
					} 
		?>
		<form method="post">
		<div class="form-group">
            <label for="choix">Entrez l'ID du produit à supprimer</label>
            <input type="number" class="form-control" name="id">
        </div>
        <div class="form-group">
       			<input type="submit" value="Supprimer" name="delete" class="btn btn-primary"/>
        </div>
        </form>
        <?php 
        	$id = isset($_POST["id"])? $_POST["id"] : "";

      		if ($_POST["delete"]) { 
      			if($id=="") {echo "veuillez entrer un id";}
      			else { $sql = "SELECT * FROM Item WHERE id LIKE '%$id%'";
						$result = mysqli_query($db_handle, $sql);
						//tester s'il y a de résultat
						if (mysqli_num_rows($result) == 0) {
						//le livre recherché n'existe pas
							echo "Produit not found"; 
						} else {
        					$sql = "DELETE FROM Item WHERE id LIKE '%$id'";
        					$result = mysqli_query($db_handle, $sql);
        					echo "delete successful";
						}
      			}
        	}
       		mysqli_close($db_handle);
        ?>
        </div>
        	


</body>
</html>