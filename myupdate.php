<?php
include('dbconnection.php');
session_start();
$email=$_SESSION["username"];

 if(isset($_POST['update'])){
$profile=$_POST['selected_profile'];
$name=$_POST['name'];
$dateOfBirth=$_POST['dateOfBirth'];
$religion=$_POST['selected_religion'];
$caste=$_POST['selected_caste'];
$mtongue=$_POST['selected_mtongue'];
$contact=$_POST['contact'];

$marital=$_POST['selected_marital'];
$country=$_POST['selected_country'];
$state=$_POST['selected_state'];
$city=$_POST['selected_city'];
$height=$_POST['selected_height'];
$pstatus=$_POST['selected_pstatus'];
$qualification=$_POST['selected_qualification'];
$occupation=$_POST['selected_occupation'];
$fstatus=$_POST['selected_fstatus'];
$fvalue=$_POST['selected_fvalue'];
$ehabits=$_POST['selected_ehabits'];
$amyself=$_POST['amyself'];




   
	$gen=$_SESSION["gender"];
	
	
	
	if($gen === "Male"){
						$tab="tbl_groom";
						}
						else{
						$tab="tbl_bride";
						}
	mysqli_query($conn,"UPDATE $tab SET ps_profile = '$profile',ps_name='$name',ps_dob='$dateOfBirth',ps_religion='$religion',ps_caste='$caste',ps_mother_language='$mtongue',ps_contact='$contact',ps_marital='$marital',ps_country='$country',ps_state='$state',ps_city='$city',ps_height='$height',ps_status='$pstatus',ps_qualification='$qualification',ps_occupation='$occupation',ps_fstatus='$fstatus',ps_fvalue='$fvalue',ps_ehabits='$ehabits',ps_amyself='$amyself' WHERE ps_email='$email'");
	header("loaction: myprofile.php");
	echo "<script>alert('Updated Successfuly');document.location.href='mybasic.php';</script>";
}
?>
