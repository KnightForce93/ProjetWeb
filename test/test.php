<?php
//recuperer les données venant de la page HTML
//identifier votre BDD
		$database = "projet";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost | votre login = root |votre password = <rien> 
		$db_handle = mysqli_connect('localhost', 'root', 'root');
		$db_found = mysqli_select_db($db_handle, $database);
		if ($_POST["button"]) {
			 if ($db_found) {
			 	//affichage de tous les produits 
					$sql = "SELECT * FROM Item";
					$result = mysqli_query($db_handle, $sql); 

					while ($data = mysqli_fetch_assoc($result)) {
						echo "Produits dans le marketplace:" . "<br>"; 
						echo "ID: " . $data['id'] . "<br>";
						echo "Nom: " . $data['nom'] . "<br>";
						echo "Photo: " . $data['photos'] . "<br>";
						echo "Description: " . $data['descrptions'] . "<br>";
						echo "Prix Minimum: " . $data['prix_minimum'] . "<br>";
						echo "Video: " . $data['video'] . "<br>";
						echo "Catégorie d'achat: " . $data['categoriedachat'] . "<br>";
						echo "Catégorie de l'item: " . $data['categorie'] . "<br>";
						echo "<br>";
					} 
			} 
			else {
				echo "Database not found";
 			} 
		}
//fermer la connexion
	mysqli_close($db_handle);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ajout produit</title>
	<meta charset="utf-8">
</head>
<body>
	<h3>Veuillez rentrer les informations nécessaires à l'ajout un produit</h3>
		<form action="addproduct.php" method="post">
			<table>
				<tr>
					<td>Nom :</td>
					<td><input type="text" name="nom"></td>
				</tr>
				<tr>
					<td>Catégorie du produit :</td>
					<td><select name="categorieitem"> 
							<option value ="FerrailleouTresor">Ferraille ou Trésor </option> 
							<option value ="BonpourleMusee">Bon pour le musée </option> 
							<option value ="AccessoireVIP">Accessoire VIP</option> 
						</select>
					</td>
				<tr>
					<td colspan="2" align="right">
						<input type="submit" name="button" value="Ajouter">
					</td>
				</tr>
			</table>
		</form>

</body>
</html>