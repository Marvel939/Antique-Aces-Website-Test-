<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <?php require_once("cdns.php"); ?>
</head>

<body>
<?php require_once("navbar.php");?>
  <section class="p-3 p-md-4 p-xl-5">
    <div class="container" style="margin-top: 5%;">
      <div class="card border-light-subtle shadow-sm">
        <div class="row g-0">
          <div class="col-12 col-md-6">
            <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy"
              src="./assets/img/plane3.jpg" alt="BootstrapBrain Logo">
          </div>
          <div class="col-12 col-md-6">
            <div class="card-body p-3 p-md-4 p-xl-5">
              <div class="row">
                <div class="col-12">
                  <div class="mb-5">
                    <h3>Feedback Form</h3>
                  </div>
                </div>
              </div>
              <form action="fdback.php" method="POST">
                <div class="form-group">
                  <div class="form-wrapper">
                    <label for>Your Name:</label>
                    <div class="form-holder">
                      <!-- <i class="zmdi zmdi-account-o"></i> -->
                      <input type="text" class="form-control" placeholder="Please enter ur name" name = "name">
                    </div>
                  </div><br>
                  <div class="row gy-3 gy-md-4 overflow-hidden">
                    <div class="col-12">
                      <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com"
                        required>
                    </div>
                    <div class="form-group">
                      <div class="form-wrapper">
                        <label for>Ratings:</label>
                        <div class="form-holder select">
                          <select  id class="form-control" name = "ratings">
                            <option value="Excellent" name = "ratings">Excellent</option>
                            <option value="Good" name = "ratings">Good</option>
                            <option value="Poor" name = "ratings">Poor</option>
                          </select>
                        </div>
                      </div><br>
                      <div class="mb-3">
                        <label for="comments" class="form-label">Comments:</label>
                        <textarea class="form-control" id="comments" rows="4" placeholder="Your feedback" name = "comments"></textarea>
                      </div>
                      <div class="col-12">
                        <div class="d-grid">
                        <button class="btn bsb-btn-xl btn-primary" name="submit" type="submit">Submit Feedback</button>
                        </div>
                      </div>
                    </div>
              </form>
              <div class="row">
                <div class="col-12">
                  <hr class="mt-5 mb-4 border-secondary-subtle">
                  <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                    <a href="Reg.php" class="link-secondary text-decoration-none">Create new account</a>
                    <a href="404.php" class="link-secondary text-decoration-none">Forgot password</a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <p class="mt-5 mb-4">Or sign in with</p>
                  <div class="d-flex gap-3 flex-column flex-xl-row">
                    <a href="404.php!" class="btn bsb-btn-xl btn-outline-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-google" viewBox="0 0 16 16">
                        <path
                          d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                      </svg>
                      <span class="ms-2 fs-6">Google</span>
                    </a>
                    <a href="404.php!" class="btn bsb-btn-xl btn-outline-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-facebook" viewBox="0 0 16 16">
                        <path
                          d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                      </svg>
                      <span class="ms-2 fs-6">Facebook</span>
                    </a>
                    <a href="404.php!" class="btn bsb-btn-xl btn-outline-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-twitter" viewBox="0 0 16 16">
                        <path
                          d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                      </svg>
                      <span class="ms-2 fs-6">Twitter</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php require_once("footer.php");?>
  <?php require_once("scriptcnds.php"); ?>
</body>

</html>

<?php
require_once ("connect.php");

  if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["name"];
    $email = $_POST['email'];
    $ratings = $_POST['ratings'];
    $comments = $_POST['comments'];

   
    $sql = "INSERT INTO `fdback` (`name`,`email`,`ratings`,`comments`) VALUES ( '$name','$email','$ratings','$comments')";
    

    if ($con->query($sql) === TRUE) {
      //echo "<br>New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
  }
  
  $con->close();
  ?>