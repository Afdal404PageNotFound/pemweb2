<?php
// tankgap input form
$customer = $_POST['customer'];
$produk = $_POST ['produk'];
$jumlah = $_POST ['jumlah'];

// array harga produk
$harga = [
    'TV' => 4200000,
    'Kulkas' => 3100000,
    'Mesin Cuci' => 3800000,
];

$total = $jumlah * $harga[$produk];

$total = number_format($total);

// hitung total harga (jumlah * harga produk)
echo "Nama Customer: $customer";
echo "<br> Produk: $produk";
echo "<br> Jumlah Beli: $jumlah";
echo "<br> Total Belanja: RP $total";