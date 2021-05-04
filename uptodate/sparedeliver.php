<?php
include('connection.php');
echo $id = $_GET['id'];

$query = "UPDATE spare_request_tbl SET status ='1' WHERE request_id ='$id'";
$result = mysqli_query($conn, $query); 

if ($result) {
	 echo "<script>window.location = 'sparerequests.php'</script>";
}
?>