<?php
// Tiga baris ini akan menampilkan error PHP di browser
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// ...

session_start();
// PERHATIKAN JALUR INI: Pastikan 'api/koneksi.php' adalah jalur yang benar
include 'api/koneksi.php';

$itemId = $_GET['id'] ?? null;
$item = null;
$pageTitle = "Detail Informasi";

if ($itemId && is_numeric($itemId)) {
    // Sanitasi ID
    $safe_itemId = $koneksi->real_escape_string($itemId);

    // PERBAIKAN 1: Ambil kolom 'tujuan' (dan 'content_type' jika ada) dari database
    // Asumsi: Nama kolom Anda di database menggunakan 'T' besar. Jika tidak, ganti 'Judul', 'konten', dll.
    $sql = "SELECT *, tujuan FROM informasi WHERE id = '$safe_itemId'";
    $result = $koneksi->query($sql);

    if ($result && $result->num_rows > 0) {
        $item = $result->fetch_assoc();

        // Casing kolom: Dipertahankan 'Judul'
        $pageTitle = htmlspecialchars($item['Judul']);

        // Tambahkan content_type default jika tidak ada di DB, atau baca dari DB
        $item['content_type'] = $item['content_type'] ?? 'General';

        // Tambahkan tujuan default agar tidak error jika tidak ada di query/DB
        $item['tujuan'] = $item['tujuan'] ?? 'Tujuan tidak didefinisikan.';
    }
}
// Logika default/error jika $item === null
if ($item === null) {
    $item = [
        'Judul' => 'Informasi Tidak Ditemukan',
        'content_type' => 'Error',
        'konten' => 'Maaf, ID informasi yang Anda cari (ID: ' . htmlspecialchars($itemId ?? 'kosong') . ') tidak tersedia dalam database kami.',
        'tujuan' => 'Informasi ini tidak memiliki tujuan spesifik.' // Tambahkan tujuan default
    ];
}

// Definisikan variabel untuk digunakan di bagian HTML
$infoTitle = $item['Judul'];
$infoContent = $item['konten'];
$contentType = $item['content_type'] ?? 'General';
// Memuat Header
include 'includes/header.php';
?>

<div class="container my-5">

    <div class="card shadow-lg p-md-5 p-3 border-0">
        <div class="card-body">

            <header class="mb-4 border-bottom pb-3">

                <?php
                // Mapping class untuk badge
                $badgeClass = match ($contentType) {
                    'Strategy' => 'bg-success',
                    'Corporate' => 'bg-info',
                    'Error' => 'bg-danger',
                    'Announcement' => 'bg-warning',
                    'Anniversary' => 'bg-primary',
                    default => 'bg-secondary',
                };
                ?>
                <span class="badge <?= $badgeClass; ?> mb-2"><?= htmlspecialchars($contentType); ?></span>

                <h1 class="display-5 fw-bold text-dark"><?= htmlspecialchars($infoTitle); ?></h1>

                <p class="text-muted small">
                    <i class="fas fa-calendar-alt me-1"></i> Dipublikasikan: <?= $item['tanggal'] ?? date('d M Y'); ?>
                    <span class="mx-2">|</span>
                    <i class="fas fa-user-edit me-1"></i> Oleh: Admin
                </p>

            </header>

            <div class="content-body pt-3">
                <p class="lead mb-4">
                    <?= nl2br(htmlspecialchars($infoContent)); ?>
                </p>

                <?php
                
                if ($contentType !== 'Error'):
                ?>
                    <div class="alert alert-light border-start border-4 border-primary p-3 mt-5 shadow-sm" role="alert">
                        <h4 class="alert-heading fs-5 text-primary">
                            <i class="fas fa-bullseye me-2"></i> <?= htmlspecialchars($item['tujuan'] ?? 'Tujuan belum diset.'); ?>
                        </h4>
                        <hr>
                        <p class="mb-0">
                            Informasi ini merupakan bagian integral dari panduan operasional. Kami berkomitmen pada transparansi dan pencapaian target.
                        </p>
                    </div>
                <?php endif; ?>

                <div class="mt-5 pt-3 border-top">
                    <a href="index.php" class="btn btn-primary">
                        <i class="fas fa-arrow-left me-1"></i> Kembali ke Beranda
                    </a>
                </div>
            </div>

        </div>
    </div>

</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<?php include 'includes/footer.php'; ?>