<script> 
$(document).ready(function() {
  $('.datepick').datetimepicker({
    format: 'L',
    ignoreReadonly: true
  });

});
</script>



<div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
     <div class="navbar-inner navbar-inner_1">
        <div class="container">
           <div class="navigation">
             <nav id="colorNav">
			   <ul>
				<li class="green">
				  <a href="#" class="icon-home"></a>
				  <ul>
				  
				  <form class="form-inline my-2 my-lg-0">
	<?php if(isset($_SESSION['username']) && $_SESSION['username']==true){
		?>
		<li class="nav-item"><a class="nav-link" href="home.php">Register&nbsp;</a></li>
		<li class="nav-item"><a class="nav-link" href="logout.php">Logout&nbsp;</a></li>
	<?php } else { ?>
	<li class="nav-item"><a class="nav-link" href="home.php">Register&nbsp;</a></li>
	<li class="nav-item"><a class="nav-link" href="login.php"><span>Login&nbsp;</span></a></li>
	<?php } ?>
	</form>

				  </ul>
				</li>
			   </ul>
             </nav>
           </div>
		   
           <a class="brand" href="index.php"><img src="../images/logo.png" alt="logo1"></a>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
 
		 <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		   </div> 
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary  navbar-collapse">
 <div class="container-fluid">
  <h5 class="navbar-brand" href="#"><?php isset($_SESSION['name'])?></h5>
  <div class="collapse navbar-collapse" id="main_nav">
	<ul class="navbar-nav ms-auto">
	<li class="nav-item"><a class="nav-link" href="index.php"> Home </a></li>
	<!--<li class="nav-item"><a class="nav-link" href="login.php"> Login</a></li>
	<li class="nav-item"><a class="nav-link" href="home.php"> Register </a></li>
	<li class="nav-item"><a class="nav-link" href="#"> Recommendation </a></li>
	<li class="nav-item"><a class="nav-link" href="#"> Feedback </a></li>-->

  <li class="nav-item"><a class="nav-link" href="../myprofile.php"> My Profile </a></li>;
       <li class="nav-item"><a class="nav-link" href="../preference-1.php"> Add Preference </a></li>;
       <li class="nav-item"><a class="nav-link" href="../filter/filter.php"> Filter </a></li>;	
       <li class="nav-item"><a class="nav-link" href="../recom.php"> Recommendation </a></li>;
       <li class="dropdown">
		      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings<span class="caret"></span></a>
		         <ul class="dropdown-menu" role="menu">
		           <li><a href="../changepassword.php">Change Password</a></li>
		            <li><a href="../deactive.php">Deactive Account</a></li>
		                
		                
		              </ul>
		            </li>;
       <li class="nav-item"><a class="nav-link" href="../feedesign.php"> Feedback </a></li>;
	</ul>
  </div>
 </div>
</nav>
</div>
</div>
</div>