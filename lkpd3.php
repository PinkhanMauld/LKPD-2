<?php
// Loop dari 1 hingga 30
for ($i = 1; $i <= 30; $i++) {

    // Mengecek apakah 90 habis dibagi dengan nilai $i (mengecek faktor dari 90)
    if (90 % $i == 0) {

        // Jika habis dibagi, hitung hasil pembagian 90 dengan $i
        $hasil = 90 / $i;

        // Tampilkan hasil pembagian dalam format "90 : $i = $hasil"
        echo "90 : $i = $hasil <br>"; 
    }
}
?>
