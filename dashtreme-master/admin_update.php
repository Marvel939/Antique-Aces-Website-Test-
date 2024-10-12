<?php

@include 'config.php';

$product_id = $_GET['edit'];

if(isset($_POST['update_product'])){

   $product_name = $_POST['product_name'];
   $product_category = $_POST['product_category'];
   $product_stock = $_POST['product_stock'];
   $product_price = $_POST['product_price'];
   $product_img = $_FILES['product_img']['name'];
   $product_image_tmp_name = $_FILES['product_img']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_img;

   if(empty($product_name) || empty($product_category) ||  empty($product_stock) || empty($product_price) || empty($product_img)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE products SET product_name='$product_name',product_category='$product_category',product_stock='$product_stock', product_price='$product_price', product_img='$product_img'  WHERE product_id = '$product_id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location:admin_page.php');
      }else{
         $$message[] = 'please fill out all!'; 
      }

   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM products WHERE product_id = '$product_id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the product</h3>
      <input type="text" class="box" name="product_name" value="<?php echo $row['product_name']; ?>" placeholder="enter the product name">
      <input type="text" class="box" name="product_category" value="<?php echo $row['product_category']; ?>" placeholder="enter the product Category">
      <input type="text" class="box" name="product_stock" value="<?php echo $row['product_stock']; ?>" placeholder="enter the Stock">
      <input type="number" min="0" class="box" name="product_price" value="<?php echo $row['product_price']; ?>" placeholder="enter the product price">
      <input type="file" class="box" name="product_img"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="update product" name="update_product" class="btn">
      <a href="admin_page.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>