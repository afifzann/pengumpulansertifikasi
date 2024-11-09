<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hitung Angsuran Kredit Mobil</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Atur tinggi slider agar lebih kecil */
        .custom-carousel .carousel-inner img {
            height: 200px;
            /* Ubah sesuai kebutuhan */
            object-fit: cover;
            margin-bottom: 20px;
        }

        /* Atur teks dan ukuran font agar lebih sesuai */
        .custom-carousel .carousel-caption h5 {
            font-size: 1.25rem;
        }

        .custom-carousel .carousel-caption p {
            font-size: 1rem;
        }
    </style>

</head>

<body>

    <?php include 'navbar.php'; ?>

    <div class="container my-5">
        <!-- Logo -->
        <div class="text-center mb-4">
            <img src="/img/logo.png" alt="Logo" style="width: 80px; height: auto;">
            <h2 class="fw-bold mt-3">KreditMobilku</h2>
        </div>
        <!-- Logo -->

        <!-- Images slide -->
        <div id="carouselExample" class="carousel slide custom-carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/Porsche.jpg" class="d-block w-100" alt="Mobil 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Segera Miliki Mobil Impian Anda</h5>
                        <p>Cicilan fleksibel dengan bunga rendah 20%!</p>
                    </div>
                </div>
            </div>
         <!-- Images slide -->

         <!-- isi Form -->
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="fw-bold mb-3">Perhitungan Kredit Mobil</h3>
                    <form method="post" action="<?= base_url('kredit/hitung'); ?>" class="p-4 border rounded shadow-sm">
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga Mobil</label>
                            <input type="number" name="harga" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="dp" class="form-label">DP (%)</label>
                            <input type="number" name="dp" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="tenor" class="form-label">Tenor (Tahun)</label>
                            <input type="number" name="tenor" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Hitung</button>
                    </form>
                </div>
         <!-- isi Form -->

         <!-- ini bagian hasi -->
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <h4 class="fw-bold mb-3">Hasil Perhitungan</h4>
                    <?php if (isset($hasil)): ?>
                        <div class="p-4 border rounded shadow-sm">
                            <ul class="list-unstyled">
                                <li><strong>Harga Mobil:</strong> Rp. <?= number_format($hasil['harga'], 0, ',', '.') ?></li>
                                <li><strong>DP:</strong> <?= $hasil['dp'] ?>% (Rp. <?= number_format($hasil['dp_nominal'], 0, ',', '.') ?>)</li>
                                <li><strong>Tenor:</strong> <?= $hasil['tenor'] ?> Tahun (<?= $hasil['tenor_bulan'] ?> Bulan)</li>
                                <li><strong>Bunga:</strong> 20%</li>
                                <li class="mt-3"><strong>Jumlah Angsuran per Bulan:</strong> Rp. <?= number_format($hasil['angsuran'], 0, ',', '.') ?></li>
                            </ul>
                        </div>
                    <?php else: ?>
                        <div class="p-5 bg-light text-center rounded-3">
                            <p class="text-muted">Isi form di sebelah kiri untuk melihat perhitungan angsuran.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
         <!-- ini bagian hasi -->

         <!-- ini bagian footer -->
        <?php include 'footer.php'; ?>
         <!-- ini bagian footer -->

</body>

</html>