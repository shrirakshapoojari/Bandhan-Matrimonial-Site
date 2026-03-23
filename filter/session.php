<?php 
if (!isset($_COOKIE["username"])) {
     header("Location: filter.php");
     exit();
}
?>