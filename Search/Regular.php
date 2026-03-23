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
        <li class="current-page">Regular Search</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	     <form action="" method="POST">
                    <div class="form-group">
                <label class="col-sm-4 control-lable" for="sex">Gender : </label>
                <div class="col-sm-8">
                    <div class="radios">
				        <label for="radio-01" class="label_radio">
				            <input type="radio" name="gender" value="Male" checked> Male
				        </label>
				        <label for="radio-02" class="label_radio">
				            <input type="radio" name="gender" value="Female"> Female
				        </label>
	                </div>
                </div>
                <div class="clearfix"> </div>
             </div>
			 
			 <div class="form-group">
		      <label for="edit-name">Marital Status <span class="form-required" title="This field is required.">*</span></label>
              <div class="select-block1">
              <select name="marital" required>
                <option value="selected hidden">Select Marital Status</option>
                <option value="Unmarried">Unmarried</option>
                <option value="Divorced">Divorced</option>
                <option value="Awaiting Divorced">Awaiting Divorced</option>
                <option value="Widow">Widow</option>
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
		      <label for="edit-name">State  <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select name="state" required>
                    <option value="" selected hidden>Select State</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Alabama">Alabama</option>
                    <option value="Alaska">Alaska</option>
                    <option value="Indiana">Indiana</option>
                    <option value="Central Singapore">Central Singapore</option>
                    <option value="North East">North East</option>
                    <option value="South East">South East</option>   
                    </select>
                </div>
		    </div>
            <div class="form-group">
		      <label for="edit-name">City <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select name="city" required>
                    <option value="" selected hidden>Select City</option>
                    <option value="Udupi">Udupi</option>
                    <option value="Mangalore">Mangalore</option>
                    <option value="Bengalore">Bengalore</option>
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
		      <label for="edit-name">Caste <span class="form-required" title="This field is required.">*</span></label>
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
            <div class="form-group">
		      <label for="mtongue">Mother Tongue <span class="form-required" title="This field is required.">*</span></label>
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

