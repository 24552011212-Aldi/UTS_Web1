<?php
include 'includes/header.php';
?>

<style>
    .hero-section {
        color: #111111ff;
        padding: 100px 0;
        min-height: 80vh;
        display: flex;
        align-items: center;
    }

    .icon-feature {
        font-size: 2.5rem;
        color: #0d6efd;
    }

    .testimonial-box {
        background: #fff;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

</style>
</head>

<body>

    <header class="hero-section">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-3">Temukan dan Kelola Acara Terbaikmu</h1>
            <p class="lead mb-5">NgeEvent adalah platform terdepan untuk informasi dan panduan operasional acara, memastikan setiap *event* mencapai tujuan strategisnya.</p>
            <a href="dashboard.php" class="btn btn-primary btn-lg me-3">Jelajahi Informasi Terbaru</a>
            <a href="#featured" class="btn btn-outline-dark btn-lg">Lihat Event Unggulan</a>
        </div>
    </header>


    <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Mengapa Memilih NgeEvent?</h2>
                <p class="text-muted">Kami berkomitmen pada transparansi dan pencapaian tujuan strategis di setiap informasi yang kami sajikan.</p>
            </div>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <i class="fas fa-bullseye icon-feature mb-3"></i>
                    <h5 class="fw-bold">Tujuan yang Jelas</h5>
                    <p>Setiap panduan dan informasi memiliki tujuan operasional yang terdefinisi dengan baik.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="fas fa-lightbulb icon-feature mb-3"></i>
                    <h5 class="fw-bold">Informasi Strategis</h5>
                    <p>Akses ke konten yang dikategorikan berdasarkan strategi, korporat, dan pengumuman umum.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="fas fa-search-dollar icon-feature mb-3"></i>
                    <h5 class="fw-bold">Transparansi Penuh</h5>
                    <p>Kami menyajikan data dan *insight* yang Anda butuhkan untuk membuat keputusan yang tepat.</p>
                </div>
            </div>
        </div>
    </section>

    <hr class="my-0">

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

            <div class="text-center mt-5">
                <a href="dashboard.php" class="btn btn-primary btn-lg">Lihat Semua Informasi <i class="fas fa-list-alt ms-2"></i></a>
            </div>
        </div>
    </section>

    <hr class="my-0">

    <section class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold mb-5">Apa Kata Pengguna Kami?</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="testimonial-box">
                        <i class="fas fa-quote-left fs-3 text-primary mb-3"></i>
                        <p class="lead fst-italic">"NgeEvent benar-benar mengubah cara tim kami mengakses dan memahami tujuan operasional. Semuanya terpusat dan mudah ditemukan. Efisiensi kerja meningkat drastis!"</p>
                        <h6 class="fw-bold mt-4 mb-0">- pak Lorem, Manajer Proyek</h6>
                        <small class="text-muted">PT. Maju mundur</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Hubungi Kami</h2>
                <p class="text-muted">Punya pertanyaan? Kami siap membantu Anda.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6 text-center mb-4">
                            <i class="fas fa-envelope icon-feature mb-3"></i>
                            <h5 class="fw-bold">Email</h5>
                            <p>atmin@ngeevent.com</p>
                        </div>
                        <div class="col-md-6 text-center mb-4">
                            <i class="fas fa-phone-alt icon-feature mb-3"></i>
                            <h5 class="fw-bold">Telepon</h5>
                            <p>(+62) 8123-456-789</p>
                        </div>
                    </div>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nama Anda" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email Anda" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Pesan Anda" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 bg-primary text-white text-center mt-30">
        <div class="container">
            <h2 class="fw-bold">Siap Mengelola Event Anda dengan Lebih Baik?</h2>
            <p class="lead mb-4">Mulai jelajahi panduan operasional dan event terbaru sekarang juga.</p>
            <a href="dashboard.php" class="btn btn-light btn-lg">Lihat Semua Informasi <i class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </section>

    <script src="https://cdn.jsdelivr/net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
// 8. Panggil footer.php
include 'includes/footer.php';
?>