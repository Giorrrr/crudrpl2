<?php
    include "koneksi.php";

    if (isset($_POST['submit']) && $_POST['namasiswa'] && $_POST['jurusan'] && $_POST['jns_kel']) {
        $nama = $_POST['namasiswa'];
        $jurusan = $_POST['jurusan'];
        $jns_kel = $_POST['jns_kel'];
    
        // $insert = mysqli_query($con, "INSERT INTO identitas SET Nama = '$nama', Jurusan = '$jurusan', Jns_Kel = '$jns_kes' ");
    
        $insert = mysqli_query($con, "INSERT INTO identitas VALUES ('','$nama','$jurusan','$jns_kel')");
        
        if($insert) {
            header('Location: tampilkandata.php?notification=insert');
        }
    } else {
        header('Location: tampilkandata.php');
    }