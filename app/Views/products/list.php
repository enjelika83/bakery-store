<?= view('layouts/header') ?>

<div class="container mt-5">
    <h2 class="mb-4 text-center text-uppercase">Daftar Produk Roti</h2>

    <div class="row">
        <?php foreach ($products as $p): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow border-0 position-relative">

                    <?php
                        $imagePath = $p['image'];
                        if (strpos($imagePath, 'public/') === 0) {
                            $imagePath = substr($imagePath, 7); 
                        }
                        if (!str_contains($imagePath, 'uploads/')) {
                            $imagePath = 'uploads/' . $imagePath;
                        }
                    ?>
                    <img src="<?= base_url($imagePath) ?>" class="card-img-top" alt="<?= esc($p['name']) ?>" style="height: 220px; object-fit: cover;">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center"><?= esc($p['name']) ?></h5>
                        <p class="card-text text-muted"><?= esc($p['description']) ?></p>

                        <div class="star-rating mb-2 text-center">
                            <?php
                                $rating = $p['rating'];
                                $fullStars = floor($rating);
                                $halfStar = ($rating - $fullStars) >= 0.5;
                                $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);

                                for ($i = 0; $i < $fullStars; $i++) {
                                    echo '<i class="bi bi-star-fill text-warning"></i>';
                                }
                                if ($halfStar) {
                                    echo '<i class="bi bi-star-half text-warning"></i>';
                                }
                                for ($i = 0; $i < $emptyStars; $i++) {
                                    echo '<i class="bi bi-star text-warning"></i>';
                                }
                                echo '<span class="text-muted ms-1">(' . number_format($rating, 1) . '/5)</span>';
                            ?>
                        </div>

                        <p class="card-text fw-bold text-success">Rp <?= number_format($p['price'], 0, ',', '.') ?></p>

                        <?php if ($p['stock'] > 0): ?>
                            <form action="<?= base_url('/cart/add') ?>" method="post" class="mt-auto">
                                <?= csrf_field() ?>
                                <input type="hidden" name="product_id" value="<?= $p['id'] ?>">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="btn btn-success w-100">
                                    <i class="bi bi-cart-plus"></i> Tambah ke Keranjang
                                </button>
                            </form>
                        <?php else: ?>
                            <button class="btn btn-secondary w-100 mt-auto" disabled>
                                <i class="bi bi-x-circle"></i> Stok Habis
                            </button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<?= view('layouts/footer') ?>
