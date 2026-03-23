<?php include_once("functions.php"); ?>
<?php include('dbconnection.php');
session_start();
$email=$_SESSION["username"];
?>
<?php if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
 ?>
<?php 

$gen=$_SESSION["gender"];
if($gen === "Male"){
						$tab="tbl_groom";
						}
						else{
						$tab="tbl_bride";
						}
$query="SELECT sum(status) FROM $tab";
$result=$conn->query($query);
if($result->num_rows===1)
{
	if($gen === "Male"){
						$tab="tbl_groom";
						}
						else{
						$tab="tbl_bride";
						}
	$sql=mysqli_query($conn,"UPDATE $tab SET status =0 WHERE ps_email='$email' "); 
	echo "<script> alert('Deactivated successfully');document.location.href='myprofile.php';</script>"; 
}
else{
	
	echo "<script> alert('Already deactivated');document.location.href='myprofile.php';</script>"; 
}

?>
