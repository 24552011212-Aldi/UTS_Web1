<?php
$pageTitle = "Informasi Perusahaan";
session_start(); 
include 'api/koneksi.php';

$sql = "SELECT id, Judul, konten, tanggal_publikasi FROM informasi ORDER BY tanggal_publikasi DESC";
$result = $koneksi->query($sql);

$informasiList = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $informasiList[] = $row;
    }
} else {
    
    $error_message = "Tidak ada informasi atau berita yang tersedia saat ini.";
}

include 'includes/header.php';
?>

<div class="container my-5">

    <section id="featured" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Event & Informasi Unggulan</h2>
                <p class="text-muted">Beberapa informasi terbaru dan event yang paling banyak dicari saat ini.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body">
                            <span class="badge bg-danger mb-2">HOT</span>
                            <h5 class="card-title fw-bold">Rapat Strategi Q4 2025</h5>
                            <p class="card-text text-muted small"><i class="fas fa-calendar-alt me-1"></i> 20 Nov 2025</p>
                            <p class="card-text">Diskusi mendalam mengenai target operasional kuartal terakhir dan penyesuaian anggaran.</p>
                            <a href="detail.php?id=9" class="btn btn-sm btn-outline-primary">Lihat Detail <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body">
                            <span class="badge bg-info mb-2">Corporate</span>
                            <h5 class="card-title fw-bold">Panduan Pengajuan Cuti Baru</h5>
                            <p class="card-text text-muted small"><i class="fas fa-file-alt me-1"></i> HRD</p>
                            <p class="card-text">Dokumen resmi yang mengatur prosedur dan persyaratan pengajuan cuti tahunan dan sakit.</p>
                            <a href="detail.php?id=10" class="btn btn-sm btn-outline-primary">Lihat Detail <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body">
                            <span class="badge bg-warning mb-2">Announcement</span>
                            <h5 class="card-title fw-bold">Update Keamanan Sistem</h5>
                            <p class="card-text text-muted small"><i class="fas fa-lock me-1"></i> IT Dept</p>
                            <p class="card-text">Pemberitahuan penting tentang pembaruan keamanan server dan perubahan kata sandi wajib.</p>
                            <a href="detail.php?id=11" class="btn btn-sm btn-outline-primary">Lihat Detail <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <h1 class="mb-5 text-center fw-bold text-primary  mt-5">Informasi dan Event Terbaru</h1>
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
                                <?= htmlspecialchars($info['Judul']);
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