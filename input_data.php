<?php
include 'koneksi.php';

// ambil data dari post
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];

// query input data
$query = "INSERT INTO tabel_mahasiswa (nama, nim, tgl_lahir, alamat) VALUES ('". $nama ."', ". $nim .", '". $tgl_lahir ."', '". $alamat ."')";
$result = mysqli_query($koneksi, $query);
if ($result) {
    header("Location: index.php");
}else {
    echo "ERROR 404!!";
}


?>