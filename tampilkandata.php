<?php 
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
</head>
<body>
    <h1>Data Identitas</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
        <?php
            $tampil = mysqli_query($con, "SELECT * FROM identitas");
            $id = 1;
            while ($hasil = mysqli_fetch_array($tampil)) :
        ?>
        <tr>
            <td><?= $id++; ?></td>
            <td><?= $hasil[1]; ?></td>
            <td><?= $hasil[2]; ?></td>
            <td><?= $hasil[3]; ?></td>
            <!-- <td><?= $hasil['Nama']; ?></td> -->
            <!-- <td><?= $hasil['Jurusan']; ?></td> -->
            <!-- <td><?= $hasil['Jns_Kel']; ?></td> -->
            <td><a href="edit_data.php?id=<?= $hasil[0] ?>">edit</a>&nbsp|&nbsp<a href="hapus_data.php?id=<?= $hasil[0] ?>">hapus</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>