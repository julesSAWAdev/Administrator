<?php
include('connection.php');
 $shopid = $_GET['shopid']; 
            
 			$sql = "SELECT * FROM tbl_garage WHERE id = '$shopid'";
 			$res = $result = mysqli_query($conn, $sql);
 			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

 			$base = "GofixGarage";
 			$shop_id = $row['id'];
 			$user_id = $row['user_id'];
 			$username = $base.$shopid.$user_id;

 			$insert = "INSERT INTO tbl_admin_login(username,password,roles,user_id,status,shopid) VALUES('$username','GofixGarage','garage','$user_id','1','$shop_id')";
 			$insres = mysqli_query($conn, $insert);

 			if($insres){

            $query = "UPDATE tbl_garage SET status = '1' WHERE id='$shopid'";
            $result = mysqli_query($conn, $query);

            if ($result) {
            	 echo "<script>window.location = 'garages.php'</script>";
            }
        }

?>