<!DOCTYPE html>
<html>
<head>
    <title>Transaksi Selesai - Oven Hati</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff9f3;
        }
    </style>
</head>
<body>
<div class="container mt-5 mb-5">
    <div class="card shadow p-4 rounded-4 bg-white">
        <h2 class="fw-bold text-success mb-3">
            <i class="bi bi-check-circle-fill"></i> Transaksi Berhasil!
        </h2>
        <p class="text-muted">Terima kasih telah berbelanja di <strong>Oven Hati</strong>.</p>

        <h5 class="mt-4">Detail Transaksi:</h5>
        <table class="table table-borderless mt-2">
            <tr><th scope="row">ID Transaksi</th><td>#<?= $transaction['id']; ?></td></tr>
            <tr><th scope="row">Total Pembayaran</th><td>Rp <?= number_format($transaction['total'], 0, ',', '.'); ?></td></tr>
            <tr><th scope="row">Tanggal</th><td><?= date('d M Y, H:i', strtotime($transaction['created_at'])); ?></td></tr>
        </table>

        <div class="mt-4 d-flex justify-content-between">
            <a href="<?= base_url('/product') ?>" class="btn btn-outline-primary">
                <i class="bi bi-bag-plus"></i> Belanja Lagi
            </a>
            <a href="<?= base_url('/logout') ?>" class="btn btn-danger">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
