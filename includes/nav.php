<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">BlockChain</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active mx-3">
                <a class="nav-link" href="dashboard.php"><i class="mdi mdi-view-dashboard"></i> <span> Home </span> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" href="addUpdate.php"><i class="mdi mdi-format-list-bulleted"></i>Post</a>
            </li>
            <li class="nav-item mx-3 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Settings
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <h5 class="dropdown-item">Hi, <?php echo ($_SESSION['login']) ?></h5>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="change-password.php"><i class="ti-settings m-r-5"></i> Change Password</a>
                    <a class="dropdown-item" href="logout.php"><i class="ti-power-off m-r-5"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>