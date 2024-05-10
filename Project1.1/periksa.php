<?php
include_once('koneksi.php');
$kelurahan = $dbh->query('SELECT * FROM kelurahan');
ob_start();
include_once('top.php');
include_once('menu.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $hari = $_POST["hari"];
    $gejala = $_POST["gejala"];
    $telp = $_POST["telp"];
    $pesan = $_POST["pesan"];

    $sql2 = "INSERT INTO konsultasi (nama, hari, gejala, telp, pesan)
    VALUES ('$nama', '$hari', '$gejala', '$telp', '$pesan')";

    if ($dbh->query($sql2)) {
        header("Location: hasilperiksa.php?gejala=$gejala");
        exit();
    } else {
        echo "Error: " . $sql2 . "<br>" . implode(", ", $dbh->errorInfo());
    }
}
ob_end_flush();
?>

<style>
.contact-form-container {
    max-width: 500px;
    margin: 20px auto; /* Merubah margin agar lebih luas */
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    background-color: #f9f9f9;
}

.contact-form {
    display: grid;
    grid-template-columns: 1fr;
    grid-row-gap: 15px;
}

.contact-form h2 {
    text-align: center;
}

.form-group {
    margin-bottom: 10px;
}

input[type="text"],
select,
textarea {
    width: calc(100% - 20px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button[type="submit"]:hover {
    background-color: #45a049;
}
</style>

<div class="contact-form-container">
    <form action="" method="post" class="contact-form">
        <h2>Hubungi Kami</h2>
        <div class="form-group">
            <select name="nama" id="nama">
                <?php include 'get_nama.php'; ?>
            </select>
        </div>
        <div class="form-group">
            <input id="hari" name="hari" type="date" placeholder="Tanggal Lahir">
        </div>
        <div class="form-group">
            <select name="gejala" id="gejala">
                <option value="demam">Demam</option>
                <option value="bisul">Bisul</option>
                <option value="cacar">Cacar</option>
                <option value="cantengan">Cantengan</option>
                <option value="nyeri otot">Nyeri otot</option>
                <option value="sakit perut">Sakit perut</option>
                <option value="sakit kepala">Sakit kepala</option>
                <option value="salah bantal">Salah bantal</option>
                <option value="sakit gigi">Sakit gigi</option>
                <option value="radang tenggorokan">Radang tenggorokan</option>
                <option value="batuk">Batuk</option>
                <option value="pilek">Pilek</option>
            </select>
        </div>
        <div class="form-group">
            <input id="telp" name="telp" type="text" placeholder="Telepon">
        </div>
        <div class="form-group">
            <textarea id="pesan" name="pesan" rows="5" placeholder="Pesan"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="submit">Deteksi</button>
        </div>
    </form>
</div>
