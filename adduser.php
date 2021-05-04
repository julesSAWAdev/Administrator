<?php
include('header.php');
$msg = "";
if(isset($_POST["submit"])){

    if(empty($_POST["firstname"]) || empty($_POST["lastname"]) || empty($_POST["email"]) || empty($_POST["address"]) || empty($_POST["phone"]) || empty($_POST["dob"]) || empty($_POST["serno"]) || empty($_POST["roles"]) || empty($_POST["plstation"])){
        $msg = "<div class='alert alert-icon alert-white alert-warning alert-dismissible fade in' role='alert'>
    <button type='button' class='close' data-dismiss='alert'
    aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    <i class='mdi mdi-alert'></i>
    <strong>Error !</strong> Please fill all the fields.
    </div>";

    }else{



         $firstname=$_POST['firstname'];
         $lastname=$_POST['lastname'];
         $email=$_POST['email'];
         $address=$_POST['address'];
         $phone=$_POST['phone'];
         $dob=$_POST['dob'];
         $serno=$_POST['serno'];
         $roles=$_POST['roles'];
         $plstation=$_POST['plstation'];
         $password='123RNPmis';
         $query = "SELECT * FROM tbl_users WHERE email = '$email'";  
         $result = mysqli_query($conn, $query);
         if (mysqli_num_rows($result) > 0) {
             $msg = "<div class='alert alert-icon alert-white alert-warning alert-dismissible fade in' role='alert'>
    <button type='button' class='close' data-dismiss='alert'
    aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    <i class='mdi mdi-alert'></i>
    <strong>Error !</strong> User Exist with the email.
    </div>";
         }else{
        $que = "INSERT INTO `tbl_users`(firstname,lastname,email,password,address,phone,age,service_no,roles,userStatus,policeStatID) VALUES ('$firstname','$lastname','$email','$password','$address','$phone','$dob','$serno','$roles','1','$plstation')"; 
        $res = mysqli_query($conn,$que);
        if ($res) {
              $msg = "<div class='alert alert-icon alert-white alert-warning alert-dismissible fade in' role='alert'>
    <button type='button' class='close' data-dismiss='alert'
    aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    <i class='mdi mdi-alert'></i>
    <strong>Success !</strong> Saved Successfully!
    </div>";
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
        
        } 
        }
}
?>

            <!-- Mobile Menu end -->
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
                                            <li><span class="bread-blod">Add user</span>
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
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                     <form action="adduser.php" method="POST">
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Firstname</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" name="firstname" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Lastname</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" name="lastname" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Email</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="email" name="email" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Address</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" name="address" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Phone</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" name="phone" class="form-control required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Date of Birth</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="date" name="dob" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Service No</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="serno" placeholder="Service Number" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Roles</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                               <select name="roles" class="form-control">
                                                                   <option value="admin"> Admin </option>
                                                                   <option value="officer"> Officer </option>
                                                                   <option value="dcp"> Dcp </option>
                                                               </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group-inner">
                                                        <div class="row">

                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                                                                <label class="login2 pull-right pull-right-pro">Police station</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                               <select name="plstation" class="form-control">
                                                                <?php  
                                                                $sql = "SELECT * FROM pol_stations"; 
                                                                $result = mysqli_query($conn, $sql);
                                                               while ($row = mysqli_fetch_array($result)) { ?> 
                                                                   <option value="<?php echo $row['id']; ?>"> <?php echo $row['names']; ?> </option>
                                                                   <?php } ?>  
                                                               </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     
                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3"></div>
                                                                <div class="col-lg-9">
                                                                    <div class="login-horizental cancel-wp pull-left">    
                                                                        <button class="btn btn-sm btn-primary login-submit-cs" name = "submit" type="submit">Add user</button>
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
        
        
       <?php include('footer.php'); ?>