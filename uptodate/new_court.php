<?php
include('header.php');
$msg = "";
if(isset($_POST["submit"])){

    if(empty($_POST["stateid"]) || empty($_POST["hdate"]) || empty($_POST["court"])){
        $msg = "<div class='alert alert-icon alert-white alert-warning alert-dismissible fade in' role='alert'>
	<button type='button' class='close' data-dismiss='alert'
	aria-label='Close'>
	<span aria-hidden='true'>&times;</span>
	</button>
	<i class='mdi mdi-alert'></i>
	<strong>Error !</strong> Please fill all the fields.
	</div>";

    }else{



      $stateid=$_POST['stateid'];
        $hdate=$_POST['hdate'];
        $court=$_POST['court'];
       $pol =  $_SESSION['police_station']; 

        $que = "INSERT INTO `court`(datehearing,caseid,courtname,poli_id) VALUES ('$hdate','$stateid','$court','$pol')"; 
        $res = mysqli_query($conn,$que);
        if ($res) {
        	  $msg = "<div class='alert alert-icon alert-white alert-warning alert-dismissible fade in' role='alert'>
	<button type='button' class='close' data-dismiss='alert'
	aria-label='Close'>
	<span aria-hidden='true'>&times;</span>
	</button>
	<i class='mdi mdi-alert'></i>
	<strong>Success !</strong> Saved Successfully!
	</div>";
        }else{
        	 $msg = "<div class='alert alert-icon alert-white alert-warning alert-dismissible fade in' role='alert'>
	<button type='button' class='close' data-dismiss='alert'
	aria-label='Close'>
	<span aria-hidden='true'>&times;</span>
	</button>
	<i class='mdi mdi-alert'></i>
	<strong>Error !</strong> Unkown Error occured!
	</div>";
        }
        
        } 
}
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
                                            <li><span class="bread-blod">New Case filing</span>
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

         <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    	<div class='message'>
                        <?php if ($msg != "") echo $msg . "<br>" ?>
                    </div>
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                     <form action="new_court.php" method="POST">
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Detainnee(Names)</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <select name="stateid" class="form-control">
                                                                <?php 
                                                                  $pol =  $_SESSION['police_station']; 
                                                                $sql = "SELECT * FROM tbl_cases WHERE poli_id = $pol/"; 
                                                                $result = mysqli_query($conn, $sql);
                                                               while ($row = mysqli_fetch_array($result)) { ?> 
                                                                   <option value="<?php echo $row['case_id']; ?>"> <?php $id = $row['state_id'];
                                                                $sql1 = "SELECT * FROM statements WHERE state_id = $id"; 

                                                                $result1 = mysqli_query($conn, $sql1);
                                                                $roww = mysqli_fetch_array($result1);
                                                                echo $roww['names'];
                                                                    ?> </option>
                                                                   <?php } ?>  
                                                               </select>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Date of hearing</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="date" class="form-control" name="hdate" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Court</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="court" placeholder="district/sector/cell" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     
                                                     <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-9"></div>
                                                                <div class="col-lg-3">
                                                                    <div class="login-horizental cancel-wp pull-right">    
                                                                        
                                                                        <input type="submit" name="submit" value="Add Date " class="btn btn-custon-rounded-four btn-primary">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     
                                               
                                </div>
                                  
                                                     
                                                    
                                                </form>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
<?php
include('footer.php');
?>