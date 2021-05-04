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
            
            $query = "SELECT * FROM tbl_cases WHERE case_id = '$username'";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) { ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="hpanel blog-box responsive-mg-b-30">
                             
                            <div class="panel-body blog-pra"> 
                               
                                <p> Full Names : <?php echo $row['names']; ?></p>
                                 <p> Father's Name : <?php echo $row['father']; ?></p>
                                  <p> Mother's Name : <?php echo $row['mother']; ?></p>
                                  <p> Date of Birth : <?php echo $row['dob']; ?></p>
                                 <p> Birth Place : <?php echo $row['birth']; ?></p>
                                  <p> Residence  : <?php echo $row['residence']; ?></p>
                                    <p> Sex : <?php echo $row['sex']; ?></p>
                                 <p> Nationality: <?php echo $row['nationality']; ?></p>
                                  <p> Marital status : <?php echo $row['martial']; ?></p>
                                  <p> National Id/Passport : <?php echo $row['nid']; ?></p>
                                 <p> Phone : <?php echo $row['phone']; ?></p>
                                  <p style="color: blue;"> Case Description  : <?php echo $row['crimedesc']; ?></p>
                                  <p> Witness contacts : <?php echo $row['witness']; ?></p>
                                   <p> Case filing date : <?php echo $row['created']; ?></p>
                            </div>
                            <div class="panel-footer">
                                <a href="caseedit.php?id=<?php echo $row['case_id']; ?>"><span class="pull-right"><i class="fa fa-arrow-right"> </i> Edit</span></a>
                                <i class="fa fa-list"> </i> 
                            </div>
                        </div>
                    </div>
              <?php } ?>      
                </div>
                
                     
            </div>
        </div>
  <?php include_once('footer.php'); ?>