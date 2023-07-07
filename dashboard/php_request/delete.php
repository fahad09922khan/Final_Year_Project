<?php
include("../config.php");
$id = $_GET['id'];
$deletebyid = $con->query("DELETE FROM `tbl_volunteer` WHERE `id`='$id'");
if ($deletebyid) {
?>
    <script>
        window.location.href = "volunteer.php?msg=Deleted";
    </script>
<?php
}
?>