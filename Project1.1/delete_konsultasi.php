<?php
include_once('koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM konsultasi WHERE id='$id'";

    if ($dbh->query($sql)) {
        header("Location: hasilperiksa.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . implode(", ", $dbh->errorInfo());
    }
}
?>
