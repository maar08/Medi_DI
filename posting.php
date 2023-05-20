<?php
session_start();
include_once("config.php");

global $con;

// Check if the user is an admin
$admin = "admin";
if (!isset($_SESSION['username']) || $_SESSION['username'] !== $admin) {
    header("Location: Login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newText = mysqli_real_escape_string($con, $_POST['newText']);

    // Insert the new post into the database
    $query = "INSERT INTO posts (content, date_posted) VALUES ('$newText', NOW())";
    mysqli_query($con, $query);

    // Redirect back to the home page
    header("Location: index_In.php");
    exit();
}

include "header.php";
include "navbar_admin.php";
?>

<div class="container mt-5">
    <h1>Add Text to Home Page</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="newText" class="form-label">New Text:</label>
            <textarea class="form-control" id="newText" name="newText" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Text</button>
    </form>
</div>

<!--after adding a post you will be given a preview of post that users see-->

<?php
include "footer.php";
?>
