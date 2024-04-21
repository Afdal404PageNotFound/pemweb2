<?php
include_once('top.php');
include_once('menu.php');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puskesmas.id</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        h1, h2, h3 {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
        }

        p {
            margin-bottom: 20px;
        }

        section {
            padding: 50px 0;
        }

        .btn {
            display: inline-block;
            background-color: #333;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #555;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .col {
            flex: 0 0 calc(33.33% - 20px);
            margin-bottom: 20px;
            padding: 0 10px;
        }

        .col img {
            width: 100%;
            height: auto;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Selamat datang di halaman Atomic Health</h1>
        </div>
    </header>

    <main>
        <section id="beranda">
            <div class="container">
                <h2>Selamat Datang di Atomic Health</h2>
                <p>"Atomic Health adalah pusat layanan kesehatan yang menyediakan berbagai fasilitas dan perawatan untuk kebutuhan medis Anda."</p>
                

        <section id="tentangkami">
            <div class="container">
                <h2>Tentang Kami</h2>
                <p>"Di Atomic Health, kami tergerak oleh semangat untuk memberikan yang terbaik bagi komunitas. Kami adalah kelompok profesional medis dan teknologi yang bermimpi tentang masa depan kesehatan yang lebih baik. Dengan dedikasi kami, kami berusaha merancang pengalaman kesehatan yang revolusioner, mempersembahkan solusi terdepan untuk setiap tantangan kesehatan yang mungkin Anda hadapi. Bergabunglah dengan kami dalam perjalanan ini, di mana perawatan dan inovasi bertemu untuk menciptakan sebuah dunia yang lebih sehat bagi semua."</p>
            </div>
        </section>

        <section id="kontak">
            <div class="container">
                <h2>Hubungi Kami</h2>
                <p>Jika Anda memiliki pertanyaan atau saran, silakan hubungi kami melalui:</p>
                <ul>
                    <li>Email: cscall@AtomicHealth.id</li>
                    <li>Telepon: +62 8112-3886-7890</li>
                    <li>Alamat: Jl. Matahari no. 2</li>
                </ul>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 AtomicHealth.id</p>
        </div>
    </footer>
</body>
</html>