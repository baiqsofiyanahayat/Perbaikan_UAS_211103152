<?php
include 'koneksi.php';

$nim = $_GET['nim'];

$query = "DELETE FROM tabel_mahasiswa WHERE nim = ". $nim ."";
$result = mysqli_query($koneksi, $query);
if ($result) {
    header("Location: index.php");
}else {
    echo "ERROR 404!!";
}

?>