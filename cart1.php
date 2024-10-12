<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>My Cart</title>
    <?php require_once("cdns.php"); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.3/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.3/dist/sweetalert2.all.min.js"></script>

    <script>
        function btnclick() {
            Swal.fire({
                title: "Order Placed!",
                text: "Thank you for placing order!",
                icon: "success"
            });
        }
    </script> 
</head>

<body>
    <?php require_once("navbar.php"); ?>
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Image</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php

                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $sr = $key + 1;


                                echo "
                                    <tr>
                                        <td>$sr</td>
                                        <td><img src='$value[Image_URL]' alt='Product Image' width='100'></td>
                                        <td>$value[Item_Name]</td>
                                        <td>Rs. $value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                        <td>
                                            <form action='mcart.php' method='POST'>
                                                <input class='text-center iquantity' name = 'Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                            </form>
                                        </td>
                                       <td class='itotal'></td>
                                        <td>
                                            <form action='mcart.php' method='POST'>
                                                <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button>
                                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                            </form>
                                        </td>
                                    </tr>
                                    ";
                            }
                        } else {
                            echo "<tr><td colspan='6'>Your cart is empty</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Grand Total: </h4>
                    <h5 class="text-right">Rs.</h5>
                    <h5 class="text-right" id="gtotal"><?php echo $total ?></h5>
                    <br>
                    <?php
                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                        ?>
                        <form action="purchase.php" method="POST">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="full_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Phone No.</label>
                                <input type="number" name="phone_no" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pay_mode" value="COD"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Cash on Delivery
                                </label>
                            </div>
                            <br>
                            <button class="btn btn-primary btn-block" name="purchase" onclick="btnclick();" type="submit">Make Purchase</button>
                        </form>
                        <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
    </div>
    <script>
        var gt = 0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');

        function subTotal() {
            gt = 0;
            for (i = 0; i < iprice.length; i++) {
                itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);

                gt = gt + (iprice[i].value) * (iquantity[i].value);
            }
            gtotal.innerText = gt;
        }

        subTotal();
    </script>
    <br><br><br>
    <?php require_once("footer.php"); ?>
    <?php require_once("scriptcnds.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>