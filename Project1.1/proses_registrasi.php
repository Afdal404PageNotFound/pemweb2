<?php
// tangkap form registrasi
$nim = $_POST ['nim'];
$nama = $_POST ['nama'];
$jk = $_POST ['jk'];
$prodi = $_POST ['prodi'];
$skills = $_POST ['skill'];
$domisili = $_POST ['domisili'];
$email = $_POST ['email'];

$niai_skills =[
    'HTML' => 10,
    'CSS' => 10,
    'Javascript' =>20,
    'RWD Bootstrap' => 20,
    'PHP' => 30,
    'Python' => 30,
    'Java' => 50
];

$total_skor = 0;
foreach ($skills as $value) {
    $total_skor += $niai_skills[$value];
}

$kategori_skill = '';
if ($total_skor == 0){
    $kategori_skill = 'Tidak Memadai';
} else if($total_skor <=40){
    $kategori_skill = 'Kurang';
}else if($total_skor <=60){
    $kategori_skill = 'Cukup';
}else if($total_skor <=100){
    $kategori_skill = 'Baik';
}else if($total_skor <=150){
    $kategori_skill = 'Sangat Baik';
}
?>
<fieldset>
    <legend>Registrasi IT Club</legend>
    <?php
    echo "NIM: $nim";
    echo "<br> Nama: $nama";
    echo "<br> Jenis Kelamin: $jk";
    echo "<br> Program Studi: $prodi";
    // memecahkan array jadistrng pke join
    echo "<br> Skill Programming:".join(',',$skills);
    echo "<br> Domisili: $domisili";
    echo "<br> Email: $email";
    echo "<br> Total skor: $total_skor";
    echo "<br> Grade: $kategori_skill";
    ?>
</fieldset>