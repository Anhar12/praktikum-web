<?php

require 'koneksi.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE from mahasiswa where id = $id");

if($result){
    echo "
        <script>
            alert('Berhasil menghapus data');
            document.location.href = 'lihat_data.php';
            </script>
            ";
        }else{
            echo "
        <script>
            alert('Gagal menghapus data');
            document.location.href = 'lihat_data.php';
        </script>
    ";
}