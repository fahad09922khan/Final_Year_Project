<!-- Header -->
<?php
$title = "Submit Your Request";
include_once 'partial/header.php';
if (!isset($_SESSION['logined'])) {
    echo "<script>window.location.href='login.php?return=login.php'</script>";
}
?>
<style>
    .login-form{
        color: white;
        /* border-radius: 50px; */
        padding: 30px;
    }
    .volenteer-card {
        background-color: white;
        padding: 2rem;
    }

    .volenteer-card form {
        width: 80%;
        margin: auto;
    }

    .volenteer-card label {
        display: block;
        margin-top: 20px;
        margin-bottom: 10px;
        font-weight: 700;
    }
</style>


        <!-----------------------------------Carousel----------------------------------------------->
        <div class="hero-wrap" style="background-image: url('images/fooddonate.jpg');" data-stellar-background-ratio="0.5">
        <!-- <div class="overlay"></div> -->
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Food Donation Form</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> Food Donation</h1>


                </div>
            </div>
        </div>
    </div>
        <!-----------------------------------Carousel End----------------------------------------------->

<div class="login-form" style="background-image: url(images/food-donation-concept-tiny-people-filling-cardboard-donation-box-with-different-products-help-poor-people-shelter-volunteering-charity-humanitarian-relief-volunteer-donate-groceries_458444-180.avif);">
    <div class="container-fluid">
        <div class="col-md-7 bg-primary mx-auto">
            <!-- <div class="sign text-center">
            </div> -->
            <h2 class="text-center text-white ">Submit your request</h2>
            <form method="POST" autocomplete="off" novalidate="novalidate" id="request" class="col-md-10 mx-auto py-5" style="border-radius: 50px;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="control-wrapper mb-3">
                            <div class="input-wrapper">
                                <label class="mb-2">Name </label>
                                <input type="text" name="name" id="name" class="p-3 form-control" placeholder="Your name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="control-wrapper mb-3">
                            <div class="input-wrapper">
                                <label class="mb-2">Phone</label>
                                <input type="text" name="phone" id="phone" class="p-3 form-control" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="control-wrapper mb-3">
                            <div class="input-wrapper">
                                <label class="mb-2">Pickup Date</label>
                                <input type="date" name="date" id="date" class="p-3 form-control" min="<?= date('Y-m-d'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="control-wrapper ">
                            <div class="input-wrapper">
                                <label class="mb-2">Address</label>
                                <textarea type="text" name="address" id="address" rows="3" class="p-3 form-control" placeholder="Pickup Location"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="control-wrapper mb-4">
                            <div class="input-wrapper">
                                <label class="mb-2">Message</label>
                                <textarea type="text" name="mesg" id="mesg" rows="5" class="p-3 form-control" placeholder="your message"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-white btn-lg ">Submit Request</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const validator = new window.JustValidate('#request', {
        validateBeforeSubmitting: true,
    });

    validator.addField('#name', [{
        rule: 'required',
        errorMessage: 'Name is required',
    }, {
        rule: 'minLength',
        value: 3,
    }, {
        rule: 'maxLength',
        value: 15,
    }]).addField('#phone', [{
        rule: 'required',
        errorMessage: 'Phone number is required',
    }, {
        rule: 'number',
        errorMessage: 'Phone number in number eg(+,- no need)',
    }, {
        rule: 'minLength',
        value: 10,
    }, {
        rule: 'maxLength',
        value: 15,
    }]).addField('#date', [{
        rule: 'required',
        errorMessage: 'Pickup Date is required',
    }]).addField('#address', [{
        rule: 'required',
        errorMessage: 'Your Address is required',
    }, {
        rule: 'minLength',
        value: 10,
        errorMessage: 'Minimum 10 Characters',
    }]).addField('#mesg', [{
        rule: 'required',
        errorMessage: 'Your Message is required',
    }, {
        rule: 'minLength',
        value: 6,
        errorMessage: 'Minimum 6 Characters',
    }]).onSuccess((event) => {
        event.currentTarget.submit();
    })
</script>

<?php include_once 'partial/footer.php';
include_once 'php_request/functions.php';
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_REQUEST);
    if (empty($name) || empty($phone) || empty($date) || empty($address) || empty($mesg)) {
        emptyMsg();
    } else {
        $id = $_SESSION['userid'];
        $sql = "insert into tbl_fooddonate (name, phone, date, address, message, status, userid) values('$name','$phone','$date','$address','$mesg',0,$id)";
        $res = mysqli_query($con, $sql);
        if ($res) {
            successMsg('Your request has been received!');
            echo "<script>window.location.href='food-donation-form.php'</script>";

        } else {
            invalidMsg('Try Again!');
        }
    }
}


?>