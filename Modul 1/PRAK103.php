<?php


// Nilai celcius pada soal
$celcius = 37.841;

// Proses konversi celcius
$fahrenheit = (9/5) * $celcius + 32;
$reamur = (4/5) * $celcius;
$kelvin = $celcius + 273.15;

// Output
echo "Fahrenheit (F) = $fahrenheit<br>";
echo "Reamur (R) = $reamur<br>";
echo "Kelvin (K)= $kelvin";
?>