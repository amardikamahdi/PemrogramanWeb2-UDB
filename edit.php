<?php

include 'funcs/conn.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM students WHERE id='$id'");
$result = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa - <?= $result['name'] ?></title>
    <style>
                ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4C4F69;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #5c5f77;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
    </style>
</head>
<body>
    <?php include('components/navbar.php') ?>
<h1 style="text-align: center">Tambah Siswa</h1>
<div>
  <form action="funcs/edit.php?id=<?= $result['id'] ?>" method="POST">
    <label for="fname">Nama Lengkap : </label>
    <input type="text" name="name" placeholder="Masukkan nama" value="<?= $result['name'] ?>">

    <label for="lname">NIS : </label>
    <input type="text" name="nis" placeholder="Masukkan NIS" value="<?= $result['nis'] ?>">

    <label for="lname">Alamat : </label>
    <input type="text" name="address" placeholder="Masukkan Alamat" value="<?= $result['address'] ?>">

    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>