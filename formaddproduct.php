<!DOCTYPE html>
<html>
<head>
	<title>Ajout produit</title>
	<meta charset="utf-8"> </head> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<h3>Veuillez rentrer les informations nécessaires à l'ajout un produit</h3>
	<div class="container">

		<form action="addproduct.php" method="post">
			<fieldset>
				<div class="form-group">
                   <label for="nom">Nom du produit :</label>
                   <input type="text" class="form-control" name="nom">
                </div>
                <div class="form-group">
					<label for="description">Description :</label>
					<textarea style="width:100%" placeholder="Points positifs/négatifs" name="description"></textarea>
				</div>
                <div class="form-group">
                   <label for="categorieitem">Catégorie du produit :</label>
                   <select name="categorieitem"> 
							<option value ="FerrailleouTresor">Ferraille ou Trésor </option> 
							<option value ="BonpourleMusee">Bon pour le musée </option> 
							<option value ="AccessoireVIP">Accessoire VIP</option> 
					</select>
                </div>
                <div class="form-group">
					<label for="categoriedachat">Catégorie d'achat :</label>
					<select name="categoriedachat"> 
						<option value ="enchere">Enchère </option> 
						<option value ="bestoffer">Meilleure offre </option> 
						<option value ="achat">Achat immédiat </option> 
					</select>
				</div>
				<div class="form-group">
					<label for="prixmin">Prix ferme pour cette catégorie :</label>
					<input type="text" name="prixmin" placeholder="en €">
				</div>
				<div class="form-group">
                     <label for="photo">Choisissez une photo du produit</label>
                     <input type="file" class="form-control-file" name="photo">
				</div>
				<div class="form-group">
                     <label for="video">Choisissez la vidéo correspondante</label>
                     <input type="file" class="form-control-file" name="video">
                </div>
				<div class="form-group">
       				<input type="submit" value="Envoyer" name="button" class="btn btn-primary"/>
        		</div>
		</fieldset>
	</form>

</div>

</body>
</html>