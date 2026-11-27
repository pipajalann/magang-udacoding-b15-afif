<?php
$pageTitle = 'Latihan 2 - Operator & Penggabungan String';
require __DIR__ . '/includes/header.php';

// 1. Operator Aritmatika
$a = 15;
$b = 4;

// 2. Operator Perbandingan & Logika
$nilai = 82;
$hadir = 90;
$lulus = ($nilai >= 70) && ($hadir >= 80);

// 3. Penggabungan String (. dan .=)
$namaDepan    = 'Afif';
$namaBelakang = 'Ananda Utama';
$namaLengkap  = $namaDepan . ' ' . $namaBelakang;

$kalimat = 'Halo, saya ' . $namaLengkap;
$kalimat .= ' dari Divisi Web Development.';
?>

<div class="page-head">
  <h1>Latihan 2: Operator &amp; Penggabungan String</h1>
  <p>Contoh operator aritmatika, perbandingan, logika, dan penggabungan string di PHP.</p>
</div>

<section class="card">
  <h3>Operator Aritmatika ($a = <?= $a ?>, $b = <?= $b ?>)</h3>
  <p>Penjumlahan ($a + $b): <strong><?= $a + $b ?></strong></p>
  <p>Pengurangan ($a - $b): <strong><?= $a - $b ?></strong></p>
  <p>Perkalian ($a * $b): <strong><?= $a * $b ?></strong></p>
  <p>Pembagian ($a / $b): <strong><?= $a / $b ?></strong></p>
  <p>Sisa Bagi / Modulus ($a % $b): <strong><?= $a % $b ?></strong></p>
</section>

<section class="card">
  <h3>Operator Perbandingan &amp; Logika</h3>
  <p>Nilai = <?= $nilai ?>, Kehadiran = <?= $hadir ?>%</p>
  <p>Status ($nilai &gt;= 70 &amp;&amp; $hadir &gt;= 80): <strong><?= $lulus ? 'Lulus (true)' : 'Tidak Lulus (false)' ?></strong></p>
</section>

<section class="card">
  <h3>Penggabungan String (. dan .=)</h3>
  <p>Nama Lengkap: <strong><?= $namaLengkap ?></strong></p>
  <p>Kalimat: <strong><?= $kalimat ?></strong></p>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>