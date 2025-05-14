<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body class="warp">
    <div class="conteiner">
        <form class="form" action="latihan_nilai.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="nilai">Nilai:</label>
            <input type="number" id="nilai" name="nilai" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
