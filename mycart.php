<?php
require_once("config.php");

$sql = "SELECT * FROM `products`";
$all_products = $conn->query($sql);

?>

<?php
if (isset($_POST['Add_To_Cart'])) {
    $product_img = $_FILES['product_img']['name'];
    $product_image_tmp_name = $_FILES['product_img']['tmp_name'];
    $product_image_folder = 'images/' . $product_img;

    $insert = "INSERT INTO products(product_img) VALUES('$product_img')";
    $upload = mysqli_query($conn, $insert);
    if ($upload) {
        move_uploaded_file($product_image_tmp_name, $product_image_folder);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Shop</title>
    <?php require_once("cdns.php"); ?>
</head>

<body>
    <?php require_once("navbar.php"); ?>
    <br><br><br>
    <div class="container mt-5">

        <div class="row">
            <?php
            while ($row = mysqli_fetch_assoc($all_products)) {
            ?>
                <div class="col-lg-3">

                    <form action="mcart.php" method="POST">

                        <div class="card mb-5">
                            <img src="images/<?php echo $row["product_img"]; ?>" style="height:250px; width:auto;"
                                class="card-img-top">
                            <div class="card-body text-center">

                                <b><p class="product_name" style="font-size:22px;"><?php echo $row["product_name"]; ?></p></b>
                                <p class="product_price" style="font-size:20px;">Rs. <?php echo $row["product_price"]; ?></p>
                                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                                <input type="hidden" name="Item_Name" value="<?php echo $row["product_name"]; ?>">
                                <input type="hidden" name="Price" value="<?php echo $row["product_price"]; ?>">
                                <input type="hidden" name="Image_URL" value="images/<?php echo $row["product_img"]; ?>">
                                <!-- Add image URL -->
                            </div>
                        </div>

                    </form>

                </div>
            <?php } ?>
        </div>

    </div>
    <?php require_once("footer.php"); ?>
    <?php require_once("scriptcnds.php"); ?>
</body>

</html>