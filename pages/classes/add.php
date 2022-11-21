<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
    <?php include('../../components/navbar.php') ?>
<h1 style="text-align: center">Tambah Kelas</h1>
<div>
  <form action="../../funcs/classes/add.php" method="POST">
    <label for="fname">Nama Jurusan : </label>
    <input type="text" id="fname" name="name" placeholder="Masukkan nama">

    <label for="lname">Kelas : </label>
    <select name="grade">
        <option value="X">X</option>
        <option value="XI">XI</option>
        <option value="XII">XII</option>
    </select>

    <input type="submit" value="Simpan">
  </form>
</div>
</body>
</html>