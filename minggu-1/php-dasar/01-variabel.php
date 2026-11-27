<?php
$pageTitle = 'Latihan 1 - Variabel, Tipe Data, Konstanta, var_dump';
require __DIR__ . '/includes/header.php';

// 1. Variabel & Tipe Data Dasar
$nama       = 'Afif Ananda Utama';          // string
$umur       = 20;                           // integer
$ipk        = 3.85;                         // float
$aktif      = true;                         // boolean
$skills     = ['HTML', 'CSS', 'PHP'];       // array
$catatan    = null;                         // null

// 2. Konstanta (nilainya tidak bisa diubah)
define('NAMA_BOOTCAMP', 'Udacoding Bootcamp Batch 15');
const DURASI_MINGGU = 12;
?>

<div class="page-head">
  <h1>Latihan 1: Variabel, Tipe Data, Konstanta &amp; var_dump</h1>
  <p>Menampilkan macam-macam tipe data dasar PHP beserta pengecekan tipe menggunakan <code>var_dump()</code>.</p>
</div>

<section class="card">
  <h3>Konstanta</h3>
  <p><strong>NAMA_BOOTCAMP:</strong> <?= NAMA_BOOTCAMP ?></p>
  <p><strong>DURASI_MINGGU:</strong> <?= DURASI_MINGGU ?> minggu</p>
</section>

<section class="card">
  <h3>Hasil var_dump()</h3>
  <pre class="code-box"><?php
    var_dump($nama, $umur, $ipk, $aktif, $skills, $catatan);
  ?></pre>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>