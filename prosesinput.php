<?php

    include "koneksi.php";

    $nama = $_POST['namasiswa'];
    $jurusan = $_POST['jurusan'];
    $jns_kel = $_POST['jns_kel'];

    // $insert = mysqli_query($con, "INSERT INTO identitas SET Nama = '$nama', Jurusan = '$jurusan', Jns_Kel = '$jns_kes' ");

    $insert = mysqli_query($con, "INSERT INTO identitas VALUES ('','$nama','$jurusan','$jns_kel')");
    