<?php
session_start();

include_once("config.php");
global $con;

if (isset($_POST["login"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Regular user login
    $userQuery = "SELECT username, password FROM login WHERE username = '$username'";
    $userResult = mysqli_query($con, $userQuery);

    if ($userResult) {
        $userData = mysqli_fetch_assoc($userResult);
        if ($userData['password'] === $password) {
            unset($_SESSION['errorMessage']);
            $_SESSION['username'] = $username;

            // Check if the user is an admin
            $adminQuery = "SELECT is_admin FROM login WHERE username = '$username' AND is_admin = 1";
            $adminResult = mysqli_query($con, $adminQuery);

            if ($adminResult && mysqli_num_rows($adminResult) > 0) {
                header("Location: admin.php");
                exit();
            } else {
                header("Location: index_In.php");
                exit();
            }
        }
    }

    $_SESSION['errorMessage'] = 1;
    header("Location: Login.php");
    exit();
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("Location: Login.php");
    exit();
}
?>
