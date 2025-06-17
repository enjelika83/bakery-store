<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Oven Hati</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #fff8f0;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-wrapper {
            max-width: 960px;
            margin: 50px auto;
            background-color: #fffdfb;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .carousel-item img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .form-section {
            padding: 40px;
        }

        .form-label {
            font-weight: 500;
            color: #6d4c41;
        }

        .btn-primary {
            background-color: #ff7043;
            border: none;
        }

        .btn-primary:hover {
            background-color: #e64a19;
        }

        .logo-text {
            font-size: 1.8rem;
            font-weight: bold;
            color: #6d4c41;
        }

        .icon-bread {
            font-size: 2rem;
            color: #ff7043;
        }

        .carousel {
            height: 100%;
        }
    </style>
</head>
<body>

<div class="container login-wrapper">
    <div class="row g-0">
        <div class="col-md-6">
            <div id="loginCarousel" class="carousel slide h-100" data-bs-ride="carousel">
                <div class="carousel-inner h-100">
                    <div class="carousel-item active h-100">
                        <img src="<?= base_url('uploads/roti1.jpg') ?>" class="d-block w-100" alt="Roti 1">
                    </div>
                    <div class="carousel-item h-100">
                        <img src="<?= base_url('uploads/roti2.jpg') ?>" class="d-block w-100" alt="Roti 2">
                    </div>
                    <div class="carousel-item h-100">
                        <img src="<?= base_url('uploads/roti3.jpg') ?>" class="d-block w-100" alt="Roti 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#loginCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                    <span class="visually-hidden">Sebelumnya</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#loginCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                    <span class="visually-hidden">Berikutnya</span>
                </button>
            </div>
        </div>

        <div class="col-md-6 form-section d-flex flex-column justify-content-center">
            <div class="text-center mb-4">
                <div class="icon-bread">🍞</div>
                <div class="logo-text">Oven Hati</div>
                <h4 class="mt-2">Login Pengguna</h4>
            </div>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>

            <form method="post" action="<?= base_url('/login') ?>">
                <div class="mb-3">
                    <label for="username" class="form-label">Nama Pengguna</label>
                    <input name="username" id="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input name="password" type="password" id="password" class="form-control" required>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg">
                        <i class="bi bi-box-arrow-in-right"></i> Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
