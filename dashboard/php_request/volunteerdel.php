
<?php
include "../config.php";
$id = $_GET['id'];
$deletebyid = $con->query("DELETE FROM tbl_fooddonate WHERE id=$id");
if ($deletebyid) {
    echo "<script>window.location.href = '../fooddonation.php';</script>";
}
