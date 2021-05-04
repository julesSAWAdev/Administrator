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
                                            <li><span class="bread-blod">statements</span>
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
                 
                
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br>
                       <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>All <span class="table-project-n">Statements</span> </h1>
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
                                                <th data-field="Father" >Father</th>
                                                <th data-field="Mother" >Mother</th>
                                                <th data-field="id" >National ID</th>
                                                <th data-field="crime" >Crime</th>
                                                <th data-field="dob" >Date of Birth</th>
                                                <th data-field="police" >Police Station</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                            $id = $_POST['nid'];
                                              $sql = "SELECT * FROM statements WHERE nid = '$id' ORDER BY state_id DESC"; 
                                               $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_array($result)) { ?>              
                                            <tr>
                                                <td></td>
                                                <td><?php echo $row['state_id']?></td>
                                                <td><?php echo $row['names']?></td>
                                                <td><?php echo $row['father']?></td>
                                                <td><?php echo $row['mother']?></td>
                                                <td><?php echo $row['nid']?></td>
                                                <td><?php echo $row['crime']?></td>
                                                <td><?php echo $row['dob']?></td>
                                                <td><?php $idd = $row['poli_id'] ; $sqll = "SELECT * FROM pol_stations WHERE  id = '$idd'"; $resultt = mysqli_query($conn, $sqll); 
                                                                 $roww = mysqli_fetch_array($resultt); echo $roww['names'];?></td>  
                                                
                                    
                                     
                               

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