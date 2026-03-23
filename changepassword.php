<?php include_once("functions.php"); ?>
 <?php
 
 require_once('dbconnection.php');
 session_start();
 // Check connection
 if($conn === false){ 
 die("ERROR: Could not connect. " 
 . mysqli_connect_error());
 }
 
 if(isset($_POST["change"])){         
  
 $newpas = $_POST['newpassword'];
 $conpas = $_POST['confirmpassword'];
            
            if ($newpas != $conpas){
                echo "<script> alert('Not matching password...Try again!..');document.location.href='changepassword.php';</script>"; 
            }
            else{
				$gen=$_SESSION["gender"];
						if($gen === "Male"){
						$tab="tbl_groom";
						}
						else{
						$tab="tbl_bride";
						}
				  $query = "UPDATE $tab SET ps_password = '$newpas' WHERE ps_email='{$_SESSION['username']}' ";
                $result = mysqli_query($conn,$query);
                echo "<script> alert('Successfully updated..');document.location.href='changepassword.php';</script>";  
            }
        
     }
 
 // Close connection
 mysqli_close($conn);
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
        <li class="current-page">Change password </li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	     
	     <form action="changepassword.php" method="POST">
		    <div class="form-group">
		      <label for="newpassword">New Password <span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="newpassword" name="newpassword" value="" size="60" maxlength="60" class="form-text required" required>
		    </div>
			<div class="form-group">
		      <label for="confirmpassword">Confirm Password <span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="confirmpassword" name="confirmpassword" value="" size="60" maxlength="60" class="form-text required" required>
		    </div>
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="change" value="Change and Submit" class="btn_1 submit">
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

