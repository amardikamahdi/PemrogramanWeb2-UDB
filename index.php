<?php
include 'funcs/conn.php';
$studentsQuery = mysqli_query($conn, "SELECT * FROM students LIMIT 10");
$classesQuery = mysqli_query($conn, "SELECT * FROM classrooms LIMIT 10");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php include('components/navbar.php') ?>
<h1 style="text-align: center">Data Siswa</h1>
<table id="customers">
  <tr>
    <th>NIS</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php while ($data = mysqli_fetch_array($studentsQuery)) { ?>
  <tr style="text-align: center">
    <td><?php echo $data['nis']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['address']; ?></td>
    <td><a class="button" style="background-color: #4CAF50" href="pages/students/edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a class="button" style="background-color: #F44336" href="funcs/students/delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>
  <?php } ?>
</table>
<h1 style="text-align: center">Data Kelas</h1>
<table id="customers">
  <tr>
    <th>Nama Jurusan</th>
    <th>Kelas</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php while ($data = mysqli_fetch_array($classesQuery)) { ?>
  <tr style="text-align: center">
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['grade']; ?></td>
    <td><a class="button" style="background-color: #4CAF50" href="pages/classes/edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a class="button" style="background-color: #F44336" href="funcs/classes/delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>
  <?php } ?>
</table>
</body>
</html>