<?php include_once("functions.php"); ?>
<?php
include('dbconnection.php');
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
<?php
$gen=$_SESSION["gender"];




						if($gen === "Male"){
						$tab="tbl_groom";
						}
						else{
						$tab="tbl_bride";
						}
$record=mysqli_query($conn,"SELECT*FROM $tab WHERE ps_email='$email'");
$rows=mysqli_fetch_assoc($record);
?>

<div class="grid_3">
<!--<?php
if(isset($_GET['message']) == "success"){
	include_once("toast.php");
}
?>-->
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Edit Profile</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	     <form action="myupdate.php" method="POST">
        <div class="form-group">
		      <label for="profile">Profile Create For<span class="form-required" title="This field is required.">*</span></label>
              <div class="select-block1">
              
			  <select id="profile" name="profile"
			    onchange="document.getElementById('selected_profile').value=this.options[this.selectedIndex].text">
			  
                <option value="" selected hidden>Select Profile</option>
                <option value="Myself">Myself</option>
                <option value="Brother">Brother</option>
                <option value="Sister">Sister</option>
                <option value="Daughter">Daughter</option>
                </select>
				<input type="hidden"  name="selected_profile" id="selected_profile" value="<?php echo $rows['ps_profile'];?>" readonly>
            </div>
		    </div>
	  	    <div class="form-group">
		      <label for="name">Name <span class="form-required" id="phone_error_message" title="This field is required.">*</span></label>
		      <input type="text" id="name" name="name" value="<?php echo $rows['ps_name'];?>" pattern="[a-zA-Z]+" size="60" maxlength="60" class="form-text required" required>
		    </div>
            
			  <div class="form-group">
		      <label for="dateOfBirth">Date of Birth <span class="form-required" title="This field is required.">*</span></label>
			  <div class="input-group datepick">
		      <input type="text" class="form-control" name="dateOfBirth" value="<?php echo $rows['ps_dob'];?>" id="dateOfBirth" required readonly>
			  <div class="input-group-addon">
      				<span class="glyphicon glyphicon-calendar"></span>
    			</div>
  			</div>
		    </div>
             <div class="form-group">
		      <label for="religion">Religion <span class="form-required" title="This field is required.">*</span></label>
              <div class="select-block1">
              
			  <select id="religion" name="religion"
			    onchange="document.getElementById('selected_religion').value=this.options[this.selectedIndex].text">
			  
              <option value="" selected hidden>Select Religion</option>
                <option value="Hindu">Hindu</option>
                <option value="Muslim">Muslim</option>
                <option value="Christian">Christian</option>
                </select>
				<input type="hidden"  name="selected_religion" id="selected_religion" value="<?php echo $rows['ps_religion'];?>" readonly>
            </div>
		    </div>
			
            <div class="form-group">
		      <label for="edit-name">Caste <span class="form-required" title="This field is required.">*</span></label>
              <div class="select-block1">
              
			  <select id="caste" name="caste"
			    onchange="document.getElementById('selected_caste').value=this.options[this.selectedIndex].text">
			 
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
				<input type="hidden"  name="selected_caste" id="selected_caste" value="<?php echo $rows['ps_caste'];?>" readonly>
            </div>
		    </div>
			<div class="form-group">
		      <label for="mtongue">Mother Tongue <span class="form-required" title="This field is required.">*</span></label>
              <div class="select-block1">
              
			  <select id="mtongue" name="mtongue"
			    onchange="document.getElementById('selected_mtongue').value=this.options[this.selectedIndex].text">
			 
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
				<input type="hidden"  name="selected_mtongue" id="selected_mtongue" value="<?php echo $rows['ps_mother_language'];?>" readonly>
            </div>
		    </div>
            
            <div class="form-group">
		      <label for="contact">Contact Number <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="contact" name="contact" value="<?php echo $rows['ps_contact'];?>" pattern="[1-9]{1}[0-9]{9}" size="10" maxlength="10" minlength="10" class="form-text required" required>
		    </div>
			
		   <!-- <div class="form-group">
		      <label for="email">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="email" id="email" name="email" value="<?php echo $rows['ps_email'];?>" size="60" maxlength="60" class="form-text required" required>
		    </div>-->
			<div class="form-group">
		      <label for="edit-name">Marital Status <span class="form-required" title="This field is required.">*</span></label>
              <div class="select-block1">
             <select id="marital" name="marital"
			    onchange="document.getElementById('selected_marital').value=this.options[this.selectedIndex].text">
			 
                <option value=""selected hidden>Select Marital Status</option>
                <option value="Unmarried">Unmarried</option>
                <option value="Divorced">Divorced</option>
                <option value="Awaiting Divorced">Awaiting Divorced</option>
                <option value="Widow">Widow</option>
                </select>
				<input type="hidden"  name="selected_marital" id="selected_marital" value="<?php echo $rows['ps_marital'];?>" readonly>
            </div>
		    </div>
              <div class="form-group">
		      <label for="edit-name">Country <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select id="country" name="country"
			    onchange="document.getElementById('selected_country').value=this.options[this.selectedIndex].text">
			 
                    <option value="" selected hidden>Select Country</option>
                    <option value="India">India</option>
                    <option value="America">America</option>
                    <option value="Singapore">Singapore</option>
                    </select>
					<input type="hidden"  name="selected_country" id="selected_country" value="<?php echo $rows['ps_country'];?>" readonly>
                </div>
		    </div>
            <div class="form-group">
		      <label for="edit-name">State  <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                <select id="state" name="state"
			    onchange="document.getElementById('selected_state').value=this.options[this.selectedIndex].text">
			 
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
					<input type="hidden"  name="selected_state" id="selected_state" value="<?php echo $rows['ps_state'];?>" readonly>
                </div>
		    </div>
            <div class="form-group">
		      <label for="edit-name">City <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select id="city" name="city"
			    onchange="document.getElementById('selected_city').value=this.options[this.selectedIndex].text">
			 
                    <option value="" selected hidden>Select City</option>
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
					<input type="hidden"  name="selected_city" id="selected_city" value="<?php echo $rows['ps_city'];?>" readonly>
                </div>
		    </div>
		

			<div class="form-group">
		      <label for="edit-name">Height <span class="form-required" title="This field is required.">*</span></label>
              <div class="select-block1">
              
			  <select id="height" name="height"
			    onchange="document.getElementById('selected_height').value=this.options[this.selectedIndex].text">
			 
                <option value=""selected hidden>Select Height</option>
                <option value="4.2">4.2</option>
                <option value="5.2">5.2</option>
                <option value="5.7">5.7</option>
                <option value="6.2">6.2</option>
                </select>
				<input type="hidden"  name="selected_height" id="selected_height" value="<?php echo $rows['ps_height'];?>" readonly>
            </div>
		    </div>
			 
            <div class="form-group">
		      <label for="edit-name">Physical Status <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select id="pstatus" name="pstatus"
			    onchange="document.getElementById('selected_pstatus').value=this.options[this.selectedIndex].text">
			 
                    <option value=""selected hidden>Select Physical Status</option>
                    <option value="Normal">Normal</option>
                    <option value="Physically Challenged">Physically Challenged</option>
                    </select>
					<input type="hidden"  name="selected_pstatus" id="selected_pstatus" value="<?php echo $rows['ps_status'];?>" readonly>
                </div>
		    </div>
            <div class="form-group">
		      <label for="edit-name">Qualification <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select id="qualification" name="qualification"
			    onchange="document.getElementById('selected_qualification').value=this.options[this.selectedIndex].text">
			 
                    <option value=""selected hidden>Select Qualification</option>
                    <option value="High School/Secondary">High School/Secondary</option>
                    <option value="Degree">Degree</option>
                    <option value="PG">PG</option>
                    <option value="B.Ed">B.Ed</option>
                    </select>
					<input type="hidden"  name="selected_qualification" id="selected_qualification" value="<?php echo $rows['ps_qualification'];?>" readonly>
                </div>
		    </div>
            <div class="form-group">
		      <label for="edit-name">Occupation <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select id="occupation" name="occupation"
			    onchange="document.getElementById('selected_occupation').value=this.options[this.selectedIndex].text">
			 
                    <option value=""selected hidden>Select Occupation</option>
                    <option value="Student">Student</option>
                    <option value="Retired">Retired</option>
                    <option value="Not Working">Not Working</option>
                    <option value="Working">Working</option>
                    </select>
					<input type="hidden"  name="selected_occupation" id="selected_occupation" value="<?php echo $rows['ps_occupation'];?>" readonly>
                </div>
		    </div>
            <div class="form-group">
		      <label for="edit-name">Family Status <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    <select id="fstatus" name="fstatus"
			    onchange="document.getElementById('selected_fstatus').value=this.options[this.selectedIndex].text">
			 
                    <option value=""selected hidden>Select Family Status</option>
                    <option value="Middle-Class">Middle-Class</option>
                    <option value="Upper-Class">Upper-Class</option>
                    <option value="Rich">Rich</option>
                    <option value="Affluent">Affluent</option>
                    </select>
					<input type="hidden"  name="selected_fstatus" id="selected_fstatus" value="<?php echo $rows['ps_fstatus'];?>" readonly>
                </div>
		    </div>
              <div class="form-group">
		      <label for="edit-name">Family Value <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                   <select id="fvalue" name="fvalue"
			    onchange="document.getElementById('selected_fvalue').value=this.options[this.selectedIndex].text">
			 
                    <option value="" selected hidden>Select Family Value</option>
                    <option value="Traditional">Traditional</option>
                    <option value="Arthood">Arthood's</option>
                    <option value="Modern">Modern</option>
                    <option value="Liberal">Liberal</option>
                    </select>
					<input type="hidden"  name="selected_fvalue" id="selected_fvalue" value="<?php echo $rows['ps_fvalue'];?>" readonly>
                </div>
		    </div>
            <div class="form-group">
		      <label for="edit-name">Eating Habits <span class="form-required" title="This field is required.">*</span></label>
                <div class="select-block1">
                    
					<select id="ehabits" name="ehabits"
			    onchange="document.getElementById('selected_ehabits').value=this.options[this.selectedIndex].text">
			 
                    <option value="" selected hidden>Select Eating Habits</option>
                    <option value="Vegetarian">Vegetarian</option>
                    <option value="Non Vegetarian">Non-Vegetarian</option>
					<option value="Veg/Non Vegetarian">Veg/Non-Vegetarian</option>
                    </select>
					<input type="hidden"  name="selected_ehabits" id="selected_ehabits" value="<?php echo $rows['ps_ehabits'];?>" readonly>
                </div>
		    </div>
		    <div class="form-group">
		      <label for="edit-name">About Myself <span class="form-required" title="This field is required.">*</span></label>
              <textarea rows="3" name="amyself"  value="<?php echo $rows['ps_amyself'];?>"  placeholder="Enter details here..."  class="form-control required">
              </textarea>
		    </div>
		
			
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="update" value="update" class="btn_1 submit">
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

