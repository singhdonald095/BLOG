<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Login - ADDBYB Digital Marketing Pvt. Ltd.</title>
  <link href="../blog-01/admin/images/favicon.ico" rel="icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="../blog-01/admin/assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="../blog-01/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../blog-01/admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../blog-01/admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../blog-01/admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../blog-01/admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../blog-01/admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="../blog-01/admin/assets/css/style.css" rel="stylesheet">
</head>

<body>
 
  <main>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
        <?php include ('massage.php'); ?>
        </div>
      </div>
      <section class="section register vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">
                <div class="card-body pt-4">
                  <div class="d-flex justify-content-center">
                    <a href="index.html" class="logo d-flex align-items-center w-auto">
                      <img src="../blog-01/admin/images/logo.png" alt="">
                    </a>
                  </div>
                  <div class=" pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login  Your Account</h5>
                    <p class="text-center small">Enter your personal details to login account</p>
                  </div>

                  <form action="logincode.php" method="POST" class="row g-3 needs-validation">
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="name" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Enter Your Username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please Enter Your Password!</div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="login_btn" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0"><a href="register.php">Don't have a account?</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </section>
      <div class="container">
          <div class="row justify-content-center">
          <div class="col-12">
          <div class="credits text-center">
            <p class="py-2 m-0">
              © Copyrights 2023 <a href="#">ADDBYB Digital Marketing Pvt. Ltd.</a> all rights reserved.</p>
            </div>
          </div>
</div>
</div>
    </div>
  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <script src="../blog-01/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../blog-01/admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../blog-01/admin/assets/vendor/php-email-form/validate.js"></script>
  <script src="../blog-01/admin/assets/js/main.js"></script>

</body>

</html>