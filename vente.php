<!DOCTYPE html> 
<html>
<head>
		<title>ECE Ebay</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="vente.css">
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
		<nav>
		  <div class="container-fluid">
		    <div class="navbar-header">
		         <a href="index.php"><img src="images/logo.png" width="80"></a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar"  style="padding-top: 20px;">
		      <ul class="nav navbar-nav">
		        <div class = "dropdown">
		        <a href="" class="bouton-dropdown">Catégories</a>
		          <ul class="bouton-categorie-liste">
		            <li><a href="ferraille_tresor.php">Férrailles et Trésor</a></li>
		            <li><a href="#">Bon pour le musée</a></li>
		            <li><a href="#">Accessoire VIP</a></li>
		          </ul>
		        </div>
		      </ul>
		      <div class="nav navbar-nav">
		        <input type="search" id="recherche" name="recherche" placeholder="Rechercher dans ECE Ebay... ">
		      </div> 
		      <ul class="nav navbar-nav navbar-right">
		        <div class="navbar-menu">
		          <a href="achat.php" class="navbar-menu-link">Achat</a>
		          <a href="vente.php" class="navbar-menu-link">Vente</a>
		          <a href="inscription.php" class="navbar-menu-link">Votre Compte</a>
		          <a href="" class="navbar-menu-link"><i class="fas fa-shopping-basket"></i> Panier</a>
		          <a href="plus.php" class="navbar-menu-link">Plus</a>
		        </div>
		      </ul>
		    </div>
		  </div>
		</nav>

		<header class="page-header header container-fluid">

				<div class="row">
					<div class="row-img">
						<a href="images/vente.jpg"><img src="images/vente.jpg"></a>
					</div>
					<div class="img-text">
						<p>Vendre <br> chez ECE Ebay </p>
					</div>
				</div>
				<br><br><br>
				<div class="titre-ventes">
					<p>Ventes en cours: </p>
				</div>
				<br><br><br>

				<div class="row-vente-en-cours">
					<div class="img-thumbnail">
						<a href="images/sac.jpg"><img src="images/sac.jpg"></a>
						<div class ="caption">
							Hermès <br>
							Sac Kelly 35, 2011  
						</div>
					</div>
					<div class="img-thumbnail">
						<a href="images/sac.jpg"><img src="images/sac.jpg"></a>
						<div class ="caption">
							Hermès <br>
							Sac Kelly 35, 2011 
						</div>
					</div>
					<div class="img-thumbnail">
						<a href="images/sac.jpg"><img src="images/sac.jpg"></a>
						<div class ="caption">
							Hermès <br>
							Sac Kelly 35, 2011 
						</div>
					</div>
					<div class="img-thumbnail">
						<a href="images/sac.jpg"><img src="images/sac.jpg"></a>
						<div class ="caption">
							Hermès <br>
							Sac Kelly 35, 2011 
						</div>
					</div>
					<div class="img-thumbnail">
						<a href="images/sac.jpg"><img src="images/sac.jpg"></a>
						<div class ="caption">
							Hermès <br>
							Sac Kelly 35, 2011 
						</div>
					</div>
				</div>
		</header>
		<header class="page-header header container-fluid">


				<div class="titre-ventes">
						<p>Ventes terminées: </p>
				</div>
				<br><br><br>
				<div class="row-vente-terminee">
					<div class="img-thumbnail">
						<a href="images/sac.jpg"><img src="images/sac.jpg"></a>
						<div class ="caption">
							Hermès <br>
							Sac Kelly 35, 2011  
						</div>
					</div>
					<div class="img-thumbnail">
						<a href="images/sac.jpg"><img src="images/sac.jpg"></a>
						<div class ="caption">
							Hermès <br>
							Sac Kelly 35, 2011 
						</div>
					</div>
					<div class="img-thumbnail">
						<a href="images/sac.jpg"><img src="images/sac.jpg"></a>
						<div class ="caption">
							Hermès <br>
							Sac Kelly 35, 2011 
						</div>
					</div>
					<div class="img-thumbnail">
						<a href="images/sac.jpg"><img src="images/sac.jpg"></a>
						<div class ="caption">
							Hermès <br>
							Sac Kelly 35, 2011 
						</div>
					</div>
					<div class="img-thumbnail">
						<a href="images/sac.jpg"><img src="images/sac.jpg"></a>
						<div class ="caption">
							Hermès <br>
							Sac Kelly 35, 2011 
						</div>
					</div>
				</div>
				<br><br><br>
				<a href="newitem.php"><button>Mettre un produit en vente</button></a>
		</header>
		<footer class="page-footer"> 
		<div class="container">
			<div class="footer-copyright text-center">&copy; 2020 Copyright | Droits d'auteurs: Wassim Sebbahi & Thomas Popielski & Louis Donikian TD02</div><!--text-center : modifier la typographie-->
		</div>
	</footer>


</body>
</html>