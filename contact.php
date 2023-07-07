<?php
include("partial/header.php");
if (!isset($_SESSION['logined'])) {
    echo "<script>window.location.href='login.php?return=login.php'</script>";
}
?>
<script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>


<!-----------------------------------Carousel----------------------------------------------->
<div class="hero-wrap" style="background-image: url('images/image_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
            </div>
        </div>
    </div>
</div>
<!-----------------------------------Carousel End----------------------------------------------->
<!------------------------------- Header nav bar end------------------------ -->
<section class="ftco-section ">
    <div class="container">
        <div class="row d-flex mb-5">
            <div class="col-md-12 mb-4">
                <h2 class="h4">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
                <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
            </div>
            <div class="col-md-3">
                <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
            </div>
            <div class="col-md-3">
                <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
            </div>
            <div class="col-md-3">
                <p><span>Website</span> <a href="#">yoursite.com</a></p>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 pr-md-5">
                <h4 class="mb-4">Do you have any questions?</h4>
                <form method="POST" id="contactForm" autocomplete="off" novalidate="novalidate">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea cols="30" rows="7" name="message" id="message" class="form-control" placeholder="Message" required></textarea>
                    </div>
                    <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3">Send</button>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    const validator = new window.JustValidate('#contactForm', {
        validateBeforeSubmitting: true,
    });

    validator.addField('#name', [{
            rule: 'required',
            errorMessage: 'Username is required',
        },
        {
            rule: 'minLength',
            value: 3,
        },
        {
            rule: 'maxLength',
            value: 15,
        },
    ]).addField('#email', [{
            rule: 'required',
            errorMessage: 'Email is required',
        },
        {
            rule: 'email',
        },
    ]).addField('#subject', [{
            rule: 'required',
            errorMessage: 'Subject is required',
        },
        {
            rule: 'minLength',
            value: 3,
            errorMessage: 'Min 3 Characters',
        },
        {
            rule: 'maxLength',
            value: 20,
            errorMessage: 'Max 20 Characters',
        },
    ]).addField('#message', [{
            rule: 'required',
            errorMessage: 'Message is required',
        },
        {
            rule: 'minLength',
            value: 6,
            errorMessage: 'Min 6 Characters',
        },
    ]).onSuccess((event) => {
        event.currentTarget.submit();
    })
</script>


<?php
include("connection.php");
include_once 'php_request/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_REQUEST);
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        emptyMsg();
    } else {
        $sql = "insert into tbl_contact (name, email, subject, message) values('$name','$email','$subject','$message')";
        $res = mysqli_query($con, $sql);
        if ($res) {
            successMsg('Message received!');
            echo "<script>window.location.href='contact.php'</script>";

        } else {
            invalidMsg('Invalid Request');
        }
    }
}
?>

<?php
include('partial/footer.php');
?>
