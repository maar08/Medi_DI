<?php
include_once("config.php");
include_once("Login_dbo.php");
global $con;

// remove working info
$query = "UPDATE cv_info SET companyname = null, cstartdate = null, cenddate = null, cposition = null WHERE username = '$_SESSION[username]'";
if(mysqli_query($con, $query)){
	header("Location:My_CV.php");
}
else{
	die('Error: ' . mysqli_error());
}

mysqli_close($con);
?>