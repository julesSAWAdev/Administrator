<?php
include('connection.php');
 $shopid = $_GET['shopid']; 

 $origin =$_GET['origin'];

 if ($origin == "web") {
 	$sql = "SELECT * FROM tbl_shops WHERE shop_id='$shopid'";
 			$res = $result = mysqli_query($conn, $sql);
 			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

 			$base = "GofixShop";
 			$shop_id = $row['shop_id'];
 			$user_id = $row['user_id'];
 			$origin = $row['origin'];
 			$username = $base.$shopid.$user_id.$origin;

 			$insert = "INSERT INTO tbl_admin_login(username,password,roles,user_id,status,shopid,origin) VALUES('$username','GofixShop','spare','$user_id','1','$shop_id','$origin')";
 			$insres = mysqli_query($conn, $insert);

 			if($insres){

            $query = "UPDATE tbl_shops SET status = '1' WHERE shop_id='$shopid'";
            $result = mysqli_query($conn, $query);

            if ($result) {
            	 echo "<script>window.location = 'shops.php'</script>";
            }
        }
 }else{
 	$sql = "SELECT * FROM tbl_shops WHERE shop_id='$shopid'";
 			$res = $result = mysqli_query($conn, $sql);
 			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

 			$base = "GofixShop";
 			$shop_id = $row['shop_id'];
 			$user_id = $row['user_id'];
 			$origin = $row['origin'];
 			$username = $base.$shopid.$user_id.$origin;

 			$insert = "INSERT INTO tbl_admin_login(username,password,roles,user_id,status,shopid,origin) VALUES('$username','GofixShop','spare','$user_id','1','$shop_id','$origin')";
 			$insres = mysqli_query($conn, $insert);

 			if($insres){

            $query = "UPDATE tbl_shops SET status = '1' WHERE shop_id='$shopid'";
            $result = mysqli_query($conn, $query);

            if ($result) {
            	 echo "<script>window.location = 'shops.php'</script>";
            }
        }
 }
            
 			

?>