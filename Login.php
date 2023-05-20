<?php
include_once("Login_dbo.php");
include "header.php";
if(isset($_SESSION['username'])){
    header("Location:index_In.php");
}
?>
    <div class="container text-center" style="min-height: 100vh; display: flex; justify-content: center; align-items: center;">
        <form action="Login_dbo.php" method="post" class="was-valid">
            <div class="login-box">
                <img src="Image/logo.png" id="avatar" class="img-fluid" style="width: 25%; height: 25%">
                <h1>Log In</h1>
                <img src="Image/usr.png" id="icon" class="img-fluid" style="width: 3%; height: 3%; margin: 2px">
                <input type="text" name="username" placeholder="Username" required><br>
                <img src="Image/pwd.jpg" id="icon2" class="img-fluid" style="opacity: 35%; width: 3%; height: 3%; margin: 2px">
                <input type="password" name="password" id="password" placeholder="Password" required><br>
                <?php
                /* display validation error here */
                if (isset($_SESSION['errorMessage'])){
                    echo "<span style='color:red;'>Invalid username or password!</span>";
                }
                ?>
                <input type="submit" class="btn btn-danger" style="margin: 5px" name="login" value="Login" onclick="logAlert()">
            </div>
            <section id="line"></section>
            <div class="reg-link">
                <label>Don't have an account?</label>
                <a href="Registration.php">REGISTER HERE</a>
            </div>
        </form>
    </div>
<?php
include "footer.php";
?>