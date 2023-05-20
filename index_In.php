<?php
include "Login_dbo.php";
include "header.php";
include "navbar.php";

global $con;

if (!isset($_SESSION['username'])) {
    header("Location: Login.php");
    exit();
}

$admin = "admin";
$isAdmin = ($_SESSION['username'] === $admin);
$query_posts = "SELECT * FROM posts ORDER BY date_posted DESC";
$result_posts = mysqli_query($con, $query_posts);

?>

<div class="container mt-8" style="margin-top: 70px;">
    <h1>Posts</h1>
    <?php if (mysqli_num_rows($result_posts) > 0): ?>
        <?php while ($row_post = mysqli_fetch_assoc($result_posts)): ?>
            <div class="card mt-3">
                <div class="card-body">
                    <p class="card-text"><?php echo $row_post['content']; ?></p>
                    <p class="card-text"><small class="text-muted">Posted on <?php echo $row_post['date_posted']; ?></small></p>
                    <div class="d-flex justify-content-end">
                        <form action="view_post.php" method="get" class="mr-2">
                            <input type="hidden" name="post_id" value="<?php echo $row_post['id']; ?>">
                            <button type="submit" class="btn btn-outline-dark">View</button>
                        </form>
                        <?php if ($isAdmin): ?>
                        <form action="delete_post.php" method="post">
                            <div style="padding-left: 2px;">
                            <input type="hidden" name="id" value="<?php echo $row_post['id']; ?>">
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </div>
                        </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No posts available.</p>
    <?php endif; ?>

    <?php if ($isAdmin): ?>
        <div class="mt-5">
            <h2>Add a new post</h2>
            <a href="posting.php" class="btn btn-primary">Add post</a>
        </div>
    <?php endif; ?>
</div>


<?php
include "footer.php";
?>
