<?php
$nama = $_POST['nama'];
$nilai = $_POST['nilai'];


$status = "tidak lulus";

$prdikat;
if ($nilai <= 85) {
    $status = "lulus";
    $prdikat = "A";
} elseif ($nilai <= 75) {
    $status = "lulus";
    $prdikat = "B";
} elseif ($nilai <= 65) {
    $prdikat = "C";
} elseif ($nilai <= 50) {
    $prdikat = "D";
} else {
    $prdikat = "E";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>harga</title>
    <style>
     body{
        justify-content: center;
        display: flex;
        align-items: center;
     }
     .conteiner {
            border-radius: 10px;
            border: 1px solid black;
            padding: 10px;
            width: 50%;
            justify-content: center;
            
        }
    </style>
</head>

<body class="warp">
    <div class="conteiner">
    <table border="1" style="width: 100%; text-align: center;">
        <p>Nama: <?php echo $nama ?> </p>
        <p>Nilai: <?php echo $nilai ?></p>
        <p>Predikat: <?php echo $prdikat ?></p>
        <p>Status: <?php echo $status ?></p>
    </table>
    </div>
</body>

</html>
