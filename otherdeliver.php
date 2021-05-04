<?php
include('connection.php');
echo $id = $_GET['id'];

$query = "UPDATE other_request_tbl SET status ='1' WHERE request_id ='$id'";
$result = mysqli_query($conn, $query); 

if ($result) {
	 echo "<script>window.location = 'otherrequest.php'</script>";
}
?>