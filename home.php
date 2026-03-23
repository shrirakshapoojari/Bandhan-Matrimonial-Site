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
        <li class="current-page">Register Step 1</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	     <form action="" method="POST">
        <div class="form-group">
		      <label for="profile">Profile Create For<span class="form-required" title="This field is required.">*</span></label>
              <div class="select-block1">
              <select name="profile" required>
                <option value="" selected hidden>Select Profile</option>
                <option value="Myself">Myself</option>


                <option value="Brother">Brother</option>
                <option value="Sister">Sister</option>
                <option value="Daughter">Daughter</option>
                </select>
            </div>
		    </div>
	  	    <div class="form-group">
		      <label for="name">Name <span class="form-required" id="phone_error_message" title="This field is required.">*</span></label>
		      <input type="text" id="name" name="name" value="" pattern="[a-zA-Z]+" size="60" maxlength="60" class="form-text required" required>
		    </div>
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
		      <label for="dateOfBirth">Date of Birth <span class="form-required" title="This field is required.">*</span></label>
			  <div class="input-group datepick">
		      <input type="text" class="form-control" name="dateOfBirth" id="dateOfBirth" required readonly>
			  <div class="input-group-addon">
      				<span class="glyphicon glyphicon-calendar"></span>
    			</div>
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
            <div class="form-group">
		      <label for="contact">Contact Number <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="contact" name="contact" pattern="[1-9]{1}[0-9]{9}" size="10" maxlength="10" minlength="10" class="form-text required" required>
		    </div>
			<!--<div class="form-group">
		      <label for="name">Profile Image<span class="form-required" id="phone_error_message" title="This field is required.">*</span></label>
		      <input type="file" id="image" name="image" class="box" value="" accept="image/jpg, image/jpeg, image/png" required>
		    
			</div>-->
		    <div class="form-group">
		      <label for="email">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="email" id="email" name="email" value="" size="60" maxlength="60" class="form-text required" required>
		    </div>
            <div class="form-group">
		      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="edit-pass" name="password" size="60" minlength="8" maxlength="8" class="form-text required" required>
		    </div>
			
			<div class="form-group">
		      <label for="security">Security Question <span class="form-required" title="This field is required.">*</span></label>
              <div class="select-block1">
              <select name="security" required>
              <option value="" selected hidden>Select security question</option>
                <option value="Who is your hero?">Who is your hero?</option>
                <option value="If you could live anywhere, where would it be?">If you could live anywhere, where would it be?</option>
                <option value="What is your favorite family vaction?">What is your favorite family vaction?</option>
				<option value="What really makes you angry?">What really makes you angry?</option>
				<option value="What motivates you to work?">What motivates you to work?</option>
                </select>
            </div>
		    </div>
			<div class="form-group">
		      <label for="answer">Answer <span class="form-required" id="phone_error_message" title="This field is required.">*</span></label>
		      <input type="text" id="answer" name="answer" value="" pattern="[a-zA-Z]+" size="60" maxlength="60" class="form-text required" required>
		    </div>
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="update" value="Next" class="btn_1 submit">
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

