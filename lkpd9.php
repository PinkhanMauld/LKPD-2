<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Masukkan Jumlah Uang</label>
        <input type="number" name="jumlah" id="jumlah">
        <input type="submit" name="hitung" id="hitung">
    </form>
</body>
</html>

<?php

$pecahan = [1000, 500, 200, 100];
//intval untuk menjadikan bilangan bulat
//? bentuk singkat dari ifelse
$jumlah = isset($_POST['jumlah']) ? intval($_POST['jumlah']) : 0;
$jumlah_awal = $jumlah;
$hasil = [];

foreach ($pecahan as $pecah){
    if ($jumlah >= $pecah) {
        $hasil[$pecah] = intdiv($jumlah, $pecah);
        $jumlah %= $pecah;
    }
}

?>

<div>
    <p>Uang Rp. <?php echo number_format($jumlah_awal, 0, ',', '.') ?></p>
    <p>Pecahan Koin</p>
</div>
<?php foreach ($hasil as $pecah => $jumlah_koin): ?>
    <p>Rp. <?php echo number_format($pecah, 0, ',', '.')?> : <?php echo $jumlah_koin ?></p>
<?php endforeach ;?>