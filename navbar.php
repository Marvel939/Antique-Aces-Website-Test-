<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
</head>

  <style>
    .nav_des:hover{
      font-size: 20px;
      color: ;
    }
  </style>

<body>
    <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="Welcome.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/Antnew2.jpg" alt="">
        <h1>Antique Aces</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="Welcome.php" class="nav_des">Home</a></li>
          <li class="dropdown"><a href="category.php" class="nav_des"><span>Categories</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="search-result.php" class="nav_des">Search Result</a></li>
              <li><a href="American Pennies.php" class="nav_des">Coins</a></li>
              <li class="dropdown"><a href="#" class="nav_des"><span>Vintage</span> <i
                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="single-post.php" class="nav_des">Trains</a></li>
                  <li><a href="Lamps.php" class="nav_des">Lamps</a></li>
                  <li><a href="#" class="nav_des">Guides</a></li>

                </ul>
              </li>
              <li><a href="Marbles.php" class="nav_des">Rare Collectibles</a></li>
              <li><a href="Jars.php" class="nav_des">Antique Identification</a></li>
              <li><a href="#" class="nav_des">Guides</a></li>
            </ul>
          </li>

          <li><a href="about.php" class="nav_des">About</a></li>
          <li><a href="contact.php" class="nav_des">Contact</a></li>
          <li><a href="mycart.php" class="nav_des">Shop</a></li>
          <li><a href="Login.php" class="nav_des">Login</a></li>
          <li><a href="Reg.php" class="nav_des">Register</a></li>
          <li><a href="fdback.php" class="nav_des">Feedback</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <?php
        $count=0;
          if(isset($_SESSION['cart']))
          {
            $count=count($_SESSION['cart']);
          }
        ?>
        <a href="cart1.php"><span class="bi bi-cart">(<?php echo $count; ?>)</span></a>&nbsp;&nbsp;
        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.php" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->
      </div>
    </div>
  </header><!-- End Header -->
</body>
</html>