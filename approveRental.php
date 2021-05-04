<?php
include('connection.php');
 $shopid = $_GET['shopid']; 
            
            $sql = "SELECT * FROM tbl_rental_co WHERE shop_id='$shopid'";
 			$res = $result = mysqli_query($conn, $sql);
 			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

 			$base = "GofixRental";
 			$shop_id = $row['shop_id'];
 			$user_id = $row['user_id'];
 			$username = $base.$shopid.$user_id;

 			$insert = "INSERT INTO tbl_admin_login(username,password,roles,user_id,status) VALUES('$username','GofixRental','rental','$user_id','1')";
 			$insres = mysqli_query($conn, $insert);

 			if ($insres){


            $query = "UPDATE tbl_rental_co SET status = '1' WHERE shop_id='$shopid'";
            $result = mysqli_query($conn, $query);

            if ($result) {
            	 echo "<script>window.location = 'carerental.php'</script>";
            }
        }

?>