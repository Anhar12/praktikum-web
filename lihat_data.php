<?php
if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
}

if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
  header('Location: login.php');
  exit;
}

require 'koneksi.php';

$sql = mysqli_query($conn, "SELECT * FROM mahasiswa");

$mahasiswa = [];

if (isset($_GET['search'])) {
  $search = $_GET['search'];
  $sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nama LIKE '%$search%' OR nim LIKE '%$search%'");
  while ($row = mysqli_fetch_assoc($sql)) {
    $mahasiswa[] = $row;
  }
} else {
  while ($row = mysqli_fetch_assoc($sql)) {
    $mahasiswa[] = $row;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tentang Kami | Pendataan Mahasiswa Unversitas Mulawarman</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="styles/base.css" />

  <link rel="stylesheet" href="styles/home.css" />
</head>

<body>
  <?php $lihat = true;
  require 'templates/nav.php' ?>

  <main class="data-mahasiswa-section">

    <h1 class="data-mahasiswa-title">
      Data Mahasiswa Universitas Mulawarman
    </h1>

    <search>
      <form action="" method="GET" class="search-bar-mahasiswa">
        <input type="text" name="search" placeholder="Cari nama atau NIM di sini"
          class="search-input-mahasiswa" />
        <button type="submit" class="search-button-mahasiswa">
          <i class="fa-solid fa-magnifying-glass fa-xl"></i>
        </button>
      </form>
    </search>

    <?php echo (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') ?
      '<div style="width: 100%; margin-top: 30px;">
        <a href="tambah_data.php" class="button">
          <i class="fa-solid fa-plus"></i>
          Tambah Mahasiswa
        </a>
      </div>'
      :
      ''
    ?>

    <table class="table-mahasiswa">
      <thead>
        <tr class="table-mahasiswa-row" style="color:white;">
          <th class="table-mahasiswa-header">No</th>
          <th class="table-mahasiswa-header">Foto</th>
          <th class="table-mahasiswa-header">Nama</th>
          <th class="table-mahasiswa-header">NIM</th>
          <th class="table-mahasiswa-header">Kelas</th>
          <th class="table-mahasiswa-header">Prodi</th>
          <th class="table-mahasiswa-header">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1;
        foreach ($mahasiswa as $mhs): ?>
          <tr class="table-mahasiswa-row">
            <td class="table-mahasiswa-data"><?php echo $i ?></td>
            <td class="table-mahasiswa-data">
              <img src="assets/<?php echo $mhs['foto'] ?>" width="100px">
            </td>
            <td class="table-mahasiswa-data"><?php echo $mhs['nama'] ?></td>
            <td class="table-mahasiswa-data"><?php echo $mhs['nim'] ?></td>
            <td class="table-mahasiswa-data"><?php echo $mhs['kelas'] ?></td>
            <td class="table-mahasiswa-data"><?php echo $mhs['prodi'] ?></td>
            <td class="table-mahasiswa-data">
              <a href="edit.php?id=<?php echo $mhs['id'] ?>" style="color:orange;">
                <i class="fas fa-pen"></i>
              </a>
              <a href="delete.php?id=<?php echo $mhs['id'] ?>" style="color: red;">
                <i class="fas fa-trash-can"></i>
              </a>
            </td>
          </tr>
        <?php $i++;
        endforeach ?>
      </tbody>
    </table>
  </main>
  <script src="scripts/script.js"></script>
</body>

</html>