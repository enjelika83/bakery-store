<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oven Hati - Bakery Store</title>
    <link rel="stylesheet" href="<?= base_url('public/css/style.css') ?>">
</head>
<body>
    <header>
        <h1>Oven Hati Bakery</h1>
        <nav>
            <a href="/">Beranda</a>
            <a href="/produk">Produk</a>
            <a href="/tentang">Tentang Kami</a>
        </nav>
    </header>

    <main>
        <h2>Selamat datang di Oven Hati!</h2>
        <p>Kami menyediakan roti fresh dan lezat setiap hari.</p>
        <img src="<?= base_url('public/images/roti.jpg') ?>" alt="Roti lezat" width="300">
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> Oven Hati Bakery</p>
    </footer>
</body>
</html>
