<!DOCTYPE html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="connexion.css"> 
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="Firstpage.css">
        <!-- lien vers font awesome, library de emoticone -->
        <script src="https://kit.fontawesome.com/49d3300cf5.js" crossorigin="anonymous"></script> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Login</title>
    <script type="text/javascript">
        $(document).ready(function(){ 
                    $('.header').height($(window).height());
                });
    </script>
</head>
<body>
    <nav class="navbar">
               <img src="images/logo.png" width="80">
    </nav>

    <header class="page-header header container-fluid">
        <br><br><br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Bienvenue sur EbayECE!</div>

                    <div class="card-body">
                        <p>Connectez-vous ou inscrivez-vous</p>
                <a class="btn btn-primary" href="connexion.html" role="button">Connexion</a>
                <a class="btn btn-primary" href="inscription.html" role="button">Inscription</a>
     
        <?php
        if(filter_has_var(INPUT_GET,'log')){
         $log=$_GET['log'];
         if($log == "existant"){
         echo "
         <div class='message'>
          <p> Un compte existe déjà, veuillez vous connecter</p>
        </div>
        ";
       } else if ($log =="inexistant") {
       echo "
         <div class='message'>
          <p> Aucun compte n'existe, veuillez vous creer un compte</p>
        </div>
        ";
     }
   }
     ?>  
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