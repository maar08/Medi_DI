<?php
$server = "localhost";
$dbname = "cv_project";
$dbuser = "root";
$dbpass = "";

$con = mysqli_connect($server, $dbuser, $dbpass, $dbname);
if (!$con)
{
	die('Failed to connect: ' . mysqli_error());
}
?>