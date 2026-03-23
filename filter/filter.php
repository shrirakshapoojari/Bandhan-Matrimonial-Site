<?php include_once("../functions.php"); ?>
<?Php



session_start();


include('database_connection.php');


?>
<?php if(isloggedin()){
 //do nothing stay here
} else{
   header("location:../login.php");
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Filter</title>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
	</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
	
        
        	<br />
			
        	<h2 align="center">Preference Partner</h2>
        	<br />
            <div class="col-md-3">                				
								
                <div class="list-group">
					<h3>Religion</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					 
					<?php
						$gen=$_SESSION["gender"];
						if($gen === "Male"){
						$tab="tbl_bride";
						}
						else{
						$tab="tbl_groom";
						}
                    $query = "SELECT DISTINCT(ps_religion) FROM $tab";
					
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ps_religion" value="<?php echo $row['ps_religion']; ?>"  > <?php echo $row['ps_religion']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>
				<div class="list-group">
					<h3>Caste</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php
						$gen=$_SESSION["gender"];
						if($gen === "Male"){
						$tab="tbl_bride";
						}
						else{
						$tab="tbl_groom";
						}
                    $query = "SELECT DISTINCT(ps_caste) FROM $tab";
					
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ps_caste" value="<?php echo $row['ps_caste']; ?>"  > <?php echo $row['ps_caste']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>
                <div class="list-group">
					<h3>Height</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php
						$gen=$_SESSION["gender"];
						if($gen === "Male"){
						$tab="tbl_bride";
						}
						else{
						$tab="tbl_groom";
						}
                    $query = "SELECT DISTINCT(ps_height) FROM $tab";
					
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ps_height" value="<?php echo $row['ps_height']; ?>"  > <?php echo $row['ps_height']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>
				<div class="list-group">
					<h3>Mother Tongue</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php
						$gen=$_SESSION["gender"];
						if($gen === "Male"){
						$tab="tbl_bride";
						}
						else{
						$tab="tbl_groom";
						}
                    $query = "SELECT DISTINCT(ps_mother_language) FROM $tab";
					
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ps_mother_language" value="<?php echo $row['ps_mother_language']; ?>"  > <?php echo $row['ps_mother_language']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>




				<div class="list-group">
					<h3>Qualification</h3>
                    <?php
					
                    $query = "SELECT DISTINCT(ps_qualification) FROM $tab ";

                    
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector  ps_qualification" value="<?php echo $row['ps_qualification']; ?>" > <?php echo $row['ps_qualification']; ?> </label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
				
				
            </div>

            <div class="col-md-9">
            	<br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
<style>
#loading
{
	text-align:center; 
	background: url('loader.gif') no-repeat center; 
	height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
      
        var ps_religion = get_filter('ps_religion');
		var ps_caste = get_filter('ps_caste');
		var ps_height = get_filter('ps_height');  
		var ps_mother_language = get_filter('ps_mother_language');
        var ps_qualification = get_filter('ps_qualification');

        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action,ps_religion:ps_religion,ps_caste:ps_caste,ps_height:ps_height,ps_mother_language:ps_mother_language,ps_qualification:ps_qualification},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    

});
</script>

</body>

</html>
