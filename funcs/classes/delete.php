<?php

include '../conn.php';
$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM classes WHERE id='$id'");
if ($query) {
    header('location: ../../index.php');
}
