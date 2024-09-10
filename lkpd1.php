<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 1</title>
</head>
<body>
    <form action="" method="POST">
        <label for="teks">Masukkan teks:</label>
        <input type="text" name="teks" id="teks">
        <!-- <input type="submit" value="Cek"> -->
          <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Periksa apakah ada input
    if (isset($_POST["submit"])) {
        $simbol = $_POST["teks"];

        // Hapus karakter non-simbol
        // function preg_replace untuk mencari dan mengganti teks
        $simbol = preg_replace('/[\w\s]/', '', $simbol);
        
        if ($simbol) {
            // Tampilkan simbol yang ditemukan
            //str_split dari string ke array, 
            //implode mengubah array menjadi string
            echo "Teks mengandung simbol: " . implode(', ', str_split($simbol));
        } else {
            echo "Teks tidak mengandung simbol.";
        }
    } else {
        echo "Tidak ada input.";
    }
}
?>