<nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <img src="Image/logo.png" id="avatar" class="img-fluid" style='width: 15%; height: 15%;'>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index_In.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="My_CV.php">My CV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Update_CV.php">Update CV</a>
                </li>
            </ul>
            <div class="ml-auto">
                <a id="log_option" href="Login_dbo.php?logout='1'" class="nav-link">
                    <?php if(isset($_SESSION['username'])) echo $_SESSION['username']." "?>Logout
                </a>
            </div>
        </div>
    </div>
</nav>
