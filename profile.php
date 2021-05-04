<?php 
include('session.php');
include_once('header.php');
 ?>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">profile</span>
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
        <div class="blog-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                     <?php 

            $username = $_SESSION['username']; 
            
            $query = "SELECT * FROM tbl_admin_login WHERE username = '$username'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);
            $user_id = $row['user_id'];

            $sql = "SELECT * FROM tbl_users WHERE user_id = '$user_id'";
            $results = mysqli_query($conn, $sql);

            while ($rows = mysqli_fetch_array($results)) { ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="hpanel blog-box responsive-mg-b-30">
                            <div class="panel-heading custom-blog-hd">
                                <div class="media clearfix">
                                    <a class="pull-left">
											 
										</a>
                                    <div class="media-body blog-std">
                                        <p>Email: <span class="font-bold"><?php echo $rows['email']; ?></span> </p>
                                        <p class="text-muted">Joined: <?php echo $row['created']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body blog-pra"> 
                               
                                <p> Firstname : <?php echo $rows['Firstname']; ?></p>
                                 <p> Lastname : <?php echo $rows['Lastname']; ?></p>
                                  <p> Phone : <?php echo $rows['phone']; ?></p> 
                            </div>
                            <div class="panel-footer">
                                <a href="password.php"> <span class="pull-right"><i class="fa fa-arrow-right"> </i>      Change Password</span>
                                <i class="fa fa-list"> </i> 
                            </div>
                        </div>
                    </div>
              <?php } ?>      
                </div>
                
                     
            </div>
        </div>
  <?php include_once('footer.php'); ?>