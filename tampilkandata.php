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
    <a href="forminput.php">Tambah Data</a>
    <br>
    <?php 
        // @$notif = $_GET['notification'] == "hapus" ? "<span>Record deleted successfully</span>" : "<span>Record updated  successfully</span>";
        $notif;
        @$notification = $_GET['notification'];
        if($notification == "hapus") {
            $notif = "<span>Record deleted successfully</span>";
        } else if($notification == "edit") {
            $notif = "<span>Record updated  successfully</span>";
        } else if($notification == "insert") {
            $notif = "<span>Record insert  successfully</span>";
        } else  {
            $notif = "";
        }
        echo $notif;
    ?>
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
            <td><a href="edit_data.php?id=<?= $hasil[0] ?>">edit</a>&nbsp|&nbsp<a onclick="return hapus(<?= $hasil[0] ?>)">hapus</a></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <script>
        function hapus(id) {
            if (confirm('Yakin mau hapus?')) {
                window.location = "hapus_data.php?id=" + id;
            }
        }
    </script>
</body>
</html>