<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <div class="container">
        <div class="side-bar">
            <img src="logo.png" alt="">
            <h2>Menu</h2>
            <ul>
                <li id="btn-home">
                    <p>Home</p>
                </li>
                <li id="btn-input">
                    <p>Input Data</p>
                </li>
                <li id="btn-about">
                    <p>About</p>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="wrraper-content">
                <!-- data mahasiswa -->
                <div class="tabel-mahasiswa">
                    <h1>Data Mahasiswa</h1><hr>
                    <p style="width:700px;padding-bottom:20px;font-size:12px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit tenetur non provident repellendus nam asperiores quo vitae ducimus et doloribus. Voluptatibus reiciendis, placeat perspiciatis quod quis cum. Laboriosam, magnam! Magnam!</p>
                    <table>
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Proses</th>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';

                            $query = "SELECT * FROM tabel_mahasiswa";
                            $result = mysqli_query($koneksi, $query);
                            $cek = mysqli_num_rows($result);
                            if ($cek > 0) {
                                $no = 1;
                                while ($row = mysqli_fetch_array($result)) {
                                    $nama = $row['nama'];
                                    $nim = $row['nim'];
                                    $tgl_lahir = $row['tgl_lahir'];
                                    $alamat = $row['alamat'];
                                ?>
                                <td><?= $no ?></td>
                                <td><?= $nama ?></td>
                                <td><?= $nim ?></td>
                                <td><?= $tgl_lahir ?></td>
                                <td><?= $alamat ?></td>
                                <td>
                                    <a href="form_update.php?nim=<?= $nim ?>" class="btn">Edit</a>
                                    <a href="delete.php?nim=<?= $nim ?>" class="btn">Delete</a>
                                </td>
                                <?php $no++; } ?>
                            
                            <?php }else{ ?>
                                <td colspan="6"> <center>Data Kosong !!</center> </td>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>

                <!-- form input -->
                <div class="form-input">
                    <h1>Form Input Data</h1>
                    <form action="input_data.php" method="POST">
                        <h3>Nama</h3>
                        <input type="text" name="nama" value="">
                        <h3>Nim</h3>
                        <input type="text" name="nim" value="">
                        <h3>Tanggal Lahir</h3>
                        <input type="text" name="tgl_lahir" value="">
                        <h3>Alamat</h3>
                        <input type="text" name="alamat" value="">
                        <button>SEND</button>
                    </form>
                </div>

                <!-- About -->
                <div class="about">
                    <table>
                        <h1>Di Buat Oleh</h1>
                        <tr>
                            <td>
                                <h2>Nama</h2>
                            </td>
                            <td><h2>:</h2></td>
                            <td>
                                <h2>Baiq Sofiyana Hayat</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>Nim</h2>
                            </td>
                            <td><h2>:</h2></td>
                            <td>
                                <h2>20206787</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>Mata Kuliah</h2>
                            </td>
                            <td><h2>:</h2></td>
                            <td>
                                <h2>Website</h2>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Ambil element content
        const tabelMahasiswa = document.querySelector('.tabel-mahasiswa');
        const formInput = document.querySelector('.form-input');
        const about = document.querySelector('.about');

        // Ambil btn side menu
        const btnHome= document.getElementById('btn-home');
        const btnInput = document.getElementById('btn-input');
        const btnAbout = document.getElementById('btn-about');

        // Funcliton click
        btnHome.addEventListener('click', function() {
            tabelMahasiswa.style.display = 'block';
            tabelMahasiswa.style.animation = 'fade-up 1s forwards';
            formInput.style.display = 'none'
            about.style.display = 'none';
        });
        btnInput.addEventListener('click', function() {
            tabelMahasiswa.style.display = 'none';
            formInput.style.display = 'block'
            formInput.style.animation = 'fade-up 1s forwards';
            about.style.display = 'none';
        });
        btnAbout.addEventListener('click', function() {
            tabelMahasiswa.style.display = 'none';
            formInput.style.display = 'none'
            about.style.display = 'block';
            about.style.animation = 'fade-up 1s forwards';
        });
    </script>

</body>
</html>