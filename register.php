<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title> Register - ADDBYB Digital Marketing Pvt. Ltd.</title>
  <link href="../ADDBYB-BLOG/admin/images/favicon.ico" rel="icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="../ADDBYB-BLOG/admin/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../ADDBYB-BLOG/admin/assets/css/style.css" rel="stylesheet">
</head>

<body>
 
  <main>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
        <?php include ('massage.php'); ?>
        </div>
      </div>
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">
                <div class="card-body pt-4">
                  <div class="d-flex justify-content-center">
                    <a href="index.html" class="logo d-flex align-items-center w-auto">
                      <img src="../ADDBYB-BLOG/admin/images/logo.png" alt="">
                    </a>
                  </div>
                  <div class=" pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form action="registration.php" method="POST" class="row g-3 needs-validation">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Confirm Password</label>
                      <input type="password" name="cpassword" class="form-control" id="CPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and
                            conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="register_btn" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0"> <a href="login.php">Already have an account?</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="credits text-center">
              © Copyrights 2023 <a href="#">ADDBYB Digital Marketing Pvt. Ltd.</a> all rights reserved.
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <script src="../ADDBYB-BLOG/admin/assets/js/bootstrap.bundle.min.js"></script>
  <script src="../ADDBYB-BLOG/admin/assets/js/main.js"></script>

</body>

</html>