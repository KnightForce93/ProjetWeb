<!DOCTYPE html> 
<html>
<head>
        <title>ECE Ebay</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        
        <link rel="stylesheet" type="text/css" href="navbar.css">
        <link rel="stylesheet" type="text/css" href="addproduct.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="header.css">
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
</head> 

<body> 
    <?php include("navbar.php"); ?>

    <header class="header">
        <br><br><br>
    <main class="my-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">Entrez les informations de votre produit</div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" name="my-form" action="addproductT.php" method="post">
                                <fieldset>

                                <div class="form-group row">
                                    <label for="nom" class="col-sm-4 col-form-label text-sm-right">Nom du produit :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="nom">
                                    </div>
                                </div>

                                  <div class="form-group row">
                                     <label for="categorieitem" class="col-sm-4 col-form-label text-sm-right">Catégorie du produit :</label>
                                 <div class="col-sm-6">
                                <select name="categorieitem"> 
                            <option value ="Ferrailles ou Trésors">Ferraille ou Trésor </option> 
                            <option value ="Bon pour le musée">Bon pour le musée </option> 
                            <option value ="Accessoires VIP">Accessoire VIP</option> 
                            </select>
                           </div>
                          </div>

                                <div class="form-group row">
                                    <label for="description" class="col-sm-4 col-form-label text-sm-right">Description :</label>
                                    <div class="col-sm-6">
                                       <textarea style="width:100%" placeholder="Points positifs/négatifs" name="description"></textarea>
                                    </div>
                                </div>
                            <div class="form-group row">
                                    <label for="categoriedachat" class="col-sm-4 col-form-label text-sù-right">Catégorie d'achat :</label>
                           <div class="col-sm-6">
                        <select name="categoriedachat"> 
                        <option value ="enchere">Enchère </option> 
                        <option value ="bestoffer">Meilleure offre </option> 
                        <option value ="achat">Achat immédiat </option> 
                    </select>
                </div>
            </div>
                                            <div class="form-group row" >
                                   <label for="prixmin" class="col-sm-4 col-form-label text-sm-right">Prix ferme pour cette catégorie :</label>
                   <div class="col-sm-6">
                    <input type="text" name="prixmin" placeholder="en €">
                </div>
            </div>

                 <div class="form-group row">
                     <label for="photo1" class="col-sm-4 col-form-label text-sm-right">Choisissez photo1</label>
                   <div class="col-sm-6">
                     <input type="file" class="form-control-file" name="photo1">
                 </div>
             </div>
                  <div class="form-group row">
                     <label for="photo2" class="col-sm-4 col-form-label text-sm-right">Choisissez photo2</label>
                     <div class="col-sm-6">
                     <input type="file" class="form-control-file" name="photo2">
                 </div>
             </div>
                  <div class="form-group row">
                     <label for="photo3" class="col-sm-4 col-form-label text-sm-right">Choisissez photo3</label>
                     <div class="col-sm-6">
                     <input type="file" class="form-control-file" name="photo3">
                 </div>
             </div>
                  <div class="form-group row">
                     <label for="video" class="col-sm-4 col-form-label text-sm-right">Choisissez une video</label>
                     <div class="col-sm-6">
                     <input type="file" class="form-control-file" name="video">
                 </div>
                </div>
                         <div class="col-sm-6 offset-sm-4">
                        <input type="submit" value="Ajout du produit" class ="btn btn-primary" name="submit">
                                </div>
                               </fieldset>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</main>
</header>

     <footer class="page-footer"> 
        <div class="container">
            <div class="footer-copyright text-center">&copy; 2020 Copyright | Droits d'auteurs: Wassim Sebbahi & Thomas Popielski & Louis Donikian TD02</div><!--text-center : modifier la typographie-->
        </div>
    </footer>
</body>
</html>