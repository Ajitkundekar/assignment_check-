<?php
session_start();
require ("config.php");
////code

if (!isset($_SESSION['auser'])) {
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
        <?php include ("header.php"); ?>
        <!-- /Header -->
        <!-- Page content-->
        <div class="container-fluid">
            <div class="container">
                <h3 class="page-title"> Student List </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Student List</li>
                    </ol>
                </nav>


                <h5>Note:-</h5>
                <ul>
                </ul>
                <div class="row">
                    <div class="col-12">
                        <div class="data_table">
                            <table id="example" class="table table-striped table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Name</th>
                                        <th>Class </th>
                                        <th>Batch</th>
                                        <th>Semester</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>



                                    <tr>
                                        <td> 1</td>
                                        <td>Ajit</td>
                                        <td>MCA</td>
                                        <td>15</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> 2</td>
                                        <td>Ajit</td>
                                        <td>MCA</td>
                                        <td>15</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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