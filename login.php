<?php 
 session_start();
include_once("functions.php");

 ?>
<?php login(); ?>
<!DOCTYPE HTML>
<html>
<?php include_once("header.php"); ?>
<!--<script>
function f1()
{
	var obj=document.getElementById("t1")
	var str="welcome to<u>"+obj.value+"</u>";
	var obj2=document.getElementById("p1");
	obj2.innerHTML=str;
}
</script>-->
<body>
<div class="grid_3">
<?php
if(isset($_GET['message']) == "success"){
	include_once("toast.php");
}

if (isset($_GET['error'])){
	include_once("error.php");
}
?>
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Login</li> 
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	   <form action="" method="post">
  	    <div class="form-item form-type-textfield form-item-name">
	      <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
	      <input type="text" id="edit-name" name="username" value="" size="60" maxlength="60" class="form-text required" required>
	    </div>
	    <div class="form-item form-type-password form-item-pass">
	      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
	      <input type="password" id="edit-pass" name="password" size="60" maxlength="128" class="form-text required" required>
	    </div>
	    <div class="form-actions">
		
		<a href="forget.php">Forgot Password?</a>
		<br>
           
		   <a href="home.php">Don't have an account?</a>
		   <br>

	    	<input type="submit" id="edit-submit" name="op" value="Log in" class="btn_1 submit">
			<input type="reset" id="edit-reset" name="op" value="Clear" class="btn_1 submit">
	    </div>
	   </form>
	  </div>
	  <div class="col-sm-6">
	  </div>
	  <div class="clearfix"> </div>
   </div>
  </div>
    </div>
    
</body>
</html>

