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
    <link rel="stylesheet" href="style.css">
    <title>Edit</title>
</head>
<body>
    <div class="wrapper">
        <div class="table-box">
            <br>
            <a onclick="backpage()" class="back"><i class="bi bi-arrow-left"></i>&nbspBack</a>
            <h1>Edit</h1>
            <form action="prosesedit.php" method="POST">
                <table>
                    <tr>
                        <td>Nama Siswa</td>
                        <td>:</td>
                        <input type="hidden" name="id" id="id" value="<?=  $hasil[0] ?>">
                        <td>
                            <input type="text" name="namasiswa" id="namasiswa" value="<?= $hasil[1] ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="jurusan" id="jurusan" value="<?= $hasil[2] ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <!-- <input type="radio" name="jns_kel" <?php if($hasil[3] == "laki-laki") { echo "checked"; }?> value="laki-laki">Laki-Laki -->
                            <!-- <input type="radio" name="jns_kel" <?php if($hasil[3] == "perempuan") { echo "checked"; }?> value="perempuan">Perempuan -->
        
                            <label for="laki-laki">
                                <input type="radio" name="jns_kel" id="laki-laki" <?php print($hasil[3] == "laki-laki") ? "checked" : "";?> value="laki-laki" required>
                                <span>Laki-Laki</span>
                            </label>
                            <label for="perempuan">
                                <input type="radio" name="jns_kel" id="perempuan" <?php print($hasil[3] == "perempuan") ? "checked" : "";?> value="perempuan" required>
                                <span>Perempuan</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td><button name="submit">Submit</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <script>
        function backpage() {
            window.location = "tampilkandata.php";
        }
    </script>
</body>
</html>

