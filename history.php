<?php
include_once 'partial/header.php';
include("connection.php");

?>

<div class="hero-wrap" style="background-image: url('images/foodwaste.avif');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7  text-center" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">"Fight food waste, feed the future."</h1>
                <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <a href="#"></a>
                </p>
            </div>
        </div>
    </div>
</div>


<div class="d-flex col-md-8 mx-auto py-4">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="text-dark text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active"><b>History</b></li>
        </ol>
    </nav>
</div>

<div class="container text-center">
    <p class="fs-1 pb-4"><b>Your Request History</b></p>
</div>

<div class="py-5">
    <div class="container">
        <?php
        if (isset($_SESSION['logined'])) {
            $id = $_SESSION['userid'];
            $sql = "SELECT tbl_fooddonate.name AS name, tbl_fooddonate.phone AS phone, tbl_fooddonate.date AS date, tbl_fooddonate.address AS address, tbl_fooddonate.message AS message, tbl_fooddonate.status AS status, tbl_volunteer.name AS vname, tbl_volunteer.contact AS vphone FROM tbl_fooddonate LEFT JOIN tbl_volunteer ON tbl_fooddonate.vid = tbl_volunteer.id WHERE userid = $id";
            $res = mysqli_query($con, $sql);

            if ($res) {
                $c = 1;
                foreach ($res as $key) {
                    ?>
                    <div class="row">
                        <div class="col-md-1 border p-4">
                            <p><?= $c ?></p>
                        </div>
                        <div class="col-md-5 border p-4">
                            <span class="badge rounded-pill bg-success">Request Info</span>
                            <h4 class="mb-0 mt-2"><?= $key['name'] ?></h4>
                            <p class="mb-0"><?= $key['phone'] ?></p>
                            <p class="mb-0">Date: <?= $key['date'] ?></p>
                            <p class="">Pickup Location: <?= $key['address'] ?></p>
                            <p class="mb-0"><b>Note:</b><br> <?= $key['message'] ?></p>
                        </div>
                        <div class="col-md-5 border p-4">
                            <span class="badge rounded-pill bg-info">Volunteer Info</span>
                            <?php if ($key['status'] == 0) {
                                echo "<p class='mt-3'><small class='text-danger'>Not Assigned yet.</small></p>";
                            } else { ?>
                                <h4 class="mb-0 mt-2"><?= $key['vname'] ?></h4>
                                <p class="mb-0"><a href="tel:<?= $key['vphone'] ?>"><?= $key['vphone'] ?></a></p>
                            <?php } ?>
                        </div>
                        <div class="col-md-1 border p-4">
                            <p><?php if ($key['status'] == 0) {
                                    echo "<small class='text-danger'>Request received</small>";
                                } else if ($key['status'] == 1) {
                                    echo "<small class='text-danger'>Request Assigned</small>";
                                } ?></p>
                        </div>
                    </div>
                <?php
                    $c++;
                }
            } else {
                echo "Error executing query: " . mysqli_error($con);
            }
        } else {
            ?>
            <div class="row">
                <div class="col-12 border p-4 text-center">
                    <p class="m-0">Please Login First from <a href="login.php">here</a>.</p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
include_once 'partial/footer.php';
?>
