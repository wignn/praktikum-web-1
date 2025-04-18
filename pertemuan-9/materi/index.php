

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


class mahasiswa {
    public $nama;

    public function sapa(){
        return "hallo saya. $this->nama";
    }
}

$mhs = new mahasiswa();
$mhs->nama = "jenifer";

echo $mhs->sapa();
?>
