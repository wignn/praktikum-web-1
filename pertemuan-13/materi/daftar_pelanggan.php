<?php include 'proses_get_pelanggan.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Daftar Pelanggan</title>
</head>
<body>
   <?php include 'nav.php'; ?>
   <div class="container mt-4">
       <h2>Daftar Pelanggan          </h2>


       <!-- Form Pencarian -->
       <form method="get" class="row g-3 mb-4">
           <div class="col-md-5">
               <label for="nama" class="form-label">Cari Berdasarkan Nama</label>
               <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama pelanggan" value="<?php htmlspecialchars($search_nama) ?>">
           </div>
           <div class="col-md-3">
               <label for="telepon" class="form-label">Cari Berdasarkan Telepon</label>
               <input type="number" class="form-control" id="telepon" name="telepon" placeholder="Masukkan nomer telepon" value="<?php htmlspecialchars($search_telepon) ?>">
           </div>
           <div class="col-md-2 align-self-end">
               <button type="submit" class="btn btn-primary">Cari</button>
           </div>
           <div class="col-md-2 align-self-end">
               <a href="index.php" class="btn btn-secondary">Reset</a>
           </div>
       </form>


       <!-- Tabel Daftar Buku -->
       <table class="table table-striped">
           <thead>
               <tr>
                   <th>ID</th>
                   <th>Nama</th>
                   <th>Email</th>
                   <th>Alamat</th>
                   <th>Telepon</th>
               </tr>
           </thead>
           <tbody>
               <?php while ($row = $result->fetch_assoc()): ?>
               <tr>
                   <td><?php echo $row['ID'] ?></td>
                   <td><?php echo htmlspecialchars($row['Nama']) ?></td>
                   <td><?php echo htmlspecialchars($row['Email']) ?></td>
                   <td><?php echo htmlspecialchars($row['Alamat']) ?></td>
                   <td><?php echo htmlspecialchars($row['Telepon']) ?></td>
                   <td>
                       <a href="edit_pelanggan.php?id=<?php echo $row['ID'] ?>" class="btn btn-sm btn-warning">Edit</a>
                       <a href="proses_hapus_pelanggan.php?id=<?php echo $row['ID'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                   </td>
               </tr>
               <?php endwhile; ?>
           </tbody>
       </table>
   </div>
</body>
</html>


<?php
       session_start();
       if (!isset($_SESSION['login_Un51k4'])) {
            header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dulu bro."));
           exit;
       }
   ?>