<?php
function mysqlexec($sql){
	$host="localhost";
	$username="root";
	$password="";
	$db_name="db_matrimonial"; 
	$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");
	mysqli_select_db($conn,"$db_name")or die("cannot select DB");
	if($result = mysqli_query($conn, $sql)){
		return $result;
	}
	else{
		echo mysqli_error($conn);
	}
}

function register(){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $profile=$_POST['profile'];
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $dob=$_POST['dateOfBirth'];
        $religion=$_POST['religion'];
        $caste=$_POST['caste'];
        $mtongue=$_POST['mtongue'];
        $contact=$_POST['contact'];
        $email=$_POST['email'];
        $pwd=$_POST['password'];
		$security=$_POST['security'];
		$answer=$_POST['answer'];
		
		
       if(checkDob($dob)){
		   
        require_once("dbconnection.php");
        if($gender === "Male"){
            $sql = "INSERT INTO
            tbl_groom(ps_profile,ps_name,ps_gender,ps_dob,ps_religion,ps_caste,ps_mother_language,ps_contact,ps_email,ps_password,ps_question,ps_answer) 
            VALUES ('$profile','$name','$gender','$dob','$religion','$caste','$mtongue','$contact','$email','$pwd','$security','$answer')";
        }else{
            $sql = "INSERT INTO
            tbl_bride(ps_profile,ps_name,ps_gender,ps_dob,ps_religion,ps_caste,ps_mother_language,ps_contact,ps_email,ps_password,ps_question,ps_answer) 
            VALUES ('$profile','$name','$gender','$dob','$religion','$caste','$mtongue','$contact','$email','$pwd','$security','$answer')";
        }
        if (mysqli_query($conn,$sql)) {
            $id = mysqli_insert_id($conn);
           /* echo "Successfully Registered";*/
            echo "<script> window.location=\"extraInfo.php?id=$email&type=$gender\"</script>";
        } else{
			echo "<script>alert('Already registed');document.location.href='home.php';</script>" . $sql . "<br>" . $conn->error;
		}
       }else{
         echo "<script>alert('Date of birth should be above 21 to register');document.location.href='home.php';</script>";
		

		 
       }
        
    }
}
function checkDob($dob){
    $isValid = true;
    $dateOfBirth = $dob;
    $today = date("m/d/Y");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));

    if($diff->format('%y%') < 21){
        $isValid = false;
    }
    return $isValid;
}


function updateExtraInfo($id,$type){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $marital=$_POST['marital'];
        $willing=$_POST['willing'];
        $country=$_POST['country'];
        $state=$_POST['state'];
        $city=$_POST['city'];
        if($type === "Male"){
        $sql = "UPDATE
                    tbl_groom 
                SET
                ps_marital = '$marital',
                ps_willing='$willing',
                ps_country = '$country',
                ps_state = '$state',
                ps_city = '$city'
                WHERE
                ps_email = '$id'";
        }else{
            $sql = "UPDATE
            tbl_bride 
            SET
            ps_marital = '$marital',
            ps_willing='$willing',
            ps_country = '$country',
            ps_state = '$state',
            ps_city = '$city'
            WHERE
            ps_email = '$id'";
        }
        $result = mysqlexec($sql);
        if ($result) {
            /*echo "Successfully Registered";*/
            echo "<script> window.location=\"personalInfo.php?id=$id&type=$type\"</script>";
        }
        else{
			echo "<script>alert('Already registed');document.location.href='home.php';</script>" . $sql . "<br>" . $conn->error;
		}
    }
}

function updatePersonalInfo($id,$type){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $height=$_POST['height'];
        $pstatus=$_POST['pstatus'];
        $qualification=$_POST['qualification'];
        $occupation=$_POST['occupation'];
        $fstatus=$_POST['fstatus'];
        $ftype=$_POST['ftype'];
        $fvalue=$_POST['fvalue'];
        $ehabits=$_POST['ehabits'];
        $amyself=$_POST['amyself'];
	
        if($type === "Male"){
        $sql = "UPDATE
                    tbl_groom 
                SET
                ps_height = '$height',
                ps_status='$pstatus',
                ps_qualification = '$qualification',
                ps_occupation = '$occupation',
                ps_fstatus = '$fstatus',
                ps_ftype = '$ftype',
                ps_fvalue='$fvalue',
                ps_ehabits = '$ehabits',
                ps_amyself = '$amyself'
                WHERE
                ps_email = '$id'";
        }else{
            $sql = "UPDATE
                    tbl_bride 
                SET
                ps_height = '$height',
                ps_status='$pstatus',
                ps_qualification = '$qualification',
                ps_occupation = '$occupation',
                ps_fstatus = '$fstatus',
                ps_ftype = '$ftype',
                ps_fvalue='$fvalue',
                ps_ehabits = '$ehabits',
                ps_amyself = '$amyself'
                WHERE
                ps_email = '$id'";
        }
		
        $result = mysqlexec($sql);
        if ($result) {
           // echo "Profile Registered Successfully";
            echo "<script> window.location=\"login.php?message=success\"</script>";
        }
        else{
			echo "<script>alert('Already registed');document.location.href='home.php';</script>" . $sql . "<br>" . $conn->error;
		}
    }
}

function getMessage(){
    return "<div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
    <div class='toast-header'>
      <img src='...' class='rounded mr-2' alt='...'>
      <strong class='mr-auto'>Bootstrap</strong>
      <small class='text-muted'>just now</small>
      <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div>
    <div class='toast-body'>
      See? Just like this.
    </div>
  </div>";
}

