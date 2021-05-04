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
                                            <li><a href="#">Shops</a>
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
                <!--<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <a href="new_case.php"><button type="button" class="btn btn-lg btn-primary pull-right"><i class="fa fa-plus adminpro-home-admin" aria-hidden="true"></i> Add new User</button></a>
                </div>-->
                
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
                    
                </div>
            </div>

            

            <?php
include('footer.php');
?>