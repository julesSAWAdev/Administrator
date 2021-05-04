<?php
include_once 'header.php';
$msg = "";

if (isset($_POST['submit'])) {
$oldPass = $_POST['oldPass'];
$newPass = $_POST['newPass'];
$confirmPass = $_POST['confirmPass'];

if (empty($oldPass) || empty($newPass) || empty($confirmPass)) {

	echo "<div class='alert alert-icon alert-white alert-warning alert-dismissible fade in' role='alert'>
	<button type='button' class='close' data-dismiss='alert'
	aria-label='Close'>
	<span aria-hidden='true'>&times;</span>
	</button>
	<i class='mdi mdi-alert'></i>
	<strong>Error !</strong> Please fill all fields.
	</div>";
	
}else{

	 $userID = $_SESSION['username'];

	$oldPass = $_POST['oldPass'];
	$newPass = $_POST['newPass'];
	$confirmPass = $_POST['confirmPass'];

	$query = "SELECT * FROM tbl_admin_login WHERE username = '$userID'";
	$result = mysqli_query($conn, $query);

	while ($row = mysqli_fetch_array($result)) {
		
		$dbPass = $row['password'];
	}

	if ($oldPass != $dbPass) {
		
		$msg = "<div class='alert alert-icon alert-white alert-danger alert-dismissible fade in' role='alert'>
		<button type='button' class='close' data-dismiss='alert'
		aria-label='Close'>
		<span aria-hidden='true'>&times;</span>
		</button>
		<i class='mdi mdi-block-helper'></i>
		<strong>Error !</strong> Wrong Old Password.
		</div>";

	}else{

		if ($newPass != $confirmPass) {
			
			$msg =  "<div class='alert alert-icon alert-white alert-danger alert-dismissible fade in' role='alert'>
			<button type='button' class='close' data-dismiss='alert'
			aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
			</button>
			<i class='mdi mdi-information'></i>
			<strong>Error !</strong> Password Not Matching.
			</div>";

		}else{

			$sql = "UPDATE tbl_admin_login SET password = '$newPass' WHERE username = '$userID'";
			$res = mysqli_query($conn, $sql);

			if ($res) {

				$msg = "<div class='alert alert-icon alert-white alert-success alert-dismissible fade in' role='alert'>
				<button type='button' class='close' data-dismiss='alert'
				aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				<i class='mdi mdi-check-all'></i>
				<strong>Success !</strong> Password Updated Succesfully.
				</div>";
				
				echo "<script>window.location = 'index.php'</script>";
				
			}
		}
	}
}

}
?>
<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Change Password</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    	<div class='message'>
                        <?php if ($msg != "") echo $msg . "<br>" ?>
                    </div>
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                     <form action="password.php" method="POST">
                                                   
                                                   
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Old password</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="oldPass" placeholder="Old Password" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                      <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">New password</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="newPass" placeholder="New Password" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Retype password</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="confirmPass" placeholder="Re type new Pasword" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-9"></div>
                                                                <div class="col-lg-3">
                                                                    <div class="login-horizental cancel-wp pull-right">    
                                                                        
                                                                        <input type="submit" name="submit" value="Update Password " class="btn btn-custon-rounded-four btn-primary">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     
                                               
                                </div>
                                  
                                                     
                                                    
                                                </form>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
<?php
include('footer.php');
?>