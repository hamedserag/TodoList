<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <!-- App title -->
        <title>Blockchain</title>
        <link rel="stylesheet" href="plugins/morris/morris.css">

        <!-- App css -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>

    </head>
    <style>
        .post {
            border-radius: 25px;
            background-color: #fffaf1;
            border-bottom: 1px solid #1976D2;
        }

        .user-img {
            width: 50px;
            height: 50px;
        }

        .title {
            font-weight: bold;
        }
    </style>
    <?php include('includes/nav.php'); ?>

    <body>
        <div class="container mainCont">
            <div class="row justify-content-center mb-5">
                <div class="col-10">
                    <a href="addUpdate.php">
                        <button id="addToTable" class="btn btn-success waves-effect waves-light">Add <i class="mdi mdi-plus-circle-outline"></i></button>
                    </a>
                </div>
            </div>

            <?php
            $query = mysqli_query($con, "SELECT `id`, `title`, `description`, `uid` FROM `posts` WHERE 1 ORDER BY `id` DESC");
            while ($row = mysqli_fetch_array($query)) {
                $uid = $row['uid'];
                $pid = $row['id'];
                $title = $row['title'];
                $description = $row['description'];
                $queryName = mysqli_query($con, "SELECT `id`, `name` FROM `users` WHERE `id`='$uid'");
                $resultQueryName = mysqli_fetch_array($queryName);
                $uname = $resultQueryName['name'];
            ?>
                <div class="row justify-content-center pb-5">
                    <div class="col-10 row post">
                        <div class="col-4 d-flex pt-3">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                            <p class="name pl-4 pt-4 "><?php echo htmlentities($uname) ?></p>
                        </div>
                        <p class="title col-12 pt-5"><?php echo htmlentities($title) ?></p>
                        <p class="desc col-12"><?php echo (substr($row['description'], 0)); ?></p>
                    </div>

                </div>
            <?php } ?>
        </div> <!-- container -->

        <!-- END wrapper -->

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="plugins/switchery/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
        <script src="plugins/morris/morris.min.js"></script>
        <script src="plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>



    </body>

    </html>
<?php } ?>