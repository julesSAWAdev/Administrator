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
                                            <li><span class="bread-blod">releases management</span>
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
                                    <h1>Detained <span class="table-project-n">Inmates</span> </h1>
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
                                                <th data-field="crime" >case description</th>
                                                <th data-field="dob" >detained date</th>
                                                
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                            $pol =  $_SESSION['police_station'];
                                              $sql = "SELECT * FROM statements WHERE stati ='detained' AND poli_id = '$pol' ORDER BY state_id DESC"; 
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
                                                <td><?php echo $row['created']?></td>
                                                 
                                                
                                                <td><div class="btn-group btn-custom-groups">
                                    <a href="activatere.php?id=<?php echo $row['state_id']?>"><button type="button" class="btn btn-danger">Release</button></a>
                                    
                                   
                                     
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
                                    <h1>Released <span class="table-project-n">Inmates</span> </h1>
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
                                                <th data-field="stateid">ID</th>
                                                <th data-field="Fullnames" >Full Names</th>
                                                <th data-field="Father" >Father</th>
                                                <th data-field="Mother" >Mother</th>
                                                <th data-field="id" >National ID</th>
                                                <th data-field="crime" >case description</th>
                                                <th data-field="dob" >detained date</th>
                                                <th data-field="rel" >released date</th>
                                                <th data-field="rell" >released By</th>
                                                <th data-field="act" >Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                            $pol =  $_SESSION['police_station'];
                                              $sql = "SELECT * FROM statements WHERE stati = 'released' AND poli_id = '$pol' ORDER BY state_id DESC"; 
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
                                                <td><?php echo $row['created']?></td>
                                                <td><?php echo $row['release_date']?></td>
                                               <td><?php 
                                               $id = $row['released_by'];
                                               $queryy = "SELECT * FROM tbl_users  WHERE user_id = '$id'";
                                                $resultt = mysqli_query($conn, $queryy);
                                                while($roww = mysqli_fetch_array($resultt)){
                                                echo  $roww['firstname']. " ".$roww['lastname'];
                                            }
                                               ?></td>
                                     <td><div class="btn-group btn-custom-groups">
                                    <a href="deactivatere.php?id=<?php echo $row['state_id']?>"><button type="button" class="btn btn-info">Undo release</button></a>
                                   
                                     
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
<?php
include('footer.php');
?>