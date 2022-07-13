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
                <li>
                    <p><a href="index.php" style="text-decoration: none;color: white;">Home</a></p>
                </li>
                <li id="btn-update">
                    <p>Update Data</p>
                </li>
                <li id="btn-about">
                    <p>About</p>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="wrraper-content">
                <?php 
                include 'koneksi.php';

                $id = $_GET['nim'];
                $query = "SELECT * FROM tabel_mahasiswa WHERE nim = ". $id ."";
                $result = mysqli_query($koneksi, $query);
                while ($row = mysqli_fetch_array($result)) {
                    $nama = $row['nama'];
                    $nim = $row['nim'];
                    $tgl_lahir = $row['tgl_lahir'];
                    $alamat = $row['alamat'];
                ?>

                <!-- form update -->
                <div class="form-update">
                    <h1>Form Update Data</h1>
                    <form action="update_data.php" method="POST">
                        <h3>Nama</h3>
                        <input type="text" name="nama" value="<?= $nama ?>">
                        <h3>Nim</h3>
                        <input type="text" name="nim" value="<?= $nim ?>">
                        <h3>Tanggal Lahir</h3>
                        <input type="text" name="tgl_lahir" value="<?= $tgl_lahir ?>">
                        <h3>Alamat</h3>
                        <input type="text" name="alamat" value="<?= $alamat ?>">
                        <button>SEND</button>
                    </form>
                </div>

                <?php } ?>

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
        const formUpdate = document.querySelector('.form-update');
        const about = document.querySelector('.about');

        // Ambil btn side menu
        const btnUpdate = document.getElementById('btn-update');
        const btnAbout = document.getElementById('btn-about');

        // Funcliton click
        btnUpdate.addEventListener('click', function() {
            formUpdate.style.display = 'block'
            formUpdate.style.animation = 'fade-up 1s forwards';
            about.style.display = 'none';
        });
        btnAbout.addEventListener('click', function() {
            formUpdate.style.display = 'none'
            about.style.display = 'block';
            about.style.animation = 'fade-up 1s forwards';
        });
    </script>

</body>
</html>