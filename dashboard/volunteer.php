<?php
        include("partial/header.php");
        ?>
<?php
        include("partial/sidebar.php");
        ?>
         <?php
include("config.php");
?>



<main class="" style="margin-top: 100px;" >
        <div class="container-fluid pt-4">
        <div class="form-outline mb-4">
  <input type="search" class="form-control" id="datatable-search-input">
  <label class="form-label" for="datatable-search-input">Search</label>
</div>
<div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="color: #f86f2d;">Volunteer</h4>
                                    <?php if(isset($_GET['msg'])){
                                            if($_GET['msg']=="Updated"){
                                                    ?>



                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <a type="button" href="volunteer.php" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                            </a>
                                        <strong>Vounteer Details</strong> has been updated
                                    </div>
                                    <script>
                                        $(".alert").alert();
                                        window.location.href = "volunteer.php";
                                        </script>

                                                <?php

                                            }
                                            if($_GET['msg']=="Deleted"){
                                                ?>



                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <a type="button" href="volunteer.php" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                        </a>
                                    <strong>Volunteer Details</strong> has been Deleted
                                </div>
                                <script>
                                    $(".alert").alert();
                                    window.location.href = "volunteer.php";
                                    </script>

                                            <?php

                                        }
                                } ?>

                                    <div class="table table-striped table-bordered">
                                        <table class="table" id="contactt">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Name </th>
                                                    <th> Email </th>
                                                    <th> Contact  </th>
                                                    <th> Address </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "select * from tbl_volunteer order by id desc ";
                                                $res = mysqli_query($con, $sql);
                                                $c = 1;
                                                foreach ($res as $key) { ?>
                                                    <tr>
                                                        <td><?= $c ?></td>
                                                        <td><?= $key['name'] ?></td>
                                                        <td><?= $key['email'] ?></td>
                                                        <td> <?= $key['contact'] ?> </td>
                                                        <td> <?= $key['address'] ?> </td>
                                                        <!-- <td class="d-flex">
                                                             <a class="btn btn btn-sm" href="edit.php?id=<?= $key['id'] ?>" class="btn btn-gradient-dark me-2 btn-icon d-flex align-items-center justify-content-center"> <i class="fas fa-edit"></i> </a>
                                                             <a class="btn btn-danger btn-icon ms-2" href="delete.php?id=<?= $key['id'] ?>"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                                             </td> -->
                                                             <td class="text-center">
                                                            <?php
                                                            if ($key['status'] == 1) { ?>

                                                                <a href="php_request/reject.php?id=<?= $key['id'] ?>" class="btn btn-danger btn-sm">Reject
                                                                </a>
                                                            <?php } else if ($key['status'] == 2) { ?>

                                                            <?php } else { ?>
                                                                <a href="php_request/approve.php?id=<?= $key['id'] ?>" class="btn btn-gradient-dark btn-sm ">Approve</a>
                                                            <?php }


                                                            ?>

                                                        </td>
                                                    </tr>
                                                <?php $c++;
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
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

