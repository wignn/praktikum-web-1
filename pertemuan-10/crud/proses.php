<?php 
include 'connect.php';

if(isset($_POST['submit'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $ukt = $_POST['ukt'];

    $query = "INSERT INTO mahasiswa (NPM, Nama, Prodi, Semester, Ukt) VALUES ('$npm', '$nama', '$prodi', '$semester', '$ukt')";
    
    if (mysqli_query($db, $query)) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . mysqli_error($db);
    }
}
?>