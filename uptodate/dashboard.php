<?php
include('header.php');
?>

            <!-- Mobile Menu end -->
            <?php 

            $username = $_SESSION['username']; 
            
            $query = "SELECT * FROM tbl_admin_login WHERE username = '$username'";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) {

             if ($row['roles'] == 'spare') {?>
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
                                            <li><a href="#">Dashboard</a>
                                            </li>
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
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>My products</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green" hidden>100% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <?php 
                            $username = $_SESSION['username']; 
                            $sql = "SELECT * FROM tbl_admin_login WHERE username='$username'";
                            $res = $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                            $shop_id = $row['shopid'];

                            $sql1 = "SELECT * FROM web_products WHERE shopid = '$shop_id'";

                            if ($ress = mysqli_query($conn, $sql1)) {

                                $procount = mysqli_num_rows($ress); ?>
                               <h2 class="text-right no-margin"> <?php echo $procount; ?></h2>

                            <?php } ?>
                                     
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Requests</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red" hidden>100% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                         <?php 

                             $username = $_SESSION['username']; 
                            $sql = "SELECT * FROM tbl_admin_login WHERE username='$username'";
                            $res = $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                            $shop_id = $row['shopid'];

                            $sql1 = "SELECT * FROM spare_request_tbl WHERE shop_id = '$shop_id'";

                            if ($ress = mysqli_query($conn, $sql1)) {

                                $procount = mysqli_num_rows($ress); ?>
                               <h2 class="text-right no-margin"> <?php echo $procount; ?></h2>

                            <?php } ?>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div>
                            </div>
                        </div>

                        <div class="product-sales-area mg-tb-30">
                        <div class="container-fluid">
                        <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <a href="new_spareproduct.php"><button type="button" class="btn btn-lg btn-primary pull-right"><i class="fa fa-plus adminpro-home-admin" aria-hidden="true"></i> Add new product</button></a>
                     </div>
                        
                    <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
               <!-- <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <a href="new_case.php"><button type="button" class="btn btn-lg btn-primary pull-right"><i class="fa fa-plus adminpro-home-admin" aria-hidden="true"></i> New Case</button></a>
                </div>-->
                
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br>
                       <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1 style="text-align: left">New <span class="table-project-n">Requests</span> </h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar1">
                                        <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar1">
                                        <thead>
                                            <tr>
                                               <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="Request">Request ID</th>
                                                <th data-field="Spare" >Spare</th>
                                                <th data-field="name" >Requester name</th>
                                                <th data-field="phone" >Requester phone</th>
                                                <th data-field="Quantity" >Quantity</th> 
                                                <th data-field="Total" >Total</th> 
                                                <th data-field="Date">Date</th>
                                                <th data-field="Status">Status</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                           $username = $_SESSION['username']; 
                                        $sql = "SELECT * FROM tbl_admin_login WHERE username='$username'";
                                        $res = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_array($res,MYSQLI_ASSOC);

                                          $shop_id = $row['shopid'];


                                              $sql1 = "SELECT * FROM spare_request_tbl WHERE shop_id = '$shop_id' AND status ='0' ORDER BY request_id DESC"; 
                                               $result = mysqli_query($conn, $sql1);
                                                while ($roww = mysqli_fetch_array($result)) { ?>              
                                            <tr>
                                                <td></td>
                                                <td><?php echo $roww['request_id']?></td>
                                                <td><?php  $id = $roww['spare_id'];  $sqll = "SELECT * FROM web_products WHERE spareid = '$id'"; 
                        $resultt = mysqli_query($conn, $sqll); $rowww = mysqli_fetch_array($resultt); echo $rowww['sparename'];

                                                ?></td>
                                                <td><?php  $id = $roww['user_id'];  $sqll = "SELECT * FROM tbl_users WHERE user_id = '$id'"; 
                        $resultt = mysqli_query($conn, $sqll); $rowww = mysqli_fetch_array($resultt); 
                        if($rowww['Firstname'] != '')echo $rowww['Firstname'].' '.$rowww['Lastname'];
                        else{
                            $sqll = "SELECT * FROM user_info WHERE user_id = '$id'"; 
                        $resultt = mysqli_query($conn, $sqll); $rowww = mysqli_fetch_array($resultt);
                        echo $rowww['first_name'];
                        }

                                                ?></td>
                                                <td><?php   $ori = $roww['origin'];
                                                $user = $roww['user_id'];

                                                if ($ori == 'web') {
                                                   "SELECT * FROM user_info WHERE user_id = '$id'"; 
                        $resultt = mysqli_query($conn, $sqll); $rowww = mysqli_fetch_array($resultt);
                        echo $rowww['mobile'];
                                                }else{
                                                    "SELECT * FROM tbl_users WHERE user_id = '$id'"; 
                        $resultt = mysqli_query($conn, $sqll); $rowww = mysqli_fetch_array($resultt);
                        echo $rowww['phone'];
                                                }

                                                ?></td>
                                                <td> <?php echo $roww['qty']?></td>
                                                 <td> <?php echo $roww['totale']?></td>
                                                <td><?php echo $roww['created_at']?></td> 
                                                <td><?php  $id = $roww['status'];  
                                                if ($id == 0) {
                                                     echo "Not delivered";
                                                 } else{
                                                    echo "Delivered";
                                                 }?></td>
                                                
                                                <td><div class="btn-group btn-custom-groups">
                                    <a href="sparedeliver.php?id=<?php echo $roww['request_id']?>"><button type="button" class="btn btn-success">Delivered</button></a>
                                    
                                   
                                     
                                </div>
                                                </td>


                                            </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>




            
                     
                </div>
            </div>
        </div>
         
        
    <?php }elseif ($row['roles'] == 'electronics') {?> 
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
                                            <li><a href="#">Electronics</a> 
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
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>My products</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green" hidden>100% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <?php 
                            $username = $_SESSION['username']; 
                            $sql = "SELECT * FROM tbl_admin_login WHERE username='$username'";
                            $res = $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                            $shop_id = $row['shopid'];

                            $sql1 = "SELECT * FROM web_products WHERE shopid = '$shop_id'";

                            if ($ress = mysqli_query($conn, $sql1)) {

                                $procount = mysqli_num_rows($ress); ?>
                               <h2 class="text-right no-margin"> <?php echo $procount; ?></h2>

                            <?php } ?>
                                     
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Requests</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red" hidden>100% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                         <?php 

                             $username = $_SESSION['username']; 
                            $sql = "SELECT * FROM tbl_admin_login WHERE username='$username'";
                            $res = $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                            $shop_id = $row['shopid'];

                            $sql1 = "SELECT * FROM electronics_request_tbl WHERE shop_id = '$shop_id' AND status = '0'";

                            if ($ress = mysqli_query($conn, $sql1)) {

                                $procount = mysqli_num_rows($ress); ?>
                               <h2 class="text-right no-margin"> <?php echo $procount; ?></h2>

                            <?php } ?>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar progress-bar-danger bg-red"></div>
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
                    <a href="new_electronicproduct.php"><button type="button" class="btn btn-lg btn-primary pull-right"><i class="fa fa-plus adminpro-home-admin" aria-hidden="true"></i>Add new product</button></a>
                </div>
                
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br>
                       <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>My <span class="table-project-n">Electronics</span> </h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                       <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="ID">ID</th>
                                                <th data-field="Name" >Name</th>
                                                <th data-field="Price" >Price</th>
                                                <th data-field="Description" >Description</th>
                                                <th data-field="Address" >Address</th>
                                                <th data-field="phone" >Phone</th> 
                                                <th data-field="Joined" >Created</th>  
                                              <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php  
                                         $username = $_SESSION['username']; 
                                        $sql = "SELECT * FROM tbl_admin_login WHERE username='$username'";
                                        $res = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_array($res,MYSQLI_ASSOC);

                                        $shop_id = $row['shopid'];

                                              $sql1 = "SELECT * FROM tbl_electronics WHERE shopid = '$shop_id' ORDER BY spareid DESC"; 
                                               $result = mysqli_query($conn, $sql1);
                                                while ($roww = mysqli_fetch_array($result)) { ?>              
                                            <tr>
                                                <td></td>
                                                <td><?php echo $roww['spareid']?></td>
                                                <td><?php echo $roww['sparename']?></td>
                                                <td><?php echo $roww['spareprice']?></td>
                                                <td><?php echo $roww['sparedescription']?></td>
                                                <td><?php echo $roww['address']?></td>
                                                <td><?php echo $roww['phone']?></td>
                                                <td><?php echo $roww['created_at']?></td>
                                                <td><div class="btn-group btn-custom-groups">
                                    
                                    <a href="electronicdelete.php?id=<?php echo $roww['spareid']?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                     
                                </div>
                                                </td>

                                            </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
         

    <?php }elseif ($row['roles'] == 'other') {?> 
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
                                            <li><a href="#">Other</a> 
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
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>My products</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green" hidden>100% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <?php 
                            $username = $_SESSION['username']; 
                            $sql = "SELECT * FROM tbl_admin_login WHERE username='$username'";
                            $res = $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                            $shop_id = $row['shopid'];

                            $sql1 = "SELECT * FROM web_products WHERE shopid = '$shop_id'";

                            if ($ress = mysqli_query($conn, $sql1)) {

                                $procount = mysqli_num_rows($ress); ?>
                               <h2 class="text-right no-margin"> <?php echo $procount; ?></h2>

                            <?php } ?>
                                     
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Requests</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red" hidden>100% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                         <?php 

                             $username = $_SESSION['username']; 
                            $sql = "SELECT * FROM tbl_admin_login WHERE username='$username'";
                            $res = $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                            $shop_id = $row['shopid'];

                            $sql1 = "SELECT * FROM other_request_tbl WHERE shop_id = '$shop_id' AND status = '0'";

                            if ($ress = mysqli_query($conn, $sql1)) {

                                $procount = mysqli_num_rows($ress); ?>
                               <h2 class="text-right no-margin"> <?php echo $procount; ?></h2>

                            <?php } ?>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar progress-bar-danger bg-red"></div>
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
                    <a href="newother.php"><button type="button" class="btn btn-lg btn-primary pull-right"><i class="fa fa-plus adminpro-home-admin" aria-hidden="true"></i>Add new product</button></a>
                </div>
                
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br>
                       <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>My <span class="table-project-n">Products</span> </h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                       <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="ID">ID</th>
                                                <th data-field="Name" >Name</th>
                                                <th data-field="Price" >Price</th>
                                                <th data-field="Description" >Description</th>
                                                <th data-field="Address" >Address</th>
                                                <th data-field="phone" >Phone</th> 
                                                <th data-field="Joined" >Created</th>  
                                              <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php  
                                         $username = $_SESSION['username']; 
                                        $sql = "SELECT * FROM tbl_admin_login WHERE username='$username'";
                                        $res = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_array($res,MYSQLI_ASSOC);

                                        $shop_id = $row['shopid'];

                                              $sql1 = "SELECT * FROM web_products WHERE shopid = '$shop_id' ORDER BY spareid DESC"; 
                                               $result = mysqli_query($conn, $sql1);
                                                while ($roww = mysqli_fetch_array($result)) { ?>              
                                            <tr>
                                                <td></td>
                                                <td><?php echo $roww['spareid']?></td>
                                                <td><?php echo $roww['sparename']?></td>
                                                <td><?php echo $roww['spareprice']?></td>
                                                <td><?php echo $roww['sparedescription']?></td>
                                                <td><?php echo $roww['address']?></td>
                                                <td><?php echo $roww['phone']?></td>
                                                <td><?php echo $roww['created_at']?></td>
                                                <td><div class="btn-group btn-custom-groups">
                                    
                                    <a href="electronicdelete.php?id=<?php echo $roww['spareid']?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                     
                                </div>
                                                </td>

                                            </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
         

    <?php }elseif ($row['roles'] == 'garage') {?> 
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
                                            <li><a href="#">Garage</a> 
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
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>overall request</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green" hidden>100% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <?php 
                            $username = $_SESSION['username']; 
                            $sql = "SELECT * FROM tbl_admin_login WHERE username='$username'";
                            $res = $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                            $shop_id = $row['shopid'];

                            $sql1 = "SELECT * FROM tbl_requests WHERE agent_id = '$shop_id'";

                            if ($ress = mysqli_query($conn, $sql1)) {

                                $procount = mysqli_num_rows($ress); ?>
                               <h2 class="text-right no-margin"> <?php echo $procount; ?></h2>

                            <?php } ?>
                                     
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>New service request </b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red" hidden>100% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                         <?php 

                             $username = $_SESSION['username']; 
                            $sql = "SELECT * FROM tbl_admin_login WHERE username='$username'";
                            $res = $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                            $shop_id = $row['shopid'];

                            $sql1 = "SELECT * FROM tbl_requests WHERE agent_id = '$shop_id' AND status = '0'";

                            if ($ress = mysqli_query($conn, $sql1)) {

                                $procount = mysqli_num_rows($ress); ?>
                               <h2 class="text-right no-margin"> <?php echo $procount; ?></h2>

                            <?php } ?>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div>
                            </div>
                        </div>

                        <div class="product-sales-area mg-tb-30">
                        <div class="container-fluid">
                         
                 </div>
             </div>
                </div>
            </div>
        </div>
        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                 
                
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br>
                       <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1 style="text-align: left">New Service <span class="table-project-n">Requests</span> </h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                       <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="ID">ID</th>
                                                <th data-field="Service" >Service</th>
                                                <th data-field="Price" >Client name</th>
                                                <th data-field="Description" >client phone</th>
                                                <th data-field="Address" >Service date</th>
                                                <th data-field="status" >Status</th>  
                                              <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php  
                                         $username = $_SESSION['username']; 
                                        $sql = "SELECT * FROM tbl_admin_login WHERE username='$username'";
                                        $res = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_array($res,MYSQLI_ASSOC);

                                        $shop_id = $row['shopid'];

                                              $sql1 = "SELECT * FROM tbl_requests WHERE agent_id = '$shop_id' AND status = '0' ORDER BY req_id DESC"; 
                                               $result = mysqli_query($conn, $sql1);
                                                while ($roww = mysqli_fetch_array($result)) { ?>              
                                            <tr>
                                                <td></td>
                                                <td><?php echo $roww['req_id']?></td>
                                                <td><?php echo $roww['utility']?></td>
                                                <td><?php $user_id = $roww['user_id'];
                                                $sql2 = "SELECT * FROM tbl_users WHERE user_id='$user_id'";
                                                $res2 = mysqli_query($conn, $sql2);
                                                $rowa = mysqli_fetch_array($res2,MYSQLI_ASSOC);
                                                echo $rowa['Firstname'].' '.$rowa['Lastname'];
                                                ?></td>
                                                <td><?php echo $roww['contact']?></td>
                                                <td><?php echo $roww['date_service']?></td>
                                                <td><?php if($roww['status'] == '1')
                                                    echo "Served";
                                                    else
                                                        echo "New request";
                                                ?></td>
                                                 
                                                <td><div class="btn-group btn-custom-groups">
                                    
                                    <a href="requestServe.php?id=<?php echo $roww['req_id']?>"><button type="button" class="btn btn-warning">Serve</button></a>
                                     
                                </div>
                                <div class="btn-group btn-custom-groups">
                                    
                                    <a href="CancelRequest.php?id=<?php echo $roww['req_id']?>"><button type="button" class="btn btn-danger">Cancel Request</button></a>
                                     
                                </div>
                                                </td>

                                            </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br>
                       <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1 style="text-align: left">Served Requests <span class="table-project-n"></span> </h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar1">
                                        <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar1">
                                       <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="ID">ID</th>
                                                <th data-field="Service" >Service</th>
                                                <th data-field="Price" >Client name</th>
                                                <th data-field="Description" >client phone</th>
                                                <th data-field="Address" >Service date</th>
                                                <th data-field="status" >Status</th>  
                                                <th data-field="After status" >After service status</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php  
                                         $username = $_SESSION['username']; 
                                        $sql = "SELECT * FROM tbl_admin_login WHERE username='$username'";
                                        $res = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_array($res,MYSQLI_ASSOC);

                                        $shop_id = $row['shopid'];

                                              $sql1 = "SELECT * FROM tbl_requests WHERE agent_id = '$shop_id' AND status = '1' ORDER BY req_id DESC"; 
                                               $result = mysqli_query($conn, $sql1);
                                                while ($roww = mysqli_fetch_array($result)) { ?>              
                                            <tr>
                                                <td></td>
                                                <td><?php echo $roww['req_id']?></td>
                                                <td><?php echo $roww['utility']?></td>
                                                <td><?php $user_id = $roww['user_id'];
                                                $sql2 = "SELECT * FROM tbl_users WHERE user_id='$user_id'";
                                                $res2 = mysqli_query($conn, $sql2);
                                                $rowa = mysqli_fetch_array($res2,MYSQLI_ASSOC);
                                                echo $rowa['Firstname'].' '.$rowa['Lastname'];
                                                ?></td>
                                                <td><?php echo $roww['contact']?></td>
                                                <td><?php echo $roww['date_service']?></td>
                                                <td><?php if($roww['status'] == '1')
                                                    echo "Served";
                                                    else
                                                        echo "New request";
                                                ?></td>
                                                <td><?php echo $roww['status_def']?></td>
                                                 
                                                 
                                            </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
         

    <?php }elseif ($row['roles'] == 'Admin'){?>

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
                                            <li><a href="#">Home</a>
                                            </li> 
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
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b><a href="carerental.php">Car rentals</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red" hidden>100% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                         <?php 

                            $sql = "SELECT * FROM tbl_rental_co";

                            if ($res = mysqli_query($conn, $sql)) {

                                $procount = mysqli_num_rows($res); ?>
                               <h2 class="text-right no-margin"> <?php echo $procount; ?></h2>

                            <?php } ?>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div>
                            </div>
                        </div> 
                        

                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b><a href="shops.php">Spare Shops</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue" hidden>100% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                         <?php 

                            $sql = "SELECT * FROM tbl_shops";

                            if ($res = mysqli_query($conn, $sql)) {

                                $procount = mysqli_num_rows($res); ?>
                               <h2 class="text-right no-margin"> <?php echo $procount; ?></h2>

                            <?php } ?>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar progress-bar-danger bg-green"></div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b><a href="electronics.php">Electronic Shops</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue" hidden>100% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                         <?php 

                            $sql = "SELECT * FROM tbl_eloshop";

                            if ($res = mysqli_query($conn, $sql)) {

                                $procount = mysqli_num_rows($res); ?>
                               <h2 class="text-right no-margin"> <?php echo $procount; ?></h2>

                            <?php } ?>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar progress-bar-danger bg-green"></div>
                                </div>
                            </div>
                        </div> 

                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b><a href="shops.php">Other Shops</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue" hidden>100% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                         <?php 

                            $sql = "SELECT * FROM tbl_other_shops";

                            if ($res = mysqli_query($conn, $sql)) {

                                $procount = mysqli_num_rows($res); ?>
                               <h2 class="text-right no-margin"> <?php echo $procount; ?></h2>

                            <?php } ?>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar progress-bar-danger bg-green"></div>
                                </div>
                            </div>
                        </div> 
                         <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b><a href="drivers.php">Drivers</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-purple" hidden>100% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                         <?php 

                            $sql = "SELECT * FROM tbl_drivers";

                            if ($res = mysqli_query($conn, $sql)) {

                                $procount = mysqli_num_rows($res); ?>
                               <h2 class="text-right no-margin"> <?php echo $procount; ?></h2>

                            <?php } ?>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar progress-bar-danger bg-purple"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b><a href="garages.php">Garages</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-green" hidden>100% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                         <?php 

                            $sql = "SELECT * FROM tbl_garage";

                            if ($res = mysqli_query($conn, $sql)) {

                                $procount = mysqli_num_rows($res); ?>
                               <h2 class="text-right no-margin"> <?php echo $procount; ?></h2>

                            <?php } ?>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar progress-bar-danger bg-blue"></div>
                                </div>
                            </div>
                        </div>  

                        <div class="row" style="margin-top: 130px;margin-left: 1px">
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b><a href="users.php">App Users</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-green" hidden>100% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                         <?php 

                            $sql = "SELECT * FROM tbl_users";

                            if ($res = mysqli_query($conn, $sql)) {

                                $procount = mysqli_num_rows($res); ?>
                               <h2 class="text-right no-margin"> <?php echo $procount; ?></h2>

                            <?php } ?>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar progress-bar-danger bg-blue"></div>
                                </div>
                            </div>
                        </div> 
                         <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b><a href="users.php">Web Users</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-green" hidden>100% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                         <?php 

                            $sql = "SELECT * FROM user_info";

                            if ($res = mysqli_query($conn, $sql)) {

                                $procount = mysqli_num_rows($res); ?>
                               <h2 class="text-right no-margin"> <?php echo $procount; ?></h2>

                            <?php } ?>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar progress-bar-danger bg-blue"></div>
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
                   
                </div>
                
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br>
                       <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Unaproved <span class="table-project-n">Spare Shops</span> </h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar10">
                                        <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar10">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="ID">ID</th>
                                                <th data-field="Names" >Names</th>
                                                <th data-field="Tin" >Tin</th>
                                                <th data-field="Address" >Address</th>
                                                <th data-field="Owner" >Owner</th>
                                                <th data-field="phone" >phone</th> 
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                            
                                              $sql = "SELECT * FROM tbl_shops WHERE status = '0' ORDER BY shop_id DESC"; 
                                               $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_array($result)) { ?>              
                                            <tr>
                                                <td></td>
                                                <td><?php echo $row['shop_id']?></td>
                                                <td><?php echo $row['shop_name']?></td>
                                                <td><?php echo $row['shop_tin']?></td>
                                                <td><?php echo $row['shop_adress']?></td>
                                                <td><?php echo $row['shop_owner']?></td> 
                                                <td><?php echo $row['shop_phone']?></td>
                                                <td><div class="btn-group btn-custom-groups">
                                    <a href="approveShop.php?shopid=<?php echo $row['shop_id']?>&origin=<?php echo $row['origin']?>"><button type="button" class="btn btn-warning">Approve</button></a>
                                   <!-- <a href="edit.php?id=<?php echo $row['state_id']?>"><button type="button" class="btn btn-primary">Edit</button></a>
                                    <a href="delete.php?id=<?php echo $row['state_id']?>"><button type="button" class="btn btn-danger">Delete</button></a>-->
                                     
                                </div>
                                                </td>

                                            </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
    <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
                </div>
                
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br>
                       <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Unaproved <span class="table-project-n">Electronics Shops</span> </h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="ID">ID</th>
                                                <th data-field="Names" >Names</th>
                                                <th data-field="Tin" >Tin</th>
                                                <th data-field="Address" >Address</th>
                                                <th data-field="Owner" >Owner</th>
                                                <th data-field="phone" >phone</th> 
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                            
                                              $sql = "SELECT * FROM tbl_eloshop WHERE status = '0' ORDER BY shop_id DESC"; 
                                               $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_array($result)) { ?>              
                                            <tr>
                                                <td></td>
                                                <td><?php echo $row['shop_id']?></td>
                                                <td><?php echo $row['shop_name']?></td>
                                                <td><?php echo $row['shop_tin']?></td>
                                                <td><?php echo $row['shop_adress']?></td>
                                                <td><?php echo $row['shop_owner']?></td> 
                                                <td><?php echo $row['shop_phone']?></td>
                                                <td><div class="btn-group btn-custom-groups">
                                    <a href="approveElectronic.php?shopid=<?php echo $row['shop_id']?>&origin=<?php echo $row['origin']?>"><button type="button" class="btn btn-warning">Approve</button></a>
                                   <!-- <a href="edit.php?id=<?php echo $row['state_id']?>"><button type="button" class="btn btn-primary">Edit</button></a>
                                    <a href="delete.php?id=<?php echo $row['state_id']?>"><button type="button" class="btn btn-danger">Delete</button></a>-->
                                     
                                </div>
                                                </td>

                                            </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
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
                   
                </div>
                
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br>
                       <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Unapproved <span class="table-project-n">Car rental companies</span> </h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar7">
                                        <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar7">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="ID">ID</th>
                                                <th data-field="Names" >Names</th> 
                                                <th data-field="Address" >Address</th>
                                                <th data-field="Owner" >Owner</th>
                                                <th data-field="phone" >phone</th> 
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php  
                                              $sql = "SELECT * FROM tbl_rental_co WHERE status = '0'"; 
                                               $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_array($result)) { ?>              
                                            <tr>
                                               <td></td>
                                                <td><?php echo $row['shop_id']?></td>
                                                <td><?php echo $row['shop_name']?></td> 
                                                <td><?php echo $row['shop_adress']?></td>
                                                <td><?php echo $row['shop_owner']?></td> 
                                                <td><?php echo $row['shop_phone']?></td>
                                                <td><div class="btn-group btn-custom-groups">
                                    <a href="approveRental.php?shopid=<?php echo $row['shop_id']?>&origin=<?php echo $row['origin']?>"><button type="button" class="btn btn-warning">Approve</button></a>
                                                
                                               <!-- <td><div class="btn-group btn-custom-groups">
                                    <a href="caseview.php?id=<?php echo $row['case_id']?>"><button type="button" class="btn btn-warning">View</button></a>
                                    <a href="caseedit.php?id=<?php echo $row['case_id']?>"><button type="button" class="btn btn-primary">Edit</button></a>-->
                                   
                                     
                                </div>
                                                </td>

                                            </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                 
                
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br>
                       <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Unapproved <span class="table-project-n">Garages</span> </h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar3">
                                        <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar3">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="Id">ID</th>
                                                <th data-field="Name" >Names</th>
                                                <th data-field="Owner" >Owner</th>
                                                <th data-field="Phone" >Phone</th>
                                                <th data-field="District" >District</th>
                                                <th data-field="description">Description</th> 
                                                
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                           // $pol =  $_SESSION['police_station'];
                                              $sql = "SELECT * FROM tbl_garage WHERE status ='0'"; 
                                               $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_array($result)) { ?>              
                                            <tr>
                                                <td></td>
                                                <td><?php echo $row['id']?></td>
                                                <td><?php echo $row['name']?></td>
                                                <td><?php echo $row['owner_name']?></td>
                                                <td><?php echo $row['phone']?></td>
                                                <td><?php echo $row['district_name']?></td>
                                                <td><?php echo $row['description']?></td> 
                                                 
                                                
                                                <td><div class="btn-group btn-custom-groups">
                                    <a href="approveGarage.php?shopid=<?php echo $row['id']?>"><button type="button" class="btn btn-warning">Approve</button></a>
                                    
                                   
                                     
                                </div>
                                                </td>

                                            </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br>
                       <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Unapproved <span class="table-project-n">Shops (other)</span> </h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar4">
                                        <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar4">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="Id">ID</th>
                                                <th data-field="shop name" >Names</th>
                                                <th data-field="shop TIN" >Owner</th>
                                                <th data-field="Shop phone" >Phone</th>
                                                <th data-field="Shop Address" >District</th> 
                                                
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                           // $pol =  $_SESSION['police_station'];
                                              $sql = "SELECT * FROM tbl_other_shops WHERE status ='0'"; 
                                               $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_array($result)) { ?>              
                                            <tr>
                                                <td></td>
                                                <td><?php echo $row['shop_id']?></td>
                                                <td><?php echo $row['shop_name']?></td>
                                                <td><?php echo $row['shop_tin']?></td>
                                                <td><?php echo $row['shop_phone']?></td>
                                                <td><?php echo $row['shop_adress']?></td> 
                                                 
                                                
                                                <td><div class="btn-group btn-custom-groups">
                                    <a href="approveOther.php?shopid=<?php echo $row['shop_id']?>&origin=<?php echo $row['origin']?>"><button type="button" class="btn btn-warning">Approve</button></a>
                                    
                                   
                                     
                                </div>
                                                </td>

                                            </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> 
                    </div>
                </div>




     <?php } } ?>






       <?php include('footer.php'); ?>