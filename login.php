<?php if( isset($error) ) : ?>
<p style="color=red; font-style=italic;">username / password salah</p>
<?php endif; ?>
<?php

session_start();
if (isset($_SESSION["login"]) ) {
    header("Location:index.html");
    exit;
}
require 'LoginFunction.php';

if ( isset($_POST["login"]) ) {

    $Gmail = $_POST["Gmail"];
    $password = $_POST["password"];

   $hasil = mysqli_query($conn, "SELECT * FROM user WHERE
       Gmail = '$Gmail'");

       //cek username
       if( mysqli_num_rows($hasil) ===1 ) {

        // cek password
        $row = mysqli_fetch_assoc($hasil);
       if (password_verify($password, $row["password"]) ) {
        // set session 
        $_SESSION["login"] = true;
        header("Location: index.html");
        exit;
       }
       }

       $error = true;


}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | FORM</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- My CSS -->
    <link rel="stylesheet" href="LOGIN.css" />
  </head>
  <body>
    <section class="vh-100">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="img/draw2.webp" class="img-fluid" alt="Sample image" />
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form method="post">
              <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                <button type="button" class="btn  btn-floating mx-1">
                  <img src="img/goggle.png" alt="goggle" class="fab fa-goggle-f" />
                </button>

                <button type="button" class="btn  btn-floating mx-1">
                  <img src="img/linkedin.png" alt="linkedin" class="fab fa-linkedin-in" />
                </button>

                <button type="button" class="btn  btn-floating mx-1">
                  <img src="img/twitter.png" alt="twitter" class="fab fa-twitter" />
                </button>
              </div>

              <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0">Or</p>
              </div>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" name="Gmail" />
                <label class="form-label" for="form3Example3">Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-3">
                <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" name="password"/>
                <label class="form-label" for="form3Example4">Password</label>
              </div>

              <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                  <input class="form-check-input pt-1 mb-0">Don't have an account? <a href="registrasi.php" class="link-danger">Register</me-2" type="checkbox" value="" id="form2Example3" />
                  <label class="form-check-label" for="form2Example3"> Remember me </label>
                </div>
                <a href="#!" class="text-body">Forgot password?</a>
              </div>

                <input type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem" value="Login" name="login">
                <p class="small fw-bold mt-2 a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">Copyright © Christian 2023. All rights reserved.</div>
        <!-- Copyright -->

        <!-- Right -->
        <div>
          <a href="#!" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#!" class="text-white me-4">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#!" class="text-white me-4">
            <i class="fab fa-google"></i>
          </a>
          <a href="#!" class="text-white">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
        <!-- Right -->
      </div>
    </section>
  </body>
</html>
