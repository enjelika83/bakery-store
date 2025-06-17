<!DOCTYPE html>
<html>
<head>
    <title>Keranjang - Oven Hati</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff9f3;
        }
        .cart-card {
            background-color: #fff3e0;
            border: none;
        }
    </style>
</head>
<body>
<div class="container mt-5 mb-5">
    <div class="card cart-card shadow rounded-4 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-dark">Keranjang Belanja Anda</h2>
            <a href="<?= base_url('/product') ?>" class="btn btn-outline-secondary">&larr; Lanjut Belanja</a>
        </div>

        <?php if (empty($cartItems)): ?>
            <div class="alert alert-info text-center">Keranjang Anda masih kosong. Yuk belanja sekarang!</div>
            <div class="text-center">
                <a href="<?= base_url('/product') ?>" class="btn btn-primary mt-3">
                    <i class="bi bi-bag"></i> Lihat Produk
                </a>
            </div>
        <?php else: ?>
            <ul class="list-group list-group-flush mb-4">
                <?php
                    $total = 0;
                    foreach ($cartItems as $item):
                        $subtotal = $item['price'] * $item['quantity'];
                        $total += $subtotal;
                ?>
                    <li class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                        <div>
                            <strong><?= esc($item['name']) ?></strong>
                            <span class="badge bg-secondary ms-2"><?= esc($item['quantity']) ?> pcs</span>
                        </div>
                        <span class="text-end fw-semibold text-success">Rp <?= number_format($subtotal, 0, ',', '.') ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="d-flex justify-content-between align-items-center border-top pt-3">
                <h5 class="mb-0">Total:</h5>
                <h5 class="text-success fw-bold mb-0">Rp <?= number_format($total, 0, ',', '.') ?></h5>
            </div>

            <form method="post" action="<?= base_url('/cart/checkout') ?>" class="mt-4">
                <button type="submit" class="btn btn-success w-100 py-2 fw-bold">
                    <i class="bi bi-credit-card"></i> Lanjut ke Pembayaran
                </button>
            </form>
        <?php endif; ?>
    </div>
</div>

<!-- Bootstrap Icons (optional, for icon like cart & bag) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
