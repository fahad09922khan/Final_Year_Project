<?php
include("partial/header.php");
if (!isset($_SESSION['logined'])) {
    echo "<script>window.location.href='login.php?return=login.php'</script>";
}
?>
<!-- Stylesheet -->
<link rel="stylesheet" href="/path/to/bootstrap.min.css">
<link rel="stylesheet" href="/path/to/bootstrap-select.min.css">

<!-- JavaScript -->
<script src="/path/to/jquery.min.js"></script>
<script src="/path/to/bootstrap.min.js"></script>
<script src="/path/to/bootstrap-select.min.js"></script>
<script src="js/countrypicker.js"></script>

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
    .alert{
        margin-bottom: 500px;
    }
</style>

<div class="hero-wrap" style="background-color: coral;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 mt-4 text-center" data-scrollax=" properties: { translateY: '0%' }">
                    <h1 class="mt-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">"Your old is their new"<hr></h1>
                    <p class="mt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <img src="images/clothesdonation.webp" class="w-50">
                    </p>
                    <!-- <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span class="icon-play mr-2"></span>Watch Video</a></p> -->
                </div>
            </div>
        </div>
    </div>
<!-- Rest of your HTML code -->
    <div class="container bg-light p-4 shadow">
            <h2 class="text-center">Donate Your Clothes</h2>
            <form method="POST" autocomplete="off"  id="request" class="col-md-10 mx-auto py-5" style="border-radius: 50px;">
  <div class="form-row">
  <div class="form-group col-md-4">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" name="donor_name" id="donor_name" placeholder="Name" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
    </div>
    <div class="form-group col-md-4">
      <label for="">Phone</label>
      <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
  </div>
  <div class="form-row">
  <!-- <div class="form-group col-md-4">
      <label for="inputEmail4">Country</label>
      <input type="text" class="form-control" name="country" id="country" placeholder="Country" required>
    </div> -->
    <!-- <div class="form-group col-md-4">
      <label for="inputState">Country</label>
      <select id="country" name="country" class="form-control selectpicker countrypicker"  required>
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div> -->
    <div class="form-group col-md-4">
    <label for="inputState">Country</label>
    <select id="country" name="country" required="required" class="form-control selectpicker countrypicker" >
        <option value=""  selected>Choose...</option>
        <?php
        $countries = array(
            "AF" => "Afghanistan",
            "AL" => "Albania",
            "DZ" => "Algeria",
            "AS" => "American Samoa",
            "AD" => "Andorra",
            "AO" => "Angola",
            "AI" => "Anguilla",
            "AQ" => "Antarctica",
            "AG" => "Antigua and Barbuda",
            "AR" => "Argentina",
            "AM" => "Armenia",
            "AW" => "Aruba",
            "AU" => "Australia",
            "AT" => "Austria",
            "AZ" => "Azerbaijan",
            "BS" => "Bahamas",
            "BH" => "Bahrain",
            "BD" => "Bangladesh",
            "BB" => "Barbados",
            "BY" => "Belarus",
            "BE" => "Belgium",
            "BZ" => "Belize",
            "BJ" => "Benin",
            "BM" => "Bermuda",
            "BT" => "Bhutan",
            "BO" => "Bolivia",
            "BA" => "Bosnia and Herzegovina",
            "BW" => "Botswana",
            "BV" => "Bouvet Island",
            "BR" => "Brazil",
            "BQ" => "British Antarctic Territory",
            "IO" => "British Indian Ocean Territory",
            "VG" => "British Virgin Islands",
            "BN" => "Brunei",
            "BG" => "Bulgaria",
            "BF" => "Burkina Faso",
            "BI" => "Burundi",
            "KH" => "Cambodia",
            "CM" => "Cameroon",
            "CA" => "Canada",
            "CT" => "Canton and Enderbury Islands",
            "CV" => "Cape Verde",
            "KY" => "Cayman Islands",
            "CF" => "Central African Republic",
            "TD" => "Chad",
            "CL" => "Chile",
            "CN" => "China",
            "CX" => "Christmas Island",
            "CC" => "Cocos [Keeling] Islands",
            "CO" => "Colombia",
            "KM" => "Comoros",
            "CG" => "Congo - Brazzaville",
            "CD" => "Congo - Kinshasa",
            "CK" => "Cook Islands",
            "CR" => "Costa Rica",
            "HR" => "Croatia",
            "CU" => "Cuba",
            "CY" => "Cyprus",
            "CZ" => "Czech Republic",
            "CI" => "Côte d’Ivoire",
            "DK" => "Denmark",
            "DJ" => "Djibouti",
            "DM" => "Dominica",
            "DO" => "Dominican Republic",
            "NQ" => "Dronning Maud Land",
            "DD" => "East Germany",
            "EC" => "Ecuador",
            "EG" => "Egypt",
            "SV" => "El Salvador",
            "GQ" => "Equatorial Guinea",
            "ER" => "Eritrea",
            "EE" => "Estonia",
            "ET" => "Ethiopia",
            "FK" => "Falkland Islands",
            "FO" => "Faroe Islands",
            "FJ" => "Fiji",
            "FI" => "Finland",
            "FR" => "France",
            "GF" => "French Guiana",
            "PF" => "French Polynesia",
            "TF" => "French Southern Territories",
            "FQ" => "French Southern and Antarctic Territories",
            "GA" => "Gabon",
            "GM" => "Gambia",
            "GE" => "Georgia",
            "DE" => "Germany",
            "GH" => "Ghana",
            "GI" => "Gibraltar",
            "GR" => "Greece",
            "GL" => "Greenland",
            "GD" => "Grenada",
            "GP" => "Guadeloupe",
            "GU" => "Guam",
            "GT" => "Guatemala",
            "GG" => "Guernsey",
            "GN" => "Guinea",
            "GW" => "Guinea-Bissau",
            "GY" => "Guyana",
            "HT" => "Haiti",
            "HM" => "Heard Island and McDonald Islands",
            "HN" => "Honduras",
            "HK" => "Hong Kong SAR China",
            "HU" => "Hungary",
            "IS" => "Iceland",
            "IN" => "India",
            "ID" => "Indonesia",
            "IR" => "Iran",
            "IQ" => "Iraq",
            "IE" => "Ireland",
            "IM" => "Isle of Man",
            "IL" => "Israel",
            "IT" => "Italy",
            "JM" => "Jamaica",
            "JP" => "Japan",
            "JE" => "Jersey",
            "JT" => "Johnston Island",
            "JO" => "Jordan",
            "KZ" => "Kazakhstan",
            "KE" => "Kenya",
            "KI" => "Kiribati",
            "KW" => "Kuwait",
            "KG" => "Kyrgyzstan",
            "LA" => "Laos",
            "LV" => "Latvia",
            "LB" => "Lebanon",
            "LS" => "Lesotho",
            "LR" => "Liberia",
            "LY" => "Libya",
            "LI" => "Liechtenstein",
            "LT" => "Lithuania",
            "LU" => "Luxembourg",
            "MO" => "Macau SAR China",
            "MK" => "Macedonia",
            "MG" => "Madagascar",
            "MW" => "Malawi",
            "MY" => "Malaysia",
            "MV" => "Maldives",
            "ML" => "Mali",
            "MT" => "Malta",
            "MH" => "Marshall Islands",
            "MQ" => "Martinique",
            "MR" => "Mauritania",
            "MU" => "Mauritius",
            "YT" => "Mayotte",
            "FX" => "Metropolitan France",
            "MX" => "Mexico",
            "FM" => "Micronesia",
            "MI" => "Midway Islands",
            "MD" => "Moldova",
            "MC" => "Monaco",
            "MN" => "Mongolia",
            "ME" => "Montenegro",
            "MS" => "Montserrat",
            "MA" => "Morocco",
            "MZ" => "Mozambique",
            "MM" => "Myanmar [Burma]",
            "NA" => "Namibia",
            "NR" => "Nauru",
            "NP" => "Nepal",
            "NL" => "Netherlands",
            "AN" => "Netherlands Antilles",
            "NT" => "Neutral Zone",
            "NC" => "New Caledonia",
            "NZ" => "New Zealand",
            "NI" => "Nicaragua",
            "NE" => "Niger",
            "NG" => "Nigeria",
            "NU" => "Niue",
            "NF" => "Norfolk Island",
            "KP" => "North Korea",
            "VD" => "North Vietnam",
            "MP" => "Northern Mariana Islands",
            "NO" => "Norway",
            "OM" => "Oman",
            "PC" => "Pacific Islands Trust Territory",
            "PK" => "Pakistan",
            "PW" => "Palau",
            "PS" => "Palestinian Territories",
            "PA" => "Panama",
            "PZ" => "Panama Canal Zone",
            "PG" => "Papua New Guinea",
            "PY" => "Paraguay",
            "YD" => "People's Democratic Republic of Yemen",
            "PE" => "Peru",
            "PH" => "Philippines",
            "PN" => "Pitcairn Islands",
            "PL" => "Poland",
            "PT" => "Portugal",
            "PR" => "Puerto Rico",
            "QA" => "Qatar",
            "RO" => "Romania",
            "RU" => "Russia",
            "RW" => "Rwanda",
            "RE" => "Réunion",
            "BL" => "Saint Barthélemy",
            "SH" => "Saint Helena",
            "KN" => "Saint Kitts and Nevis",
            "LC" => "Saint Lucia",
            "MF" => "Saint Martin",
            "PM" => "Saint Pierre and Miquelon",
            "VC" => "Saint Vincent and the Grenadines",
            "WS" => "Samoa",
            "SM" => "San Marino",
            "SA" => "Saudi Arabia",
            "SN" => "Senegal",
            "RS" => "Serbia",
            "CS" => "Serbia and Montenegro",
            "SC" => "Seychelles",
            "SL" => "Sierra Leone",
            "SG" => "Singapore",
            "SK" => "Slovakia",
            "SI" => "Slovenia",
            "SB" => "Solomon Islands",
            "SO" => "Somalia",
            "ZA" => "South Africa",
            "GS" => "South Georgia and the South Sandwich Islands",
            "KR" => "South Korea",
            "ES" => "Spain",
            "LK" => "Sri Lanka",
            "SD" => "Sudan",
            "SR" => "Suriname",
            "SJ" => "Svalbard and Jan Mayen",
            "SZ" => "Swaziland",
            "SE" => "Sweden",
            "CH" => "Switzerland",
            "SY" => "Syria",
            "ST" => "São Tomé and Príncipe",
            "TW" => "Taiwan",
            "TJ" => "Tajikistan",
            "TZ" => "Tanzania",
            "TH" => "Thailand",
            "TL" => "Timor-Leste",
            "TG" => "Togo",
            "TK" => "Tokelau",
            "TO" => "Tonga",
            "TT" => "Trinidad and Tobago",
            "TN" => "Tunisia",
            "TR" => "Turkey",
            "TM" => "Turkmenistan",
            "TC" => "Turks and Caicos Islands",
            "TV" => "Tuvalu",
            "UM" => "U.S. Minor Outlying Islands",
            "PU" => "U.S. Miscellaneous Pacific Islands",
            "VI" => "U.S. Virgin Islands",
            "UG" => "Uganda",
            "UA" => "Ukraine",
            "SU" => "Union of Soviet Socialist Republics",
            "AE" => "United Arab Emirates",
            "GB" => "United Kingdom",
            "US" => "United States",
            "ZZ" => "Unknown or Invalid Region",
            "UY" => "Uruguay",
            "UZ" => "Uzbekistan",
            "VU" => "Vanuatu",
            "VA" => "Vatican City",
            "VE" => "Venezuela",
            "VN" => "Vietnam",
            "WK" => "Wake Island",
            "WF" => "Wallis and Futuna",
            "EH" => "Western Sahara",
            "YE" => "Yemen",
            "ZM" => "Zambia",
            "ZW" => "Zimbabwe",
            "AX" => "Åland Islands",
        );

        foreach ($countries as $country) {
            echo '<option value="' . $country . '">' . $country . '</option>';
        }
        ?>
    </select>
