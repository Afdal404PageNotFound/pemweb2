<?php
// Tangkap input form
$nama = isset($_GET['nama']) ? $_GET['nama'] : '';
$matkul = isset($_GET['matkul']) ? $_GET['matkul'] : '';
$uts = isset($_GET['uts']) ? $_GET['uts'] : 65;
$uas = isset($_GET['uas']) ? $_GET['uas'] : 45;
$tugas = isset($_GET['tugas']) ? $_GET['tugas'] : 85;

// Tampilkan hasil input
echo "Nama Lengkap: $nama <br>";
echo "Mata Kuliah: $matkul <br>";
echo "Nilai UTS: $uts <br>";
echo "Nilai UAS: $uas <br>";
echo "Nilai Tugas: $tugas <br>";
echo "Predikat: ";

// Hitung total nilai
$total_nilai = (0.3 * $uts) + (0.35 * $uas) + (0.35 * $tugas);

// Tentukan apakah siswa lulus atau tidak
if ($total_nilai > 55) {
    echo "Siswa dinyatakan LULUS! <br>";
} else {
    echo "Siswa dinyatakan TIDAK LULUS! <br>";
}

// Tentukan grade berdasarkan nilai ujian
switch (true) {
    case ($total_nilai >= 85 && $total_nilai <= 100):
        echo "Grade: A (Sangat Memuaskan)";
        break;
    case ($total_nilai >= 70 && $total_nilai <= 84):
        echo "Grade: B (Memuaskan)";
        break;
    case ($total_nilai >= 56 && $total_nilai <= 69):
        echo "Grade: C (Cukup)";
        break;
    case ($total_nilai >= 36 && $total_nilai <= 55):
        echo "Grade: D (Kurang)";
        break;
    case ($total_nilai >= 0 && $total_nilai <= 35):
        echo "Grade: E (Sangat Kurang)";
        break;
    default:
        echo "Grade: I (Tidak Ada)";
}
?>
