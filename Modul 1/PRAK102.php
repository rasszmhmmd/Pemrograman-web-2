<?php

$jarijari = 4.2; 
$tinggi = 5.4; 
$panjang = 8.9; 
$lebar = 14.7; 
$sisi = 7.9; 
$alasPrisma = 5.5; 
$tinggiPrisma = 7.5; 
$tinggiLimas = 8.5;  

// Hitung luas alas
$luasAlas = $panjang * $lebar;

// Hitung volume limas
$volume = (1/3) * $luasAlas * $tinggi;

// Tampilkan hasil
echo number_format($volume, 3); 
echo " m3"; 
?>