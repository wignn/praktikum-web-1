
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form UKT</title>
</head>
<body>

    <form action="" method="POST">
        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm" required><br><br>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="prodi">Prodi:</label>
        <input type="text" id="prodi" name="prodi" required><br><br>

        <label for="semester">Semester:</label>
        <input type="number" id="semester" name="semester" required><br><br>

        <label for="ukt">UKT (dalam Rupiah):</label>
        <input type="number" id="ukt" name="ukt" required><br><br>

        <button type="submit">Submit</button>
    </form>


</body>
</html>


 <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $npm = htmlspecialchars($_POST['npm']);
        $nama = htmlspecialchars($_POST['nama']);
        $prodi = htmlspecialchars($_POST['prodi']);
        $semester = intval($_POST['semester']);
        $ukt = intval($_POST['ukt']);

        $discon = 0;

        if ($ukt >= 5000000) {
            if ($semester > 8) {
                $discon = 0.15; 
            } else {
                $discon = 0.1;   
            }
        }

        $potongan = $ukt * $discon;
        $total = $ukt - $potongan;

        echo "<h1>Informasi Pembayaran</h1>";
        echo "NPM: $npm<br>";
        echo "Nama: $nama<br>";
        echo "Prodi: $prodi<br>";
        echo "Semester: $semester<br>";
        echo "Biaya UKT: Rp " . number_format($ukt, 0, ',', '.') . "<br>";
        echo "Diskon: Rp " . number_format($potongan, 0, ',', '.') . "<br>";
        echo "Total yang harus dibayar: Rp " . number_format($total, 0, ',', '.') . "<br>";
    }
    ?>


