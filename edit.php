<?php 
    require 'koneksi.php';

    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * from mahasiswa where id = '$id'");
    
    $mahasiswa = [];

    while($row = mysqli_fetch_assoc($result)){
        $mahasiswa[] = $row;
    }

    $mahasiswa = $mahasiswa[0];

    if(isset($_POST['update'])){
        $NIM = $_POST['NIM'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $prodi = $_POST['prodi'];

        $query = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', kelas = '$kelas', prodi = '$prodi' where id = '$id'";

        $result = mysqli_query($conn, $query);
        
        if($result){
            echo "
                <script>
                    alert('Berhasil Update data');
                    document.location.href = 'lihat_data.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Gagal Update data');
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
            <input type="text" name="NIM" id="NIM" value="<?php echo $mahasiswa['nim']; ?>">
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="<?php echo $mahasiswa['nama']; ?>">
        </div>

        <div class="form-group">
            <label for="kelas">Kelas</label>
            <div class="input-radio">
                <input type="radio" name="kelas" id="A" value="A" <?php if($mahasiswa['kelas'] == "A" ) echo 'checked'; ?>>
                <label for="A">A</label>

                <input type="radio" name="kelas" id="B" value="B" <?php if($mahasiswa['kelas'] == "B" ) echo 'checked'; ?>>
                <label for="B">B</label>

                <input type="radio" name="kelas" id="C" value="C" <?php if($mahasiswa['kelas'] == "C" ) echo 'checked'; ?>>
                <label for="C">C</label>
            </div>
        </div>

        <div class="form-group">
            <label for="prodi">Program Studi</label>
            <select name="prodi" id="prodi">
                <!-- <option value="<?php echo $mahasiswa['prodi'] ?>" 
                selected>  </option> -->
                <option value="Informatika" <?php if ($mahasiswa['prodi'] == 'Informatika') echo 'selected' ?>>Informatika</option>
                <option value="Sistem Informasi" <?php if ($mahasiswa['prodi'] == 'Sistem Informasi') echo 'selected' ?>>Sistem Informasi</option>
                <option value="Teknik Industri" <?php if ($mahasiswa['prodi'] == 'Teknik Industri') echo 'selected' ?>>Teknik Industri</option>
                <option value="Teknik Elektro" <?php if ($mahasiswa['prodi'] == 'Teknik Elektro') echo 'selected' ?>>Teknik Elektro</option>
            </select>
        </div>

        <input type="submit" value="Update" name="update" class="button">
      </form>
    </main>

    <?php include 'templates/footer.php' ?>
    <script src="scripts/script.js"></script>
  </body>
</html>
