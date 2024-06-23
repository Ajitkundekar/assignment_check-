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
    <style>
        .card2 {
            width: 20rem;
            padding: 7px;
            margin-bottom: 5px;
            background-color: #fff;
            border-radius: 10px;
            transition: all 0.8s;
        }
        .cimg{border-radius: 20rem;     box-shadow: 2px 5px 10px black ;}
      

        .card2:hover {

            box-shadow: 2px 2px 5px 5px;
            background-color: lightcyan ;
            
            


            padding: 12px;

        }
    </style>


</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <!-- Header -->
        <?php include ("header.php"); ?>
        <!-- /Header -->
        <!-- Page content-->

        <div class="container-fluid" style="margin: 20px;">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Techer List</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">teacher</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <?php

                $query = mysqli_query($con, "select * from teacher");
                $cnt = 1;
                while ($row = mysqli_fetch_row($query)) {
                    ?>
                    <div class="col-xl-4 col-sm-6 col-lg-6  " style="">
                        <div class="card card2 " style=" ">
                            <img class="cimg"
                                src="https://codingyaar.com/wp-content/uploads/bootstrap-profile-card-image.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> <strong>Name:</strong><?php echo $row['1']; ?></h5>
                                <p class="card-text"> <Strong> Email:</Strong> <?php echo $row['7']; ?></p>
                                <p class="card-text"> <Strong> Phone:</Strong> <?php echo $row['2']; ?></p>
                                <p class="card-text"> <Strong> branch:</Strong> <?php echo $row['6']; ?></p>

                                <p class="card-text"> <Strong> Exprience: </Strong> <?php echo $row['4']; ?></p>
                                <p class="card-text"></p>
                                <p class="card-text"></p>
                                <?php if( $row['9']==1){
                                    echo '<p><a href="t_status.php?id='.$row['0'].'&status=0" class="btn  btn-primary" style="align-items: center;">Active</a> </p> ';
                                }  
                                else{
                                    echo '<p><a href="t_status.php?id='.$row['0'].'&status=1" class="btn  btn-danger" style="align-items: center;">Inactive</a> </p> ';

                                }?>


                            </div>
                        </div>
                    </div>


                    <?php

                }
                ?>


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
        </div>
</body>

</html>