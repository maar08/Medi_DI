<?php
include_once("config.php");
include_once("Login_dbo.php");

global $con;
$query = mysqli_query($con, "SELECT * FROM cv_info WHERE username = '$_SESSION[username]'");
while($data = mysqli_fetch_array($query)) {
    $id = $data['id'];
    $name = $data['name'];
    $address = $data['address'];
    $phone = $data['phone'];
    $email = $data['email'];
    $language = $data['language'];
    $skill = $data['skill'];
    $companyname = $data['companyname'];
    $cposition = $data['cposition'];
    $cstartdate = $data['cstartdate'];
    $cenddate = $data['cenddate'];
    $institute = $data['institute'];
    $collegename = $data['collegename'];
    $schoolname = $data['schoolname'];
    $volunteering = $data['volunteering'];
    $training = $data['training'];
    $image = $data['image'];
}

if(isset($_POST["update"])) {
    // Check if a file was uploaded
    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        $targetDir = "images/";
        $filename = uniqid() . "_" . $_FILES["image"]["name"];
        $targetPath = $targetDir . $filename;

        // Move the uploaded file to the destination directory
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath)) {
            // Image uploaded successfully, update the image path in the database
            $image = $targetPath;
        } else {
            // Failed to move the uploaded file
            echo "Error uploading the image.";
        }
    }

    $query = "UPDATE cv_info SET 
                   name = '$_POST[name]', 
                   address = '$_POST[address]', 
                   phone = '$_POST[phone]', 
                   language = '$_POST[language]', 
                   skill = '$_POST[skills]', 
                   companyname = '$_POST[companyName]', 
                   cposition =  '$_POST[cposition]', 
                   cstartdate = '$_POST[cstartdate]', 
                   cenddate = '$_POST[cenddate]',
                   institute = '$_POST[institute]',
                   collegename = '$_POST[clgName]', 
                   schoolname = '$_POST[sclName]', 
                   volunteering = '$_POST[volunteering]', 
                   training = '$_POST[trainings]', 
                   image = '$image' 
               WHERE username = '$_SESSION[username]'";

    if(mysqli_query($con, $query)) {
        // Update the image variable after successful update
        $image = $image;
        header("Location: My_CV.php");
    } else {
        die('Error: ' . mysqli_error($con));
    }
} elseif(isset($_POST["cancel"])) {
    header("Location: My_CV.php");
}
mysqli_close($con);
?>