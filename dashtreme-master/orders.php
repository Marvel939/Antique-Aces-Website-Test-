<?php
require("Conn.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Antique Aces</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="assets\images\favicon_io\Antnew2.jpg" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet" />
</head>

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

    <?php
require_once("admin_navbar.php");
?>

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="container mt-5">
                    <div class="row tm-content-row">
                        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
                            <div class="tm-bg-primary-dark tm-block tm-block-products">
                                <div class="tm-product-table-container">
                                    <div class="container mt-5">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <table class="table text-center table-transparent">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Order Id</th>
                                                            <th scope="col">Customer Name</th>
                                                            <th scope="col">Phone No.</th>
                                                            <th scope="col">Address</th>
                                                            <th scope="col">Pay Mode</th>
                                                            <th scope="col">Orders</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $query = "SELECT * FROM `order_manager`";
                                                        $user_result = mysqli_query($con, $query);
                                                        while ($user_fetch = mysqli_fetch_assoc($user_result)) {
                                                            echo "
                                                                <tr>
                                                                <th>$user_fetch[Order_id]</th>
                                                                <td>$user_fetch[Full_Name]</td>
                                                                <td>$user_fetch[Phone_No]</td>
                                                                <td>$user_fetch[Address]</td>
                                                                <td>$user_fetch[Pay_Mode]</td>
                                                                <td>

                                                                  <table class='table text-center table-transparent'>
                                                                  <thead>
                                                                  <tr>
                                                                        <th scope='col'>Item Name</th>
                                                                        <th scope='col'>Price</th>
                                                                        <th scope='col'>Quantity</th>
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                            ";
                                                            $order_query = "SELECT * FROM `user_orders` WHERE `Order_id`='$user_fetch[Order_id]'";
                                                            $order_result = mysqli_query($con, $order_query);
                                                            while ($order_fetch = mysqli_fetch_assoc($order_result)) {
                                                                echo "
                                                                  <tr>
                                                                    <td>$order_fetch[Item_Name]</td>
                                                                    <td>$order_fetch[Price]</td>
                                                                    <td>$order_fetch[Quantity]</td>
                                                                  </tr>
                                                                ";
                                                                }
                                                                echo " 
                                                                    </tbody>
                                                                    </table>
                                                                    </td>
                                                                </tr>
                                                                
                                                                ";
                                                                
                                                        }
                                                        
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- table container -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <form action='' method='POST'>
                <center>
                    <button name='update' class='btn btn-lg btn-success mr-4'>Update</button>
                    <button name='Remove_Item' class='btn btn-lg btn-danger'>Remove</button>
                </center>
                <!-- <input type='hidden' name='Item_Name' value=''> -->
            </form>

            <footer class="footer">
                <div class="container">
                    <div class="text-center">
                        Copyright © 2024 Antique Aces
                    </div>
                </div>
            </footer>
            <!--End footer-->

            <!--start color switcher-->
            <div class="right-sidebar">
                <div class="switcher-icon">
                    <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
                </div>
                <div class="right-sidebar-content">

                    <p class="mb-0">Gaussion Texture</p>
                    <hr>

                    <ul class="switcher">
                        <li id="theme1"></li>
                        <li id="theme2"></li>
                        <li id="theme3"></li>
                        <li id="theme4"></li>
                        <li id="theme5"></li>
                        <li id="theme6"></li>
                    </ul>

                    <p class="mb-0">Gradient Background</p>
                    <hr>

                    <ul class="switcher">
                        <li id="theme7"></li>
                        <li id="theme8"></li>
                        <li id="theme9"></li>
                        <li id="theme10"></li>
                        <li id="theme11"></li>
                        <li id="theme12"></li>
                        <li id="theme13"></li>
                        <li id="theme14"></li>
                        <li id="theme15"></li>
                    </ul>

                </div>
            </div>
            <!--end color switcher-->

        </div><!--End wrapper-->

        <!-- Bootstrap core JavaScript-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- simplebar js -->
        <script src="assets/plugins/simplebar/js/simplebar.js"></script>
        <!-- sidebar-menu js -->
        <script src="assets/js/sidebar-menu.js"></script>
        <!-- loader scripts -->
        <script src="assets/js/jquery.loading-indicator.js"></script>
        <!-- Custom scripts -->
        <script src="assets/js/app-script.js"></script>
        <!-- Chart js -->

        <script src="assets/plugins/Chart.js/Chart.min.js"></script>

        <!-- Index js -->
        <script src="assets/js/index.js"></script>
</body>

</html>