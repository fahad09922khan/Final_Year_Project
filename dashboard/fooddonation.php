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
    <div class="container-scroller">
        <?php include_once 'partial/header.php'; ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php include_once 'partial/sidebar.php'; ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Food Donation Request</h4>
                                    <div class="table-responsive">
                                        <table class="table" id="request">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Pickup Date</th>
                                                    <th>Address</th>
                                                    <th>Message</th>
                                                    <th>Assignee</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "SELECT tbl_fooddonate.id AS id, tbl_fooddonate.name AS name, tbl_fooddonate.phone AS phone, tbl_fooddonate.date AS date, tbl_fooddonate.address AS address, tbl_fooddonate.message AS message, tbl_fooddonate.status AS status, tbl_volunteer.name AS vname FROM tbl_fooddonate LEFT JOIN tbl_volunteer ON tbl_fooddonate.vid = tbl_volunteer.id ORDER BY tbl_fooddonate.id DESC";
                                                $res = mysqli_query($con, $sql);
                                                if ($res === false) {
                                                    echo "Error executing the query: " . mysqli_error($con);
                                                } else {
                                                    $c = 1;
                                                    while ($row = mysqli_fetch_assoc($res)) {
                                                ?>
                                                        <tr>
                                                            <td><?= $c ?></td>
                                                            <td><?= $row['name'] ?></td>
                                                            <td><?= $row['phone'] ?></td>
                                                            <td><?= $row['date'] ?></td>
                                                            <td><?= $row['address'] ?></td>
                                                            <td><?= $row['message'] ?></td>
                                                            <td>
                                                                <?php if ($row['status'] == 0) { ?>
                                                                    <label class="badge badge-gradient-danger text-dark">Not Yet</label>
                                                                <?php } else { ?>
                                                                    <?= $row['vname'] ?>
                                                                <?php } ?>
                                                            </td>
                                                            <td class="d-flex">
                                                                <a href="request_assign.php?id=<?= $row['id'] ?>" class="btn btn-gradient-dark me-2 btn-icon d-flex align-items-center justify-content-center">
                                                                <i class="fas fa-edit"></i>
                                                                </a>
                                                                <a href="php_request/volunteerdel.php?id=<?= $row['id'] ?>"><button type="button" class="btn btn-danger btn-icon ms-2">
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                                </button></a>

</a>
                                                            </td>
                                                        </tr>
                                                <?php
                                                        $c++;
                                                    }
                                                }
                                                ?>
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
</body>
