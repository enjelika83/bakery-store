<!DOCTYPE html>
<html>
<head>
    <title>Checkout - Oven Hati</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #fff9f3;
        }
        .checkout-card {
            background-color: #fff3e0;
            border: none;
        }
    </style>
</head>
<body>
<div class="container mt-5 mb-5">
    <div class="card checkout-card p-4 shadow rounded-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-dark">Konfirmasi Pembayaran</h2>
            <a href="<?= base_url('/cart') ?>" class="btn btn-outline-secondary">&larr; Kembali ke Keranjang</a>
        </div>

        <ul class="list-group list-group-flush mb-3">
            <?php $total = 0; foreach ($items as $item): ?>
                <li class="list-group-item bg-transparent d-flex justify-content-between">
                    <div>
                        <strong><?= esc($item['name']) ?></strong>
                        <span class="badge bg-secondary ms-2"><?= $item['quantity'] ?> pcs</span>
                    </div>
                    <span class="fw-semibold text-success">
                        <?php 
                            $subtotal = $item['price'] * $item['quantity']; 
                            $total += $subtotal; 
                            echo 'Rp ' . number_format($subtotal, 0, ',', '.'); 
                        ?>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="d-flex justify-content-between border-top pt-3">
            <h5>Total:</h5>
            <h5 class="text-success fw-bold">Rp <?= number_format($total, 0, ',', '.') ?></h5>
        </div>

        <form method="post" action="<?= base_url('/checkout/process') ?>" class="mt-4">
            <?= csrf_field() ?>
            <button type="submit" class="btn btn-success w-100 py-2 fw-bold">
                <i class="bi bi-cash-coin"></i> Bayar Sekarang
            </button>
        </form>
    </div>
</div>
</body>
</html>
