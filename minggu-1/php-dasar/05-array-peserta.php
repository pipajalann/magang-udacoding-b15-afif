<?php
$pageTitle = 'Latihan 5 - Array Associative & Multidimensi';
require __DIR__ . '/includes/header.php';

// Array multidimensi berisi array associative (5 peserta)
$peserta = [
    ['nama' => 'Afif Ananda Utama', 'divisi' => 'Web Development',    'kota' => 'Batam'],
    ['nama' => 'Syahid Al Zikri',   'divisi' => 'Web Development',    'kota' => 'Padang'],
    ['nama' => 'Nadia Kusuma',      'divisi' => 'UI/UX Design',       'kota' => 'Bandung'],
    ['nama' => 'Raka Pratama',      'divisi' => 'Mobile Development', 'kota' => 'Jakarta'],
    ['nama' => 'Dimas Saputra',     'divisi' => 'Quality Assurance',  'kota' => 'Yogyakarta'],
];
?>

<div class="page-head">
  <h1>Latihan 5: Array Associative &amp; Multidimensi</h1>
  <p>Menampilkan daftar 5 peserta magang (nama, divisi, kota) ke dalam tabel HTML.</p>
</div>

<section class="card table-wrap">
  <table class="data-table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Peserta</th>
        <th>Divisi</th>
        <th>Kota Asal</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($peserta as $index => $item): ?>
        <tr>
          <td><?= $index + 1 ?></td>
          <td><?= htmlspecialchars($item['nama'], ENT_QUOTES, 'UTF-8') ?></td>
          <td><?= htmlspecialchars($item['divisi'], ENT_QUOTES, 'UTF-8') ?></td>
          <td><?= htmlspecialchars($item['kota'], ENT_QUOTES, 'UTF-8') ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>