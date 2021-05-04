<?php
include('header.php');
$msg = "";

 $username = $_GET['id']; 
 $query = "DELETE FROM tbl_electronics WHERE spareid = '$username'";
  $result = mysqli_query($conn, $query);
  if ($result) {
  	  echo "<script>window.location = 'electronicsproducts.php'</script>";
        }else{
        	 $msg = "<div class='alert alert-icon alert-white alert-warning alert-dismissible fade in' role='alert'>
	<button type='button' class='close' data-dismiss='alert'
	aria-label='Close'>
	<span aria-hidden='true'>&times;</span>
	</button>
	<i class='mdi mdi-alert'></i>
	<strong>Error !</strong> Unkown Error occured!
	</div>";
        
  }
?>