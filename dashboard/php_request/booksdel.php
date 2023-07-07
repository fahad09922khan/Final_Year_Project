<?php
include "../config.php";
$id = $_GET['d'];
$deletebyid = $con->query("DELETE FROM tbl_books WHERE id=$id");
if ($deletebyid) {
    echo "<script>window.location.href = '../ebooks.php';</script>";
}
