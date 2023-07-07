<?php
session_start();
include_once '../config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $q = "update tbl_volunteer set status=1 where id=$id";
    mysqli_query($con, $q);
    echo "<script>window.location.href='../volunteer.php'</script>";
} else {
    echo "<script>window.location.href='../volunteer.php'</script>";
}
