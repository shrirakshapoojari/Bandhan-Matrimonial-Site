<?php include_once("functions.php"); ?>
<?php
 
 include('dbconnection.php');
 session_start();
 $email=$_GET['hpl'];
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
$gen=$_SESSION["gender"];
						if($gen === "Male"){
						$tab="tbl_bride";
						}
						else{
						$tab="tbl_groom";
						}
$record=mysqli_query($conn,"SELECT*FROM $tab WHERE ps_email='$email'");
$rows=mysqli_fetch_array($record);
?>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">View Profile</li>
     </ul>
   </div>
  
   	 	
   	 	
   	        <div class="col-sm-4 row_2">
				
			
			
				<table class="table_working_hours">
				
		        	<tbody
					<tr class="opened_1">
							<td class="day_label" >Name  :</td>
							<td class="day_value"><?php echo $rows['ps_name'];?></td>
						</tr>
					
					 <tr class="opened_1">
							<td class="day_label">Profile Create for :</td>
							<td class="day_value"><?php echo $rows['ps_profile'];?></td>
						</tr>

						<tr class="opened_1">
							<td class="day_label">Gender  :</td>
							<td class="day_value"><?php echo $rows['ps_gender'];?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">DOB :</td>
							<td class="day_value"><?php echo $rows['ps_dob'];?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">Religion :</td>
							<td class="day_value"><?php echo $rows['ps_religion'];?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">Caste :</td>
							<td class="day_value"><?php echo $rows['ps_caste'];?></td>
						</tr>
					  			
						<tr class="opened_1">
							<td class="day_label">Height :</td>
							<td class="day_value"><?php echo $rows['ps_height'];?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">Mother Tongue :</td>
							<td class="day_value"><?php echo $rows['ps_mother_language'];?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">Contact Number :</td>
							<td class="day_value"><?php echo $rows['ps_contact'];?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">Email:</td>
							<td class="day_value"><?php echo $rows['ps_email'];?></td>
						</tr>	
                        <tr class="opened_1">
							<td class="day_label">Caste :</td>
							<td class="day_value"><?php echo $rows['ps_caste'];?></td>
						</tr>						
					  	
						<tr class="opened_1">
							<td class="day_label">Marital :</td>
							<td class="day_value"><?php echo $rows['ps_marital'];?></td>
						</tr>
						
						<tr class="opened_1">
							<td class="day_label">Country :</td>
							<td class="day_value"><?php echo $rows['ps_country'];?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">State :</td>
							<td class="day_value"><?php echo $rows['ps_state'];?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">City :</td>
							<td class="day_value"><?php echo $rows['ps_city'];?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">Height :</td>
							<td class="day_value"><?php echo $rows['ps_height'];?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">Physical Status :</td>
							<td class="day_value"><?php echo $rows['ps_status'];?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">Qualification :</td>
							<td class="day_value"><?php echo $rows['ps_qualification'];?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">Occupation :</td>
							<td class="day_value"><?php echo $rows['ps_occupation'];?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">Family Status :</td>
							<td class="day_value"><?php echo $rows['ps_fstatus'];?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">Family Type :</td>
							<td class="day_value"><?php echo $rows['ps_ftype'];?></td>
						</tr>
					    <tr class="opened_1">
							<td class="day_label">Family Value :</td>
							<td class="day_value"><?php echo $rows['ps_fvalue'];?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">Eating Habbits:</td>
							<td class="day_value"><?php echo $rows['ps_ehabits'];?></td>
						</tr>
						<tr class="opened_1">
							<td class="day_label">About Myself :</td>
							<td class="day_value"><?php echo $rows['ps_amyself'];?></td>
						</tr>
						
					  						    
				    </tbody>
					
				</table>
				

	  
	  
				
			<div class="clearfix"> </div>
			
			
		</div>
		<div class="col-sm-6">
	  	<img src="images/home-banner.jpg"  class="left-banner" alt="Responsive image">
	  </div>
	  <div class="clearfix"> </div>
		
		
</body>
		</html>	