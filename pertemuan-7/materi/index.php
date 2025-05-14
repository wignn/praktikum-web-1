//string
<?php
$nama = "Agung mandiri";
echo "Nama saya adalah $nama";
?>


//integer
<?php
$umur = 20;
echo $umur;
?>

//null
<?php
$data = null;
var_dump($data);
?>


//boolean
<?php
$isLogin = true;
?>

<?php
$berat = 55.5;
echo "Berat saya adalah $berat kg";
?>

<?php


class mahasiswa
{
    public $nama;

    public function sapa()
    {
        return "hallo saya. $this->nama";
    }
}

$mhs = new mahasiswa();
$mhs->nama = "jenifer";

echo $mhs->sapa();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body style="justify-content: center; display: flex; align-items: center; height: 100vh; flex-direction: column;">
    <div style="text-align:center; background-color: #f0f0f0; width: 50%; padding: 20px; border-radius: 5px;">
        <h1>Input Nilai Mahasiswa</h1>
        <a href="../../pertemuan-8/tugas-1/index.php">Isi Nilai mahasiswa</a>
    </div>

</body>
</html>