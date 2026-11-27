<?php
$pageTitle = 'Latihan 3 - Percabangan if/elseif/else & match';
require __DIR__ . '/includes/header.php';

$daftarNilai = [92, 80, 72, 60, 45];

// Konversi menggunakan if / elseif / else
function konversiDenganIf(int $nilai): string
{
    if ($nilai >= 85) {
        return 'A';
    } elseif ($nilai >= 75) {
        return 'B';
    } elseif ($nilai >= 70) {
        return 'C';
    } elseif ($nilai >= 55) {
        return 'D';
    } else {
        return 'E';
    }
}

// Konversi menggunakan match (fitur PHP 8)
function konversiDenganMatch(int $nilai): string
{
    return match (true) {
        $nilai >= 85 => 'A',
        $nilai >= 75 => 'B',
        $nilai >= 70 => 'C',
        $nilai >= 55 => 'D',
        default      => 'E',
    };
}
?>

<div class="page-head">
  <h1>Latihan 3: if/elseif/else &amp; match (Konversi Nilai A-E)</h1>
  <p>Perbandingan penulisan konversi nilai angka ke huruf mutu A sampai E memakai <code>if/elseif/else</code> dan <code>match</code>.</p>
</div>

<section class="card table-wrap">
  <table class="data-table table-center">
    <thead>
      <tr>
        <th>Nilai Angka</th>
        <th>Hasil if / elseif / else</th>
        <th>Hasil match (PHP 8)</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($daftarNilai as $nilai): ?>
        <tr>
          <td><?= $nilai ?></td>
          <td><strong><?= konversiDenganIf($nilai) ?></strong></td>
          <td><strong><?= konversiDenganMatch($nilai) ?></strong></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>