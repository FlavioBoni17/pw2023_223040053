<?php 
echo "mulai. <br>";
// 1. Inisialisasi / Nilai Awal
// 2. Kondisi Terminasi / Kapan pengulangannya berhenti
// 3. Increment + / Decrement - (pengurangan)  (pengurangan nya bisa maju / mundur)


$nilai_awal = 1; // Inisialisasi 
while ($nilai_awal <= 5) { // kondisi terminasi
    echo "Hello World $nilai_awal x<br>";

// $nilai_awal  = $nilai_awal+ 1; //increment
$nilai_awal++;   //increment
}
echo "selesai. <br>";


echo "<hr>";

echo "Mulai. <br>";
for ($nilai_awal=1; $nilai_awal <= 5 ;$nilai_awal++) { 
    echo "Hello world $nilai_awal x. <br>";
}

echo "selesai. <br>";
