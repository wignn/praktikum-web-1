<?php
$kendaraan = null;
$roda = 2;

switch ($roda) {
    case 2:
        $kendaraan = "Sepeda Motor";
        break;
    case 4:
        $kendaraan = "Mobil";
        break;
    case 6:
        $kendaraan = "Mobil Truk";
        break;

    default:
        $kendaraan = "Kendaraan tidak dikenal";
        break;
}
echo "<h3>No 1</h3> ";
echo "Kendaraan dengan roda $roda adalah: $kendaraan <br>";