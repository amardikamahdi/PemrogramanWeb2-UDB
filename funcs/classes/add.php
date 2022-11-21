<?php

include '../conn.php';

$name = $_POST['name'];
$grade = $_POST['grade'];

$query = mysqli_query($conn, "INSERT INTO classes(name, grade) VALUES('$name', '$grade')");
if ($query) {
    header('location: ../../index.php');
}
