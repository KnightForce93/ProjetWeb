<!DOCTYPE html> 
<html> 
<head>  
	<title>Bienvenue chez EbayECE</title>  
	<meta charset="utf-8"> </head> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	

	<body>  
		<h2>Connectez-vous ou Inscrivez-vous</h2>  
		<div class="container">
        <div class="boutons">     
			 <a class="btn btn-primary" href="connexionW.html" role="button">Connexion</a>
       <a class="btn btn-primary" href="inscriptionW.html" role="button">Inscription</a>
     </div>
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
    </body>
</body> 
</html> 
 
 