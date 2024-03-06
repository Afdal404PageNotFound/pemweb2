<?php
//Function Menghitung Luas Segitiga

function luas_segitiga($alas, $tinggi)
{
    $luas = 0.5 * $alas * $tinggi;
    echo $luas; 
}

// Panggil funvtion
luas_segitiga(2, 10);