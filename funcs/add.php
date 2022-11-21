<?php

include 'conn.php';

$nis = $_POST['nis'];
$name = $_POST['name'];
$address = $_POST['address'];

$query = mysqli_query($conn, "INSERT INTO students(nis, name, address) VALUES('$nis', '$name', '$address')");
if ($query) {
    header('location: ../index.php');
}
