<?php
include_once("config.php");
include "Login_dbo.php";

$admin = "admin";
if ($_SESSION['username'] !== $admin) {
    header("Location: index_In.php");
    exit();
}

if (!isset($_POST['id'])) {
    header("Location: index_In.php");
    exit();
} else {
    $id = $_POST['id'];
}

// Delete post
global $con;
$query = "DELETE FROM posts WHERE id = ?";
$stmt = $con->prepare($query);
$stmt->bind_param("i", $id);
if($stmt->execute()){
    header("Location:index_In.php");
}
else{
    die('Error: ' . $stmt->error);
}

$stmt->close();
$con->close();
?>
