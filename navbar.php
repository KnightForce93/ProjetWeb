<?php
echo '
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="accueil.php"><img src="images/logo.png" width="80"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
                  <div class = "dropdown">
                    <a href="achat.php" class="bouton-dropdown">Catégories</a>
                      <ul class="bouton-categorie-liste">
                         <li><a href="produitscategories.php?categorie=Ferrailles ou Trésors">Férrailles et Trésor</a></li>
                          <li><a href="produitscategories.php?categorie=Bon pour le musée">Bon pour le musée</a></li>
                          <li><a href="produitscategories.php?categorie=Accessoires VIP">Accessoire VIP</a></li>
                      </ul>
                  </div>
      </ul>
      <form class="navbar-form" role="search">
         <div class="nav navbar-nav">
            <input type="search" id="recherche" name="recherche" placeholder="Rechercher dans ECE Ebay... ">
          </div>       
      </form>
     <ul class="nav navbar-nav navbar-right">
                  <div class="navbar-menu">
                    <a href="achat.php" class="navbar-menu-link">Achat</a>
                    <a href="addproduct.php" class="navbar-menu-link">Vendre</a>
                    <a href="profilvendeur.php" class="navbar-menu-link">Votre Compte</a>
                    <a href="panier.php" class="navbar-menu-link"><i class="fas fa-shopping-basket"></i> Panier</a>
                    <a href="plus.php" class="navbar-menu-link">Plus</a>
                     <a href="admin.php" class="navbar-menu-link">Admin</a>
                      <a href="Firstpage.php" class="navbar-menu-link">Se deconnecter</a>
                  </div>
      </ul>
    </div>
  </div>
</nav>
'
?>