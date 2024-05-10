<?php
include_once('koneksi.php');

$nama = $_POST['nama'];
$kode = $_POST['kode'];
$email = $_POST['email'];
$tgl_lahir = $_POST['tgl_lahir'];
$tmp_lahir = $_POST['tmp_lahir'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$kelurahan_id = $_POST['kelurahan_id'];

$query = "INSERT INTO pasien (nama, kode, email, tgl_lahir, tmp_lahir, gender, alamat, kelurahan_id) VALUES ('$nama', '$kode', '$email', '$tgl_lahir', '$tmp_lahir', '$gender', '$alamat', '$kelurahan_id')";
  
if ($dbh->query($query)) {
    header('location: pasien.php');
} else {
    echo "Gagal menyimpan data";
}

?>