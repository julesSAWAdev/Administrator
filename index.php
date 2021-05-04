<?php
session_start();
include("connection.php");  
$msg = "";

if(isset($_POST["submit"])){

    if(empty($_POST["username"]) || empty($_POST["password"])){

        $msg = "Both fields are required.";

    }else{
        
        $username=$_POST['username'];
        $password=$_POST['password'];
         
        $query = "SELECT * FROM tbl_admin_login WHERE username='$username' and password='$password'";

        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         if(mysqli_num_rows($result) == 1){
        if($row['status'] == 0){
            $msg = "<div class='alert alert-danger alert-mg-b alert-success-style4 alert-st-bg3'>
                                <button type='button' class='close sucess-op' data-dismiss='alert' aria-label='Close'>
                                        <span class='icon-sc-cl' aria-hidden='true'>×</span>
                                    </button>
                                <i class='fa fa-times adminpro-danger-error admin-check-pro admin-check-pro-clr3' aria-hidden='true'></i>
                                <p><strong>Error!</strong> Account Deactivated contact system Admin</p>
                            </div>";
        }else{
            session_start();

            $_SESSION['username'] = $username; 
            
            $query = "SELECT * FROM tbl_admin_login WHERE username='$username'";
            $result = mysqli_query($conn, $query);

            if ($row = mysqli_fetch_array($result)) {
                $_SESSION['username'] = $row['username']; 
                $role = $row['roles'];

                if ($role == 'admin') {

                   echo "<script>window.location = 'dashboard.php'</script>";

                }else if ($role == 'spare') {

                   echo "<script>window.location = 'dashboard.php'</script>";
                    
                }else if ($role == 'electronics') {

                   echo "<script>window.location = 'dashboard.php'</script>";
                    
                }else if ($role == 'rental') {

                   echo "<script>window.location = 'dashboard.php'</script>";
                    
                }else if ($role == 'garage') {

                   echo "<script>window.location = 'dashboard.php'</script>";
                    
                }else{
                    echo "<script>window.location = 'dashboard.php'</script>";
                }
                
            }

        }
    }
        else{
            $msg = "<div class='alert alert-danger alert-mg-b alert-success-style4 alert-st-bg3'>
                                <button type='button' class='close sucess-op' data-dismiss='alert' aria-label='Close'>
                                        <span class='icon-sc-cl' aria-hidden='true'>×</span>
                                    </button>
                                <i class='fa fa-times adminpro-danger-error admin-check-pro admin-check-pro-clr3' aria-hidden='true'></i>
                                <p><strong>Error!</strong> Unknown username or password</p>
                            </div>";
        }
    }
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GOFIX v1.0| Login </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

     
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    
                  <!--  <img src="img/ico.png" alt="Logo">-->
                    
                    
                    <h3 style="margin-top: 200px;">GoFix Admin Panel</h3> 
                </div>
                <div class="hpanel">
                    <div class='message'>
                        <?php if ($msg != "") echo $msg . "<br>" ?>
                    </div>
                    <div class="panel-body">
                        <form action="index.php" method="POST" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                                <span class="help-block small">username</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">password</span>
                            </div>
                            
                            <button class="btn btn-success btn-block loginbtn" name="submit">Login</button>
                           
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p>Copyright &copy; 2020 All rights reserved. Developed by <a href="">Sawa Developers</a></p>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>