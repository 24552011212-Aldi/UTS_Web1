<?php

$pageTitle = "Hubungi Kami - NgeEvent";

include 'includes/header.php';
?>
<style>
        .map-container {
        height: 450px;
        border-radius: 10px;
        overflow: hidden;
    }

    .contact-card {
        transition: transform 0.3s ease-in-out;
    }

    .contact-card:hover {
        transform: translateY(-5px);
    }
</style>


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

<header class="bg-dark text-white py-5 mb-5 shadow-lg">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Hubungi Kami</h1>
        <p class="lead text-secondary">Kami senang mendengar dari Anda. Hubungi kami melalui formulir atau temukan lokasi kami di peta.</p>
    </div>
</header>

<div class="container my-5">

    <div class="row g-4">

        <div class="col-md-6">
            <div class="card p-3 shadow-lg contact-card h-100 border-0">
                <h3 class="mb-3 text-primary">Lokasi Kantor Kami</h3>
                <p class="text-muted">Temukan kami menggunakan peta interaktif di bawah.</p>
                <div class="map-container" id="map"></div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card p-4 shadow-lg contact-card h-100 border-0">
                <h3 class="mb-4 text-primary">Kirim Pesan Cepat</h3>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="contoh@email.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label fw-bold">Pesan</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg mt-3">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <div class="row mt-5 mb-5 justify-content-center pb-5">
        <div class="col-md-10">
            <h2 class="text-center mb-4">Informasi Kontak Lainnya</h2>
            <div class="list-group list-group-horizontal-md shadow-sm">

                <div class="list-group-item list-group-item-action d-flex align-items-center flex-fill p-3">
                    <i class="fas fa-envelope fa-2x text-primary me-3"></i>
                    <div>
                        <small class="text-muted">Email Utama</small>
                        <p class="mb-0 fw-bold">atmin@ngeevent.com</p>
                    </div>
                </div>

                <div class="list-group-item list-group-item-action d-flex align-items-center flex-fill p-3">
                    <i class="fas fa-phone-alt fa-2x text-success me-3"></i>
                    <div>
                        <small class="text-muted">Telepon</small>
                        <p class="mb-0 fw-bold">(62) 1234 5678</p>
                    </div>
                </div>

                <div class="list-group-item list-group-item-action d-flex align-items-center flex-fill p-3">
                    <i class="fas fa-map-marker-alt fa-2x text-danger me-3"></i>
                    <div>
                        <small class="text-muted">Alamat</small>
                        <p class="mb-0 fw-bold">Jl. Buah Batu No. 45, Bandung</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var map = L.map('map').setView([-6.914744, 107.609810], 13);

        L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
            maxZoom: 20
        }).addTo(map);

        L.marker([-6.914744, 107.609810]).addTo(map)
            .bindPopup('Bandung')
            .openPopup();
    });
</script>

<?php
include 'includes/footer.php';
?>