<?php
$pageTitle = 'Latihan 4 - Perulangan for, while, foreach';
require __DIR__ . '/includes/header.php';

// Contoh data untuk foreach
$topikMinggu1 = ['Git & GitHub', 'HTML5 Semantik', 'CSS3 Responsif', 'PHP 8 Dasar'];
?>

<div class="page-head">
  <h1>Latihan 4: Perulangan for, while &amp; foreach</h1>
  <p>Tabel perkalian 1-10 dibuat menggunakan <code>for</code>, ditambah contoh penggunaan <code>while</code> dan <code>foreach</code>.</p>
</div>

<section class="card table-wrap">
  <h3>1. Tabel Perkalian 1-10 (menggunakan for)</h3>
  <table class="data-table table-center">
    <thead>
      <tr>
        <th>x</th>
        <?php for ($kolom = 1; $kolom <= 10; $kolom++): ?>
          <th><?= $kolom ?></th>
        <?php endfor; ?>
      </tr>
    </thead>
    <tbody>
      <?php for ($baris = 1; $baris <= 10; $baris++): ?>
        <tr>
          <th><?= $baris ?></th>
          <?php for ($kolom = 1; $kolom <= 10; $kolom++): ?>
            <td><?= $baris * $kolom ?></td>
          <?php endfor; ?>
        </tr>
      <?php endfor; ?>
    </tbody>
  </table>
</section>

<section class="card">
  <h3>2. Contoh while (kelipatan 5 sampai 25)</h3>
  <p>
    <?php
    $angka = 5;
    $hasilWhile = [];
    while ($angka <= 25) {
        $hasilWhile[] = $angka;
        $angka += 5;
    }
    echo implode(', ', $hasilWhile);
    ?>
  </p>
</section>

<section class="card">
  <h3>3. Contoh foreach (daftar materi Minggu 1)</h3>
  <ul>
    <?php foreach ($topikMinggu1 as $index => $topik): ?>
      <li><?= ($index + 1) . '. ' . $topik ?></li>
    <?php endforeach; ?>
  </ul>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>