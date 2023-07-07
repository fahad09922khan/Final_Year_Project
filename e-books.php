<?php
include("partial/header.php");
?>

<div class="hero-wrap" style="background-image: url('images/E-books.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Ebooks</span></p>
        <!-- <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1> -->
        <form method="GET">
          <input type="search" class="form-control" placeholder="Search Here" name="s">
          <button class="btn btn-light mt-3">Search</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!------------------------------- Header nav bar end------------------------ -->


<!-- <div class="container-fluid"> -->
<!-- <ul class="nav nav-tabs bg-primary text-white p-5" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link   active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
    </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
  </li>

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, quam optio cupiditate a neque, sunt esse natus et iure exercitationem dicta odit alias minus nam ad odio tempora dolorum nemo!</div>
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
</div>-->
<h1 class="h1-responsive text-center mt-5 fw-bold" style="color: #f86f2d;">E-BOOKS</h1>
<hr class="bg-primary ">
<div class="container mt-5 bg bg-outline-primary">
  <div class="row">
    <?php
    if (isset($_SESSION['logined'])) {
      $search = isset($_GET['s']) ? $_GET['s'] : 'no';
      include_once 'connection.php';
      if ($search == 'no') {
        $sql = "select * from tbl_books order by id desc ";
      } else {
        $sql = "select * from tbl_books where bname Like '%{$search}%' or bdesc Like '%{$search}%' or attachmeent Like '%{$search}%'";
      }
      $res = mysqli_query($con, $sql);
      $c = 1;
      if (mysqli_num_rows($res) > 0) {
        foreach ($res as $key) { ?>

          <div class="col-md-12 bg bg-outline-primary mb-4">
            <div class="card mybooks">
            <div class="card-horizontal">
            <div class="img-square-wrapper">
                        <img class="" src="http://via.placeholder.com/300x180" style="border-radius: 20px;" alt="Card image cap">
                    </div>
              <div class="card-body">
                <h4><?= $key['bname'] ?></h4>
                <hr>
                <p><?= $key['bdesc'] ?></p>
              </div>
            </div>
              <div class="card-footer ">
                <a href="Dashbaord/uploadfiles/<?= $key['attachmeent'] ?>" download="" class="btn btn-primary">Download</a>
              </div>
            </div>
          </div>
        <?php }
      } else { ?>
        <div class="col-12 text-center mb-5">
          <h4>No Data Found.</h4>
        </div>
      <?php }
    } else { ?>
      <div class="col-12 text-center mb-5">
        <h4>Please login first.</h4>
        <a href="login.php?return=e-books.php">Login</a>
      </div>
    <?php }
    ?>
  </div>
</div>





<div class="container-fluid  bg-primary ">
  <div class="row">
<div class="col-md-6 mt-5">
<h2 class="text-white">Subscribe Now to Get Regular Updates</h2>
<div class="row">
  <div class="col-2">
<button class="btn btn-info h-100 ml-4">Subscribe</button>
</div>
<div class="col-1 ml-4">
  <input type="email" placeholder="Newsletter" id="" class="form-control" style="width: 450px ; height:100px" />
  </div>
</div>
</div>
<div class="col-md-4">
<img src="images/Stack-of-Books-Clipart-removebg-preview.png" class="w-100" >
</div> </div>

</div>


<style>
  .mybooks {
    border-radius: 20px;
    height: 100%;
    border: #f86f2d 2px solid;

  }
  .mybooks:hover{
    box-shadow: #f86f2d 4px;
    border: #f86f2d 2px solid;

  }

  .mybooks p {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;

  }
  .card-horizontal {
    display: flex;
    flex: 1 1 auto;
}
</style>

<!-- </div> -->





<?php
include('partial/footer.php')
?>