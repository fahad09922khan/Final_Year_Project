<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
  <!-- <link rel="stylesheet" href="css/animate.css"> -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
  <!-- --------------------------------- -->

</head>

<body>
  <section class="vh-100" style="background-color: #f86f2d;">
    <div class="container  h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5  d-none m-auto d-md-block">
                <img src="images/logo.png" alt="login form" class="img img-fluid" style="border-radius: 9rem 0 0 9rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center" style="background-color: cornsilk;">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form method="POST">

                    <!-- <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #f86f2d;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div> -->

                    <h3 class="fw-normal mb-3 pb-3  text-center fw-bold" style="letter-spacing: 1px;">Sign into your account
                      <hr>
                    </h3>

                    <div class="form-outline mb-4">
                      <input type="email" required id="form2Example17" name="userName" class="form-control border form-control-lg" />
                      <label class="form-label" for="form2Example17">Email address</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" required id="form2Example27" name="passwrdInput" class="form-control border form-control-lg" />
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                    </div>

                    <a class="small text-muted" href="#!">Forgot password?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="signup.php<?= isset($_GET['return']) ? '?return=' . $_GET['return'] : '' ?>" class="text-decoration-none">Register here</a></p>
                    <a href="#!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>


<?php
session_start();
include_once 'functions.php';
include_once 'connection.php';

if (isset($_SESSION['logined'])) {
  if ($_SESSION['role'] == 1) {
    echo "<script>window.location.href='dashboard/admin.php'</script>";
  } else {
    echo "<script>window.location.href='index.php'</script>";
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  extract($_REQUEST);
  if (empty($userName) || empty($passwrdInput)) {
    emptyMsg();
  } else {
    $PASS = MD5($passwrdInput);
    $sql = "select * from tbl_register where email='$userName' and password='$PASS'";
    $res = mysqli_query($con, $sql);
    if (mysqli_num_rows($res) > 0) {
      $row = mysqli_fetch_assoc($res);
      $_SESSION['logined'] = true;
      $_SESSION['userid'] = $row['id'];
      $_SESSION['username'] = $row['name'];
      $_SESSION['role'] = $row['roles'];
      if ($_SESSION['role'] == 1) {
        echo "<script>window.location.href='dashboard/admin.php'</script>";
      } else {
        if (isset($_GET['return'])) {
          echo "<script>window.location.href='" . $_GET['return'] . "'</script>";
        } else {
          echo "<script>window.location.href='index.php'</script>";
        }
      }
    } else {
      invalidMsg('Invalid Login');
      session_destroy();
    }
  }
} ?>