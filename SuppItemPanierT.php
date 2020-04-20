<?php include("testutilisateur.php"); 
$item_id = isset($_POST["item_id"])? $_POST["item_id"] : "";  

    if (isset($_POST['submit'])) { 
    	
            			$sql2 = "DELETE FROM panier";       
			            $sql2 .= " WHERE item_id LIKE '%$item_id%'";   
			            $result2 = mysqli_query($db_handle, $sql2); 

            // 		}
            // 	}
            // }
            header("Location: panier.php");
            mysqli_close($db_handle); 
            exit; 
    }
?>