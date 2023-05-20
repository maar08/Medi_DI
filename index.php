<?php
include_once("Login_dbo.php");
include "header.php";
if(isset($_SESSION['username'])){
    header("Location:index_In.php");
}
?>
    <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <img src="Image/logo.png" id="avatar" class="img-fluid" style='width: 15%; height: 15%;'>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index_In.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php" onclick="log1(this)">My CV</a>
                        <script>
                            log1 = function(elem) {
                                alert("Please log in to see your CV")
                            }
                        </script>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php
include "footer.php";
?>