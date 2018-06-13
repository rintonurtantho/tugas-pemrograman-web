<?php
    include "config.php";
    $id = $_GET['del'];
    $query = $dbconnect->query("DELETE FROM siswa WHERE id='$id'");

        if($query){
                    header("location:index.php");
        }else{
                echo "Data Gagal Dihapus. <a href='index.php'>Kembali ke halaman sebelumnya</a>";
        }
?>
