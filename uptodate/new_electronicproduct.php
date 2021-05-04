<?php
include('header.php');
$msg = "";
if(isset($_POST["submit"])){

    if(empty($_POST["names"]) || empty($_POST["price"]) || empty($_POST["description"])){
        $msg = "<div class='alert alert-icon alert-white alert-warning alert-dismissible fade in' role='alert'>
	<button type='button' class='close' data-dismiss='alert'
	aria-label='Close'>
	<span aria-hidden='true'>&times;</span>
	</button>
	<i class='mdi mdi-alert'></i>
	<strong>Error !</strong> Please fill all the fields.
	</div>";

    }else{



      $fullnames=$_POST['names'];
        $price=$_POST['price'];
        $description=$_POST['description'];
        //$dob=$_POST['dob'];
        $username = $_SESSION['username']; 
        $sql = "SELECT * FROM tbl_admin_login WHERE username='$username'";
        $res = $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $shop_id = $row['shopid'];
        $shop_origin = $row['origin'];

        $sql1 = "SELECT * FROM tbl_eloshop WHERE shop_id='$shop_id'";
        $res1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_array($res1,MYSQLI_ASSOC);
        $shop_phone = $row1['shop_phone'];
        $shop_adress = $row1['shop_adress'];

        //this is our upload folder 
    $upload_path = 'uploads/';
    
    //Getting the server ip 
    $server_ip = gethostbyname(gethostname());
 
    
    //creating the upload url 
    $upload_url = 'http://'.'gofix.rw'.'/Administrator/'.$upload_path; 
    
    $reference  = rand(10,10000);
    
    // manipulate image picture

    $filename = $_FILES["image"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $filesize = $_FILES["image"]["size"];
    $allowed_file_types = array('.jpg','.jpeg','.png');   

    if (in_array($file_ext,$allowed_file_types) && ($filesize < 4000000))
    {   
        // Rename file
        $newfilename =$reference .'_passportPic' . $file_ext;
        echo $newfilename;
        if (file_exists("uploads/" . $newfilename))
        {
            // file already exists error
            echo "You have already uploaded this file.";
        }
        else
        {       
            move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $newfilename);
            echo "File uploaded successfully."; 
            $passport=$newfilename;  
            $path = $upload_url.$newfilename;
            
            
        }
    }
    elseif (empty($file_basename))
    {   
        // file selection error
        echo "Please select a file to upload.";
    } 
    elseif ($filesize > 3000000)
    {   
        // file size error
        echo "The file you are trying to upload is too large.";
    }
    else
    {
        // file type error
        echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
        unlink($_FILES["image"]["tmp_name"]);
    }

        
        $que = "INSERT INTO `tbl_electronics`(sparename,spareprice,sparedescription,shopid,image,phone,address,origin) VALUES ('$fullnames','$price','$description',' $shop_id','$path','$shop_phone','$shop_adress','$shop_origin')"; 
        $res = mysqli_query($conn,$que);
        if ($res) {

            $prodweb  = "INSERT INTO `web_products`(sparename,spareprice,sparedescription,shopid,image,phone,address,types,origin) VALUES ('$fullnames','$price','$description',' $shop_id','$path','$shop_phone','$shop_adress','electronics','$shop_origin')"; 
             $prowebres = mysqli_query($conn,$prodweb);
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
                                            <li><a href="#">New Product</a>  
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
                                     <form action="new_electronicproduct.php" enctype="multipart/form-data" method="POST">
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="names" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Price</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="price" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Description</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                 <textarea name="description" rows="4" class="form-control" required></textarea> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Image</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="file" class="form-control" name="image" required>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="row">
                                                                <div class="col-lg-9"></div>
                                                                <div class="col-lg-3">
                                                                    <div class="login-horizental cancel-wp pull-right">    
                                                                        
                                                                        <input type="submit" name="submit" value="Add product" class="btn btn-custon-rounded-four btn-primary">
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