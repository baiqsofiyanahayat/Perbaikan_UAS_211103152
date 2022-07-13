<?php
include 'koneksi.php';

// ambil data dari post
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];

// query input data
$query = "UPDATE tabel_mahasiswa SET nama = '". $nama ."', nim = ". $nim .", tgl_lahir = '". $tgl_lahir ."', alamat = '". $alamat ."'";
$result = mysqli_query($koneksi, $query);
if ($result) {
    header("Location: index.php");
}else {
    echo "ERROR 404!!";
}


?>