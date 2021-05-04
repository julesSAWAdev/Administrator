<?php
include('connection.php');
 $reqID = $_GET['id']; 
             
           echo $query = "UPDATE tbl_requests SET status = '1',status_def = 'Canceled' WHERE req_id ='$reqID'";
            $result = mysqli_query($conn, $query);

            if ($result) {
            	 echo "<script>window.location = 'dashboard.php'</script>";
            }
        

?>