<?php
include_once('koneksi.php');
include_once('top.php');
include_once('menu.php');

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$nama_unit = $_POST['nama_unit'];

$sql = "INSERT INTO unit_kerja (nama_unit)
VALUES ('$nama_unit')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
