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

<section class="vh-100" style="background-color: #f86f2d;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none m-auto d-md-block">
              <img src="images/logo.png" alt="login form" class="img img-fluid" style="border-radius: 9rem 0 0 9rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center" style="background-color: cornsilk;">
              <div class="card-body p-4 p-lg-5 text-black">
                <form method="POST">
                  <h3 class="fw-normal mb-3 pb-3 text-bold fw-bold text-center" style="letter-spacing: 1px;">Register your account
                    <hr>
                  </h3>
                  <div class="form-outline mb-4">
                    <input type="text" name="usernameInput" class="form-control border form-control-lg" />
                    <label class="form-label">User Name</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="email" required name="emailInput" class="form-control border form-control-lg" />
                    <label class="form-label">Email address</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password" required name="passwrdInput" class="form-control border form-control-lg" />
                    <label class="form-label">Password</label>
                  </div>
                  <div class="pt-1 mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
                  </div>
                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Already Have Account ? <a href="login.php">Back To Login</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
session_start();
include_once 'functions.php';
include_once 'connection.php';

// Debugging: Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  extract($_POST); // Extract form data into individual variables

  // Debugging: Output form data
  var_dump($_POST);

  if (empty($usernameInput) || empty($emailInput) || empty($passwrdInput)) {
    emptyMsg();
  } else {
    $hashedPassword = md5($passwrdInput);

    // Prepare the SQL statement using prepared statements
    $stmt = mysqli_prepare($con, "INSERT INTO tbl_register (email, password, name) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sss", $emailInput, $hashedPassword, $usernameInput);

    if (mysqli_stmt_execute($stmt)) {
      $insertedId = mysqli_insert_id($con);
      $sql1 = "SELECT * FROM tbl_register WHERE id = $insertedId";
      $res1 = mysqli_query($con, $sql1);
      if (mysqli_num_rows($res1) > 0) {
        $row = mysqli_fetch_assoc($res1);
        $_SESSION['logined'] = true;
        $_SESSION['userid'] = $row['id'];
        $_SESSION['username'] = $row['name'];
        $_SESSION['role'] = $row['roles'];
        if (isset($_GET['return'])) {
          header("Location: " . $_GET['return']);
          exit();
        } else {
          header("Location: index.php");
          exit();
        }
      }
    } else {
      // Debugging: Output MySQL error
      echo "Error: " . mysqli_error($con);

      invalidMsg('Invalid Request');
      session_destroy();
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
  }
}
?>