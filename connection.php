<?php

// Creating connection with MySQL Databbase

$con = mysqli_connect('localhost', 'root', '', 'db_darsgah');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>