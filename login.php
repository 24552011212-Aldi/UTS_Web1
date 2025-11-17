<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$pageTitle = "Login Pengguna";

include 'api/koneksi.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $email_input = $_POST['username'] ?? ''; 
    $password_input = $_POST['password'] ?? ''; 

    if (empty($email_input) || empty($password_input)) {
        $error = 'Email dan password wajib diisi.';
    } else {

        $safe_email = $koneksi->real_escape_string($email_input);

        // 1. Ambil data user dari database berdasarkan email
        $sql = "SELECT user_id, password FROM users WHERE email = '$safe_email'";
        $result = $koneksi->query($sql);
        $user = $result->fetch_assoc();

        if ($user) {

            if (password_verify($password_input, $user['password'])) {

                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $user['user_id'];

                header('Location: dashboard.php');
                exit;
            } else {
                $error = 'Email atau password salah.';
            }
            
        }
    }
}

include 'includes/header.php';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="/UTS_WEB1_TIF-RP-23-CNS_Event/css/style.css" rel="stylesheet">

<div class="row justify-content-center mt-5">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-header bg-dark text-white text-center">
                <h3 class="fw-light my-4">Masuk ke Akun Anda</h3>
            </div>
            <div class="card-body p-4">
                <?php if (!empty($error)): ?>
                    <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                <?php endif; ?>
                <form method="post" action="login.php">
                    <div class="mb-3">
                        <label for="username" class="form-label">Email</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password" required>
                    </div>
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-dark btn-dark">LOGIN</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small">
                    Belum punya akun? <a href="register.php">Buat Akun Baru</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
