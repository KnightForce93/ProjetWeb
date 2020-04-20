<?php
echo '
<script type="text/javascript">   
  function al1() {             
   alert("Connectez vous sur un compte vendeur pour ajouter un nouveau produit.");      };
   function al2() {             
   alert("Connectez vous sur un compte acheteur pour acceder au panier.");      };
   function al3() {             
   alert("Connectez vous sur un compte admin pour acceder à la page administrateur.");      };
   </script> 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <a href="accueil.php"><img src="images/logo.png" width="80"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
                  <div class = "dropdown">
                    <a href="achat.php" class="bouton-dropdown" style="text-decoration:none;">Catégories</a>
                      <ul class="bouton-categorie-liste">
                         <li><a href="produitscategories.php?categorie=Ferrailles ou Trésors" style="text-decoration:none;">Ferrailles et Trésor</a></li>
                          <li><a href="produitscategories.php?categorie=Bon pour le musée" style="text-decoration:none;">Bon pour le musée</a></li>
                          <li><a href="produitscategories.php?categorie=Accessoires VIP" style="text-decoration:none;">Accessoire VIP</a></li>
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
                    <a href="achat.php" class="navbar-menu-link" style="text-decoration:none;">Achat</a>
                    ';
                    if($statut=="vendeur"){
                echo'    <a href="addproduct.php" class="navbar-menu-link" style="text-decoration:none;">Vendre</a>
                    ';} else{
                    echo'  <a href="#" class="navbar-menu-link" style="text-decoration:none;"><button onclick="al1()"> Vendre</button></a>';
                    }
                    if($statut=="vendeur"){
                 echo'   <a href="profilvendeur.php" class="navbar-menu-link" style="text-decoration:none;">Votre Compte</a>';
                  }
                   if($statut=="acheteur"){
                 echo'   <a href="profilacheteur.php" class="navbar-menu-link" style="text-decoration:none;">Votre Compte</a>';
                  }
                   if($statut=="admin"){
                 echo'   <a href="admin.php" class="navbar-menu-link" style="text-decoration:none;">Votre Compte</a>';
                  }
                    if($statut=="acheteur"){
                 echo'   <a href="panier.php" class="navbar-menu-link" style="text-decoration:none;"><i class="fas fa-shopping-basket"></i> Panier</a> 
                    <a> </a>';
                  } else{
                   echo' <a href="# class="navbar-menu-link" style="text-decoration:none;"><i class="fas fa-shopping-basket"></i><button onclick="al2()"> Panier</button></a> 
                    <a> </a>';
                  }
                  echo'
                    <div class = "dropdownplus">
                    <a href="achat.php" class="bouton-dropdownplus" style="text-decoration:none;">Plus</a>
                      <ul class="bouton-plus-liste">
                         <li><a href="" style="text-decoration:none;"><i class="fas fa-sign-out-alt"></i> Se déconnecter</a></li>
                     ';
                         if($statut=="admin"){
                     echo'     <li><a href="admin.php" style="text-decoration:none;">Admin</a></li>';
                        }else{
                       echo'   <li><a href="#" style="text-decoration:none;"><button onclick="al3()">Admin</button></a></li>';
                        }
                   echo'       <li><a href="plus.php" style="text-decoration:none;">Plus</a></li>
                        
                      </ul>
                  </div>
                  </div>
      </ul>
    </div>
  </div>
</nav>
';

?>