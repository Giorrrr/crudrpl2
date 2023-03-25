<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $delete = mysqli_query($con, "DELETE FROM identitas WHERE id = '$id'");


    header('Location: tampilkandata.php?notification=hapus');