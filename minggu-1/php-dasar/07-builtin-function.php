<?php
$pageTitle = 'Latihan 7 - Built-in Function String & Array';
require __DIR__ . '/includes/header.php';

// Built-in function string: strlen, str_replace
$kalimatAsli   = 'Belajar PHP Dasar di Udacoding Batam';
$panjangTeks   = strlen($kalimatAsli);
$kalimatDiganti = str_replace('Dasar', 'Modern', $kalimatAsli);

// Built-in function array: count, array_sum, sort, array_filter
$nilaiUjian   = [78, 62, 95, 70, 54, 88];
$jumlahData   = count($nilaiUjian);
$totalNilai   = array_sum($nilaiUjian);

$nilaiUrut = $nilaiUjian;
sort($nilaiUrut); // mengurutkan dari kecil ke besar

$nilaiLulus = array_filter($nilaiUjian, fn($n) => $n >= 70);
?>

<div class="page-head">
  <h1>Latihan 7: Built-in Function String &amp; Array</h1>
  <p>Contoh penggunaan <code>strlen</code>, <code>str_replace</code>, <code>count</code>, <code>array_sum</code>, <code>sort</code>, dan <code>array_filter</code>.</p>
</div>

<section class="card">
  <h3>Fungsi String</h3>
  <p>Kalimat Asli: <strong><?= $kalimatAsli ?></strong></p>
  <p><code>strlen()</code> (panjang karakter): <strong><?= $panjangTeks ?> karakter</strong></p>
  <p><code>str_replace('Dasar', 'Modern')</code>: <strong><?= $kalimatDiganti ?></strong></p>
</section>

<section class="card">
  <h3>Fungsi Array</h3>
  <p>Data Nilai Awal: <strong><?= implode(', ', $nilaiUjian) ?></strong></p>
  <p><code>count()</code> (jumlah data): <strong><?= $jumlahData ?></strong></p>
  <p><code>array_sum()</code> (total semua nilai): <strong><?= $totalNilai ?></strong></p>
  <p><code>sort()</code> (urutan terkecil ke terbesar): <strong><?= implode(', ', $nilaiUrut) ?></strong></p>
  <p><code>array_filter()</code> (nilai lulus &gt;= 70): <strong><?= implode(', ', $nilaiLulus) ?></strong></p>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>