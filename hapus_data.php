<?php
    include "koneksi.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = mysqli_query($con, "SELECT id FROM identitas WHERE id = '$id'");
        
        if(mysqli_fetch_array($query)) {
            $delete = mysqli_query($con, "DELETE FROM identitas WHERE id = '$id'");
            header('Location: tampilkandata.php?notification=hapus');
        } else {
            header('Location: tampilkandata.php?notification=error');
        }
    } else {
        header('Location: tampilkandata.php');
    }