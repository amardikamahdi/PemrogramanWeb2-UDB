<?php

include '../conn.php';

$id = $_GET['id'];
$name = $_POST['name'];
$nis = $_POST['nis'];
$address = $_POST['address'];

$query = mysqli_query($conn, "UPDATE students SET nis='$nis', name='$name', address='$address' WHERE id='$id'");

if ($query) {
    header('location: ../../index.php');
}
