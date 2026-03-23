


<?php
include('dbconnection.php');
session_start();
$email=$_SESSION["username"];



$email=$_POST['email'];
$name=$_POST['name'];
$date=$_POST['date'];
$comments=$_POST['comments'];
$gen=$_SESSION["gender"];
						if($gen === "Male"){
						$tab="tbl_feedback";
						}
						else{
						$tab="tbl_feedback";
						}
            

$query="INSERT INTO $tab VALUES ('$email', '$name', '$date', '$comments')";

if (mysqli_query($conn,$query))
{
   echo "<script> window.location=\"feedesign.php?message=success\"</script>";
   
} 
else 
{
  //echo "Error: ".mysqli_error($conn);
  echo "<script>alert('Already given');document.location.href='feedesign.php';</script>" ;
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

mysqli_close($conn);
?>








