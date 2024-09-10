<?php
$bill1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bill2 = [77, 99, 55, 81, 45, 90, 91, 98];

// Menggabungkan kedua array
$mergedArray = array_merge($bill1, $bill2);

// Menghapus nilai yang duplikat
$uniqueArray = array_unique($mergedArray);

// Mengurutkan dari terbesar ke terkecil
rsort($uniqueArray);

// Menampilkan hasil
echo "Hasil: ";
echo implode(", ", $uniqueArray);
?>