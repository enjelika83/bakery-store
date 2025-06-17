<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Transaksi - Oven Hati</title>
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
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="fw-bold text-dark">Riwayat Transaksi Anda</h2>
            <a href="<?= base_url('/product') ?>" class="btn btn-outline-secondary">
                <i class="bi bi-shop"></i> Kembali Belanja
            </a>
        </div>

        <?php if (empty($transactions)): ?>
            <div class="alert alert-info text-center">Belum ada transaksi yang dilakukan.</div>
        <?php else: ?>
            <table class="table table-hover mt-3">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Total</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($transactions as $trx): ?>
                        <tr>
                            <td>#<?= esc($trx['id']) ?></td>
                            <td>Rp <?= number_format($trx['total'], 0, ',', '.') ?></td>
                            <td><?= date('d M Y, H:i', strtotime($trx['created_at'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
