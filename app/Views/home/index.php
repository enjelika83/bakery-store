<?= view('layouts/header') ?>

<style>
    body {
        background-color: #fff8f0;
        font-family: 'Segoe UI', sans-serif;
    }
    .hero {
        background: linear-gradient(to right, #ffecd2, #fcb69f);
        padding: 100px 30px;
        border-radius: 16px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        text-align: center;
        margin-top: 50px;
    }
    .hero h1 {
        font-size: 3rem;
        font-weight: 700;
        color: #5d4037;
    }
    .hero p {
        font-size: 1.2rem;
        color: #6d4c41;
    }
    .btn-bakery {
        margin-top: 20px;
        background-color: #ff7043;
        color: white;
        padding: 12px 28px;
        font-size: 1.1rem;
        border: none;
        border-radius: 10px;
    }
    .btn-bakery:hover {
        background-color: #ff5722;
    }
    .info-section {
        margin-top: 80px;
        background-color: #fff3e0;
        padding: 40px 20px;
        border-radius: 16px;
    }
    .info-section h5 {
        color: #bf360c;
        margin-bottom: 10px;
    }
    .social-icons a {
        font-size: 28px;
        margin: 0 12px;
        color: #5d4037;
    }
    .social-icons a:hover {
        color: #ff5722;
    }
</style>

<div class="container">
    <div class="hero">
        <h1>Selamat Datang, <?= session()->get('name') ?>!</h1>
        <p>Temukan dan nikmati berbagai roti lezat pilihan Anda 🍞🧁</p>
        <a href="<?= base_url('/product') ?>" class="btn btn-bakery">
            <i class="bi bi-bag"></i> Lihat Produk
        </a>
    </div>

    <div class="row justify-content-center info-section mt-5 text-center">
        <div class="col-md-5 mb-4">
            <h5>📍 Lokasi Toko</h5>
            <p>Jalan Roti Manis No.15<br>Kota Semarang, Jawa Tengah</p>
        </div>
        <div class="col-md-5 mb-4">
            <h5>🔗 Sosial Media</h5>
            <div class="social-icons">
                <a href="https://instagram.com/ovenhati" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://facebook.com/ovenhati" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://wa.me/6281234567890" target="_blank"><i class="bi bi-whatsapp"></i></a>
            </div>
        </div>
    </div>
</div>

<?= view('layouts/footer') ?>
