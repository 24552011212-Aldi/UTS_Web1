<?php
$host = 'localhost';
$user = 'Aldi'; // Ganti jika user XAMPP Anda ber-password
$pass = 'Nk!*710Apollo';     // Masukkan password Anda di sini
$db   = 'Event.info';

$koneksi = new mysqli($host, $user, $pass, $db);

//echo('koneksi berhasil');
if ($koneksi->connect_error) {
    http_response_code(500); // Internal Server Error
    die(json_encode(['status' => 'error', 'message' => 'Koneksi database gagal: ' . $koneksi->connect_error]));
}
