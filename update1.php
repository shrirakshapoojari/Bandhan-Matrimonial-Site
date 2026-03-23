<?php
include('dbconnection.php');
session_start();
$email=$_SESSION["username"];

 if(isset($_POST['update'])){
$age=$_POST['selected_age'];
$height=$_POST['selected_height'];
$marital=$_POST['selected_marital'];
$mtongue=$_POST['selected_mtongue'];
$pstatus=$_POST['selected_pstatus'];
$ehabbits=$_POST['selected_ehabbits'];
$religion=$_POST['selected_religion'];
$caste=$_POST['selected_caste'];
$qualification=$_POST['selected_qualification'];
$occupation=$_POST['selected_occupation'];

$fstatus=$_POST['selected_fstatus'];
$fvalue=$_POST['selected_fvalue'];
$country=$_POST['selected_country'];
$location=$_POST['selected_location'];


   
	$gen=$_SESSION["gender"];
	
	
	if($gen === "Male"){
						$tab="tbl_groom_preference";
						}
						else{
						$tab="tbl_bride_preference";
						}
	mysqli_query($conn,"UPDATE $tab SET ps_age = '$age' , ps_height = '$height' , ps_marital = '$marital',ps_mtongue = '$mtongue',ps_pstatus = '$pstatus',ps_ehabbits = '$ehabbits',ps_religion = '$religion',ps_caste = '$caste',ps_qualification='$qualification',ps_occupation='$occupation',ps_fstatus='$fstatus',ps_fvalue='$fvalue',ps_country='$country',ps_location='$location' WHERE ps_email='$email'");
	header("loaction: ebasic.php");
	//echo "<script>alert('update successfully')</script>";
	echo "<script>alert('Updated Successfuly');document.location.href='ebasic.php';</script>" ;
}
?>
