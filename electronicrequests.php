<?php
include('header.php');
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
                                            <li><a href="#">Requests</a>  
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
                
                </div>
            </div>
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
                                    <h1>New <span class="table-project-n">Requests</span> </h1>
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


                                              $sql1 = "SELECT * FROM electronics_request_tbl WHERE shop_id = '$shop_id' AND status ='0' ORDER BY request_id DESC"; 
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
                                    <a href="electronicdeliver.php?id=<?php echo $roww['request_id']?>"><button type="button" class="btn btn-success">Delivered</button></a>
                                    
                                   
                                     
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
               <!-- <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <a href="new_case.php"><button type="button" class="btn btn-lg btn-primary pull-right"><i class="fa fa-plus adminpro-home-admin" aria-hidden="true"></i> New Case</button></a>
                </div>-->
                
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br>
                       <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Treated <span class="table-project-n">Requests</span> </h1>
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
                                        </thead>
                                        <tbody>
                                         <?php 
                                           $username = $_SESSION['username']; 
                                        $sql = "SELECT * FROM tbl_admin_login WHERE username='$username'";
                                        $res = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_array($res,MYSQLI_ASSOC);

                                          $shop_id = $row['shopid'];


                                              $sql1 = "SELECT * FROM electronics_request_tbl WHERE shop_id = '$shop_id' AND status !='0' ORDER BY request_id DESC"; 
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
            <?php

include('footer.php');
?>