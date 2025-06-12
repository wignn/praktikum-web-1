<?php
   include 'koneksi_db.php'; // Pastikan $conn = new mysqli(...)

   if (isset($_GET['id']) && is_numeric($_GET['id'])) {
       $id = $_GET['id'];


       // Siapkan query DELETE dengan prepared statement
       $stmt = $conn->prepare("DELETE FROM Buku WHERE ID = ?");
       $stmt->bind_param("i", $id);


       if ($stmt->execute()) {
           echo "<script>alert('Data berhasil dihapus'); window.location='index.php';</script>";
       } else {
           echo "<script>alert('Gagal menghapus data: " . addslashes($stmt->error) . "'); window.location='index.php';</script>";
       }

       // Tutup statement
       $stmt->close();
   } else {
       echo "<script> </script>";
   }


   // Tutup koneksi
   $conn->close();
