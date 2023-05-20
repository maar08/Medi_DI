<?php

include_once("config.php");

if (isset($_POST["submit"]) && $_POST["password"] == $_POST["retpassword"]) {
    // insert record into login table
    $query_login = "INSERT INTO login (username, email, password) VALUES ('$_POST[username]', '$_POST[email]', '$_POST[password]')";

    // execute query to insert record into login table
    global $con;
    if (mysqli_query($con, $query_login)) {
        // insert record into cv_info table
        $query_cv_info = "INSERT INTO cv_info (email, birthday, gender, username) VALUES ('$_POST[email]', '$_POST[dob]', '$_POST[gender]', '$_POST[username]')";

        // execute query to insert record into cv_info table
        if (mysqli_query($con, $query_cv_info)) {
            // registration successful - redirect to login page
            header("Location:Login.php");
            exit();
        } else {
            // error inserting record into cv_info table
            die('Error: ' . mysqli_error($con));
        }
    } else {
        // error inserting record into login table
        die('Error: ' . mysqli_error($con));
    }
} else {
    // passwords do not match
    header("Location:Registration.php");
    exit();
}

mysqli_close($con);


//include_once("config.php");
//
//if(isset($_POST["submit"]) && $_POST["password"] == $_POST["retpassword"]){
//	$query = "INSERT INTO login (username, email, password) VALUES ('$_POST[username]', '$_POST[email]', '$_POST[password]')";
//
//	// value insert in cv_info table
//	$queryinfo = "INSERT INTO cv_info (email, birthday, gender, username) VALUES ('$_POST[email]', '$_POST[dob]', '$_POST[gender]', '$_POST[username]')";
//
//	global $con;
//    if(mysqli_query($con, $query)){
//		mysqli_query($con, $queryinfo);
//
//		header("Location:Login.php");
//	}
//	else{
//		die('Error: ' . mysqli_error());
//	}
//}
//else{
//	header("Location:Registration.php");
//}
//
//mysqli_close($con);
?>