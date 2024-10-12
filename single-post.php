<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Blog</title>
  <?php require_once("cdns.php"); ?>
</head>

<body>

  <?php require_once("navbar.php"); ?>
  <main id="main">
    <section class="single-post-content">
      <div class="container">
        <div class="row">
          <div class="col-md-9 post-content" data-aos="fade-up">

            <!-- ======= Single Post Content ======= -->
            <div class="single-post">
              <div class="post-meta"><span class="date">Antique Identification's</span> <span
                  class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
              <h1 class="mb-5">18 Most Valuable Lionel Trains (Value & Identification Tips)</h1>
              <p><span class="firstcharacter">S</span>urprisingly, old train sets, usually considered toys, are
                collectible charms worth thousands today! Especially the iconic, branded Lionel trains! With their
                intricate craftsmanship of realistic railroading, Lionel trains have been everyone’s favorite!</p>

              <figure class="my-4">
                <img src="assets/img/Train2.jpg" alt="" class="img-fluid">
                <p>Surprisingly, old train sets, usually considered toys, are collectible charms worth thousands
                  today!
                  Especially the iconic, branded Lionel trains! <br>With their intricate craftsmanship of realistic
                  railroading, Lionel trains have been everyone’s favorite! </p>
              </figure>
              <p>Realistic train designs, solid die-cast bodies, detailed engine & car decoration, real-world rail
                sounds, lighting, smooth forward & reverse control, etc., make Lionel trains priceless and
                collectible!
              </p>
              <p>The most expensive Lionet train set ever sold was its Standard Gauge 400E Set, which reached a
                whopping
                price of $250,000. </p>
              <h1>How to Identify Valuable Vintage Lionel Train Sets</h1>
              <figure class="my-4">
                <img src="assets/img/Train 7.jpg" alt="" class="img-fluid">
                <p>Real-world rail features, like engine models, functional doors, freight cars, etc.
                  Realistic rain tracks, including navigational lights, rail sounds, horn, etc. </p>
              </figure>
              <h1>Lionel Standard Gauge Diesel Train Set</h1>
              <p>This is one of the earliest train sets from Lionel Corporation with its first “standard gauge.” This
                train runs on an electric AC motor and features intricate realistic train features like the electrical
                train top, windows, sounds, lighting effects, etc.</p>
              <p>Includes a No. 384 or No. 385E locomotive, two passenger cars, & one observation car</p>
              <p>A broader, 2 1/8 inches wide track (standard gauge)
                TrainMaster Command Control system & real rail sounds
                “Liberty Bell” inscribed/enameled in black on the passenger cars
                “Lionel” brand mark and model number written on metal plates on the locomotive & cars
              </p>
            </div><!-- End Single Post Content -->

            <?php require_once("comments.php"); ?>

          </div>
          <?php require_once("sidebar.php"); ?>
        </div>
      </div>
    </section>
  </main><!-- End #main -->


  <?php require_once("footer.php"); ?>
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php
require_once("createtable.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $name = $_POST["name"];
  $email = $_POST['email'];
  $suggestion = $_POST['suggestion'];

  $sql = "INSERT INTO `comment` (`name`,`email`,`suggestion`) VALUES ( '$name','$email','$suggestion')";

  if ($con->query($sql) === TRUE) {
    echo "<br>New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}

$con->close();
?>