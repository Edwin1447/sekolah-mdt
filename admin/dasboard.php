<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, arahkan ke halaman login
    header("Location: daftar.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard Calon Siswa</title>
  <link rel="stylesheet" href="/static/dashboard.css" />
</head>
<body>
  <div class="container">
    <h1>Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <div class="menu">
      <a href="/index.html" class="btn">Beranda</a>
      <a href="#form-biodata" class="btn">Kirim Biodata</a>
    </div>

    <form id="form-biodata" action="proses_biodata.php" method="POST" class="form-biodata">
      <h2>Formulir Biodata Calon Siswa</h2>

      <label for="nama">Nama Lengkap</label>
      <input type="text" id="nama" name="nama" required />

      <label for="tempat_lahir">Tempat Lahir</label>
      <input type="text" id="tempat_lahir" name="tempat_lahir" required />

      <label for="tanggal_lahir">Tanggal Lahir</label>
      <input type="date" id="tanggal_lahir" name="tanggal_lahir" required />

      <label for="alamat">Alamat</label>
      <textarea id="alamat" name="alamat" rows="3" required></textarea>

      <label for="sekolah_asal">Sekolah Asal</label>
      <input type="text" id="sekolah_asal" name="sekolah_asal" required />

      <label for="no_hp">No. HP</label>
      <input type="tel" id="no_hp" name="no_hp" required />

      <button type="submit" class="btn-kirim">Kirim Biodata</button>
    </form>
  </div>
</body>
</html>
