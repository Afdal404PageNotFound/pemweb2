<?php
include_once('koneksi.php');
include_once('top.php');
include_once('menu.php');

// Fungsi untuk menambahkan unit kerja
function tambahUnitKerja($nama_unit) {
    global $dbh;
    $sql = "INSERT INTO unit_kerja (nama_unit) VALUES (:nama_unit)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':nama_unit', $nama_unit);
    if ($stmt->execute()) {
        echo "Unit kerja berhasil ditambahkan.";
    } else {
        echo "Error: " . implode(", ", $stmt->errorInfo());
    }
}

// Fungsi untuk mengedit unit kerja
function editUnitKerja($id, $nama_unit) {
    global $dbh;
    $sql = "UPDATE unit_kerja SET nama_unit=:nama_unit WHERE id=:id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nama_unit', $nama_unit);
    if ($stmt->execute()) {
        echo "Unit kerja berhasil diperbarui.";
    } else {
        echo "Error: " . implode(", ", $stmt->errorInfo());
    }
}

// Fungsi untuk menghapus unit kerja
function hapusUnitKerja($id) {
    global $dbh;
    $sql = "DELETE FROM unit_kerja WHERE id=:id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        echo "Unit kerja berhasil dihapus.";
    } else {
        echo "Error: " . implode(", ", $stmt->errorInfo());
    }
}

// Jika tombol tambah diklik
if (isset($_POST['tambah'])) {
    tambahUnitKerja($_POST['nama_unit']);
}

// Jika tombol edit_submit diklik
if (isset($_POST['edit_submit'])) {
    editUnitKerja($_POST['id'], $_POST['nama_unit']);
}

// Jika tombol hapus diklik
if (isset($_POST['hapus'])) {
    hapusUnitKerja($_POST['id']);
}

// Ambil data unit kerja dari database
$stmt = $dbh->query('SELECT * FROM unit_kerja');
$unit_kerja = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Unit Kerja</title>
</head>
<body>
    <h1>Manajemen Unit Kerja</h1>

    <!-- Formulir untuk menambah unit kerja -->
    <h2>Tambah Unit Kerja</h2>
    <form method="post">
        <input type="text" name="nama_unit" placeholder="Nama Unit Kerja" required><br>
        <button type="submit" name="tambah">Tambah</button>
    </form>

    <!-- Daftar unit kerja -->
    <h2>Daftar Unit Kerja</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Unit Kerja</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($unit_kerja as $unit): ?>
            <tr>
                <td><?php echo $unit['id']; ?></td>
                <td><?php echo $unit['nama_unit']; ?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="id" value="<?php echo $unit['id']; ?>">
                        <button type="submit" name="edit">Edit</button>
                        <button type="submit" name="hapus">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php if (isset($_POST['edit']) && $_POST['id'] == $unit['id']): ?>
                <!-- Formulir untuk mengedit unit kerja -->
                <tr>
                    <td colspan="3">
                        <h2>Edit Unit Kerja</h2>
                        <form method="post">
                            <input type="hidden" name="id" value="<?php echo $unit['id']; ?>">
                            <input type="text" name="nama_unit" placeholder="Nama Unit Kerja" value="<?php echo $unit['nama_unit']; ?>" required><br>
                            <button type="submit" name="edit_submit">Simpan Perubahan</button>
                        </form>
                    </td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
    </table>

</body>
</html>
