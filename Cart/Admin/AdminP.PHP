<?php
require("Conn.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-12">
        <table class="table text-center table-dark">
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
                
                  <table class='table text-center table-dark'>
                  <thead>
                  <tr>
                <th scope='col'>Item Name</th>
                <th scope='col'>Price</th>
                <th scope='col'>Quantity</th>
            </tr>
          </thead>
          <tbody>
          ";
            $order_query="SELECT * FROM `user_orders` WHERE `Order_id`='$user_fetch[Order_id]'";
            $order_result=mysqli_query($con,$order_query);
            while($order_fetch=mysqli_fetch_assoc($order_result))
            {
              echo"
                  <tr>
                    <td>$order_fetch[Item_Name]</td>
                    <td>$order_fetch[Price]</td>
                    <td>$order_fetch[Quantity]</td>
                  </tr>
              ";
            }
          echo" 
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


  <!-- <?php
  //if(isset($_POST['Logout']))
  //{
  //session_destroy();
  //header("location: Admin Login.php");
  //}
  ?> -->
</body>

</html>