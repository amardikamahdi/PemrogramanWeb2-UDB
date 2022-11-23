<?php

include '../conn.php';

$name = $_POST['name'];
$nis = $_POST['nis'];
$address = $_POST['address'];

$query = mysqli_query($conn, "INSERT INTO students(nis, name, address) VALUES('$nis', '$name', '$address')");
if ($query) {
    header('location: ../../index.php');
}
