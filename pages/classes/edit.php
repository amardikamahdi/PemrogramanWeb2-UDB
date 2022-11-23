<?php

include '../../funcs/conn.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM classrooms WHERE id='$id'");
$result = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas - <?= $result['name'] ?></title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
    <?php include('../../components/navbar.php') ?>
<h1 style="text-align: center">Edit Kelas - <?= $result['name'] . ' ' . $result['grade']; ?></h1>
<div>
  <form action="../../funcs/classes/edit.php?id=<?= $result['id'] ?>" method="POST">
  <label for="fname">Nama Jurusan : </label>
    <input type="text" id="fname" name="name" placeholder="Masukkan nama" value="<?= $result['name'] ?>">

    <label for="lname">Kelas : </label>
    <select name="grade">
        <option value="X" <?php if ($result['grade'] == 'X') {
            echo "selected";
        } else {
            echo '';
        } ?>>X</option>
        <option value="XI" <?php if ($result['grade'] == 'XI') {
            echo "selected";
        } else {
            echo '';
        } ?>>XI</option>
        <option value="XII" <?php if ($result['grade'] == 'XII') {
            echo "selected";
        } else {
            echo '';
        }?>>XII</option>
    </select>

    <input type="submit" value="Simpan">
  </form>
</div>
</body>
</html>