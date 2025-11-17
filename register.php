<?php
$pageTitle = "Registrasi Akun";

include 'includes/header.php';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="/UTS_WEB1_TIF-RP-23-CNS_Event/css/style.css" rel="stylesheet">

<div class="row justify-content-center mt-5">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-header bg-dark text-white text-center">
                <h3 class="fw-light my-4">Buat Akun Baru</h3>
            </div>
            <div class="card-body p-4">
                <form>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="contoh@domain.com" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="password_reg" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password_reg" placeholder="Minimal 6 karakter" required>
                        </div>
                        <div class="col-md-6">
                            <label for="konfirmasi_password" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="konfirmasi_password" placeholder="Ulangi password" required>
                        </div>
                    </div>
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-success btn-dark">DAFTAR</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small">
                    Sudah punya akun? <a href="login.php">Masuk</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include 'includes/footer.php';
?>