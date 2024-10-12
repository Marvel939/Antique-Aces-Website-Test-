<?php

@include 'config.php';

if (isset($_POST['add_product'])) {

   $product_name = $_POST['product_name'];
   $product_category = $_POST['product_category'];
   $product_stock = $_POST['product_stock'];
   $product_price = $_POST['product_price'];
   $product_img = $_FILES['product_img']['name'];
   $product_image_tmp_name = $_FILES['product_img']['tmp_name'];
   $product_image_folder = 'uploaded_img/' . $product_img;

   if (empty($product_name) || empty($product_category) || empty($product_stock) || empty($product_price) || empty($product_img)) {
      $message[] = 'please fill out all';
   } else {
      $insert = "INSERT INTO products(product_name,product_category,product_stock,product_price,product_img) VALUES('$product_name', '$product_category','$product_stock','$product_price','$product_img')";
      $upload = mysqli_query($conn, $insert);
      if ($upload) {
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new product added successfully';
      } else {
         $message[] = 'could not add the product';
      }
   }

}
;

if (isset($_GET['delete'])) {
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM products WHERE product_id = $id");
   header('location:admin_page.php');
}
;

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="stylecart.css">

   <!-- loader-->
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

      <?php

      if (isset($message)) {
         foreach ($message as $message) {
            echo '<span class="message">' . $message . '</span>';
         }
      }

      ?>

      <!-- <div class="clearfix"></div> -->
      <div class="content-wrapper">
         <div class="container-fluid">
            <!-- <div class="container"> -->
               <!-- <div class="row tm-content-row"> -->
                  <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
                     <div class="tm-bg-primary-dark tm-block tm-block-products">
                        <div class="tm-product-table-container">


                           <!-- <div class="container"> -->

                              <div class="admin-product-form-container">

                                 <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post"
                                    enctype="multipart/form-data" class="bg-trasparent"> 
                                    <h3>add a new product</h3>
                                    <input type="text" placeholder="enter product name" name="product_name" class="box">
                                    <input type="text" placeholder="enter product Category" name="product_category"
                                       class="box">
                                    <input type="number" placeholder="enter Stock" name="product_stock" class="box">
                                    <input type="number" placeholder="enter product price" name="product_price"
                                       class="box">
                                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_img"
                                       class="box">
                                    <input type="submit" class="btn btn-success" name="add_product" value="add product">
                                 </form>

                              </div><br><br>

                              <?php

                              $select = mysqli_query($conn, "SELECT * FROM products");

                              ?>


                              <div class="product-display">

                                 <table class="product-display-table table-transparent">
                                    <thead class="bg-transparent">
                                       <tr>
                                          <th>product image</th>
                                          <th>product name</th>
                                          <th>product Category</th>
                                          <th>Stock</th>
                                          <th>product Price</th>
                                          <th>action</th>
                                       </tr>
                                    </thead>
                                    <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                                       <tr>
                                          <td><img src="uploaded_img/<?php echo $row['product_img']; ?>" height="100"
                                                alt=""></td>
                                          <td><?php echo $row['product_name']; ?></td>
                                          <td><?php echo $row['product_category']; ?></td>
                                          <td><?php echo $row['product_stock']; ?></td>
                                          <td>$<?php echo $row['product_price']; ?>/-</td>
                                          <td>
                                             <a href="admin_update.php?edit=<?php echo $row['product_id']; ?>" class="btn btn-success">
                                                <i class="fas fa-edit"></i> edit </a>
                                             <a href="admin_page.php?delete=<?php echo $row['product_id']; ?>" class="btn">
                                                <i class="fas fa-trash"></i> delete </a>
                                          </td>
                                       </tr>
                                    <?php } ?>
                                 </table>
                              </div>
                           <!-- </div> -->

                        <!-- </div> -->
                        <!-- </div> -->
                        </div>
                        
                     </div>
                        <!--End Dashboard Content-->

                        <!--start overlay-->
                        <div class="overlay toggle-menu"></div>
                        <!--end overlay-->

                     </div>
                     <!-- End container-fluid-->

                  </div><!--End content-wrapper-->
               </div>
               <!--Start Back To Top Button-->
               <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
               <!--End Back To Top Button-->

               <!--Start footer-->
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