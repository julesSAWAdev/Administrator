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
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Users management</span>
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
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                </div>
                
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br>
                       <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>All <span class="table-project-n">Users</span> </h1>
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
                                                <th data-field="userid">ID</th>
                                                <th data-field="names" >Full Names</th>
                                                <th data-field="serno" >Service Number</th>
                                                <th data-field="email" >Email</th>
                                                <th data-field="address" >Addres</th>
                                                <th data-field="dob" >Date of birth</th>
                                                <th data-field="Roles" >Roles</th>
                                               
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                           //$id = $_SESSION['username'];
                                         $pol =  $_SESSION['police_station'];
                                              $sql = "SELECT * FROM tbl_users WHERE policeStatID = '$pol' AND roles != 'admin' ORDER BY user_id DESC"; 
                                               $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_array($result)) { ?>              
                                            <tr>
                                                <td></td>
                                                <td><?php echo $row['user_id']?></td>
                                                <td><?php echo $row['firstname']." ".$row['lastname']?></td>
                                                <td><?php echo $row['service_no']?></td>
                                                <td><?php echo $row['email']?></td>
                                                <td><?php echo $row['address']?></td>
                                                <td><?php echo $row['age']?></td>
                                                <td><?php echo $row['roles']?></td>
                                                
                                                

                                            </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </<?php
include('footer.php');
?>s