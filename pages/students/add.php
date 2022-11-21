<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
    <?php include('../../components/navbar.php') ?>
<h1 style="text-align: center">Tambah Siswa</h1>
<div>
  <form action="../../funcs/students/add.php" method="POST">
    <label for="fname">Nama Lengkap : </label>
    <input type="text" id="fname" name="name" placeholder="Masukkan nama">

    <label for="lname">NIS : </label>
    <input type="text" id="lname" name="nis" placeholder="Masukkan NIS">

    <label for="lname">Alamat : </label>
    <input type="text" id="lname" name="address" placeholder="Masukkan Alamat">

    <input type="submit" value="Simpan">
  </form>
</div>
</body>
</html>