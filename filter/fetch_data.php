<?php



//fetch_data.php

session_start();

include('database_connection.php');



if(isset($_POST["action"]))

{
	$gen=$_SESSION["gender"];
    if($gen === "Male"){
	$tab="tbl_bride";
}
else{
	$tab="tbl_groom";
}
	$query = "SELECT * FROM $tab where status=1";

	

	if(isset($_POST["ps_religion"]))

	{


		$religion_filter = implode("','", $_POST["ps_religion"]);

		$query .= " and ps_religion IN('".$religion_filter."')

		";


}
   if(isset($_POST["ps_caste"]))

	{

		$caste_filter = implode("','", $_POST["ps_caste"]);

		$query .= " and ps_caste IN('".$caste_filter."')";

	}
	if(isset($_POST["ps_height"]))

	{

		$height_filter = implode("','", $_POST["ps_height"]);

		$query .= " and ps_height IN('".$height_filter."')";

	}
	if(isset($_POST["ps_mother_language"]))

	{

		$mtongue_filter = implode("','", $_POST["ps_mother_language"]);

		$query .= " and ps_mother_language IN('".$mtongue_filter."')";

	}
	
				  
	if(isset($_POST["ps_qualification"]))

	{

		$qualification_filter = implode("','", $_POST["ps_qualification"]);

		$query .= " and ps_qualification IN('".$qualification_filter."')";

	}
	


	$statement = $connect->prepare($query);

	$statement->execute();

	$result = $statement->fetchAll();

	$total_row = $statement->rowCount();

	$output = '';

	if($total_row > 0)

	{

		foreach($result as $row)

		{

			$output .= '

			<div class="col-sm-4 col-lg-3 col-md-3">

				<div style="border:1px solid #ccc; border-radius:5px; padding:5px; margin-bottom:16px; height:180px;">

					

			

				<p>Religion : '. $row['ps_religion'] .' <br />
					Caste : '. $row['ps_caste'].' <br />
					Height : '. $row['ps_height'].' <br />
					Mother Tongue : '. $row['ps_mother_language'].' <br />
					Oualification : '. $row['ps_qualification'].' <br />
<br>
					 
                <button><a class=" btn-primary" href="../view.php?hpl='. $row['ps_email'].'">View Profile</a></button>
					

				</div>



			</div>

			';

		}

	}

	else

	{

		$output = '<h3>No Data Found</h3>';

	}

	echo $output;

}



?>