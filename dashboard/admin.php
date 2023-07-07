<?php
        include("partial/header.php");
        ?>

<?php
        include("partial/sidebar.php");
        ?>
                <?php
include("config.php");
?>

    <!--Main layout-->
    <main style="margin-top: 100px">
        <div class="container-fluid pt-4">

            <!--Section: Minimal statistics cards-->
            <section>
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body shadow">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div class="align-self-center">
                                    <i class="fa fa-handshake fa-3x" style="color: #f86f2d;"></i>
                                    </div>
                                    <div class="text-end">
                                    <?php
                                    $sql = "select count(id) as c from tbl_volunteer";
                                    $res = mysqli_query($con, $sql);
                                    $total = mysqli_fetch_assoc($res);
                                    ?>
                                    <h2 class="mb-5" style="color: #f86f2d;"><?= number_format($total['c']) ?></h2>
                                        <h3 class="mb-0" style="color: #f86f2d;">Volunteer</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card" style="background-color: #f86f2d;">
                            <div class="card-body shadow">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div class="align-self-center">
                                    <i class="fas fa-lock fa-fw fa-3x" style="color: white"></i>
                                    </div>
                                    <div class="text-end">
                                    <?php
                                    $sql = "select count(id) as c from tbl_contact";
                                    $res = mysqli_query($con, $sql);
                                    $total = mysqli_fetch_assoc($res);
                                    ?>
                                    <h2 class="mb-5 text-white"><?= number_format($total['c']) ?></h2>
                                        <h3 class="mb-0" style="color: white;">Contacts</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card ">
                            <div class="card-body shadow">
                                <div class="d-flex justify-content-between px-md-1 ">
                                    <div class="align-self-center">
                                    <i class="fa fa-user fa-3x" style="color: #f86f2d;"></i>
                                    </div>
                                    <div class="text-end ">
                                    <?php
                                    $sql = "select count(id) as c from tbl_contact";
                                    $res = mysqli_query($con, $sql);
                                    $total = mysqli_fetch_assoc($res);
                                    ?>
                                    <h2 class="mb-5 " style="color: #f86f2d;"><?= number_format($total['c']) ?></h2>
                                        <h3 class="mb-0" style="color: #f86f2d;">Profile</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card" style="background-color: #f86f2d;">
                            <div class="card-body shadow">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div class="align-self-center">
                                    <i class="fa fa-donate fa-3x" style="color: white;"></i>
                                    </div>
                                    <div class="text-end">
                                    <?php
                                    $sql = "select count(id) as c from tbl_fooddonate";
                                    $res = mysqli_query($con, $sql);
                                    $total = mysqli_fetch_assoc($res);
                                    ?>
                                    <h2 class="mb-5 text-white"><?= number_format($total['c']) ?></h2>
                                        <h3 class="mb-0" style="color: white;">Donation</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div class="align-self-center">
                                        <i class="fas fa-map-marker-alt text-danger fa-3x"></i>
                                    </div>
                                    <div class="text-end">
                                        <h3>423</h3>
                                        <p class="mb-0">Total Visits</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </section>

            <div class="container-fluid">
<div class="row">
    <div class="col-md-12">
    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="color: #f86f2d;">Volunteer <hr></h4>

                                    <div class="table-responsive table table-striped table-bordered">
                                        <table class="table" id="contactt">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Name </th>
                                                    <th> Email </th>
                                                    <th> Contact  </th>
                                                    <th> Address </th>
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
</div>
            </div>

        </div>
    </main>
    <!--Main layout-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/admin.js"></script>

</body>

</html>