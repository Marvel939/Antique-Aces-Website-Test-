<?php

require_once("Conn.php");

if (isset($_POST['add_product'])) {

  $product_name = $_POST['product_name'];
  $product_category = $_POST['product_category'];
  $stock = $_POST['stock'];
  $product_price = $_POST['product_price'];
  $product_image = $_FILES['product_image']['name'];
  $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
  $product_image_folder = 'uploaded_img/' . $product_image;

  if (empty($product_name) || empty($product_category) || empty($stock) || empty($product_price) || empty($product_image)) {
    $message[] = 'please fill out all';
  } else {
    // $insert = "INSERT INTO products(product_name, product_category, stock, product_price, product_image) VALUES('$product_name', '$product_category', '$stock', '$product_price', '$product_image')";
    $insert_data = "INSERT INTO products (product_name, product_category, stock, product_price, product_image) 
                        VALUES ('$product_name', '$product_category', '$stock', '$product_price', '$product_image')";

    $upload = mysqli_query($con, $insert_data);

    // $upload = mysqli_query($con, $insert);
    if ($upload) {
      move_uploaded_file($product_image_tmp_name, $product_image_folder);
      $message[] = 'new product added successfully';
    } else {
      $message[] = 'could not add the product';
    }
  }

}
;

// if (isset($_GET['delete'])) {
//   $id = $_GET['delete'];
//   mysqli_query($conn, "DELETE FROM products WHERE id = $id");
//   header('location:admin_page.php');
// }
// ;

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

  <?php

  if (isset($message)) {
    foreach ($message as $msg) {
      echo '<span class="message">' . $msg . '</span>';
    }
  }

  ?>
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
                <form action="" method="POST">
                  <div class="form-group">
                    <label for="">PRODUCT NAME</label>
                    <input type="text" class="form-control" id="" name="product_name">
                  </div>

                  <div class="form-group">
                    <label for="">Product Category</label>
                    <input type="text" class="form-control" id="" name="product_category">
                  </div>

                  <div class="form-group">
                    <label for="">IN STOCK</label>
                    <input type="number" class="form-control" id="" name="stock">
                  </div>

                  <div class="form-group">
                    <label for="">PRICE</label>
                    <input type="number" class="form-control" id="" name="product_price">
                  </div>

                  <div class="form-group">
                    <label for="">Upload Image</label>
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image"
                      class="form-control">
                  </div>

                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                  <!-- <input type="submit" class="btn btn-primary" name="add_product" value="add product" > -->
                  <a href="products.php" class="btn btn-primary" name="add_product" role="button">Add</a>
                </form><br>

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