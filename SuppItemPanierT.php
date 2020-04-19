<?php 

include("Connexionbdd.php");
$id = isset($_POST["id"])? $_POST["id"] : "";  

    if (isset($_POST['submit'])) { 
    		$sql = "SELECT * FROM panier";       
            $sql .= " WHERE id LIKE '%$id%'";   
            $result = mysqli_query($db_handle, $sql); 
            while ($data = mysqli_fetch_assoc($result))
            {
            	$item_id=$data['item_id'];
            	$sql1 = "SELECT * FROM item";       
           		$sql1 .= " WHERE id LIKE '%$item_id%'";   
            	$result1 = mysqli_query($db_handle, $sql1); 
            	while ($data1 = mysqli_fetch_assoc($result1))
            	{
            		$categorie=$data1['categorie_achat'];
            		if($categorie=="AchatImmediat")
            		{
            			 $sql2 = "DELETE FROM panier";       
			            $sql2 .= " WHERE id LIKE '%$id%'";   
			            $result2 = mysqli_query($db_handle, $sql2); 

            		}
            	}
            }
            header("Location: panier.php");
            mysqli_close($db_handle); 
            exit; 
    }
?>