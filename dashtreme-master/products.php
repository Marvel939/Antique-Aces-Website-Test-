<?php
require_once("Conn.php");
?>

<?php
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  mysqli_query($con, "DELETE FROM products WHERE product_id = $id");
  header('location:products.php');
};

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
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets\images\favicon_io\favicon.ico" type="image/x-icon">
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
                  <?php

                  // $select = mysqli_query($con, "SELECT * FROM products");

                  ?>
                  <!-- <div class="product-display"> -->
                  <table class="table text-center table-transparent">
                  <thead>
                    <tr>
                        <th scope="col">Product ID</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Category</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $query = "SELECT * FROM `products`";
                    $user_result = mysqli_query($con, $query);
                    while ($user_fetch = mysqli_fetch_assoc($user_result)) {
                        echo "
                            <tr>
                            <th>$user_fetch[product_id]</th>
                            <th><img src='uploaded_img/<?php echo $user_fetch[product_img]; ?>' height='100' ></th>
                            <td>$user_fetch[product_name]</td>
                            <td>$user_fetch[product_category]</td>
                            <td>$user_fetch[stock]</td>
                            <td>$user_fetch[product_price]</td>
                            <td>
                            <a href='update_product.php?edit=<?php echo $user_fetch[product_id]; ?>' class='btn' id='edit'> <i
                                class='fas fa-edit'></i> edit </a>
                            <a href='products.php?delete=<?php echo $user_fetch[product_id]; ?>' class='btn'> <i
                                class='fas fa-trash'></i> delete </a>
                          </td> 
                         </tr>               
                        ";
                       }
                    ?>
                </tbody>

                     
                    </table>
                  </div>
                </div>
                <!-- table container -->
                <a href="trail.php" class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
                <!-- <button class="btn btn-primary btn-block text-uppercase">
                  Delete selected products
                </button> -->
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
              <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
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