</div>

    <div class="form-group col-md-4">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="city" required>
    </div>
    <!-- <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="state" name="state" class="form-control" required="required">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div> -->
    <div class="form-group col-md-4">
      <label for="inputCity">State</label>
      <input type="text" class="form-control" name="state" id="state" required>
    </div>

  </div>

  <div class="form-row">
  <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" name="zipcode" class="form-control" id="zipcode" required>
    </div>
    <!-- <div class="form-group col-md-4">
      <label for="inputEmail4">Clothing type</label>
      <input type="text" class="form-control" name="clothing_type" id="clothing_type" placeholder="Clothing type">
    </div> -->
    <div class="form-group col-md-5">
      <label for="inputState">Cloth Type</label>
      <select id="clothing_type" name="clothing_type" required="required" class="form-control" >
        <option selected>Choose Type</option>
        <option>Pant</option>
        <option>Shirt</option>
        <option>Kurta</option>
        <option>Kameez/Shalwar</option>
        <option>Other's</option>
      </select>
    </div>
    <div class="form-group col-md-5">
      <label for="inputState">Cloth Size</label>
      <select id="clothing_size" name="clothing_size" required="required" class="form-control" >
        <option selected>Choose Size</option>
        <option>XXL</option>
        <option>XL</option>
        <option>Large</option>
        <option>Medium</option>
        <option>Small</option>
        <option>Other's</option>
      </select>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-2">
      <label for="inputEmail4">Quantity</label>
      <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Quantity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Cloth Conditions</label>
      <select id="conditions"  name="conditions" required="required" class="form-control" >
        <option required>Choose Condition</option>
        <option>New</option>
        <option>Old</option>
        <option>Average</option>
      </select>
    </div>
    <div class="form-group col-md-5">
      <label for="inputPassword4">Donation Date</label>
      <input type="date" class="form-control" name="donation_date" id="donation_date" placeholder="Donation Date" required>
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
            </form>
    </div>



