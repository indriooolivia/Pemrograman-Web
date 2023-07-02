<?php
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>e-libra</title>
</head>

<body>
    <?php include 'header.php' ?>

    <section class="hero">
        <div class="hero-content">
            <h1>Selamat Datang di E-Libra</h1>
            <p>Mari Membaca Buku di Perpustakaan Kami</p>
            <a href="index.php#about" class="btn">Learn More</a>
        </div>
    </section>

    <section id="about" class="about">
        <h2>About Us</h2>
        <div class="row">
            <div class="about-img">
                <img src="image/about.png" alt="about-img" />
            </div>
            <div class="content">
                <h3>Selamat datang di Perpustakaan Online Kami !</h3>
                <br>
                <p>
                    Tujuan utama kami adalah memenuhi kebutuhan literasi dan pengetahuan masyarakat dengan menyediakan
                    berbagai sumber daya yang kaya dan beragam. Dengan koleksi kami yang luas, kami ingin menginspirasi
                    dan mendorong semangat pembelajaran sepanjang hayat bagi semua anggota kami.
                    Mengapa memilih Perpustakaan Online Kami? Pertama-tama, kami memberikan kemudahan akses yang tidak
                    terbatas ke koleksi buku, majalah, jurnal, artikel, dan sumber daya digital lainnya. Anda dapat
                    mengaksesnya kapan saja dan di mana saja, hanya dengan beberapa klik. Tidak perlu repot pergi ke
                    perpustakaan fisik, karena kami membawa perpustakaan langsung ke perangkat Anda.
                </p>
            </div>
        </div>
    </section>

    <div class="container mt-5 h-100">
        <h2 id="services">Layanan Kami</h1>

            <div class="service">
                <img src="image/bg.jpg" alt="Akses Koleksi Digital">
                <div class="service-content">
                    <h3>Akses Koleksi Digital yang Luas</h3>
                    <p>Kami menawarkan akses tak terbatas ke koleksi digital kami yang luas, termasuk buku, majalah,
                        jurnal,
                        artikel, dan banyak lagi.</p>
                </div>
            </div>

            <div class="service">
                <img src="image/bg.jpg" alt="Akses Koleksi Digital">
                <div class="service-content">
                    <h3>Akses Koleksi Digital yang Luas</h3>
                    <p>Kami menawarkan akses tak terbatas ke koleksi digital kami yang luas, termasuk buku, majalah,
                        jurnal,
                        artikel, dan banyak lagi.</p>
                </div>
            </div>

            <div class="service">
                <img src="image/bg.jpg" alt="Akses Koleksi Digital">
                <div class="service-content">
                    <h3>Akses Koleksi Digital yang Luas</h3>
                    <p>Kami menawarkan akses tak terbatas ke koleksi digital kami yang luas, termasuk buku, majalah,
                        jurnal,
                        artikel, dan banyak lagi.</p>
                </div>
            </div>

            <div class="service">
                <img src="image/bg.jpg" alt="Akses Koleksi Digital">
                <div class="service-content">
                    <h3>Akses Koleksi Digital yang Luas</h3>
                    <p>Kami menawarkan akses tak terbatas ke koleksi digital kami yang luas, termasuk buku, majalah,
                        jurnal,
                        artikel, dan banyak lagi.</p>
                </div>
            </div>
    </div>

    <div class="container mt-5 h-100">
        <h2 id="buku">Daftar Buku Kami</h2>
    <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Penerbit</th>
                </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM `buku`";
            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $id; ?>
                        </td>
                        <td>
                            <?php echo $row['judul']; ?>
                        </td>
                        <td>
                            <?php echo $row['pengarang']; ?>
                        </td>
                        <td>
                            <?php echo $row['tahun_terbit']; ?>
                        </td>
                        <td>
                            <?php echo $row['penerbit']; ?>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h4>About Us</h4>
                    <p>
                        E-Libra platform digital yang menyediakan akses ke koleksi buku
                    </p>
                </div>
                <div class="footer-column">
                    <h4>Hubungi Kami</h4>
                    <p>Email: info@e-libra.com</p>
                    <p>Telepon: 123-456-7890</p>
                </div>
                <div class="footer-column">
                    <h4>Ikuti Kami</h4>
                    <ul class="social-media">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <p class="footer-text">© 2023 E-Libra. All rights reserved.</p>
        </div>
    </footer>


</body>

</html>