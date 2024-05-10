<?php
// Kode untuk menyimpan data ke database
include_once('koneksi.php');
include_once('top.php');
include_once('menu.php');

$saran = array(
    "demam" => "Anda harus segera berkonsultasi dengan dokter umum untuk penanganan yang tepat.",
    "bisul" => "Anda harus berkonsultasi dengan dokter kulit untuk perawatan yang sesuai.",
    "cacar" => "Anda harus segera mendapatkan perawatan medis dari dokter spesialis penyakit infeksi.",
    "cantengan" => "Anda harus menjadwalkan konsultasi dengan dokter bedah untuk perawatan yang tepat.",
    "nyeri otot" => "Anda perlu berkonsultasi dengan dokter ortopedi untuk diagnosis dan pengobatan yang sesuai.",
    "sakit perut" => "Anda harus mengunjungi dokter gastroenterologi untuk evaluasi lebih lanjut dan perawatan yang sesuai.",
    "sakit kepala" => "Anda harus mengatur janji dengan dokter neurologi untuk penanganan yang tepat.",
    "salah bantal" => "Anda disarankan untuk berkonsultasi dengan dokter ortopedi untuk saran lebih lanjut tentang masalah ini.",
    "sakit gigi" => "Anda harus segera berkonsultasi dengan dokter gigi umum untuk perawatan yang diperlukan.",
    "radang tenggorokan" => "Anda perlu mengunjungi dokter THT (Telinga, Hidung, Tenggorokan) untuk penanganan yang tepat.",
    "batuk" => "Anda harus membuat janji dengan dokter paru untuk evaluasi dan penanganan yang sesuai.",
    "pilek" => "Anda disarankan untuk berkonsultasi dengan dokter umum untuk saran medis yang sesuai."
);


$query = "SELECT * FROM konsultasi ORDER BY hari DESC"; 
$result = $dbh->query($query);


echo "<table border='1'>";
echo "<tr><th>Nama</th><th>Hari</th><th>Gejala</th><th>Telepon</th><th>Pesan</th><th>Saran</th><th>Aksi</th></tr>"; // Tambahkan kolom Aksi

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['hari'] . "</td>";
    echo "<td>" . $row['gejala'] . "</td>";
    echo "<td>" . $row['telp'] . "</td>";
    echo "<td>" . $row['pesan'] . "</td>";
    echo "<td>" . $saran[$row['gejala']] . "</td>"; 
    echo "<td><a href='edit_konsultasi.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete_konsultasi.php?id=" . $row['id'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Delete</a></td>"; // Tambahkan tombol Edit dan Delete
    echo "</tr>";
}
echo "</table>";
?>
