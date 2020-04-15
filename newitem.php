<!DOCTYPE html> 
<html>
<head>
		<title>ECE Ebay</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="newitem.css">
		<!-- lien vers font awesome, library de emoticone -->
		<script src="https://kit.fontawesome.com/49d3300cf5.js" crossorigin="anonymous"></script> 
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			//utiliser jQuery pour que l’image s’étire sur l’écran
				$(document).ready(function(){ 
					$('.header').height($(window).height());
				});
		</script>
		<script>
			function send() {
				alert("Message envoyé avec succès !")
			}
		</script>
</head> 

<body> 
	<nav class="navbar">
				<a href="index.html"><img src="images/logo.png" width="80"></a>
	</nav>
	<header class="page-header header container-fluid">
		
			<div class="img-fond">
				<a><img src="images/TM.jpg"></a>
			</div>
			<div class="img-fond">
				<a><img src="images/meubles.jpg"></a>
			</div>
		<div class="overlay"></div>
		<div class="description">
				<h1><strong>Ajouter un Item</strong></h1><br><br>
					<select name="type">
						<option value="FT">Ferrailles ou Trésor</option>
						<option value="musée">Bon pour le musée</option>
						<option value="VIP">Accessoires VIP</option>
					</select><br><br>

                	<input type="text" placeholder="Nom..."/><br><br>
                	<input type="text" placeholder="Prix..."/><br><br>
               		<input type="description" placeholder="Description..."/><br><br>
                	<button>Ajouter</button>

		</div>
	</header>
		
	<footer class="page-footer"> 
		<div class="container">
			<div class="footer-copyright text-center">&copy; 2020 Copyright | Droits d'auteurs: Wassim Sebbahi & Thomas Popielski & Louis Donikian TD02</div><!--text-center : modifier la typographie-->
		</div>
	</footer>
</body>
</html>