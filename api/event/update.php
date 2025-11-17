<?php
include '../koneksi.php';

// Metode PUT seringkali tidak didukung langsung oleh PHP, jadi kita bisa simulasi dengan POST atau langsung cek
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    
    $id = (int)($data['id'] ?? 0);
    $judul = $koneksi->real_escape_string($data['judul'] ?? '');
    $konten = $koneksi->real_escape_string($data['konten'] ?? '');

    if ($id === 0 || empty($judul) || empty($konten)) {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'ID, Judul, dan konten wajib diisi.']);
        exit;
    }

    $sql = "UPDATE informasi SET judul='$judul', konten='$konten' WHERE id=$id";
    
    if ($koneksi->query($sql)) {
        echo json_encode(['status' => 'success', 'message' => 'Informasi berhasil diperbarui.']);
    } else {
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => 'Gagal memperbarui informasi.']);
    }
} else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Metode tidak didukung']);
}
?>