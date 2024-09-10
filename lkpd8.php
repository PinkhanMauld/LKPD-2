
<title>No 8</title>

<?php

$data = array("PPLG", "HTL", "KLN", "PMN", "PPLG", "HTL");
$cari = array_unique($data);

ksort($data);
print_r($cari);

?>