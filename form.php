
<!DOCTYPE html>
<html lang="en">
<?php include("comm/head.php") ;?>
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <title>User Registration
</title>

<style>
    .blog-bt{
        margin-top:50px;
    }

    lable{
        font-size: 60px;
    }
</style>
</head>
<body>
    
    
    
    
    
 <!-- Large modal -->
 


    

<div class="">
  <div class="">
    <div class="modal-content">
    <center>

    <div class="logo">
       <img style="width: 200px; ;" src="adm/image/log2.jpg" alt="">
   </div>
    <h4>User Registration</h4>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Gat media GH is a media platform which aims at providing users with the latest news, blogs, entertainment, sports, reviews, and current affairs. It also offers a range of features including videos, articles, podcasts and newsletters. Gat media GH also provides a comprehensive directory of local and international news sources.

<b>Your duties:</b> <br>

As a content creator on Gat media gh, you would create your content and share it across various social media platforms. You can also access a range of tools and resources to help you create and market your content. Gat Media GH also offers you the opportunity to monetize your content. You would be using various AI auto-generated content creation tools which would make your work easier and faster. You must read your articles well before posting them. Any article that makes no sense will be rejected.
<br>

<b>Earnings:</b> <br>

Your earnings would be influenced by many factors including, <br>

Number of posts per day: your earnings per post range from $0.17-$2. <br>

Assuming you posted 10 articles on Monday. Your EPP (earnings per post) would be $0.17x10= $1.7. <br>

Page Views per post: Your earnings per 1000 post views range from $0.01-$1. <br>

Assuming you had 1000 views on Monday. Your PVPP (page view per post) would be $0.01x1000= $10. <br>

3. Monthly bundle bonus: You will be given a monthly bonus of $10 per 130 posts. <br>

Summary: <br>

Let's calculate your basic earnings per month. <br>

Assuming <br>

Total posts in June = 200. <br>

Tolat  post views = 10000 <br>

Your monthly EPP = 200x0.17. <br>

EPP = $34. <br>

Your monthly PVPP = 10000 x 0.01 <br>

PVPP = $100. <br>

This means your total earnings for June are = $34 + $100 + $10 <br>

June earnings = $144. <br>

Please be sure to read and understand the terms and conditions before submitting the form. <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
<br>



             
<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-100 p-3">


    <div class="form-group">
    <input type="hidden" class="form-control" id="title" value=" <?php echo date(" jS \ F Y")  ?>" name="date">
    <input type="hidden" class="form-control" id="title" value=" creator" name="usertype">
     
      <label class="tittle" for="title">First name</label>
      <input type="text" class="form-control" id="title" placeholder="Enter First name" name="fname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Last name</label>
      <input type="text" class="form-control" id="title" placeholder="Enter last name" name="sname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">email</label>
      <input type="email" class="form-control" id="title" placeholder="Enter email" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     
    <div class="form-group">
      <label for="title">Phone-number</label>
      <input type="text" class="form-control" id="title" placeholder="Enter number" name="number" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Password</label>
      <input type="text" class="form-control" id="title" placeholder="Enter password" name="pass" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

 
  
    <label class="form-label" for="form6Example2">User Image</label>
<input type="file" class="form-control-file border" name="image">

      
    <div class="form-group mb-4">
    <label for="pwd">Gender</label>
                   <select class=" form-control w-50"name="gender" id="cat">
                   <option value="">Select  gender</option>
                    <option value="male">Male</option>
                    <option value="female">female</option>
       </select>
      </div>
      <div class="form-group mb-2">
      <label for="title">Search and select your country</label>
      <input type="search" id="searchBox">
    <br>
