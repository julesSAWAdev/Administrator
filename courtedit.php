<?php
include('header.php');
$msg = "";
if(isset($_POST["submit"])){

    if(empty($_POST["id"]) || empty($_POST["hdate"]) || empty($_POST["court"])){
        $msg = "<div class='alert alert-icon alert-white alert-warning alert-dismissible fade in' role='alert'>
    <button type='button' class='close' data-dismiss='alert'
    aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    <i class='mdi mdi-alert'></i>
    <strong>Error !</strong> Please fill all the fields.
    </div>";

    }else{



      $idd = $_POST['id'];
        $hdate=$_POST['hdate'];
        $court=$_POST['court'];
        $rdate = $_POST['rdate'];

        $que = "UPDATE `court` SET datehearing = '$hdate', dateread = '$rdate',courtname = '$court' WHERE idhearing = '$idd'"; 
        $res = mysqli_query($conn,$que);
        if ($res) {
        	  $msg = "<div class='alert alert-icon alert-white alert-warning alert-dismissible fade in' role='alert'>
	<button type='button' class='close' data-dismiss='alert'
	aria-label='Close'>
	<span aria-hidden='true'>&times;</span>
	</button>
	<i class='mdi mdi-alert'></i>
	<strong>Success !</strong> updated Successfully!
	</div>";
    echo "<script>window.location = 'court.php'</script>";
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
                                            <li><span class="bread-blod">Court hearing edit</span>
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
                                        <?php 

                                        $id = $_GET['id']; 
                                        $sql = "SELECT * FROM court WHERE idhearing = '$id'"; 
                                         $result = mysqli_query($conn, $sql);
                                          while($row = mysqli_fetch_array($result)) {    
                                        ?>

                                     <form action="courtedit.php" method="POST">
                                                    <div class="form-group-inner" hidden>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Id earing</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                 <input type="text" name="id" value="<?php  echo $idd = $_GET['id'];?>" class="form-control">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Detainnee(Names)</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                 <input type="text" value="<?php  $idd = $row['caseid']; $sqll = "SELECT * FROM tbl_cases WHERE  case_id = '$idd'"; $resultt = mysqli_query($conn, $sqll); 
                                                                 $roww = mysqli_fetch_array($resultt); echo $roww['names']; ?>" class="form-control">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Date of hearing</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="date" class="form-control" value="<?php echo $row['datehearing']?>" name="hdate" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                      <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Jurdiction hearing</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="date" class="form-control" name="rdate" value="<?php echo $row['dateread']?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Court</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="court" value="<?php echo $row['courtname']?>" placeholder="district/sector/cell" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     
                                                     <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-9"></div>
                                                                <div class="col-lg-3">
                                                                    <div class="login-horizental cancel-wp pull-right">    
                                                                        
                                                                        <input type="submit" name="submit" value="Update Date " class="btn btn-custon-rounded-four btn-primary">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     
                                               
                                </div> 
                                 </form>
                             <?php } ?>
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