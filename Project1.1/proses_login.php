<?php
include_once('koneksi.php');

// Pastikan email dan password ada sebelum digunakan
if(isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash password menggunakan password_hash()
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Buat prepared statement
    $stmt = $dbh->prepare("SELECT * FROM users WHERE email = :email");

    // Bind parameter
    $stmt->bindParam(':email', $email);

    // Eksekusi statement
    $stmt->execute();

    // Ambil hasil query
    $result = $stmt->fetch();

    // Verifikasi password menggunakan password_verify()
    if($result && password_verify($password, $result['password'])) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['nama'] = $result['nama'];
        header('location:dashboard.php');
    } else {
        header('location:index.php');
    }
} else {
    // Jika email dan password tidak ada
    header('location:index.php');
}
?>
