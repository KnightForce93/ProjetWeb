<?php 

include("Connexionbdd.php");
$id = isset($_POST["id"])? $_POST["id"] : "";  

if (isset($_POST['submit'])) { 
        $sql = "SELECT * FROM vendeur";       
        $sql .= " WHERE id LIKE '%$id%'";   

        $result = mysqli_query($db_handle, $sql); 
        while ($data = mysqli_fetch_assoc($result)) {
            $user_id=$data['user_id'];
            $sql1 = "DELETE FROM utilisateur";
            $sql1 .= " WHERE id LIKE '%$user_id%'";
            $result1 = mysqli_query($db_handle, $sql1);

            $sql2 = "SELECT * FROM item";
            $sql2 .= " WHERE v_id LIKE '%$id%'";
            $result2 = mysqli_query($db_handle, $sql2);
            while ($data2 = mysqli_fetch_assoc($result2)) {
            	$sql21 = "DELETE FROM item";
	            $sql21 .= " WHERE v_id LIKE '%$id%'";
	            $result21 = mysqli_query($db_handle, $sql21);
            }
            $sql3 = "DELETE FROM vendeur";
            $sql3 .= " WHERE id LIKE '%$id%'";
            $result3 = mysqli_query($db_handle, $sql3);
        }
        header("Location: adminV2.php");
        mysqli_close($db_handle);  
        exit; 
}
?> 