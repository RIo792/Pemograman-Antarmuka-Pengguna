
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Mahasiswa</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <?php include 'navbar.php'; ?>

    <main class="container py-4">
        <?php include 'variabel.php'; ?>

        <div class="p-4 mb-4 bg-light rounded">
            <h2>Selamat Datang</h2>
        </div>

        <h3 id="menu">Daftar Menu</h3>

        <ul class="list-group mb-4">
            <?php
            foreach ($menu as $item) {
                echo "<li class='list-group-item'>$item</li>";
            }
            ?>
        </ul>

        <h3 id="profil">Profil Mahasiswa</h3>

        <div class="card">
            <div class="card-body">
                <p>Nama: <?php echo $mahasiswa["nama"]; ?></p>
                <p>NIM: <?php echo $mahasiswa["nim"]; ?></p>
                <p>Program Studi: Sistem Informasi</p>
            </div>
        </div>

        <h3 class="mt-4">Informasi Pengunjung</h3>

        <p>Nama mahasiswa: <?php echo $nama; ?></p>
        <p>Umur: <?php echo $umur; ?> tahun</p>
        <p>Tanggal akses: <?php echo date("d-m-Y"); ?></p>
        <p>Waktu akses: <?php echo date("H:i:s"); ?></p>

        <!-- Kontak -->
        <h3 id="kontak" class="mt-4">Kontak</h3>

        <div class="card mb-4">
             <div class="card-body">
                <p>Email: rio.825250022@stu.untar.ac.id</p>
                <p>Telepon: 082283912928</p>
                <p>Alamat: Jakarta, Indonesia</p>
        </div>
    </div>
</main>

    <?php include 'footer.php'; ?>

</body>
</html>
