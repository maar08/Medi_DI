<?php
include "Login_dbo.php";
include "header.php";
include "navbar.php";

global $con;

if (!isset($_SESSION['username'])) {
    header("Location: Login.php");
    exit();
}

// Check if post id is passed in GET request
if (!isset($_GET['post_id'])) {
    header("Location: index_In.php");
    exit();
}

$admin = "admin";
$isAdmin = ($_SESSION['username'] === $admin);

$post_id = $_GET['post_id'];

// Fetch the specific post from the database
$query_post = "SELECT * FROM posts WHERE id='$post_id'";
$result_post = mysqli_query($con, $query_post);
$post_data = mysqli_fetch_assoc($result_post);

?>

<div class="container mt-8" style="margin-top: 70px;">
    <h1>Post Details</h1>
    <?php if (!empty($post_data)): ?>
        <div class="card mt-3">
            <div class="card-body">
                <p class="card-text"><?php echo $post_data['content']; ?></p>
                <p class="card-text"><small class="text-muted">Posted on <?php echo $post_data['date_posted']; ?></small></p>
                <div class="d-flex justify-content-end">
                <?php if (!$isAdmin): ?>
                <form action="https://mail.mdis.uz/owa/auth/logon.aspx?url=https%3A%2F%2Fmail.mdis.uz%2Fowa%2F%23authRedirect%3Dtrue&reason=0#path=/mail">
                    <button class="btn btn-outline-success" >Apply</button>
                </form>
                <?php endif; ?>
                </div>
            </div>
        </div>
    <?php else: ?>
        <p>This post does not exist.</p>
    <?php endif; ?>
</div>

<script>
    function applyForPost(postId) {
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
            }
        };
        xhttp.open("GET", "apply.php?post_id=" + postId, true);
        xhttp.send();
    }
</script>

<?php
include "footer.php";
?>
