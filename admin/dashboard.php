<?php
session_start();
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Profile</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/all.min.css" rel="stylesheet" />
    <link href="css/fontawesome.min.css" rel="stylesheet" />

    <!-- Bootstrap core JS-->
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>


</head>

<body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <!-- Header -->
    <?php include("header.php"); ?>
			<!-- /Header -->
                <!-- Page content-->
                <div class="container-fluid">
                    dashboard
                </div>
            </div>
        </div>


        <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/datatables.min.js"></script>
    <script src="js/pdfmake.min.js"></script>
    <script src="js/vfs_fonts.js"></script>
    <script src="js/custom.js"></script>
        <!-- Bootstrap core JS-->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
        <!-- Core theme JS-->
        <!-- <script src="js/scripts.js"></script> -->
    </body>

</html>