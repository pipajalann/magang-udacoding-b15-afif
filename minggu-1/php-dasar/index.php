<?php
$pageTitle = 'Bagian C - PHP Dasar (Minggu 1)';
require __DIR__ . '/includes/header.php';

$daftarLatihan = [
    ['file' => '01-variabel.php',              'judul' => '1. Variabel, Tipe Data & Konstanta', 'ket' => 'Tipe data dasar, konstanta, dan var_dump().'],
    ['file' => '02-operator-string.php',       'judul' => '2. Operator & Penggabungan String',  'ket' => 'Aritmatika, perbandingan, logika, dan string.'],
    ['file' => '03-percabangan-nilai.php',     'judul' => '3. if/elseif/else & match',          'ket' => 'Konversi nilai angka ke huruf mutu A-E.'],
    ['file' => '04-perulangan-perkalian.php',  'judul' => '4. for, while & foreach',            'ket' => 'Tabel perkalian 1-10 dalam tabel HTML.'],
    ['file' => '05-array-peserta.php',         'judul' => '5. Array Associative & Multidimensi','ket' => 'Daftar 5 peserta dalam tabel HTML.'],
    ['file' => '06-function-rata-rata.php',    'judul' => '6. Function & Type Declaration',     'ket' => 'Fungsi hitungRataRata(array $nilai): float.'],
    ['file' => '07-builtin-function.php',      'judul' => '7. Built-in Function String & Array','ket' => 'strlen, str_replace, count, array_sum, sort, array_filter.'],
    ['file' => '08-tanggal-indonesia.php',     'judul' => '8. Tanggal Format Indonesia',        'ket' => 'Menampilkan tanggal hari ini format Indonesia.'],
];
?>

<div class="page-head">
  <h1>Bagian C: PHP Dasar</h1>
  <p>Kumpulan 8 latihan sintaks PHP 8 dan mini project Kalkulator Nilai Peserta.</p>
</div>

<section class="card">
  <h3>Mini Project</h3>
  <p>Hitung nilai akhir (30% Tugas + 30% UTS + 40% UAS), validasi input, proteksi XSS dengan <code>htmlspecialchars()</code>, dan riwayat 5 perhitungan terakhir di <code>$_SESSION</code>.</p>
  <div>
    <a href="kalkulator-nilai.php" class="btn btn-primary">Buka Kalkulator Nilai Peserta</a>
  </div>
</section>

<section>
  <h2 class="sub-title">8 Latihan Sintaks PHP</h2>
  <div class="menu-grid">
    <?php foreach ($daftarLatihan as $item): ?>
      <a href="<?= htmlspecialchars($item['file'], ENT_QUOTES, 'UTF-8') ?>" class="card">
        <h3><?= htmlspecialchars($item['judul'], ENT_QUOTES, 'UTF-8') ?></h3>
        <p><?= htmlspecialchars($item['ket'], ENT_QUOTES, 'UTF-8') ?></p>
      </a>
    <?php endforeach; ?>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>