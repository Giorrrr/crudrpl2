<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $tampil = mysqli_query($con, "SELECT * FROM identitas WHERE id = '$id'");
    $hasil = mysqli_fetch_array($tampil);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama Siswa</td>
                <td>:</td>
                <input type="hidden" name="id" id="id" value="<?=  $hasil[0] ?>">
                <td>
                    <input type="text" name="nama" id="nama" value="<?= $hasil[1] ?>">
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <input type="text" name="jurusan" id="jurusan" value="<?= $hasil[2] ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <!-- <input type="radio" name="jns_kel" <?php if($hasil[3] == "laki-laki") { echo "checked"; }?> value="laki-laki">Laki-Laki -->
                    <!-- <input type="radio" name="jns_kel" <?php if($hasil[3] == "perempuan") { echo "checked"; }?> value="perempuan">Perempuan -->

                    <input type="radio" name="jns_kel" <?php print($hasil[3] == "laki-laki") ? "checked" : "";?> value="laki-laki">Laki-Laki
                    <input type="radio" name="jns_kel" <?php print($hasil[3] == "perempuan") ? "checked" : "";?> value="perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td><button name="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>

