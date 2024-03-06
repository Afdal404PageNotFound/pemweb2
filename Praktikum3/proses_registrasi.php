<?php

$nim = $_POST ['nim'];
$nama = $_POST ['nama'];
$jk = $_POST ['jk'];
$prodi = $_POST ['prodi'];
$skill = $_POST ['skill'];
$domisili = $_POST ['domisili'];
$email = $_POST ['email'];



echo "NIM: $nim";
echo "<br> Nama: $nama";
echo "<br> Jenis Kelamin: $jk";
echo "<br> Program Studi: $prodi";
echo "<br> skill Programming: " . join(', ', $skill) ;
echo "<br> Domisili: $domisili";
echo "<br> Email: $email";