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
                                    <h1>All <span class="table-project-n">Shops</span> </h1>
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
                                                <th data-field="Shop Name" >Shop name</th>
                                                <th data-field="Shop Tin" >Shop tin</th>
                                                <th data-field="phone" >Shop phone</th>
                                                <th data-field="Address" >Address</th>
                                                <th data-field="Owner" >owner</th> 
                                                <th data-field="status" >Status</th> 
                                                <th data-field="dob" >Joined</th> 
                                              <!--<th data-field="action">Action</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php  
                                              $sql = "SELECT * FROM tbl_shops ORDER BY user_id DESC"; 
                                               $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_array($result)) { ?>              
                                            <tr>
                                                <td></td>
                                                <td><?php echo $row['shop_id']?></td>
                                                <td><?php echo $row['shop_name']?></td>
                                                <td><?php echo $row['shop_tin']?></td>
                                                <td><?php echo $row['shop_phone']?></td>
                                                <td><?php echo $row['shop_adress']?></td>
                                                <td><?php echo $row['shop_owner']?></td>
                                                <td><?php  if($row['status']== 1){
                                                    echo 'Approved';
                                                }else{
                                                    echo 'Not Approved';
                                                }?></td>
                                                <td><?php echo $row['created_at']?></td>
                                                <!--<td><div class="btn-group btn-custom-groups">
                                    <a href="userview.php?id=<?php echo $row['user_id']?>"><button type="button" class="btn btn-warning">View</button></a>
                                    <a href="useredit.php?id=<?php echo $row['user_id']?>"><button type="button" class="btn btn-primary">Edit</button></a>
                                    <a href="userdelete.php?id=<?php echo $row['user_id']?>"><button type="button" class="btn btn-danger">Delete</button></a>-->
                                     
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