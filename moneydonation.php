<!-- Header -->
<?php
$title = "Submit Your Request";
include_once 'partial/header.php';
if (!isset($_SESSION['logined'])) {
    echo "<script>window.location.href='login.php?return=food-donation-form.php'</script>";
}
?>

       <!-----------------------------------Carousel----------------------------------------------->
       <div class="hero-wrap" style="background-image: url('images/moneydonate.webp');" data-stellar-background-ratio="0.5">
        <!-- <div class="overlay"></div> -->
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Money donation</span></p>
                <h1 class=" bread bg-light text-primary" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Lend a hand with your donation</h1>
                </div>
            </div>
        </div>
    </div>
        <!-----------------------------------Carousel End----------------------------------------------->

        <div class="container-fluid p-4">
        <div class="p-3 p-4" style="box-shadow: 10px 10px 10px 10px; ">
		<h2 class="text-center p-3 font-weight-bold">Don't turn away, give today!</h2>
		<nav>
			<div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
				<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><strong><i class="fa fa-hands fa-xl"></i> DONATE Online </strong></button>
				<button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><strong><i class="fa fa-box fa-xl "></i> DONATE via SMS</strong></button>
				<button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><strong><i class="fas fa-gift fa-xl"></i> DONATE via Call or Bank Transfer</strong></button>
			</div>
		</nav>
		<div class="tab-content p-3 border bg-light" id="nav-tabContent">
			<div class="tab-pane  fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <div class="container">
    <h1>Money Donation</h1>

    <?php
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validate and process the donation
        $amount = $_POST['amount'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Here, you can perform additional validation and processing as needed.
        // For simplicity, we'll just display the submitted data.

        echo "<h3>Donation Confirmation</h3>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Email:</strong> $address</p>";
        echo "<p><strong>Amount:</strong> $amount</p>";
        echo "<p>Thank you for your generous donation!</p>";
    }
    ?>

    <!-- Donation Form -->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="number" class="form-control" name="amount" required>
        </div>
        <button type="submit" class="btn btn-primary">Donate</button>
    </form>
</div>

			</div>
			<div class="tab-pane fade  m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
<h3 class="font-weight-bold">To Donate once, Send the word "Meal" to:</h3>
            <div class="d-flex">
                <div class="">
                <img src="images/du-virgin.png" class="" style="width: 200px; height: 100px;">
                <img src="images/etisalat-horizontal.png" style="width: 200px; height: 100px;">
                </div>
    <div class="card card-hover text-white bg-primary mb-3 ml-4" style="max-width: 18rem;">
  <div class="card-body">
  <h2 class="card-title text-white">1034</h2>
    <hr>
    <p class="card-text">AED <span style="font-size: 25px; font-weight: bold;">10</span></p>
  </div>
</div>
<div class="card card-hover text-white bg-primary mb-3 ml-4" style="max-width: 18rem;">
  <div class="card-body">
    <h2 class="card-title text-white">1035</h2>
    <hr>
    <p class="card-text">AED<span style="font-size: 25px; font-weight: bold;"> 30</span></p>
  </div>
</div>
<div class="card card-hover text-white bg-primary mb-3 ml-4" style="max-width: 18rem;">
  <div class="card-body">
  <h2 class="card-title text-white">1036</h2>
    <hr>
    <p class="card-text">AED<span style="font-size: 25px; font-weight: bold;"> 50</span></p>
  </div>
</div>
</div>

			</div>
			<div class="tab-pane fade " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
				<strong class="font-weight-bold">Donate via our call center:</strong>

                <div class="" style="border: 1px solid black; border-radius: 20px;">
                    <h5 class="m-3 font-weight-bold">For big monetary donations and related inquiries, please contact the campaign’s team via:<span class="text-primary"> 800 9999</span>
                    </h5>
                </div>
                <br>
                <strong class="font-weight-bold mt-5">Donate via bank transfer:</strong>
                <div class="p-4" style="border: 1px solid black; border-radius: 20px;">
                    <h5 class="ml-3"><strong>Make a transfer to ’Darsgah Charity’ campaign bank account at:</strong></h5>
                    <h5 class="ml-3"><strong>Beneficiary:</strong> Fahad Ali Khan Account no. 2</h5>
                    <h5 class="ml-3"><strong>Beneficiary Bank</strong>: Mashreq Bank</h5>
                    <h5 class="ml-3"><strong>Beneficiary Bank Address</strong>: Emirates Towers, Dubai, UAE</h5>
                    <h5 class="ml-3"><strong>Swift Code</strong>: EBILAEAD</h5>
                    <h5 class="ml-3"><strong>Account #</strong>: 1015333439802</h5>
                    <h5 class="ml-3"><strong>IBAN #</strong>: AE300260001015333439802</h5>
                    <h5 class="ml-3"><strong>Currency</strong>: AED</h5>
                </div>
			</div>
		</div>
	</div>
    </div>


<style>
.card{
    width: 200px;
}

.card :hover{
    border: 1px solid white;
}
    </style>

        <?php
include('partial/footer.php')
?>




<!-- Include Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
