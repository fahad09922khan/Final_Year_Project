<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darsgah</title>
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
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>

    <!-- --------------------------------- -->
<style>
    .ftco-navbar-light .navbar-nav>.nav-item>.nav-link {
    font-size: 18px;
    padding-top: 0.9rem;
    padding-bottom: 0.4rem;
    /* padding-left: 20px; */
    padding-right: 10px;
    color: white;
    font-weight: bold;
    /* opacity: 1 !important; */
}
</style>
</head>

<body>

    <header class="topbar bg-primary ">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                <ul class="list-unstyled d-flex text-white justify-content-end mb-0 py-2">
                    <li class="mx-2 text-white"><a href="#" class="text-white"><i class="fab fa-facebook-square"></i> </a></li>
                    <li class="mx-2 text-white"><a href="#" class="text-white"><i class="fab fa-twitter-square"></i> </a></li>
                    <li class="mx-2 text-white"><a href="#" class="text-white"><i class="fab fa-instagram-square"></i> </a></li>
                    <li class="mx-2 text-white"><a href="#" class="text-white"><i class="fas fa-envelope"></i> </a></li>

            </ul>
                </div>
                <div class="col-md-11">
            <ul class="list-unstyled d-flex text-white justify-content-end mb-0 py-2">
                <?php if (!isset($_SESSION['logined'])) { ?>
                    <li class="mx-2 text-white"><a href="signup.php" class="text-white">Register</a></li>
                    <li class="mx-2 text-white"><a href="login.php" class="text-white">Sign in</a></li>
                <?php } else { ?>
                    <li class="mx-2 text-white"><a href="#" class="text-white">Hi! <?= $_SESSION['username'] ?></a></li>
                    <li class="mx-2 text-white mt-n1"><a href="logout.php" class="btn  text-white ">Logout</a></li>
                <?php   } ?>
            </ul>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" style="width: 120px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link" <?php echo (strpos($_SERVER['PHP_SELF'], 'index.php') !== false) ? 'active' : ''; ?>>Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link" <?php echo (strpos($_SERVER['PHP_SELF'], 'about.php') !== false) ? 'active' : ''; ?>>About</a></li>
                    <!-- <li class="nav-item"><a href="causes.php" class="nav-link">Causes</a></li> -->
                    <!-- <li class="nav-item"><a href="donate.php" class="nav-link">Donate</a></li> -->
                    <li class="nav-item"><a href="Volunteer.php" class="nav-link" <?php echo (strpos($_SERVER['PHP_SELF'], 'volunteer.php') !== false) ? 'active' : ''; ?>>Volunteer</a></li>
                    <li class="nav-item"><a href="gallery.php" class="nav-link" <?php echo (strpos($_SERVER['PHP_SELF'], 'gallery.php') !== false) ? 'active' : ''; ?>>Gallery</a></li>
                    <li class="nav-item"><a href="e-books.php" class="nav-link" <?php echo (strpos($_SERVER['PHP_SELF'], 'e-books.php') !== false) ? 'active' : ''; ?>>E-Books</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link" <?php echo (strpos($_SERVER['PHP_SELF'], 'contact.php') !== false) ? 'active' : ''; ?>>Contact</a></li>
                    <li class="nav-item"><a href="history.php" class="nav-link" <?php echo (strpos($_SERVER['PHP_SELF'], 'history.php') !== false) ? 'active' : ''; ?>>History</a></li>

                </ul>
                <a href="donate.php" class="nav-link text-white"><button class="btn btn-sm ml-5 rounded" style="background-color: #f86f2d;"><i class="fa-solid fa-hand-holding-dollar "> Donate</i> </a></button>
            </div>
        </div>
    </nav>