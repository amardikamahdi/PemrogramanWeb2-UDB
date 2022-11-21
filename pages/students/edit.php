<?php

include '../../funcs/conn.php';
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
    <link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
    <?php include('../../components/navbar.php') ?>
<h1 style="text-align: center">Tambah Siswa</h1>
<div>
  <form action="../../funcs/students/edit.php?id=<?= $result['id'] ?>" method="POST">
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