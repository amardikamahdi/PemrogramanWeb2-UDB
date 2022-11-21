<?php
include 'funcs/conn.php';
$query = mysqli_query($conn, "SELECT * FROM students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4c4f69;
  color: white;
  text-align: center;
}
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
    </style>
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
  <?php while ($data = mysqli_fetch_array($query)) { ?>
  <tr style="text-align: center">
    <td><?php echo $data['nis']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['address']; ?></td>
    <td><a class="button" style="background-color: #4CAF50" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a class="button" style="background-color: #F44336" href="funcs/delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>
  <?php } ?>
</table>
</body>
</html>