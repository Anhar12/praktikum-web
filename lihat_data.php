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
    <?php $lihat = true; require 'templates/nav.php'?>

    <main class="data-mahasiswa-section">

      <h1 class="data-mahasiswa-title">
        Data Mahasiswa Universitas Mulawarman
      </h1>

      <search>
        <form action="" class="search-bar-mahasiswa">
          <input type="text" placeholder="Cari nama atau NIM di sini" class="search-input-mahasiswa" />
          <button type="submit" class="search-button-mahasiswa">
            <i class="fa-solid fa-magnifying-glass fa-xl"></i>
          </button>
        </form>
      </search>

      <table class="table-mahasiswa">
        <thead>
          <tr class="table-mahasiswa-row">
            <th class="table-mahasiswa-header">No</th>
            <th class="table-mahasiswa-header">Foto</th>
            <th class="table-mahasiswa-header">Nama</th>
            <th class="table-mahasiswa-header">NIM</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-mahasiswa-row">
            <td class="table-mahasiswa-data">1</td>
            <td class="table-mahasiswa-data">Ini foto</td>
            <td class="table-mahasiswa-data">Muhammad Farrel Sirah</td>
            <td class="table-mahasiswa-data">2209106138</td>
          </tr>
          <tr class="table-mahasiswa-row">
            <td class="table-mahasiswa-data">2</td>
            <td class="table-mahasiswa-data">Ini foto</td>
            <td class="table-mahasiswa-data">Miftahul Huda</td>
            <td class="table-mahasiswa-data">2209106098</td>
          </tr>
          <tr class="table-mahasiswa-row">
            <td class="table-mahasiswa-data">3</td>
            <td class="table-mahasiswa-data">Ini foto</td>
            <td class="table-mahasiswa-data">Ahmad Dhafin</td>
            <td class="table-mahasiswa-data">2209106169</td>
          </tr>
          <tr class="table-mahasiswa-row">
            <td class="table-mahasiswa-data">4</td>
            <td class="table-mahasiswa-data">Ini foto</td>
            <td class="table-mahasiswa-data">Fiko Anugrah Ramdani</td>
            <td class="table-mahasiswa-data">2209106313</td>
          </tr>
        </tbody>
      </table>
    </main>

    <?php include 'templates/footer.php' ?>
    <script src="scripts/script.js"></script>
  </body>
</html>
