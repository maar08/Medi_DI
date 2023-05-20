<?php
include_once("config.php");
include_once("Login_dbo.php");

// Check if the user is an admin
$admin = "admin";
if (!isset($_SESSION['username']) || $_SESSION['username'] !== $admin) {
    header("Location: Login.php");
    exit();
}

// Retrieve CV information from the database
global $con;
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$query = "SELECT * FROM cv_info WHERE id = $id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

include "header.php";
include "navbar_admin.php";
?>

<div class="container mt-5" style="margin-top: 70px">
    <h1>CV Details</h1>
    <?php if ($row): ?>
        <div class="card mt-3">
            <div class="card-body">
                <p class="card-text">Image: <img src="<?php echo $row['image']; ?>" alt="User Image" class="img-fluid" style="width: 200px; height: auto;"></p>
                <p class="card-text">Name: <?php echo $row['name']; ?></p>
                <p class="card-text">Address: <?php echo $row['address']; ?></p>
                <p class="card-text">Phone: <?php echo $row['phone']; ?></p>
                <p class="card-text">Email: <?php echo $row['email']; ?></p>
                <p class="card-text">Language: <?php echo $row['language']; ?></p>
                <p class="card-text">Skill: <?php echo $row['skill']; ?></p>
                <p class="card-text">Company Name: <?php echo $row['companyname']; ?></p>
                <p class="card-text">Position: <?php echo $row['cposition']; ?></p>
                <p class="card-text">Start Date: <?php echo $row['cstartdate']; ?></p>
                <p class="card-text">End Date: <?php echo $row['cenddate']; ?></p>
                <p class="card-text">College Name: <?php echo $row['collegename']; ?></p>
                <p class="card-text">School Name: <?php echo $row['schoolname']; ?></p>
                <p class="card-text">Volunteering: <?php echo $row['volunteering']; ?></p>
                <p class="card-text">Training: <?php echo $row['training']; ?></p>
                </div>
        </div>
    <?php else: ?>
        <p>No CV found with the given ID.</p>
    <?php endif; ?>
</div>

<?php
include "footer.php";
mysqli_close($con);
?>
