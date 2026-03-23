<?php include_once("functions.php"); ?>
<?php addPreference(); ?>
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
<?php
  include_once("session.php");  
  include_once("header.php"); ?>
<body>

<div class="grid_3">

  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Partener Preference 1</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	     <form action="" id="registration_form" method="POST">
        <div class="form-group">
		      <label for="age">Age<span class="form-required" title="This field is required.">*</span></label>
              <div class="select-block1">
              <select name="age" required>
				  <option value="" selected hidden>Select Age</option>
	                     <option value="18-21">21-25</option>
		                    <option value="22-26">26-30</option>
		                    <option value="27-31">31-35</option>
		                    <option value="32-36">36-40</option>
		                    <option value="37-41">41-45</option>
		                    
		                                        </select>
            </div>
			 </div>  
			 
			 
			
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
		      <label for="edit-matrial">Marital Status <span class="form-required" title="This field is required.">*</span></label>
              <div class="select-block1">
              <select name="marital" required>
                <option value="" selected hidden>Select Marital Status</option>
                <option value="Unmarried">Unmarried</option>
                <option value="Divorced">Divorced</option>
                <option value="Awaiting Divorced">Awaiting Divorced</option>
                <option value="Widow">Widow</option>
                </select>
            </div>
		    </div>
			 
			 <div class="form-group">
		      <label for="edit-name">Mother Tongue <span class="form-required" title="This field is required.">*</span></label>
              <div class="select-block1">
              <select name="mtongue" required>
              <option value="" selected hidden>Select mother tongue</option>
        <option value="Kannada">Kannada</option>
        <option value="Hindi">Hindi</option>
        <option value="Tulu">Tulu</option>
        <option value="English">English</option>
        <option value="Marathi">Marathi</option>
        <option value="Tamil">Tamil</option>
        <option value="Malayalam">Malayalam</option>
        <option value="Konkani">Konkani</option>
        <option value="Urdu">Urdu</option>
        <option value="Telugu">Telugu</option>
                </select>
            </div>
		    </div>
			 
			 <div class="form-group">
		      <label for="edit-name">Physical Status <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select name="pstatus" required>
                    <option value="" selected hidden>Select Physical Status</option>
                    <option value="Normal">Normal</option>
                    <option value="Physically Challenged">Physically Challenged</option>
                    </select>
                </div>
		    </div>
			 
			 
			 <div class="form-group">
		      <label for="edit-name">Eating Habbits <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select name="ehabbits" required>
                    <option value="" selected hidden>Select Eating Habits</option>
                    <option value="Vegetarian">Vegetarian</option>
                    <option value="Non Vegetarian">Non-Vegetarian</option>
					<option value="Veg/Non Vegetarian">Veg/Non-Vegetarian</option>
                    </select>
                </div>
		    </div>


			 
			 <div class="form-group">
		      <label for="religion">Religion <span class="form-required" title="This field is required.">*</span></label>
              <div class="select-block1">
              <select name="religion" required>
              <option value="" selected hidden>Select Religion</option>
                <option value="Hindu">Hindu</option>
                <option value="Muslim">Muslim</option>
                <option value="Christian">Christian</option>
                </select>
            </div>
		    </div>
			 
			 <div class="form-group">
		      <label for="caste">Caste <span class="form-required" title="This field is required.">*</span></label>
              <div class="select-block1">
              <select name="caste" required>
              <option value="" selected hidden>Select Caste</option>
        <option value="Devadiga">Devadiga</option>
        <option value="Mogaveera">Mogaveera</option>
        <option value="Jogi">Jogi</option>
        <option value="Naik">Naik</option>
        <option value="Shetty">Shetty</option>
        <option value="Poojary">Poojary</option>
        <option value="Kalar">Kalar</option>
        <option value="Kasab">Kasab</option>
        <option value="Nadaf">Nadaf</option>
        <option value="Mehtar">Mehatr</option>
        <option value="Halalkhor">Halalkhor</option>
        <option value="Bangi">Bangi</option>
        <option value="Catholic">Catholic</option>
        <option value="Baptist">Baptist</option>
        <option value="Assyrian">Assyrian</option>
        <option value="Brethren">Brethren</option>
        <option value="Calvinist">Calvinist</option>
        <option value="Apostolic">Apostolic</option>
                </select>
            </div>
		    </div>
			 
              <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Next" class="btn_1 submit">
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