<!-- -------------------------------------- -->
<?php
include("connection.php");
include_once 'php_request/functions.php';
if (isset($_POST['submit'])) {
    $vname = $_POST['donor_name'];
    $vemail = $_POST['email'];
    $vphone = $_POST['phone'];
    $vaddress = $_POST['address'];
    $vcity = $_POST['city'];
    $vstate = $_POST['state'];
    $vcontact = $_POST['country'];
    $vzipcode = $_POST['zipcode'];
    $vclothing_type = $_POST['clothing_type'];
    $vclothing_size = $_POST['clothing_size'];
    $vquantity = $_POST['quantity'];
    $vconditions = $_POST['conditions'];
    $vdonation_date = $_POST['donation_date'];

    // Perform basic validation
    if (!empty($vname) && !empty($vemail) && !empty($vphone) && !empty($vaddress) && !empty($vcity) && !empty ($vstate) && !empty($vcontact) && !empty($vzipcode) && !empty($vclothing_type) && !empty ($vclothing_size) && !empty($vquantity) && !empty($vconditions) && !empty($vdonation_date)) {
        $insert = $con->query("INSERT INTO `tbl_clothes_donation`(`donor_name`,`email`,`phone`,`address`,`city`, `state`,`country`, `zipcode`,`clothing_type`, `clothing_size`, `quantity`, `conditions`,`donation_date`) VALUES ('$vname','$vemail','$vphone','address','$vcity','$vstate','$vcontact','$vzipcode','$vclothing_type','$vclothing_size','$vquantity','$vconditions','$vdonation_date')");
if ($insert) {
    echo "<script>alert('Donation Submitted Successfully! Thankyou')</script>";
    echo "<script>window.location.href='clothesdonation.php'</script>";
}else {
            echo "<script>alert('Failed to submit Clothes Donation Form')</script>";
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