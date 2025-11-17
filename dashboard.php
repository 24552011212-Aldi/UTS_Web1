<?php
$pageTitle = "Informasi Perusahaan";
session_start(); // Pastikan sesi dimulai untuk header dinamis

// Ganti jalur ini sesuai lokasi file koneksi Anda
include 'api/koneksi.php';

// 1. Tentukan query untuk mengambil SEMUA informasi
// Menggunakan kolom yang Anda miliki: id, Judul, konten, tanggal_publikasi
$sql = "SELECT id, Judul, konten, tanggal_publikasi FROM informasi ORDER BY tanggal_publikasi DESC";
$result = $koneksi->query($sql);

// Array untuk menyimpan hasil
$informasiList = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $informasiList[] = $row;
    }
} else {
    // Jika tidak ada data atau query gagal
    $error_message = "Tidak ada informasi atau berita yang tersedia saat ini.";
}

include 'includes/header.php';
?>

<div class="container my-5">
    <h1 class="mb-5 text-center fw-bold text-primary">Informasi dan Berita Terbaru Perusahaan</h1>

    <?php if (isset($error_message)): ?>
        <div class="alert alert-warning text-center">
            <?= $error_message ?>
        </div>
    <?php else: ?>

        <div class="row">

            <?php foreach ($informasiList as $info): ?>

                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg h-100">
                        <div class="card-body d-flex flex-column">

                            <h5 class="card-title fw-bold text-dark">
                                <?= htmlspecialchars($info['Judul']); // Menggunakan 'Judul' dengan J besar 
                                ?>
                            </h5>

                            <p class="card-text text-muted small flex-grow-1">
                                <?= htmlspecialchars(substr($info['konten'], 0, 100)) . '...'; ?>
                            </p>

                            <p class="small text-end mt-2 mb-3">
                                <i class="far fa-calendar-alt me-1"></i>
                                <?= date('d M Y', strtotime($info['tanggal_publikasi'])); ?>
                            </p>

                            <a href="detail.php?id=<?= $info['id']; ?>" class="btn btn-primary mt-auto">
                                Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    <?php endif; ?>

</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


<?php include 'includes/footer.php'; ?>