<?php
ob_start(); // Mulai output buffering

include_once('koneksi.php');
include_once('top.php');
include_once('menu.php');

$row = null;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {

    if(isset($_POST['id'])) {
        $id = $_POST["id"];
        $nama = $_POST["nama"];
        $hari = $_POST["hari"];
        $gejala = $_POST["gejala"];
        $telp = $_POST["telp"];
        $pesan = $_POST["pesan"];

        $sql = "UPDATE konsultasi SET nama='$nama', hari='$hari', gejala='$gejala', telp='$telp', pesan='$pesan' WHERE id='$id'";

        if ($dbh->query($sql)) {
            header("Location: hasilperiksa.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . implode(", ", $dbh->errorInfo());
        }
    } else {
        echo "Error: Data 'id' tidak ditemukan.";
    }
} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM konsultasi WHERE id='$id'";
    $result = $dbh->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);
}
?>

<style>
    .contact-form-container {
        max-width: 500px;
        margin: 20px auto;
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
        <h2>Edit Konsultasi</h2>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input id="nama" name="nama" type="text" value="<?php echo isset($row['nama']) ? $row['nama'] : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="hari">Tanggal Lahir:</label>
            <input id="hari" name="hari" type="date" value="<?php echo isset($row['hari']) ? $row['hari'] : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="gejala">Gejala:</label>
            <select id="gejala" name="gejala" required>
            <option value="demam" <?php if (isset($row['gejala']) && $row['gejala'] == 'demam') echo 'selected'; ?>>Demam</option>
                <option value="bisul" <?php if (isset($row['gejala']) && $row['gejala'] == 'bisul') echo 'selected'; ?>>Bisul</option>
                <option value="cacar" <?php if (isset($row['gejala']) && $row['gejala'] == 'cacar') echo 'selected'; ?>>Cacar</option>
                <option value="cantengan" <?php if (isset($row['gejala']) && $row['gejala'] == 'cantengan') echo 'selected'; ?>>Cantengan</option>
                <option value="nyeri otot" <?php if (isset($row['gejala']) && $row['gejala'] == 'nyeri otot') echo 'selected'; ?>>Nyeri Otot</option>
                <option value="sakit perut" <?php if (isset($row['gejala']) && $row['gejala'] == 'sakit perut') echo 'selected'; ?>>Sakit Perut</option>
                <option value="sakit kepala" <?php if (isset($row['gejala']) && $row['gejala'] == 'sakit kepala') echo 'selected'; ?>>Sakit Kepala</option>
                <option value="salah bantal" <?php if (isset($row['gejala']) && $row['gejala'] == 'salah bantal') echo 'selected'; ?>>Salah Bantal</option>
                <option value="sakit gigi" <?php if (isset($row['gejala']) && $row['gejala'] == 'sakit gigi') echo 'selected'; ?>>Sakit Gigi</option>
                <option value="radang tenggorokan" <?php if (isset($row['gejala']) && $row['gejala'] == 'radang tenggorokan') echo 'selected'; ?>>Radang Tenggorokan</option>
                <option value="batuk" <?php if (isset($row['gejala']) && $row['gejala'] == 'batuk') echo 'selected'; ?>>Batuk</option>
                <option value="pilek" <?php if (isset($row['gejala']) && $row['gejala'] == 'pilek') echo 'selected'; ?>>Pilek</option>
            </select>
        </div>
        <div class="form-group">
            <label for="telp">Telepon:</label>
            <input id="telp" name="telp" type="text" value="<?php echo isset($row['telp']) ? $row['telp'] : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="pesan">Pesan:</label>
            <textarea id="pesan" name="pesan" rows="5" required><?php echo isset($row['pesan']) ? $row['pesan'] : ''; ?></textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="submit">Simpan Perubahan</button>
        </div>
        <input type="hidden" name="id" value="<?php echo isset($row['id']) ? $row['id'] : ''; ?>">
    </form>
</div>

<?php
ob_end_flush(); 
?>
