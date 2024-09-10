<?php
// Membuat array $bintang yang berisi 4 baris simbol bintang (********)
$bintang = [
    "********",
    "********",
    "********",
    "********"
];

// Menampilkan isi array $bintang sebanyak 2 kali ke bawah
// Menggunakan fungsi range(1, 2) untuk menghasilkan array [1, 2] sebagai pengulangan 2 kali
foreach (range(1, 2) as $repeat) {
    // Looping melalui setiap elemen dalam array $bintang
    foreach ($bintang as $baris) {
        // Menampilkan setiap baris bintang dan berpindah ke baris baru dengan <br>
        echo $baris . "<br>";
    }
    // Menambahkan baris kosong di antara dua set tampilan bintang
    echo "<br>";
}
?>
