<?php
// #mendefinisikan alamat untuk menghubungkan ke database
// nama host
$host = "localhost";
// nama database
$db = "Data_mahasiswa";
// nama user
$user = "root";
// password user
$pass = "";
// mengkoneksikan data
$koneksi = mysqli_connect($host, $user, $pass, $db);
// type koneksi
mysqli_set_charset($koneksi, "utf8");
// jika gagal mengkoneksikan maka akan menampilkan data error
if (!$koneksi) {
    die("Connection Failed: " . mysqli_connect_error());
}