function login(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql = "SELECT * FROM `tbl_registration` WHERE ps_email='$username' and ps_password='$password'";
        $result = mysqlexec($sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $email= $row['ps_email'];
            $gender= $row['ps_gender'];
            $name = $row['ps_name'];
            setcookie ("username",$row['ps_email'],time()+ 3600);
	        setcookie ("gender",$row['ps_gender'],time()+ 3600);
            setcookie ("name",$row['ps_name'],time()+ 3600);
            $_SESSION["gender"]=$row['ps_gender'];
			$_SESSION["username"]=$row['ps_email'];
            $_SESSION["name"]=$row['ps_name'];
            header("Location: myprofile.php");
            exit();
        }else{
            setcookie("username","");
	        setcookie("gender","");
            setcookie("name","");
            header("Location: login.php?error=invalid");
        }
        



    }
}

function checkSessionExists(){
    if (isset($_SESSION["username"])) {

		
	   echo '<li class="nav-item"><a class="nav-link" href="myprofile.php"> My Profile </a></li>';
      
	    echo'<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Preference<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="preference-1.php">Add preference</a></li>
		                <li><a href="ebasic.php">Edit preference</a></li>
		                
		                
		              </ul>
		            </li>';
      
       echo '<li class="nav-item"><a class="nav-link" href="filter/filter.php"> Filter </a></li>';	
       echo '<li class="nav-item"><a class="nav-link" href="recom.php"> Recommendation </a></li>';
       echo'<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="changepassword.php">Change Password</a></li>
						<li><a href="active.php">Active Account</a></li>
		                <li><a href="deactive.php">Deactive Account</a></li>
						 
		                
		                
		              </ul>
		            </li>';
       echo '<li class="nav-item"><a class="nav-link" href="feedesign.php"> Feedback </a></li>';
//echo '<li class="nav-item"><a class="nav-link" href="deactive.php">Deactive Account </a></li>';	  
	   
		
    }else{
      
	  echo'<li class="nav-item"><a class="nav-link" href="home.php"> Register </a></li>';
		echo '<li class="nav-item"><a class="nav-link" href="login.php"> Login </a></li>';
}
}



function addPreference(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
        $email = $_COOKIE["username"];
        $gender = $_COOKIE["gender"];
        $age=$_POST['age'];
        $height=$_POST['height'];
        $marital=$_POST['marital'];
        $mtongue=$_POST['mtongue'];
        $pstatus=$_POST['pstatus'];
        $ehabbits=$_POST['ehabbits'];
        $religion=$_POST['religion'];
        $caste=$_POST['caste'];
        require_once("dbconnection.php");
        if($gender === "Male"){
            //TODO add gender check to update or add preferences
            $sql = "INSERT INTO
            tbl_groom_preference(ps_email,ps_age,ps_height,ps_marital,ps_mtongue,ps_pstatus,ps_ehabbits,ps_religion,ps_caste) 
            VALUES ('$email','$age','$height','$marital','$mtongue','$pstatus','$ehabbits','$religion','$caste')";
        }else{
            //TODO add gender check to update or add preferences
            $sql = "INSERT INTO
            tbl_bride_preference(ps_email,ps_age,ps_height,ps_marital,ps_mtongue,ps_pstatus,ps_ehabbits,ps_religion,ps_caste) 
            VALUES ('$email','$age','$height','$marital','$mtongue','$pstatus','$ehabbits','$religion','$caste')";
        }
        if (mysqli_query($conn,$sql)) {
            $id = mysqli_insert_id($conn);
            echo "<script> window.location=\"preference-2.php?id=$email&type=$gender\"</script>";
        } else {
            echo "<script>alert('Already given');document.location.href='preference-1.php';</script>" . $sql . "<br>" . $conn->error;
            
			
        }
    }
}


function updatePreference($id,$type){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $qualification=$_POST['qualification'];
        $occupation=$_POST['occupation'];
		
        $fstatus=$_POST['fstatus'];
        $ftype=$_POST['ftype'];
        $fvalue=$_POST['fvalue'];
        $country=$_POST['country'];
        $location=$_POST['location'];
        if($type === "Male"){
        $sql = "UPDATE
                    tbl_groom_preference 
                SET
                
                ps_qualification = '$qualification',
                ps_occupation = '$occupation',
				
                ps_fstatus = '$fstatus',
                ps_ftype = '$ftype',
                ps_fvalue='$fvalue',
                ps_country = '$country',
                ps_location = '$location'
                WHERE
                ps_email = '$id'";
        }else{
            $sql = "UPDATE
                    tbl_bride_preference
                SET
                
                ps_qualification = '$qualification',
                ps_occupation = '$occupation',
			
                ps_fstatus = '$fstatus',
                ps_ftype = '$ftype',
                ps_fvalue='$fvalue',
                ps_country = '$country',
                ps_location = '$location'
                WHERE
                ps_email = '$id'";
        }
        $result = mysqlexec($sql);
        if ($result) {
           
            echo "<script> window.location=\"preference-1.php?message=success\"</script>";
       
        }else{
           echo "Error" . $sql . "<br>" . $conn->error;
        }
    }
}



function isloggedin(){
	if(!isset($_SESSION['username'])){
	 	return false;
	}
	else{
		return true;
	}

}


