<?php
// Deklarasi Variabel
$Jarijari = 4.2;
$tinggi = 5.4;
$panjang = 8.9;
$lebar = 14.7;
$sisi = 7.9;
$alasPrisma = 5.5;
$tinggiPrisma = 7.5;
$tinggiLimas = 8.5;

// NIM
$nim = 7;

// Kondisi angka belakang NIM serta penghitungan rumus
if( $nim == 0 || $nim == 1 ) {
    $tabung = 3.14 * $Jarijari * $Jarijari * $tinggi;
    echo number_format($tabung, 3);
} else if ( $nim == 2 || $nim == 3 ) {
    $kerucut = 1/3 * 3.14 * $Jarijari * $Jarijari * $tinggi;
    echo number_format($kerucut, 3);
} else if ( $nim == 4 || $nim == 5 ) {
    $bola = 4/3 * 3.14 * $Jarijari * $Jarijari * $Jarijari;
    echo number_format($bola, 3);
} else if ( $nim == 6 || $nim == 7 ) {
    $prismaAlasSegitiga = 1/2 * $alasPrisma * $tinggiPrisma;
    echo number_format($prismaAlasSegitiga, 3);
} else if ( $nim == 8 || $nim == 9 ) { 
    $limasAlasPersegiPanjang = 1/3 * $panjang * $lebar * $tinggiLimas;
    echo number_format($limasAlasPersegiPanjang, 3);
} 
?> 