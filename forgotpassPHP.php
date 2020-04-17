<?php
 
include("Connexionbdd.php");
 //récupérer les données venant de formulaire  
$email = isset($_POST["email"])? $_POST["email"] : "";  
echo "ok1";
//verifie si l'utilisateur n'existe pas déja
if (isset($_POST['submit'])) {  
echo "ok1";
	if ($db_found) {  
		echo "ok1";
		 $sql = "SELECT * FROM utilisateur";       
 	    $sql .= " WHERE email LIKE '%$email%'";  
 	    $result = mysqli_query($db_handle, $sql); 
 	    if (mysqli_num_rows($result) == 0) {     
			echo "user not found";
			mysqli_close($db_handle); 
 		}
 		else {
 			while ($data = mysqli_fetch_assoc($result)) {   
			     $to      = $email;
			     $subject = 'Confidentiel : votre mot de passe ECE eBay';
			     $message = 'Bonjour !\n\nVoici votre mot de passe' . $data['password'] . ;
			     $headers = 'From: noreply@eceebay.com' . "\r\n" .
			     'Reply-To: noreply@eceebay.com' . "\r\n" .
			     'X-Mailer: PHP/' . phpversion();
			     $ok=mail($to, $subject, $message, $headers);
			     if($ok==true)
			     	{echo "mail envoyé";}
			     if($ok==false)
			     	{echo "mail echec";}
			     echo "ok2";
			}
			mysqli_close($db_handle);
		}
	}
}
else {    
	echo "Database not found";   
}  
?>