<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Contact Us</title>
    <?php require_once("cdns.php"); ?>
  </head>

  <body>
  <?php require_once("navbar.php");?>
    <main id="main">
      <section id="contact" class="contact mb-5">
        <div class="container" data-aos="fade-up">

          <div class="row">
            <div class="col-lg-12 text-center mb-5">
              <h1 class="page-title">Contact us</h1>
            </div>
          </div>

          <div class="row gy-4">

            <div class="col-md-4">
              <div class="info-item">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <address>L.J. University, Sharkej, India</address>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-4">
              <div class="info-item info-item-borders">
                <i class="bi bi-phone"></i>
                <h3>Phone Number</h3>
                <p><a href="">+91 91XXX XXXXX</a></p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-4">
              <div class="info-item">
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                <p><a href="">antiqueaces2024@gmail.com</a></p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="form mt-5">
            <form action="contact.php" method="post" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name = "submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>
      </section>

    </main><!-- End 404.phpmain -->

    <?php require_once("footer.php");?>
    <?php require_once("scriptcnds.php"); ?>
  </body>

</html>

<?php

require_once ("createtable.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $sql = "INSERT INTO `contacts` (`name`,`email`,`subject`,`message`) VALUES ( '$name', '$email' , '$subject', '$message')";
  

  if ($con->query($sql) === TRUE) {
   // echo "<br>New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}

$con->close();
?>