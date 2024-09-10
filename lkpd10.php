<?php
$jawaban_benar = ['A','D','C','C','B','A','E','B','A','E'];
$nama_siswa = 'Bernadya';
$jawaban_siswa = ['A','D','B','C','D','A','E','B','C','B'];

function cekJawaban($nama_siswa, $jawaban_siswa, $jawaban_benar) {
    $jawaban_benar_count = 0;
    $jawaban_salah_count = 0;

    foreach ($jawaban_siswa as $index => $jawaban) {
        if (isset($jawaban_benar[$index])) {
            if ($jawaban === $jawaban_benar[$index]) {
                $jawaban_benar_count++;
            } else {
                $jawaban_salah_count++;
            }
        }
    }
    echo "Nama : <b>$nama_siswa</b><br>";
    echo "Jumlah jawaban benar = <b>$jawaban_benar_count</b><br>";
    echo "Jumlah jawaban salah = <b>$jawaban_salah_count</b><br>";
}

cekJawaban($nama_siswa, $jawaban_siswa, $jawaban_benar);
?>