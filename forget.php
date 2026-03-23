<?php
 
 require_once('dbconnection.php');
 
 // Check connection
 if($conn === false){ 
 die("ERROR: Could not connect. " 
 . mysqli_connect_error());
 }
 
 if(isset($_POST["check"])){         
     
 
 $username = $_POST['username'];
 
 $answer = $_POST['answer'];
 
     $query = "select ps_answer,ps_password from tbl_registration where ps_email='$username' ";
     $result = mysqli_query($conn,$query);
     $rowcount = mysqli_num_rows($result);
        if ($rowcount > 0){
            $row = mysqli_fetch_row($result);
            $an = $row[0]; 
            $password = $row[1];
            if($an == $answer){
                echo "<script> alert('Your password is $password');document.location.href='forget.php';</script>";
            }
            else{
                echo "<script> alert('Wrong answer');document.location.href='forget.php';</script>";
            }
        }
        
        else{
            echo "<script> alert('User does not existence');document.location.href='forget.php';</script>"; 
        }
    }    
 // Close connection
 mysqli_close($conn);
 ?>

<!DOCTYPE HTML>
<html>
<?php include_once("header.php"); ?>
<body>

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
        <li class="current-page">Forgot password </li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	     
	     <form action="forget.php" method="POST">
		    <div class="form-group">
		      <label for="username">Username <span class="form-required" title="This field is required.">*</span></label>
		      <input type="email" id="username" name="username" value="" size="60" maxlength="60" class="form-text required" required>
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
			    <input type="submit" id="edit-submit" name="check" value="Submit" class="btn_1 submit">
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

