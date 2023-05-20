<nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <img src="Image/logo.png" id="avatar" class="img-fluid" style='width: 15%; height: 15%;'>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="posting.php">Vacancies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index_In.php">Posts</a>
                </li>
            </ul>
            <!-- Search form -->
            <form class="d-flex me-4" method="GET" action="admin.php">
                <input class="form-control" type="search" name="search" placeholder="Search" aria-label="Search">
            </form>
            <div class="ml-auto">
                <a id="log_option" href="Login_dbo.php?logout='1'" class="nav-link">
                    <?php if(isset($_SESSION['username'])) echo $_SESSION['username']." "?>Logout
                </a>
            </div>
        </div>
    </div>
</nav>
