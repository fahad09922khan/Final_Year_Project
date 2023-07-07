<?php
        include("partial/header.php");
        ?>
<?php
        include("partial/sidebar.php");
        ?>
 <?php
include("config.php");
error_reporting(0);

$id = $_GET['id'];
$fetchbyid = $con->query("SELECT * FROM `tbl_volunteer` WHERE `id`='$id'");
$data = mysqli_fetch_array($fetchbyid);

?>

<main style="margin-top: 100px">
        <div class="container-fluid pt-4">
        <div class="form-outline mb-4">

</div>
<div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="color: #f86f2d;" >Contact-Edit</h4>

                                    <form action="edit.php" method="post">
                                        <input type="hidden" value="<?= $data['id'] ?>" name="id" >
                                    <div class="form-group">
                                  <label for="">Name</label>
                                  <input type="text" class="form-control" value="<?= $data['name'] ?>" name="name">
                                </div>
                                    <div class="form-group">
                                  <label for="">Email</label>
                                  <input type="text" class="form-control"  value="<?= $data['email'] ?>" name="email">
                                </div>
                                    <div class="form-group">
                                  <label for="">Contact</label>
                                  <input type="text" class="form-control"  value="<?= $data['contact'] ?>" name="contact">
                                </div>
                                    <div class="form-group">
                                  <label for="">Address</label>
                                  <input type="text" class="form-control"  value="<?= $data['address'] ?>" name="address">
                                </div>

                                    <input type="submit" value="Update" name="Update"  class="btn btn-primary mt-3 float-right" >
                                                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
</main>
    <!--Main Navigation-->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/admin.js"></script>

    </body>

    </html>

<?php

if(isset($_POST['Update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];

    $update = $con->query("UPDATE `tbl_volunteer` SET `name`='$name',`email`='$email',`contact`='$contact',`address`='$address' WHERE `id`='$id'");

    if($update){
       ?>
<script>
 window.location.href = "volunteer.php?msg=Updated";
 </script>
       <?php
    }
}
?>