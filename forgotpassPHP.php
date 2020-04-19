<?php
 
include("Connexionbdd.php");
 //récupérer les données venant de formulaire  
$email = isset($_POST["email"])? $_POST["email"] : "";  
//verifie si l'utilisateur n'existe pas déja
if (isset($_POST['submit'])) {  
	if ($db_found) {  
		 $sql = "SELECT * FROM utilisateur";       
 	    $sql .= " WHERE email LIKE '%$email%'";  
 	    $result = mysqli_query($db_handle, $sql); 
 	    if (mysqli_num_rows($result) == 0) {     
			header("Location: Firstpage.php?log=inexistant");
			mysqli_close($db_handle); 
			exit;
 		}
 		else {
 			while ($data = mysqli_fetch_assoc($result)) {   

			     $to = $email;
			     $subject = 'Confidentiel : votre mot de passe ECE eBay';
			     $message = 'Bonjour !' . "\n\n" . 'Voici votre mot de passe : ' . $data['password'] . "\n\n" . 'L\'équipe ECE Ebay.';
			     $headers = 'From: noreply@eceebay.com' . "\r\n" .
			     'Reply-To: noreply@eceebay.com' . "\r\n";
			     // $ok=mail($to, $subject, $message, $headers);
			     mail($to, $subject, $message, $headers);
			     // if($ok==true)
			     // 	{echo "mail envoyé";}
			     // if($ok==false)
			     // 	{echo "mail echec";}
			     // echo "ok2";
			}
			header("Location: connexion.html");
			mysqli_close($db_handle);
			exit;
		}
	}
}
else {    
	echo "Database not found";   
}  
?>