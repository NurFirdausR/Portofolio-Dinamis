<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php 

include_once "connect.php";
session_start();

// if (!isset($_SESSION['admin'])) { /* Halaman ini tidak dapat diakses jika belum ada yang login */
//   header('location:../login.php');
// }

if (!isset($_SESSION['admin'])) {
    echo "<script>alert('Anda Harus Login')</script>";
  header('location:../login.php');

     exit();
  }
// var_dump($_SESSION['admin']);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
    <!-- Favicon -->
    <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
    <!-- Sidenav -->
    <?php include "partial/sidebar.php" ?>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
    <?php include "partial/navbar.php" ?>
        
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">

                    </div>
                    <!-- Card stats -->

                </div>
            </div>
        </div>
        <!-- Header -->
      
        <!-- Page content -->
        <div class="container-fluid mt--6">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card" style="height: 500px;">
                        <div class="card-header border-0">
                        <?php
                            if (isset($_GET['halaman'])) {
                                if ($_GET['halaman'] == "dashboard") {
                                    include "view/dashboard/dashboard.php";
                                } elseif ($_GET['halaman'] == "project") {
                                    include "view/project/project.php";
                                } elseif ($_GET['halaman'] == "project_tambah") {
                                    include "view/project/project_tambah.php";
                                } elseif ($_GET['halaman'] == "project_edit") {
                                    include "view/project/project_edit.php";
                                } elseif ($_GET['halaman'] == "about") {
                                    include "about.php";
                                } elseif ($_GET['halaman'] == "profile") {
                                    include "view/profile/profile_edit.php";
                                } elseif ($_GET['halaman'] == "icando") {
                                    include "view/icando/icando.php";
                                } elseif ($_GET['halaman'] == "icando_tambah") {
                                    include "view/icando/icando_tambah.php";
                                } elseif ($_GET['halaman'] == "icando_edit") {
                                    include "view/icando/icando_edit.php";
                                }
                                
                            } else {
                                include "dashboard.php";
                            }
                            ?>
                            <!-- <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Page visits</h3>
                                </div>
                                <div class="col text-right">
                                    <a href="#!" class="btn btn-sm btn-primary">See all</a>
                                </div>
                            </div>
                            <br>
                            <div class="container">
                                
                            </div> -->
                        </div>

                    </div>
                </div>

            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
<br>

            <!-- Footer -->
            <?php include "partial/footer.php" ?>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="../assets/js/argon.js?v=1.2.0"></script>

    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
       $(document).ready(function(){
        $('#tabel-data').DataTable();
    });

    $(document).ready(function() {
$(".sidebars").click(function () {
    $(".sidebars").removeClass("active");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).addClass("active");   
});
});
</script>


</body>

</html>