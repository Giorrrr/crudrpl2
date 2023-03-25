<?php
    include "koneksi.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $delete = mysqli_query($con, "DELETE FROM identitas WHERE id = '$id'");
    
    
        header('Location: tampilkandata.php?notification=hapus');
    } else {
        header('Location: tampilkandata.php');
    }