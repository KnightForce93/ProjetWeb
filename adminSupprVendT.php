<?php include("testutilisateur.php"); 
$V_id = isset($_POST["V_id"])? $_POST["V_id"] : "";  

if (isset($_POST['submitSV'])) { 
        $sql = "SELECT * FROM vendeur";       
        $sql .= " WHERE id LIKE '%$V_id%'";   

        $result = mysqli_query($db_handle, $sql); 
        while ($data = mysqli_fetch_assoc($result)) {
            $user_id=$data['user_id'];
            $sql1 = "DELETE FROM utilisateur";
            $sql1 .= " WHERE id LIKE '%$user_id%'";
            $result1 = mysqli_query($db_handle, $sql1);

            $sql2 = "SELECT * FROM item";
            $sql2 .= " WHERE v_id LIKE '%$V_id%'";
            $result2 = mysqli_query($db_handle, $sql2);
            while ($data2 = mysqli_fetch_assoc($result2)) {
            	$sql21 = "DELETE FROM item";
	            $sql21 .= " WHERE v_id LIKE '%$V_id%'";
	            $result21 = mysqli_query($db_handle, $sql21);
            }
           
       }
        $sql3 = "DELETE FROM vendeur";
            $sql3 .= " WHERE id LIKE '%$V_id%'";
            $result3 = mysqli_query($db_handle, $sql3);
        header("Location: admin.php");
        mysqli_close($db_handle);  
        exit; 
}
?> 