<?php
include("partial/header.php");
if (!isset($_SESSION['logined'])) {
    echo "<script>window.location.href='login.php?return=login.php'</script>";
}
?>

<div class="hero-wrap" style="background-image: url('https://cdn.s4ch.org/site/assets/files/1209/sundaraijal-nepal-childrens-home-volunteer.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7  text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hold at least one annual hands-on training program for volunteers.</h1>
                    <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <a href="#"></a>
                    </p>
                    <!-- <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span class="icon-play mr-2"></span>Watch Video</a></p> -->
                </div>
            </div>
        </div>
    </div>
<!-- Rest of your HTML code -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-7">
            <img class="p-5" src="images/volunteers.png" style="width: 100%; height: 80%;">
        </div>
        <div class="col-md-5">
            <form action="volunteer.php" method="POST" class="p-5">
                <h1 class="text-center bold" style="color: #f86f2d;">Become a Volunteer</h1>
                <div class="mb-4 border">
                    <input type="text" id="name" placeholder="Full Name" name="name" class="form-control" required />
                </div>
                <div class="border mb-4">
                    <input type="email" id="email" placeholder="Email" name="email" class="form-control" required />
                </div>
                <div class="mb-4 border">
                    <input type="text" id="address" placeholder="Address" name="address" class="form-control" required />
                </div>
                <div class="mb-4 border">
                    <input type="number" id="contact" placeholder="Contact" name="contact" class="form-control" required />
                </div>
                <div class="mb-4 border">
                    <textarea class="form-control" id="description" placeholder="Description" name="description" rows="4"></textarea>
                </div>
                <button type="submit" name="placeorder" class="btn btn-primary btn-block mb-4">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
include("connection.php");
if (isset($_POST['placeorder'])) {
    $vname = $_POST['name'];
    $vemail = $_POST['email'];
    $vaddress = $_POST['address'];
    $vcontact = $_POST['contact'];

    // Perform basic validation
    if (!empty($vname) && !empty($vemail) && !empty($vaddress) && !empty($vcontact)) {
        $insert = $con->query("INSERT INTO `tbl_volunteer`(`name`, `email`, `address`, `contact`) VALUES ('$vname','$vemail','$vaddress','$vcontact')");
        if ($insert) {
            echo "<script>alert('Volunteer Form Submitted Successfully')</script>";
            echo "<script>window.location.href='volunteer.php'</script>";
        } else {
            echo "<script>alert('Failed to submit Volunteer Form')</script>";
        }
    } else {
        echo "<script>alert('Please fill in all required fields')</script>";
    }
}
?>
<?php
include('partial/footer.php')
?>




<!-- ------------------------------------------------------------------------------------- -->