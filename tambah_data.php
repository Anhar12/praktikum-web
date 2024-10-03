<?php 
    require 'koneksi.php';

    if(isset($_POST['tambah'])){
        $NIM = $_POST['NIM'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $prodi = $_POST['prodi'];

        $query = "INSERT INTO mahasiswa VALUES('', '$nama', '$NIM', '$kelas', '$prodi', '')";

        $result = mysqli_query($conn, $query);

        if($result){
            echo "
                <script>
                    alert('Berhasil menambah data');
                    document.location.href = 'lihat_data.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Gagal menambah data');
                </script>
            ";
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
    <?php $lihat = true; require 'templates/nav.php'?>

    <main class="data-mahasiswa-section">
      <h1 class="data-mahasiswa-title">
        Tambah Data Mahasiswa Universitas Mulawarman
      </h1>

      <form class="form" action="" method="post" autocomplete="off">
        <div class="form-group">
            <label for="NIM">NIM</label>
            <input type="text" name="NIM" id="NIM">
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
        </div>

        <div class="form-group">
            <label for="kelas">Kelas</label>
            <div class="input-radio">
                <input type="radio" name="kelas" id="A" value="A">
                <label for="A">A</label>

                <input type="radio" name="kelas" id="B" value="B">
                <label for="B">B</label>

                <input type="radio" name="kelas" id="C" value="C">
                <label for="C">C</label>
            </div>
        </div>

        <div class="form-group">
            <label for="prodi">Program Studi</label>
            <select name="prodi" id="prodi">
                <option value="Informatika">Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
            </select>
        </div>

        <input type="submit" value="Tambah" name="tambah" class="button">
      </form>
    </main>

    <?php include 'templates/footer.php' ?>
    <script src="scripts/script.js"></script>
  </body>
</html>
