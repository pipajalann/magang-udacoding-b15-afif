<?php
$pageTitle = $pageTitle ?? 'PHP Dasar - Minggu 1';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap"
    rel="stylesheet"
  />
  <!-- Memakai CSS dari Bagian B + sedikit style tambahan untuk tabel & error PHP -->
  <link rel="stylesheet" href="../landing-page/css/style.css" />
  <link rel="stylesheet" href="css/php-extra.css" />
</head>
<body>
  <header class="navbar">
    <div class="wrap nav-bar">
      <a href="index.php" class="logo">PHP Dasar - Minggu 1</a>
      <nav class="nav-menu nav-always" aria-label="Navigasi PHP Dasar">
        <a href="index.php">Daftar Latihan</a>
        <a href="kalkulator-nilai.php" class="btn btn-primary">Kalkulator Nilai</a>
      </nav>
    </div>
  </header>

  <main class="section">
    <div class="wrap php-wrap">