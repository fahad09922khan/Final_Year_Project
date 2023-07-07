<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sidebar</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/admin.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
</head>

<body>
    <!--Main Navigation-->
    <!-- Sidebar -->
    <header>
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">
            <div class="position-sticky">
                <div class="list-group list-group-flush" style="margin-top: 50px;">
                    <a href="admin.php" class="list-group-item list-group-item-action py-2  <?php echo (strpos($_SERVER['PHP_SELF'], 'admin.php') !== false) ? 'active' : ''; ?>" aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard</span>
                    </a>
                    <a href="ebooks.php" class="list-group-item list-group-item-action py-2  <?php echo (strpos($_SERVER['PHP_SELF'], 'ebooks.php') !== false) ? 'active' : ''; ?>">
                        <i class="fa fa-book me-3"></i><span>E Books</span>
                        <a href="volunteer.php" class="list-group-item list-group-item-action py-2  <?php echo (strpos($_SERVER['PHP_SELF'], 'volunteer.php') !== false) ? 'active' : ''; ?>">
                            <i class="fa fa-handshake me-3"></i><span>Volunteer</span>
                        </a>
                        <a href="contact.php" class="list-group-item list-group-item-action py-2  <?php echo (strpos($_SERVER['PHP_SELF'], 'contact.php') !== false) ? 'active' : ''; ?>"><i class="fas fa-lock fa-fw me-3"></i><span>Contact</span></a>

                        <a href="fooddonation.php" class="list-group-item list-group-item-action py-2  <?php echo (strpos($_SERVER['PHP_SELF'], 'fooddonation.php') !== false) ? 'active' : ''; ?>"><i class="fa fa-donate me-3" ></i><span>Food Donation's</span></a>
                        <a href="clothesdonation.php" class="list-group-item list-group-item-action py-2  <?php echo (strpos($_SERVER['PHP_SELF'], 'clothesdonation.php') !== false) ? 'active' : ''; ?>"><i class="fa fa-donate me-3" ></i><span>Clothe's Donation's</span></a>
                        <a href="profile.php" class="list-group-item list-group-item-action py-2  <?php echo (strpos($_SERVER['PHP_SELF'], 'profile.php') !== false) ? 'active' : ''; ?>"><i class="fa fa-user me-4"></i><span>Profile</span></a>
                </div>
            </div>
            <div class="m-5">
                <button class="btn text-white w-100" style="background-color: #f86f2d;">Logout</button>
            </div>
        </nav>
    </header>
    <!-- Sidebar -->
</body>Volunteers

</html>