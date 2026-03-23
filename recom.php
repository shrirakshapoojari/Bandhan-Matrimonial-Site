<?php include_once("functions.php"); ?>
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
<?php include_once("header.php"); ?>
<body>
<?php
   
  /* $gen=$_SESSION["gender"];
   
if($gen === "Male"){
	$tab="tbl_bride_preference";
}
else{
	$tab="tbl_groom_preference";
}
$sql="SELECT * FROM $tab ";
$result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
			$religion= $row['ps_religion'];
			$caste= $row['ps_caste'];
            $height= $row['ps_height'];
            $qualification= $row['ps_qualification'];
			$occupation= $row['ps_occupation'];
			
		}*/
     require_once("dbconnection.php");
	 $gen=$_SESSION["gender"];
   
if($gen === "Male"){
$sql1="SELECT * FROM tbl_groom_preference a,tbl_bride b WHERE a.ps_religion=b.ps_religion and a.ps_caste=b.ps_caste and a.ps_height=b.ps_height and a.ps_qualification=b.ps_qualification and a.ps_occupation=b.ps_occupation";		
}
else{
	$sql1="SELECT * FROM tbl_bride_preference a,tbl_groom b WHERE a.ps_religion=b.ps_religion and a.ps_caste=b.ps_caste and a.ps_height=b.ps_height and a.ps_qualification=b.ps_qualification and a.ps_occupation=b.ps_occupation";		
}
	 
	//$sql1="SELECT * FROM `$tab` WHERE ps_religion='$religion' or ps_caste='$caste'or ps_height='$height' or ps_qualification='$qualification' or ps_occupation='$occupation'";

$result1 = mysqli_query($conn,$sql1);
        if ($result1->num_rows > 0) {
           //$row = mysqli_fetch_assoc($result);
		   //echo "$height";
			
	  
			
		
		
           
?>
<center>
<br>
<h2 ><b>Recommendation</b></h2>
<form class="" action="rec.php" method="post">
<table class="table " width="70%" border="2">
<thead class="thread-light">

<tr>
<td><b><center>Email</center></b></td>
<td><b><center>Name</center></b></td>
<td><b><center>Religion</center></b></td>
<td><b><center>Caste</center></b></td>
<td><b><center>Height</center></b></td>
<td><b><center>Qualification</center></b></td>
<td><b><center>Occupation</center></b></td>
<td><b><center>View Profile</center></b></td>
</tr>
</thead>
<?php while($rows=$result1->fetch_assoc()){?>
<thead class="thread-light">
<tr>

		<td><?php echo $rows['ps_email'];?></td>
		<td><?php echo $rows['ps_name'];?></td>
		<td><?php echo $rows['ps_religion'];?></td>
		<td><?php echo $rows['ps_caste'];?></td>
		<td><?php echo $rows['ps_height'];?></td>
		<td><?php echo $rows['ps_qualification'];?></td>
		<td><?php echo $rows['ps_occupation'];?></td>
		<td><center><button ><a class="btn btn-primary" href="viewprofile.php?hpl=<?php echo $rows['ps_email'];?>">View</a></button></</td>
		
 	

</tr>
</thead>
</center>
<?php } ?>
		<?php }
		else{
			echo "<center><h3>No Data Found</h3></center>" ;
		}
 mysqli_close($conn); ?>
		
		
		
</table>
</form>
</body>
</html>
		
		
		



				   