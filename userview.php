 <?php 
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
                                            <li><span class="bread-blod">View</span>
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

            $username = $_GET['id']; 
            
            $query = "SELECT * FROM tbl_users WHERE user_id = '$username'";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) { ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="hpanel blog-box responsive-mg-b-30">
                             
                            <div class="panel-body blog-pra"> 
                               
                                <p> First Name : <?php echo $row['firstname']?></p>
                                 <p> Last Name : <?php echo $row['lastname']; ?></p>
                                  <p> Email : <?php echo $row['email']; ?></p>
                                  <p> Address : <?php echo $row['address']; ?></p>
                                 <p> Date of Birth : <?php echo $row['age']; ?></p>
                                  <p> Service Number  : <?php echo $row['service_no']; ?></p>
                                    <p> Role : <?php echo $row['roles']; ?></p>
                                 <p> Police Station: <?php $id = $row['policeStatID'];  $sqll = "SELECT * FROM pol_stations WHERE id = '$id'"; 
                        $resultt = mysqli_query($conn, $sqll); $roww = mysqli_fetch_array($resultt); echo $roww['names']; ?></p>
                                   
                            </div>
                            <div class="panel-footer">
                                <a href="useredit.php?id=<?php echo $row['user_id']; ?>"><span class="pull-right"><i class="fa fa-arrow-right"> </i> Edit</span></a>
                                <i class="fa fa-list"> </i> 
                            </div>
                        </div>
                    </div>
              <?php } ?>      
                </div>
                
                     
            </div>
        </div>
        
  <?php include_once('footer.php'); ?>