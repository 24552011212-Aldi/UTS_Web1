<?php

/**
 * API Endpoint: Membuat (INSERT) Informasi/Event Baru
 * File: api/event/create.php
 */

// Aktifkan debugging penuh
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Koneksi ke Database
include '../../api/koneksi.php';

// Pastikan respons adalah JSON
header('Content-Type: application/json');

// --- Pengecekan Koneksi ---
if (empty($koneksi) || $koneksi->connect_error) {
    http_response_code(500);
    die(json_encode(['status' => 'error', 'message' => 'Koneksi database GAGAL!']));
}

// --- Logika POST Request ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = json_decode(file_get_contents("php://input"), true);

    // 1. Ambil dan Sanitasi Data
    $judul          = $koneksi->real_escape_string($data['Judul'] ?? '');
    $konten         = $koneksi->real_escape_string($data['konten'] ?? '');

    // PERBAIKAN: Menggunakan 'kategory_event' dari input, dan memastikan cashing kolom
    $kategory_event = $koneksi->real_escape_string($data['kategory_event'] ?? 'General');
    $tujuan         = $koneksi->real_escape_string($data['tujuan'] ?? '');

    // PERBAIKAN: Menambahkan 'benefit' karena kolom di DB (informasi/events) adalah NOT NULL
    $benefit        = $koneksi->real_escape_string($data['benefit'] ?? '');

    // --- Validasi Wajib Isi ---
    if (empty($judul) || empty($konten)) {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Judul dan konten wajib diisi.']);
        $koneksi->close();
        exit;
    }

    // --- Query INSERT ---
    // Pastikan nama tabel dan kolom sesuai dengan database Anda!
    $sql = "INSERT INTO informasi (Judul, konten, kategory_event, tujuan, benefit) 
            VALUES ('$judul', '$konten', '$kategory_event', '$tujuan', '$benefit')";

    if ($koneksi->query($sql)) {

        http_response_code(201); // 201 Created
        echo json_encode([
            'status' => 'success',
            'message' => 'Informasi berhasil ditambahkan.',
            'id' => $koneksi->insert_id
        ]);
    } else {
        // Penanganan error query database
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => 'Gagal menambahkan informasi: ' . $koneksi->error]);
    }
} else {
    // --- Penanganan Method Salah ---
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed.']);
}

$koneksi->close();
