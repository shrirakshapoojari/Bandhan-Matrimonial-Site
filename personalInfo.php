<?php include_once("functions.php"); ?>
<?php
$id=$_GET['id'];
$type=$_GET['type'];
updatePersonalInfo($id,$type);
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
        <li class="current-page">Register Step 3</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	     <form action="" method="POST">
        <div class="form-group">
		      <label for="height">Height<span class="form-required" title="This field is required.">*</span></label>
              <div class="select-block1">
              <select name="height" required>
				  <option value="" selected hidden>Select Height</option>
	                 <option value="4.5-5.0">4.5-5.0</option>
		                    <option value="5.1-5.5">5.1-5.5</option>
		                    <option value="5.6-6.0">5.6-6.0</option>
		                    <option value="6.1-6.5">6.1-6.5</option>
		                    <option value="6.5-7.0">6.5-7.0</option>
						                        </select>
                   </div>
                  </div>
		    <div class="form-group">
		      <label for="edit-name">Physical Status <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select name="pstatus" required>
                    <option value=""selected hidden>Select Physical Status</option>
                    <option value="Normal">Normal</option>
                    <option value="Physically Challenged">Physically Challenged</option>
                    </select>
                </div>
		    </div>
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
		      <label for="edit-name">Eating Habits <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select name="ehabits" required>
                    <option value="" selected hidden>Select Eating Habits</option>
                    <option value="Vegetarian">Vegetarian</option>
                    <option value="Non Vegetarian">Non-Vegetarian</option>
					<option value="Veg/Non Vegetarian">Veg/Non-Vegetarian</option>
                    </select>
                </div>
		    </div>
		    <div class="form-group">
		      <label for="edit-name">About Myself <span class="form-required" title="This field is required.">*</span></label>
              <textarea rows="3" name="amyself"  placeholder="Enter details here..." class="form-control required">
              </textarea>
		    </div>
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value=" Complete Register" class="btn_1 submit">
			  </div>
		 </form>
	  </div>
	  <div class="col-sm-6">
      <img src="images/personal-banner.jpg" class="left-banner" alt="Responsive image">
	  </div>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>


