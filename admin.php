<?php
include_once("config.php");
include_once("Login_dbo.php");

// Check if the user is an admin
$admin = "admin";
if (!isset($_SESSION['username']) || $_SESSION['username'] !== $admin) {
    header("Location: Login.php");
    exit();
}

// If a search term is present, modify the SQL query to include a WHERE clause
global $con;
$search = isset($_GET['search']) ? mysqli_real_escape_string($con, $_GET['search']) : '';
$query = $search ? "SELECT * FROM cv_info WHERE name LIKE '%$search%' OR skill LIKE '%$search%'" : "SELECT * FROM cv_info";

$result = mysqli_query($con, $query);

include "header.php";
include "navbar_admin.php";
?>

<div class="container mt-5">
    <h1>Admin Panel</h1>

    <?php if (mysqli_num_rows($result) > 0): ?>
    <!--    table-->
        <table class="table table-striped mt-3">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Skills</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['skill']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td>
                        <a href="view_cv.php?id=<?php echo $row['id']; ?>" target="_blank" class="btn btn-danger">View</a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No CV entries found.</p>
    <?php endif; ?>
</div>

<?php
include "footer.php";
mysqli_close($con);
?>
