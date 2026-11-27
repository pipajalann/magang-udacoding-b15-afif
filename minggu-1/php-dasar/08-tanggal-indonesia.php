<?php
date_default_timezone_set('Asia/Jakarta');

$pageTitle = 'Latihan 8 - Tanggal Format Indonesia';
require __DIR__ . '/includes/header.php';

$daftarHari = [
    'Sunday'    => 'Minggu',
    'Monday'    => 'Senin',
    'Tuesday'   => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday'  => 'Kamis',
    'Friday'    => 'Jumat',
    'Saturday'  => 'Sabtu',
];

$daftarBulan = [
    1  => 'Januari',
    2  => 'Februari',
    3  => 'Maret',
    4  => 'April',
    5  => 'Mei',
    6  => 'Juni',
    7  => 'Juli',
    8  => 'Agustus',
    9  => 'September',
    10 => 'Oktober',
    11 => 'November',
    12 => 'Desember',
];

$hariInggris = date('l');
$tanggal     = date('j');
$bulanAngka  = (int) date('n');
$tahun       = date('Y');

$tanggalIndonesia = $daftarHari[$hariInggris] . ', ' . $tanggal . ' ' . $daftarBulan[$bulanAngka] . ' ' . $tahun;
$jamSekarang      = date('H:i:s') . ' WIB';
?>

<div class="page-head">
  <h1>Latihan 8: Tanggal Hari Ini Format Indonesia</h1>
  <p>Mengubah tanggal dari fungsi <code>date()</code> menjadi format bahasa Indonesia (contoh: Senin, 23 November 2026).</p>
</div>

<section class="card">
  <h3>Tanggal Hari Ini</h3>
  <p class="highlight-date"><?= $tanggalIndonesia ?></p>
  <p>Waktu Server (Asia/Jakarta): <strong><?= $jamSekarang ?></strong></p>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>