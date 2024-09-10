<?php
// Fungsi untuk menghitung total bayar dengan mempertimbangkan diskon berdasarkan hari dan total pembelian
function hitungTotalBayar($totalPembelian) {
    // Mendapatkan hari ini dalam format huruf kecil, misalnya 'tuesday' untuk kamis
    $hariIni = strtolower(date('l')); 
    $diskon = 0; // Inisialisasi variabel diskon

    // Cek apakah hari ini adalah hari Selasa ('tuesday')
    if ($hariIni == 'tuesday') {
        $diskon += 5; // Jika hari ini Selasa maka diskon 5%
    }

    // Cek apakah total pembelian lebih dari 100.000
    if ($totalPembelian > 100000) {
        $diskon += 7; // Tambahkan diskon 7% jika total pembelian lebih dari 100.000
    }

    // Menghitung total diskon dalam bentuk rupiah
    $totalDiskon = ($diskon / 100) * $totalPembelian;

    // Menghitung total bayar setelah diskon
    $totalBayar = $totalPembelian - $totalDiskon;

    // Mengembalikan nilai total yang harus dibayar
    return $totalBayar;
}

// Contoh penggunaan fungsi
$totalPembelian = 130000; // Nilai total pembelian, bisa diubah sesuai kebutuhan
$totalBayar = hitungTotalBayar($totalPembelian); // Menghitung total bayar berdasarkan pembelian
$hariIni = date('l'); // Mendapatkan nama hari ini dalam bahasa Inggris dengan format lengkap, misalnya 'Tuesday'

// Menampilkan nama hari saat ini
echo "Hari ini hari : " . $hariIni . "\n";

// Menampilkan total pembelanjaan dengan format rupiah (menggunakan titik sebagai pemisah ribuan)
echo "Total pembelanjaan: Rp " . number_format($totalPembelian, 0, ',', '.') . "\n";

// Menampilkan total yang harus dibayar setelah diskon dengan format rupiah
echo "Total yang harus dibayar: Rp " . number_format($totalBayar, 0, ',', '.') . "\n";
?>