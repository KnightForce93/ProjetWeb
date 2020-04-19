<?php 

include("Connexionbdd.php");
$item_id = isset($_POST["item__id"])? $_POST["item_id"] : "";  

if (isset($_POST['submitSI'])) { 
           
            $sql = "DELETE FROM meilleuroffre";
            $sql .= " WHERE item_id LIKE '%$item_id%'";
            $result = mysqli_query($db_handle, $sql);

            
            $sql = "SELECT * FROM enchere";
            $sql .= " WHERE item_id LIKE '%$item_id%'";
            $result = mysqli_query($db_handle, $sql);
            while ($data = mysqli_fetch_assoc($result)) {
                $sql21 = "DELETE FROM offreenchere";
                $sql21 .= " WHERE enchere_id ='".$data['id']."'";
                $result21 = mysqli_query($db_handle, $sql21);
            }

            $sql = "DELETE FROM enchere";
            $sql .= " WHERE item_id LIKE '%$item_id%'";
            $result = mysqli_query($db_handle, $sql);
          
       
         $sql= "DELETE FROM item";
            $sql .= " WHERE id LIKE '%$item_id%'";
            $result = mysqli_query($db_handle, $sql);

        header("Location: adminV3.php");
        mysqli_close($db_handle);  
        exit; 
}
?> 