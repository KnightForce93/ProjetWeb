<!DOCTYPE html>
<html>
<head>
	<title>Ajout produit</title>
	<meta charset="utf-8">
</head>
<body>
	<h3>Veuillez rentrer les informations nécessaires à l'ajout un produit</h3>
		<form action="addproductv2.php" method="post">
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
				</tr>
				<tr>
					<td>Lien photo :</td>
					<td><input type="text" name="photo"></td>
				</tr>
				<tr>
					<td>Description :</td>
					<td><textarea style="width:88%" placeholder="Points positifs/négatifs" name="description"></textarea></td> 
				</tr>
				<tr>
					<td>Catégorie d'achat :</td>
					<td>
						<select name="categoriedachat"> 
							<option value ="enchere">Enchère </option> 
							<option value ="bestoffer">Meilleure offre </option> 
							<option value ="achat">Achat immédiat </option> 
						</select>
					</td>
				</tr>
				<tr>
					<td>Prix ferme pour cette catégorie :</td>
					<td><input type="text" name="prixmin" placeholder="en €"></td>
				</tr>
				<tr>
					<td>Lien vidéo :</td>
					<td><input type="text" name="video"></td>
				</tr>
				<tr>
					<td colspan="2" align="right">
						<input type="submit" name="button" value="Ajouter">
					</td>
				</tr>
			</table>
		</form>

</body>
</html>