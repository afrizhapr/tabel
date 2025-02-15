<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">My App</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="pasien.php" class="nav-link" aria-current="page">Pasien</a>
                            <a href="dokter.php" class="nav-link" aria-current="page">Dokter</a>
                            <a href="pasien 2.php" class="nav-link" aria-current="page">Kunjungan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row mt-3">
            <div class="col-sm">
                <h3>Tabel Kunjungan</h3>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="tambahpasien.php" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah Data</a>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <table class="table table-striped table-hover table-sm">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Dokter</th>
                            <th>Nama Dokter</th>
                            <th>Spesialis</th>
                            <th>Notlp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'konek.php';
                        $no = 1;
                        $hasil = $koneksi->query("SELECT * FROM pasien");
                        
                        while ($row = $hasil->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['idPasien']; ?></td>
                                <td><?= $row['nmPasien']; ?></td>
                                <td><?= $row['jk']; ?></td>
                                <td><?= $row['alamat']; ?></td>
                                <td>
                                    <a href="editpasien 2.php?edit=<?= $row['idpasien']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="konek.php?idpasien=<?= $row['idpasien']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-udvm5/1NqAtPBq5wz4E/TbNPm/R7PhG5P4ZS8wJS0Z+2Zxuy0ftP9s2i7t7RyTu"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-CTJC88zBhvqb+NJoTtPmOXG0lHN27s+znqXdAyOETk2krMd0FfqB1zxzhHcXmGqR"
        crossorigin="anonymous"></script>
        
</body>
</html>
