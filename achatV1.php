<!DOCTYPE html> 
<html>
<head>
	<title>ECE Ebay</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="achat.css">
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
			<div class = "dropdown">
				<a href="" class="bouton-dropdown">Catégories</a>
					<ul class="bouton-categorie-liste">
						<li><a href="#">Férrailles et Trésor</a></li>
						<li><a href="#">Bon pour le musée</a></li>
						<li><a href="#">Accessoire VIP</a></li>
					</ul>
			</div>
			<input type="search" id="recherche" name="recherche" placeholder="Rechercher dans ECE Ebay... ">
			<div class="navbar-menu">
				<a href="achat.html" class="navbar-menu-link">Achat</a>
				<a href="" class="navbar-menu-link">Vente</a>
				<a href="" class="navbar-menu-link">Votre Compte</a>
				<a href="" class="navbar-menu-link"><i class="fas fa-shopping-basket"></i> Panier</a>
				<a href="plus.html" class="navbar-menu-link">Plus</a>
			</div>
		</nav>
		<header class="page-header header container-fluid">

				<div class="row">
					<div class="row-img">
						<a href="images/tresor.jpg"><img src="images/tresor.jpg" width="510" height="550"></a>
					</div>
					<div class="row-img">
						<a href="images/vangogh.jpg"><img src="images/vangogh.jpg" width="510" height="550"></a> 
					</div>
					<div class="row-img">
						<a href="images/Palace.jpg"><img src="images/Palace.jpg" width="510" height="550"></a> 
					</div>
				</div>
		</header>
		<footer class="page-footer"> 
		<div class="container">
			<div class="footer-copyright text-center">&copy; 2020 Copyright | Droits d'auteurs: Wassim Sebbahi & Thomas Popielski & Louis Donikian TD02</div><!--text-center : modifier la typographie-->
		</div>
	</footer>
</body>
</html>