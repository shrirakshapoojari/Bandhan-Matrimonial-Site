<?php include_once("functions.php"); ?>
<?php register(); ?>
<!DOCTYPE HTML>
<html>
<?php include_once("header.php"); ?>
<body>
 
<div class="grid_3">
<?php
if(isset($_GET['message']) == "success"){
	include_once("toast.php");
}
?>
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Advance Search</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	     <form action="" method="POST">
                    <div class="form-group">
		      <label for="edit-name">Height <span class="form-required" title="This field is required.">*</span></label>
              <div class="select-block1">
              <select name="height" required>
                <option value="selected hidden">Select Height</option>
                <option value="4.2">4.2</option>
                <option value="5.2">5.2</option>
                <option value="5.7">5.7</option>
                <option value="6.2">6.2</option>
                </select>
            </div>
		    </div>
			 
			 <div class="form-group">
		      <label for="edit-name">Physical Status <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select name="pstatus" required>
                    <option value="selected hidden">Select Physical Status</option>
                    <option value="Normal">Normal</option>
                    <option value="Physically Challenged">Physically Challenged</option>
                    </select>
                </div>
		    </div>
			 
			 <div class="form-group">
		      <label for="edit-name">Qualification <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select name="qualification" required>
                    <option value="selected hidden">Select Qualification</option>
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
                    <option value="selected hidden">Select Occupation</option>
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
                    <option value="selected hidden">Select Family Status</option>
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
		      <label for="edit-name">Eating Habits <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select name="ehabits" required>
                    <option value="" selected hidden>Select Eating Habits</option>
                    <option value="Vegetarian">Vegetarian</option>
                    <option value="Non Vegetarian">Non-Vegetarian</option>
                    </select>
                </div>
		    </div>
   
        <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Search" class="btn_1 submit">
			  </div>
		 </form>
	  </div>
	  <div class="col-sm-6">
	  	<img src="images/home-banner.jpg" class="left-banner" alt="Responsive image">
	  </div>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>
</body>
</html>

