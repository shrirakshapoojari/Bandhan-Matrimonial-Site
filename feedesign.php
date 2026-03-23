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

<!DOCTYPE html>
<html>
<?php include_once("header.php"); ?>
<body>
	

<div class="grid_3">
<?php
if(isset($_GET['message']) == "success"){
	include_once("feesuccess.php");
}
?>

  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Give your Feedback</li>
     </ul>
       </div>
  <div class="services">
   	  <div class="col-sm-6 login_left">
	   <form action="feeinsert.php" method="post">
  	    <div class="form-item form-type-textfield form-item-name">
	      <label for="edit-name">Email-Id <span class="form-required" title="This field is required.">*</span></label>
	      <input type="email" name="email" id="email"  size="60" maxlength="60" class="form-text required" required>
	    </div>
	    <div class="form-item form-type-password form-item-pass">
	      <label for="edit-pass">Name <span class="form-required" title="This field is required.">*</span></label>
	      <input type="name" id="name" name="name" size="60" maxlength="128" class="form-text required" required>
	    </div>
           <br>
          <div class="id">
              <label>Date<span class="form-required" title="This field is required.">*</span></label><br>
		      <input type="datetime-local" name="date" id="date"  size="60" maxlength="128" class="form-text required" required >
			
  			</div><br>
            <div class="Comments">
		      <label for="comments">Comments<span class="form-required" title="This field is required.">*</span></label>
              <textarea rows="3" name="comments"  placeholder="Enter details here..." class="form-control required">
              </textarea>
           </div>
           <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
				  <input type="reset" id="edit-reset" name="op" value="Clear" class="btn_1 submit">
			  </div>
		 </form>
	  </div>
	  <div class="col-sm-6">
      <img src="images/image1.jpg" class="left-banner" alt="Responsive image">
	  </div>
           <div class="clearfix"> </div>
       </div>
  </div>
</div>




      
    
        





     
	  