<select name="location" id="countries">

    <option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antartica">Antarctica</option>
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
<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
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
<option value="Cocos Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo">Congo, the Democratic Republic of the</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cota D'Ivoire">Cote d'Ivoire</option>
<option value="Croatia">Croatia (Hrvatska)</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="France Metropolitan">France, Metropolitan</option>
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
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
<option value="Holy See">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran (Islamic Republic of)</option>
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
<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
<option value="Korea">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon" selected>Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
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
<option value="Micronesia">Micronesia, Federated States of</option>
<option value="Moldova">Moldova, Republic of</option>
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
<option value="Russia">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
<option value="Saint LUCIA">Saint LUCIA</option>
<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia (Slovak Republic)</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
<option value="Span">Spain</option>
<option value="SriLanka">Sri Lanka</option>
<option value="St. Helena">St. Helena</option>
<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syrian Arab Republic</option>
<option value="Taiwan">Taiwan, Province of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos">Turks and Caicos Islands</option>
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
<option value="Vietnam">Viet Nam</option>
<option value="Virgin Islands (British)">Virgin Islands (British)</option>
<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Serbia">Serbia</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Read our term and conditions
</button>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="policy" id="inlineRadio1" value="accept">
  <label class="form-check-label" for="inlineRadio1">Accept</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="policy" id="inlineRadio2" value="Decline">
  <label class="form-check-label" for="inlineRadio2">Decline</label>
</div>



<!-- Sign in button -->
<button class="btn btn-success  mt-2  btn-block" name="submit" type="submit">Submit</button>


    </div>
    </div>
    
</form>
</center>
    </div>
  </div>
</div>


<?php 


include('comm/conn.php');


if(isset($_POST['submit'])){

	$filename = $_FILES['image']['name'];
    $fname=$_POST['fname'];
    $sname=$_POST['sname'];
     $email=$_POST['email'];
     $usertype=$_POST['usertype'];
    $number=$_POST['number'];
     $pass=$_POST['pass'];
    $lacation=$_POST['location'];
    $cat=$_POST['cat'];
    $gender=$_POST['gender'];
    $date=$_POST['date'];
    $policy=$_POST['policy'];



    $sql = "SELECT `email`, `fname` FROM `users` WHERE `fname`='".$fname."' AND `email`='".$email."'";
$result = $conn->query($sql);

if($result->num_rows >= 1) {
  echo"<script>alert('Email already exits please use another email'); window.location='register'</script>";
} else {
 



//returns 'does-this-thing-work-or-not'


	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif","mp3","mp4","avi","mpeg");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'adm/user_pic/'.$filename)){
		// Image db insert sql
		$sql = "INSERT INTO `users`( `fname`, `sname`, `email`, `number`, `image`, `password`, `location`, `gender`, `date`)VALUES ( '$fname','$sname','$email','$number','$filename','$pass','$lacation','$gender',                           '$date')";
		if(mysqli_query($conn,$sql)){
      echo"<script>alert('Your application was successfully submitted. you can now login '); window.location='login'</script>";
		}
		else{
		  echo 'Error: '.mysqli_error($conn);
		}
	}else{
		echo 'Error in uploading file - '.$_FILES['image']['name'].'<br/>';
	}
	}

}


} 

?>


</center>
<!-- Default form subscription --> 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>    
        $('#summernote').summernote({
       
        tabsize: 4,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
            </script>

<script>
    $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>
    
        


<script>
    searchBox = document.querySelector("#searchBox");
countries = document.querySelector("#countries");
var when = "keyup"; //You can change this to keydown, keypress or change

searchBox.addEventListener("keyup", function (e) {
    var text = e.target.value; 
    var options = countries.options; 
    for (var i = 0; i < options.length; i++) {
        var option = options[i]; 
        var optionText = option.text; 
        var lowerOptionText = optionText.toLowerCase();
        var lowerText = text.toLowerCase(); 
        var regex = new RegExp("^" + text, "i");
        var match = optionText.match(regex); 
        var contains = lowerOptionText.indexOf(lowerText) != -1;
        if (match || contains) {
            option.selected = true;
            return;
        }
        searchBox.selectedIndex = 0;
    }
});
</script>


</body>
</html>