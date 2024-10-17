<?php

require 'koneksi.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * from mahasiswa where id = '$id'");
$mahasiswa = [];
while ($row = mysqli_fetch_assoc($result)) {
    $mahasiswa[] = $row;
}
$mahasiswa = $mahasiswa[0];

$result = mysqli_query($conn, "DELETE from mahasiswa where id = $id");
if ($result) {
    if (is_file('assets/'.$mahasiswa['foto'])){
        unlink('assets/'.$mahasiswa['foto']);
    }

    echo "
        <script>
            alert('Berhasil menghapus data');
            document.location.href = 'lihat_data.php';
            </script>
            ";
} else {
    echo "
        <script>
            alert('Gagal menghapus data');
            document.location.href = 'lihat_data.php';
        </script>
    ";
}
