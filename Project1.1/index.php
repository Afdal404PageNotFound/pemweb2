<?php
include_once('top.php');
include_once('menu.php');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atomic Health</title>
    <!-- Tambahkan link ke Google Fonts untuk font yang lebih modern -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Tambahkan link ke FontAwesome untuk ikon yang menarik -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <style>
        /* Gunakan Roboto sebagai font utama untuk tampilan yang lebih modern */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #ffffff;
            color: #333333;
            line-height: 1.6;
        }

        /* Tambahkan bayangan dan padding pada header untuk dimensi */
        header {
            background-color: #005cbf;
            color: white;
            padding: 20px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Tambahkan efek hover pada tombol untuk interaktivitas */
        .btn {
            transition: background-color 0.3s ease;
        }

        /* Tambahkan padding dan batasi lebar footer untuk konsistensi */
        footer {
            padding: 20px 0;
            max-width: 1200px;
            margin: auto;
        }

        /* Tambahkan ikon media sosial menggunakan FontAwesome */
        .social-icons i {
            font-size: 24px;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <!-- Tambahkan ikon rumah sakit menggunakan FontAwesome -->
            <i class="fas fa-clinic-medical fa-3x"></i>
            <h1>Atomic Health</h1>
            <p>"Kami berkomitmen untuk kesehatan dan kesejahteraan Anda."</p>
        </div>
    </header>

    <!-- Konten utama -->
    <main>
        <!-- Bagian beranda -->
        <section id="beranda" style="background: url('latar-beranda.jpg') no-repeat center center; background-size: cover;">
            <div class="container" style="text-align: center; padding: 100px 20px;">
                <h2>Selamat Datang di Atomic Health</h2>
                <p>Atomic Health menyediakan layanan kesehatan berkualitas dengan tenaga medis yang berpengalaman. Kunjungi kami untuk mendapatkan pelayanan kesehatan yang Anda butuhkan.</p>
                <a href="#kontak" class="btn">Hubungi Kami</a>
            </div>
        </section>

        <!-- Bagian tentang kami -->
        <section id="tentangkami">
            <div class="container">
                <h2>Tentang Kami</h2>
                <p>Atomic Health telah lama menjadi pilihan utama masyarakat untuk layanan kesehatan. Dengan fasilitas modern dan tenaga medis yang handal, kami siap melayani Anda.</p>
            </div>
        </section>

        <!-- Bagian kontak -->
        <section id="kontak">
            <div class="container">
                <h2>Hubungi Kami</h2>
                <p>Untuk informasi lebih lanjut atau untuk membuat janji, silakan hubungi kami melalui:</p>
                <ul>
                    <li>Email: info@atomichealth.id</li>
                    <li>Telepon: +62 21 1234 5678</li>
                    <li>Alamat: Jl. Kesehatan No.1, Jakarta</li>
                </ul>
                <a href="mailto:info@atomichealth.id" class="btn">Kirim Email</a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>© 2024 Atomic Health</p>
            <div class="social-icons">
                <!-- Tambahkan ikon media sosial -->
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>



<?php 
include_once('bottom.php');
?>

</body>
</html>