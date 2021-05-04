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
                                            <li><span class="bread-blod">Court hearing</span>
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
                    <a href="new_court.php"><button type="button" class="btn btn-lg btn-primary pull-right"><i class="fa fa-plus adminpro-home-admin" aria-hidden="true"></i> New hearing date</button></a>
                </div>
                
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br>
                       <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>All <span class="table-project-n">Appointments</span> </h1>
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
                                                <th data-field="stateid">ID</th>
                                                <th data-field="Fullnames" >Full Names</th>
                                                <th data-field="Father" >Hearing date</th>
                                                <th data-field="Mother" >Return date</th>
                                                <th data-field="id" >Court name</th>
                                                 <th data-field="act" >Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                           $pol =  $_SESSION['police_station'];
                                              $sql = "SELECT * FROM court WHERE poli_id = '$pol'"; 
                                               $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_array($result)) { ?>              
                                            <tr>
                                                <td></td>
                                                <td><?php echo $row['idhearing']?></td>
                                                <td><?php  $id = $row['caseid'];  $sqll = "SELECT * FROM tbl_cases WHERE case_id = '$id'"; 
                        $resultt = mysqli_query($conn, $sqll); $roww = mysqli_fetch_array($resultt);  $id = $roww['state_id'];
                                                                $sql1 = "SELECT * FROM statements WHERE state_id = $id"; 

                                                                $result1 = mysqli_query($conn, $sql1);
                                                                $roww = mysqli_fetch_array($result1);
                                                                echo $roww['names'];?></td>
                                                <td><?php echo $row['datehearing']?></td>
                                                <td><?php echo $row['dateread']?></td>
                                                <td><?php echo $id = $row['courtname'];?></td>
                                                
                                                <td><div class="btn-group btn-custom-groups">
                                   
                                    <a href="courtedit.php?id=<?php echo $row['idhearing']?>"><button type="button" class="btn btn-primary">Edit</button></a> 
                                    <a href="courtdelete.php?id=<?php echo $row['idhearing']?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                   
                                     
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