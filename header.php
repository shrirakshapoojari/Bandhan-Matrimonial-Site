<head>
<title>Find Your Perfect Partner - Bandhan Matrimony | Register :: Bandhan Matrimony
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include_once("functions.php"); ?>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script language="javascript" src="js/jquery.min.js"></script>
<!---*** End: JQuery 3.3.1 version. ***--->
<!---*** Start: Bootstrap 3.3.7 version files. ***--->
<script language="javascript" src="js/bootstrap.min.js"></script>
<script language="javascript" src="js/moment.js"></script>
<script language="javascript" src="js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
</head>
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
		   
           <a class="brand" href="index.php"><img src="images/logo.png" alt="logo1"></a>
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
  <?php checkSessionExists() ?>
	</ul>
	  </div>
 </div>
</nav>
</div>
</div>
</div>