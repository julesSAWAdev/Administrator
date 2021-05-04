<?php

include_once('session.php');
include_once('connection.php');

 $username = $_SESSION['username'];
$query = "SELECT * FROM tbl_users  WHERE email = '$username'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
 $user_id = $row['user_id'];
$state_id = $_GET['id']; 
 $date = date("Y/m/d");

 $queryy = "UPDATE statements SET stati = 'released',released_by = '$user_id',release_date = '$date' WHERE state_id = '$state_id'";
$resultt = mysqli_query($conn, $queryy);                                     
    if ($resultt) {
       echo "<script>window.location = 'release.php'</script>";
       }                                    
?>