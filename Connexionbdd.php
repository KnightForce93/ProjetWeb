<?php

$database = "projetweb"; 
 //connectez-vous de votre BDD  
$db_handle = mysqli_connect('localhost', 'root', '');  
$db_found = mysqli_select_db($db_handle, $database); 

if($db_handle)//Si j'arrive à me connecter avec ses paramêtres
{ if(!$db_found){//Puis à cette base de données
 die("Echec");//Ou impossible de se connecter à la base :( (vous êtes connectez au serveur mais impossible //de sélectionner la base $sql_db)
 mysql_close($id);
}

}else{
die("Echec complet");//Ou encore pire ! L'échec complet, c'est que vous n'êtes même pas arriver à vous connecter !
}

?>