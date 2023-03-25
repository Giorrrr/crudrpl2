<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD RPL 2</title>
</head>
<body>
    <div class="wrapper">
        <div class="table-box">
            <br>
            <a onclick="backpage()" class="back">Back</a>
            <h1>Input Data</h1>
            <form action="prosesinput.php" method="post">
                <table>
                    <tr>
                        <td>Nama Siswa</td>
                        <td>:</td>
                        <td><input type="text" name="namasiswa" required></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td><input type="text" name="jurusan" required></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <label for="laki-laki">
                                <input type="radio" name="jns_kel" value="laki-laki" id="laki-laki" required>
                                <span>Laki-Laki</span>
                            </label>
                            <label for="perempuan">
                                <input type="radio" name="jns_kel" value="perempuan" id="perempuan" required>
                                <span>Perempuan</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><button name="submit">Kirim</button></td>
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