<?php
include('header.php');
$msg = "";
if(isset($_POST["submit"])){

    if(empty($_POST["fullnames"]) || empty($_POST["father"]) || empty($_POST["mother"]) || empty($_POST["dob"]) || empty($_POST["birthad"]) || empty($_POST["residencead"]) || empty($_POST["sex"]) || empty($_POST["marital"]) || empty($_POST["nationality"]) || empty($_POST["idnational"]) || empty($_POST["phone"]) || empty($_POST["policeid"]) || empty($_POST["userid"]) || empty($_POST["crime"])){
        $msg = "<div class='alert alert-icon alert-white alert-warning alert-dismissible fade in' role='alert'>
	<button type='button' class='close' data-dismiss='alert'
	aria-label='Close'>
	<span aria-hidden='true'>&times;</span>
	</button>
	<i class='mdi mdi-alert'></i>
	<strong>Error !</strong> Please fill all the fields.
	</div>";

    }else{


        $stateid = $_POST['stateid'];
        $fullnames=$_POST['fullnames'];
        $father=$_POST['father'];
        $mother=$_POST['mother'];
        $dob=$_POST['dob'];
        $birthad=$_POST['birthad'];
        $residencead=$_POST['residencead'];
        $sex=$_POST['sex'];
        $marital=$_POST['marital'];
        $nationality=$_POST['nationality'];
        $idnational=$_POST['idnational'];
        $phone=$_POST['phone'];
        $policeid=$_POST['policeid'];
        $userid=$_POST['userid'];
        $crime=$_POST['crime'];
        $referee=$_POST['referee'];
        $disability=$_POST['disability'];

        $que = "UPDATE statements SET names = '$fullnames', father = '$father' , mother = '$mother' , dob = '$dob',sex = '$sex' ,birth = '$birthad', residence = '$residencead', nationality ='$nationality' ,martial = '$marital' ,disability = '$disability', nid ='$idnational',phone ='$phone',crime = '$crime',referee = '$referee' WHERE state_id = '$stateid'"; 
        $res = mysqli_query($conn,$que);
        if ($res) {
        	  $msg = "<div class='alert alert-icon alert-white alert-warning alert-dismissible fade in' role='alert'>
	<button type='button' class='close' data-dismiss='alert'
	aria-label='Close'>
	<span aria-hidden='true'>&times;</span>
	</button>
	<i class='mdi mdi-alert'></i>
	<strong>Success !</strong> Updated Successfully!
	</div>";
    echo "<script>window.location = 'dashboard.php'</script>";
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
                                            <li><span class="bread-blod">Edit Statement</span>
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

                                        $username = $_GET['id']; 
                                        
                                        $query = "SELECT * FROM statements WHERE state_id = '$username'";
                                        $result = mysqli_query($conn, $query);

                                        while ($row = mysqli_fetch_array($result)) { ?>
                                     <form action="edit.php" method="POST">
                                        <div class="form-group-inner hidden">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Statement ID</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="stateid" required value="<?php echo $row['state_id']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Full Names</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="fullnames" required value="<?php echo $row['names']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Father's name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="father" required  value="<?php echo $row['father']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Mother's name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="mother" required  value="<?php echo $row['mother']; ?>"> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Date of Birth</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="date" class="form-control" name="dob" required  value="<?php echo $row['dob']; ?>"> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Birth place</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="birthad" placeholder="district/sector/cell" required  value="<?php echo $row['birth']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Residence</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" placeholder="district/sector/cell" name="residencead" required  value="<?php echo $row['residence']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Sex</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                 <select name="sex" class="form-control">
                                                                    <option value="<?php echo $row['sex']; ?>"> <?php echo $row['sex']; ?> </option>
                                                                   <option value="male"> Male </option>
                                                                   <option value="female"> Female </option> 
                                                               </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Marital status</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                               <select name="marital" class="form-control">
                                                                <option value="<?php echo $row['martial']; ?>"> <?php echo $row['martial']; ?> </option>
                                                                   <option value="single"> Single </option>
                                                                   <option value="married"> Married </option>
                                                                   <option value="divorced"> Divorced </option>
                                                                   <option value="widow"> Widow(er) </option>
                                                               </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     
                                            
                                                     
                                               
                                </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                     
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Nationality</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            	<select name="nationality" class="form-control">
                                                                    <option value="<?php echo $row['nationality']; ?>"> <?php echo $row['nationality']; ?> </option>
                                                                 <option value="United States">United States</option> 
                                                                <option value="United Kingdom">United Kingdom</option> 
                                                                <option value="Afghanistan">Afghanistan</option> 
                                                                <option value="Albania">Albania</option> 
                                                                <option value="Algeria">Algeria</option> 
                                                                <option value="American Samoa">American Samoa</option> 
                                                                <option value="Andorra">Andorra</option> 
                                                                <option value="Angola">Angola</option> 
                                                                <option value="Anguilla">Anguilla</option> 
                                                                <option value="Antarctica">Antarctica</option> 
                                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                                                                <option value="Argentina">Argentina</option> 
                                                                <option value="Armenia">Armenia</option> 
                                                                <option value="Aruba">Aruba</option> 
                                                                <option value="Australia">Australia</option> 
                                                                <option value="Austria">Austria</option> 
                                                                <option value="Azerbaijan">Azerbaijan</option> 
                                                                <option value="Bahamas">Bahamas</option> 
                                                                <option value="Bahrain">Bahrain</option> 
                                                                <option value="Bangladesh">Bangladesh</option> 
                                                                <option value="Barbados">Barbados</option> 
                                                                <option value="Belarus">Belarus</option> 
                                                                <option value="Belgium">Belgium</option> 
                                                                <option value="Belize">Belize</option> 
                                                                <option value="Benin">Benin</option> 
                                                                <option value="Bermuda">Bermuda</option> 
                                                                <option value="Bhutan">Bhutan</option> 
                                                                <option value="Bolivia">Bolivia</option> 
                                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                                                                <option value="Botswana">Botswana</option> 
                                                                <option value="Bouvet Island">Bouvet Island</option> 
                                                                <option value="Brazil">Brazil</option> 
                                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                                                                <option value="Brunei Darussalam">Brunei Darussalam</option> 
                                                                <option value="Bulgaria">Bulgaria</option> 
                                                                <option value="Burkina Faso">Burkina Faso</option> 
                                                                <option value="Burundi">Burundi</option> 
                                                                <option value="Cambodia">Cambodia</option> 
                                                                <option value="Cameroon">Cameroon</option> 
                                                                <option value="Canada">Canada</option> 
                                                                <option value="Cape Verde">Cape Verde</option> 
                                                                <option value="Cayman Islands">Cayman Islands</option> 
                                                                <option value="Central African Republic">Central African Republic</option> 
                                                                <option value="Chad">Chad</option> 
                                                                <option value="Chile">Chile</option> 
                                                                <option value="China">China</option> 
                                                                <option value="Christmas Island">Christmas Island</option> 
                                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                                                                <option value="Colombia">Colombia</option> 
                                                                <option value="Comoros">Comoros</option> 
                                                                <option value="Congo">Congo</option> 
                                                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                                                                <option value="Cook Islands">Cook Islands</option> 
                                                                <option value="Costa Rica">Costa Rica</option> 
                                                                <option value="Cote D'ivoire">Cote D'ivoire</option> 
                                                                <option value="Croatia">Croatia</option> 
                                                                <option value="Cuba">Cuba</option> 
                                                                <option value="Cyprus">Cyprus</option> 
                                                                <option value="Czech Republic">Czech Republic</option> 
                                                                <option value="Denmark">Denmark</option> 
                                                                <option value="Djibouti">Djibouti</option> 
                                                                <option value="Dominica">Dominica</option> 
                                                                <option value="Dominican Republic">Dominican Republic</option> 
                                                                <option value="Ecuador">Ecuador</option> 
                                                                <option value="Egypt">Egypt</option> 
                                                                <option value="El Salvador">El Salvador</option> 
                                                                <option value="Equatorial Guinea">Equatorial Guinea</option> 
                                                                <option value="Eritrea">Eritrea</option> 
                                                                <option value="Estonia">Estonia</option> 
                                                                <option value="Ethiopia">Ethiopia</option> 
                                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                                                                <option value="Faroe Islands">Faroe Islands</option> 
                                                                <option value="Fiji">Fiji</option> 
                                                                <option value="Finland">Finland</option> 
                                                                <option value="France">France</option> 
                                                                <option value="French Guiana">French Guiana</option> 
                                                                <option value="French Polynesia">French Polynesia</option> 
                                                                <option value="French Southern Territories">French Southern Territories</option> 
                                                                <option value="Gabon">Gabon</option> 
                                                                <option value="Gambia">Gambia</option> 
                                                                <option value="Georgia">Georgia</option> 
                                                                <option value="Germany">Germany</option> 
                                                                <option value="Ghana">Ghana</option> 
                                                                <option value="Gibraltar">Gibraltar</option> 
                                                                <option value="Greece">Greece</option> 
                                                                <option value="Greenland">Greenland</option> 
                                                                <option value="Grenada">Grenada</option> 
                                                                <option value="Guadeloupe">Guadeloupe</option> 
                                                                <option value="Guam">Guam</option> 
                                                                <option value="Guatemala">Guatemala</option> 
                                                                <option value="Guinea">Guinea</option> 
                                                                <option value="Guinea-bissau">Guinea-bissau</option> 
                                                                <option value="Guyana">Guyana</option> 
                                                                <option value="Haiti">Haiti</option> 
                                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                                                                <option value="Honduras">Honduras</option> 
                                                                <option value="Hong Kong">Hong Kong</option> 
                                                                <option value="Hungary">Hungary</option> 
                                                                <option value="Iceland">Iceland</option> 
                                                                <option value="India">India</option> 
                                                                <option value="Indonesia">Indonesia</option> 
                                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                                                                <option value="Iraq">Iraq</option> 
                                                                <option value="Ireland">Ireland</option> 
                                                                <option value="Israel">Israel</option> 
                                                                <option value="Italy">Italy</option> 
                                                                <option value="Jamaica">Jamaica</option> 
                                                                <option value="Japan">Japan</option> 
                                                                <option value="Jordan">Jordan</option> 
                                                                <option value="Kazakhstan">Kazakhstan</option> 
                                                                <option value="Kenya">Kenya</option> 
                                                                <option value="Kiribati">Kiribati</option> 
                                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                                                                <option value="Korea, Republic of">Korea, Republic of</option> 
                                                                <option value="Kuwait">Kuwait</option> 
                                                                <option value="Kyrgyzstan">Kyrgyzstan</option> 
                                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                                                                <option value="Latvia">Latvia</option> 
                                                                <option value="Lebanon">Lebanon</option> 
                                                                <option value="Lesotho">Lesotho</option> 
                                                                <option value="Liberia">Liberia</option> 
                                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                                                                <option value="Liechtenstein">Liechtenstein</option> 
                                                                <option value="Lithuania">Lithuania</option> 
                                                                <option value="Luxembourg">Luxembourg</option> 
                                                                <option value="Macao">Macao</option> 
                                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                                                                <option value="Madagascar">Madagascar</option> 
                                                                <option value="Malawi">Malawi</option> 
                                                                <option value="Malaysia">Malaysia</option> 
                                                                <option value="Maldives">Maldives</option> 
                                                                <option value="Mali">Mali</option> 
                                                                <option value="Malta">Malta</option> 
                                                                <option value="Marshall Islands">Marshall Islands</option> 
                                                                <option value="Martinique">Martinique</option> 
                                                                <option value="Mauritania">Mauritania</option> 
                                                                <option value="Mauritius">Mauritius</option> 
                                                                <option value="Mayotte">Mayotte</option> 
                                                                <option value="Mexico">Mexico</option> 
                                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                                                                <option value="Moldova, Republic of">Moldova, Republic of</option> 
                                                                <option value="Monaco">Monaco</option> 
                                                                <option value="Mongolia">Mongolia</option> 
                                                                <option value="Montserrat">Montserrat</option> 
                                                                <option value="Morocco">Morocco</option> 
                                                                <option value="Mozambique">Mozambique</option> 
                                                                <option value="Myanmar">Myanmar</option> 
                                                                <option value="Namibia">Namibia</option> 
                                                                <option value="Nauru">Nauru</option> 
                                                                <option value="Nepal">Nepal</option> 
                                                                <option value="Netherlands">Netherlands</option> 
                                                                <option value="Netherlands Antilles">Netherlands Antilles</option> 
                                                                <option value="New Caledonia">New Caledonia</option> 
                                                                <option value="New Zealand">New Zealand</option> 
                                                                <option value="Nicaragua">Nicaragua</option> 
                                                                <option value="Niger">Niger</option> 
                                                                <option value="Nigeria">Nigeria</option> 
                                                                <option value="Niue">Niue</option> 
                                                                <option value="Norfolk Island">Norfolk Island</option> 
                                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                                                                <option value="Norway">Norway</option> 
                                                                <option value="Oman">Oman</option> 
                                                                <option value="Pakistan">Pakistan</option> 
                                                                <option value="Palau">Palau</option> 
                                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                                                                <option value="Panama">Panama</option> 
                                                                <option value="Papua New Guinea">Papua New Guinea</option> 
                                                                <option value="Paraguay">Paraguay</option> 
                                                                <option value="Peru">Peru</option> 
                                                                <option value="Philippines">Philippines</option> 
                                                                <option value="Pitcairn">Pitcairn</option> 
                                                                <option value="Poland">Poland</option> 
                                                                <option value="Portugal">Portugal</option> 
                                                                <option value="Puerto Rico">Puerto Rico</option> 
                                                                <option value="Qatar">Qatar</option> 
                                                                <option value="Reunion">Reunion</option> 
                                                                <option value="Romania">Romania</option> 
                                                                <option value="Russian Federation">Russian Federation</option> 
                                                                <option value="Rwanda">Rwanda</option> 
                                                                <option value="Saint Helena">Saint Helena</option> 
                                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                                                <option value="Saint Lucia">Saint Lucia</option> 
                                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                                                                <option value="Samoa">Samoa</option> 
                                                                <option value="San Marino">San Marino</option> 
                                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                                                <option value="Saudi Arabia">Saudi Arabia</option> 
                                                                <option value="Senegal">Senegal</option> 
                                                                <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                                                                <option value="Seychelles">Seychelles</option> 
                                                                <option value="Sierra Leone">Sierra Leone</option> 
                                                                <option value="Singapore">Singapore</option> 
                                                                <option value="Slovakia">Slovakia</option> 
                                                                <option value="Slovenia">Slovenia</option> 
                                                                <option value="Solomon Islands">Solomon Islands</option> 
                                                                <option value="Somalia">Somalia</option> 
                                                                <option value="South Africa">South Africa</option> 
                                                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                                                                <option value="Spain">Spain</option> 
                                                                <option value="Sri Lanka">Sri Lanka</option> 
                                                                <option value="Sudan">Sudan</option> 
                                                                <option value="Suriname">Suriname</option> 
                                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                                                                <option value="Swaziland">Swaziland</option> 
                                                                <option value="Sweden">Sweden</option> 
                                                                <option value="Switzerland">Switzerland</option> 
                                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                                                                <option value="Tajikistan">Tajikistan</option> 
                                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                                                                <option value="Thailand">Thailand</option> 
                                                                <option value="Timor-leste">Timor-leste</option> 
                                                                <option value="Togo">Togo</option> 
                                                                <option value="Tokelau">Tokelau</option> 
                                                                <option value="Tonga">Tonga</option> 
                                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                                                                <option value="Tunisia">Tunisia</option> 
                                                                <option value="Turkey">Turkey</option> 
                                                                <option value="Turkmenistan">Turkmenistan</option> 
                                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                                                                <option value="Tuvalu">Tuvalu</option> 
                                                                <option value="Uganda">Uganda</option> 
                                                                <option value="Ukraine">Ukraine</option> 
                                                                <option value="United Arab Emirates">United Arab Emirates</option> 
                                                                <option value="United Kingdom">United Kingdom</option> 
                                                                <option value="United States">United States</option> 
                                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                                                                <option value="Uruguay">Uruguay</option> 
                                                                <option value="Uzbekistan">Uzbekistan</option> 
                                                                <option value="Vanuatu">Vanuatu</option> 
                                                                <option value="Venezuela">Venezuela</option> 
                                                                <option value="Viet Nam">Viet Nam</option> 
                                                                <option value="Virgin Islands, British">Virgin Islands, British</option> 
                                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                                                                <option value="Wallis and Futuna">Wallis and Futuna</option> 
                                                                <option value="Western Sahara">Western Sahara</option> 
                                                                <option value="Yemen">Yemen</option> 
                                                                <option value="Zambia">Zambia</option> 
                                                                <option value="Zimbabwe">Zimbabwe</option> 
                                                               </select>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">

                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                                                                <label class="login2 pull-right pull-right-pro">ID No/ Passport</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                               <input type="text" class="form-control" name="idnational" required value=" <?php echo $row['nid']; ?> ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Phone Number</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="phone" required value="<?php echo $row['phone']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">sickness / disability</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" name="disability"  class="form-control" value="<?php echo $row['disability']; ?>">   
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">

                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                                                                <label class="login2 pull-right pull-right-pro">Referee Phone </label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                               <input type="text" name="referee" class="form-control" value="<?php echo $row['referee'];?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Crime</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <textarea name="crime" rows="4" class="form-control" required> <?php echo $row['crime']; ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
										                   <?php 
										                     $id = $_SESSION['username'];
										                        $sql = "SELECT * FROM tbl_users WHERE email = '$id'"; 
										                        $result = mysqli_query($conn, $sql);
										                       while ($row = mysqli_fetch_array($result)) { ?>   
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Police Station</label>
                                                            </div>
                                                        
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" value="<?php $id = $row['policeStatID'];  $sqll = "SELECT * FROM pol_stations WHERE id = '$id'"; 
                        $resultt = mysqli_query($conn, $sqll); $roww = mysqli_fetch_array($resultt); echo $roww['names']; ?>" readonly>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner hidden">
                                                        <div class="row">
										                   <?php 
										                     $id = $_SESSION['username'];
										                        $sql = "SELECT * FROM tbl_users WHERE email = '$id'"; 
										                        $result = mysqli_query($conn, $sql);
										                       while ($row = mysqli_fetch_array($result)) { ?>   
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Police id</label>
                                                            </div>
                                                        
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" name="policeid" class="form-control" value="<?php $id = $row['policeStatID'];  $sqll = "SELECT * FROM pol_stations WHERE id = '$id'"; 
                        $resultt = mysqli_query($conn, $sqll); $roww = mysqli_fetch_array($resultt); echo $roww['id']; ?>" readonly>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <?php 
										                     $id = $_SESSION['username'];
										                        $sql = "SELECT * FROM tbl_users WHERE email = '$id'"; 
										                        $result = mysqli_query($conn, $sql);
										                       while ($row = mysqli_fetch_array($result)) { ?>   
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Officer Name</label>
                                                            </div>
                                                        
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" value="<?php echo $row['firstname']." ".$row['lastname']; ?>" readonly>
                                                              
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner hidden">
                                                        <div class="row">
                                                            <?php 
										                     $id = $_SESSION['username'];
										                        $sql = "SELECT * FROM tbl_users WHERE email = '$id'"; 
										                        $result = mysqli_query($conn, $sql);
										                       while ($roww = mysqli_fetch_array($result)) { ?>   
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Officer Id</label>
                                                            </div>
                                                        
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                               
                                                                <input type="text" class="form-control" name="userid" value="<?php echo $roww['user_id']?>" style>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                     
                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-9"></div>
                                                                <div class="col-lg-3">
                                                                    <div class="login-horizental cancel-wp pull-right">    
                                                                        
                                                                        <input type="submit" name="submit" value="Update Statement" class="btn btn-custon-rounded-four btn-primary">
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