<?php

include '../conn.php';

$id = $_GET['id'];
$name = $_POST['name'];
$grade = $_POST['grade'];

$query = mysqli_query($conn, "UPDATE classrooms SET name='$name', grade='$grade' WHERE id='$id'");

if ($query) {
    header('location: ../../index.php');
}
