
<?php include_once("functions.php"); ?>
<?php
$id=$_GET['id'];
$type=$_GET['type'];
updatePreference($id,$type);
?>
<?php

   require_once("dbconnection.php");
   session_start();
   $email=$_SESSION["username"];
   ?>

<?php if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
 ?>

<!DOCTYPE HTML>
<html>
<?php include_once("header.php"); ?>
<body>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Partner Preference 2</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	     <form action="" method="POST">
        <div class="form-group">
		      <label for="edit-name">Qualification <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select name="qualification" required>
                    <option value=""selected hidden>Select Qualification</option>
                    <option value="High School/Secondary">High School/Secondary</option>
                    <option value="Degree">Degree</option>
                    <option value="PG">PG</option>
                    <option value="B.Ed">B.Ed</option>
                    </select>
                </div>
		    </div>

            <div class="form-group">
		      <label for="edit-name">Occupation <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select name="occupation" required>
                    <option value=""selected hidden>Select Occupation</option>
                    <option value="Student">Student</option>
                    <option value="Retired">Retired</option>
                    <option value="Not Working">Not Working</option>
                    <option value="Working">Working</option>
                    </select>
                </div>
		    </div>
			 
			 
	  
	  
	  <div class="form-group">
		      <label for="edit-name">Family Status <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select name="fstatus" required>
                    <option value=""selected hidden>Select Family Status</option>
                    <option value="Middle-Class">Middle-Class</option>
                    <option value="Upper-Class">Upper-Class</option>
                    <option value="Rich">Rich</option>
                    <option value="Affluent">Affluent</option>
                    </select>
                </div>
		    </div>
            <div class="form-group">
                <label class="col-sm-4 control-lable" for="sex">Family Type : </label>
                <div class="col-sm-8">
                    <div class="radios">
				        <label for="radio-01" class="label_radio">
				            <input type="radio" name="ftype" value="Joint" checked> Joint
				        </label>
				        <label for="radio-02" class="label_radio">
				            <input type="radio" name="ftype" value="Nuclear"> Nuclear
				        </label>
	                </div>
                </div>
                <div class="clearfix"> </div>
             </div>
            <div class="form-group">
		      <label for="edit-name">Family Value <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select name="fvalue" required>
                    <option value="" selected hidden>Select Family Value</option>
                    <option value="Traditional">Traditional</option>
                    <option value="Arthood">Arthood's</option>
                    <option value="Modern">Modern</option>
                    <option value="Liberal">Liberal</option>
                    </select>
                </div>
		    </div>
	  
	  	       <div class="form-group">
		      <label for="edit-name">Country <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select name="country" required>
                    <option value="" selected hidden>Select Country</option>
                    <option value="India">India</option>
                    <option value="America">America</option>
                    <option value="Singapore">Singapore</option>
                    </select>
                </div>
		    </div>

	        <div class="form-group">
		      <label for="edit-name">Location <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select name="location" required>
                    <option value="" selected hidden>Select location</option>
                    <option value="Udupi">Udupi</option>
                    <option value="Mangalore">Mangalore</option>
                    <option value="Bengalore">Bengalore</option>
					<option value="Powai">Powai</option>
					<option value="Juhu">Juhu</option>
					<option value="Kanheri Caves">Kanheri Caves</option>
					<option value="Kollam">Kollam</option>
					<option value="Kannur">Kannur</option>
					<option value="Ponnani">Ponnani</option>
                    <option value="Washington">Washington</option>
                    <option value="Springfield">Springfield</option>
                    <option value="Greenville">Greenville</option>
                    <option value="Franklin">Franklin</option>
                    <option value="Anson">Anson</option>
                    <option value="Cecil">Cecil</option>
                    <option value="Rafflies">Rafflies</option>
                    </select>
                </div>
		    </div>
			

			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Save & Continue" class="btn_1 submit">
			  </div>
		 </form>
	  </div>
	  <div class="col-sm-6">
    <img src="images/extra-banner.jpg" class="left-banner" alt="Responsive image">
	  </div>
	  <div class="clearfix"> </div>
		  
   </div>
  </div>
</div>
	</body>
</html>



