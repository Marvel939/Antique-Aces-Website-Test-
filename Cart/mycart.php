<?php 
include("header.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="mcart.php" method="POST">
                <div class="card">
                    <img src="images/1.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bag 1</h5>
                        <p class="card-text">Price: Rs.450</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag 1">
                        <input type="hidden" name="Price" value="450">
                        <input type="hidden" name="Image_URL" value="images/1.jpg"> <!-- Add image URL -->
                    </div>
                </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="mcart.php" method="POST">
                <div class="card">
                    <img src="images/2.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bag 2</h5>
                        <p class="card-text">Price: Rs.650</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag 2">
                        <input type="hidden" name="Price" value="450">
                        <input type="hidden" name="Image_URL" value="images/2.jpg"> <!-- Add image URL -->
                    </div>
                </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="mcart.php" method="POST">
                <div class="card">
                    <img src="images/3.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bag 3</h5>
                        <p class="card-text">Price: Rs.750</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag 3">
                        <input type="hidden" name="Price" value="750">
                        <input type="hidden" name="Image_URL" value="images/3.jpg"> <!-- Add image URL -->
                    </div>
                </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="mcart.php" method="POST">
                <div class="card">
                    <img src="images/4.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bag 4</h5>
                        <p class="card-text">Price: Rs.950</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Bag 4">
                        <input type="hidden" name="Price" value="950">
                        <input type="hidden" name="Image_URL" value="images/4.jpg"> <!-- Add image URL -->
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

</body>

</html>