<?php
declare(strict_types=1);

$pageTitle = 'Latihan 6 - Function dengan Type Declaration';
require __DIR__ . '/includes/header.php';

/**
 * Menghitung rata-rata dari sekumpulan nilai angka.
 */
function hitungRataRata(array $nilai): float
{
    if (count($nilai) === 0) {
        return 0.0;
    }

    return array_sum($nilai) / count($nilai);
}

$nilaiAfif  = [85, 90, 78, 92];
$nilaiSyahid = [75, 80, 88, 84];
?>

<div class="page-head">
  <h1>Latihan 6: Function dengan Type Declaration</h1>
  <p>Implementasi fungsi <code>hitungRataRata(array $nilai): float</code> dengan <code>strict_types=1</code>.</p>
</div>

<section class="card">
  <h3>Hasil Perhitungan</h3>
  <p>Nilai Afif (<?= implode(', ', $nilaiAfif) ?>) -> Rata-rata: <strong><?= number_format(hitungRataRata($nilaiAfif), 2) ?></strong></p>
  <p>Nilai Syahid (<?= implode(', ', $nilaiSyahid) ?>) -> Rata-rata: <strong><?= number_format(hitungRataRata($nilaiSyahid), 2) ?></strong></p>
  <p>Array Kosong ([]) -> Rata-rata: <strong><?= number_format(hitungRataRata([]), 2) ?></strong></p>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>