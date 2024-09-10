<title>No 6</title>

<?php
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ],
];

$totalBelanja = 0;

foreach ($barang as $item) {
    $subtotal = $item['harga_barang'] * $item['jumlah_beli'];
    echo $item['nama_barang'] . "(" .  $item['jumlah_beli'] . ") : " . "Rp. " . number_format($subtotal, 0, ',', '.') . "<br>";
    $totalBelanja += $subtotal;
}
echo "Total harga yang harus di bayar adalah <b> Rp. " . number_format($totalBelanja, 0, ',', '.') . "</b>";

?>