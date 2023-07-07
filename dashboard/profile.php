<?php
        include("partial/header.php");
        ?>
<?php
        include("partial/sidebar.php");
        ?>
 <?php
include("config.php");
?>

<main style="margin-top: 100px">
        <div class="container-fluid pt-4">
        <div class="form-outline mb-4">
  <input type="search" class="form-control" id="datatable-search-input">
  <label class="form-label" for="datatable-search-input">Search</label>
</div>
<div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="color: #f86f2d;" >User's</h4>



                                    <div class="table table-striped table-bordered">
                                        <table class="table" id="">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Name </th>
                                                    <th> Email </th>
                                                    <th> Password </th>
                                                    <th> Roles </th>
                                                    <!-- <th> Action </th> -->

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "select * from tbl_register order by id desc ";
                                                $res = mysqli_query($con, $sql);
                                                $c = 1;
                                                foreach ($res as $key) { ?>
                                                    <tr>
                                                        <td><?= $c ?></td>
                                                        <td><?= $key['name'] ?></td>
                                                        <td><?= $key['email'] ?></td>
                                                        <td> <?= $key['password'] ?> </td>
                                                        <td> <?= $key['roles'] ?> </td>
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


