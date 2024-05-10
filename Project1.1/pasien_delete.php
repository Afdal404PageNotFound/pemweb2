<?php
include_once('koneksi.php');

$id = $_GET['id'];


$query = "DELETE FROM pasien WHERE id='$id'";

  
if ($dbh->exec($query)) {
    header('Location: pasien.php');
} else {
    echo "Gagal menghapus data";
}

