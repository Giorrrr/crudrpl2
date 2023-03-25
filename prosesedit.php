<?php
    include "koneksi.php";

    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['namasiswa'];
        $jurusan = $_POST['jurusan'];
        $jns_kel = $_POST['jns_kel'];

        $update = mysqli_query($con, "UPDATE identitas SET Nama = '$nama', Jurusan = '$jurusan', Jns_Kel = '$jns_kel' WHERE id = '$id' ");

        if($update) {
            header('Location: tampilkandata.php?notification=edit');
        }
    } else {
        header('Location: edit_data.php');
    }