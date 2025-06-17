<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bakery Store</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #fffaf4;
      font-family: 'Segoe UI', sans-serif;
    }

    .navbar {
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .navbar-brand {
      font-weight: bold;
      color: #6d4c41 !important;
    }

    .navbar .nav-link {
      color: #6d4c41 !important;
    }

    .navbar .nav-link:hover {
      color: #ff5722 !important;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url('/home') ?>">🍞 Bakery Store</a>

    <div class="ms-auto d-flex align-items-center">
      <span class="me-3 text-muted">Halo, <?= session()->get('username') ?></span>
      <a class="btn btn-outline-danger btn-sm" href="<?= base_url('auth/logout') ?>">
        <i class="bi bi-box-arrow-right"></i> Logout
      </a>
    </div>
  </div>
</nav>

<div class="container mt-4">
