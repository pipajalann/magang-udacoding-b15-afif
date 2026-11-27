<?php
declare(strict_types=1);

session_start();
date_default_timezone_set('Asia/Jakarta');

require_once __DIR__ . '/includes/functions.php';

// Nilai awal isian form (sticky form agar isian tidak hilang saat error)
$input = [
    'nama'   => '',
    'divisi' => '',
    'tugas'  => '',
    'uts'    => '',
    'uas'    => '',
];
$errors = [];
$hasil  = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Tombol hapus riwayat session
    if (isset($_POST['hapus_riwayat'])) {
        unset($_SESSION['riwayat_nilai']);
    } else {
        // Ambil & bersihkan spasi awal/akhir dari input POST
        foreach ($input as $key => $default) {
            $input[$key] = trim((string) ($_POST[$key] ?? ''));
        }

        $errors = validasiKalkulator($input);

        if (empty($errors)) {
            $tugas      = (float) $input['tugas'];
            $uts        = (float) $input['uts'];
            $uas        = (float) $input['uas'];
            $nilaiAkhir = hitungNilaiAkhir($tugas, $uts, $uas);

            $hasil = [
                'nama'        => $input['nama'],
                'divisi'      => $input['divisi'],
                'tugas'       => $tugas,
                'uts'         => $uts,
                'uas'         => $uas,
                'nilai_akhir' => $nilaiAkhir,
                'huruf_mutu'  => konversiHurufMutu($nilaiAkhir),
                'status'      => tentukanStatus($nilaiAkhir),
                'waktu'       => date('H:i:s'),
            ];

            // Bonus: simpan 5 riwayat perhitungan terakhir di $_SESSION
            $riwayat = $_SESSION['riwayat_nilai'] ?? [];
            array_unshift($riwayat, $hasil);
            $_SESSION['riwayat_nilai'] = array_slice($riwayat, 0, 5);
        }
    }
}

$riwayatTersimpan = $_SESSION['riwayat_nilai'] ?? [];

$pageTitle = 'Kalkulator Nilai Peserta - PHP Dasar';
require __DIR__ . '/includes/header.php';
?>

<div class="page-head">
  <h1>Kalkulator Nilai Peserta</h1>
  <p>Nilai Akhir = 30% Tugas + 30% UTS + 40% UAS. Lulus jika nilai akhir &gt;= 70.</p>
</div>

<!-- Form POST dengan validasi server-side & sticky input -->
<section class="card form-card">
  <div class="form-card-head">
    <h3>Input Data Peserta</h3>
    <p>Lengkapi data peserta dan tiga komponen nilai (0-100) di bawah ini.</p>
  </div>

  <form method="post" action="kalkulator-nilai.php" class="form-kontak form-modern" novalidate>
    <div class="field">
      <label for="nama">Nama Peserta *</label>
      <input
        type="text"
        id="nama"
        name="nama"
        value="<?= e($input['nama']) ?>"
        placeholder="Contoh: Afif Ananda Utama"
        class="<?= isset($errors['nama']) ? 'input-error' : '' ?>"
      />
      <?php if (isset($errors['nama'])): ?>
        <p class="field-error"><?= e($errors['nama']) ?></p>
      <?php endif; ?>
    </div>

    <div class="field">
      <label for="divisi">Divisi *</label>
      <select
        id="divisi"
        name="divisi"
        class="<?= isset($errors['divisi']) ? 'input-error' : '' ?>"
      >
        <option value="">-- Pilih divisi --</option>
        <?php foreach (daftarDivisi() as $div): ?>
          <option value="<?= e($div) ?>" <?= $input['divisi'] === $div ? 'selected' : '' ?>>
            <?= e($div) ?>
          </option>
        <?php endforeach; ?>
      </select>
      <?php if (isset($errors['divisi'])): ?>
        <p class="field-error"><?= e($errors['divisi']) ?></p>
      <?php endif; ?>
    </div>

    <div class="form-row-3">
      <div class="field">
        <label for="tugas">Nilai Tugas (30%) *</label>
        <input
          type="number"
          id="tugas"
          name="tugas"
          step="any"
          min="0"
          max="100"
          value="<?= e($input['tugas']) ?>"
          placeholder="0 - 100"
          class="<?= isset($errors['tugas']) ? 'input-error' : '' ?>"
        />
        <?php if (isset($errors['tugas'])): ?>
          <p class="field-error"><?= e($errors['tugas']) ?></p>
        <?php endif; ?>
      </div>

      <div class="field">
        <label for="uts">Nilai UTS (30%) *</label>
        <input
          type="number"
          id="uts"
          name="uts"
          step="any"
          min="0"
          max="100"
          value="<?= e($input['uts']) ?>"
          placeholder="0 - 100"
          class="<?= isset($errors['uts']) ? 'input-error' : '' ?>"
        />
        <?php if (isset($errors['uts'])): ?>
          <p class="field-error"><?= e($errors['uts']) ?></p>
        <?php endif; ?>
      </div>

      <div class="field">
        <label for="uas">Nilai UAS (40%) *</label>
        <input
          type="number"
          id="uas"
          name="uas"
          step="any"
          min="0"
          max="100"
          value="<?= e($input['uas']) ?>"
          placeholder="0 - 100"
          class="<?= isset($errors['uas']) ? 'input-error' : '' ?>"
        />
        <?php if (isset($errors['uas'])): ?>
          <p class="field-error"><?= e($errors['uas']) ?></p>
        <?php endif; ?>
      </div>
    </div>

    <div class="form-actions">
      <button type="submit" class="btn btn-primary">Hitung Nilai Akhir</button>
    </div>
  </form>
</section>

<!-- Hasil Perhitungan Terbaru -->
<?php if ($hasil !== null): ?>
  <section class="card">
    <h3>Hasil Perhitungan</h3>
    <div class="result-grid">
      <div class="result-item">
        <small>Nama Peserta</small>
        <strong><?= e($hasil['nama']) ?></strong>
      </div>
      <div class="result-item">
        <small>Divisi</small>
        <strong><?= e($hasil['divisi']) ?></strong>
      </div>
      <div class="result-item">
        <small>Nilai Akhir</small>
        <strong><?= number_format($hasil['nilai_akhir'], 2) ?></strong>
      </div>
      <div class="result-item">
        <small>Huruf Mutu</small>
        <strong><?= e($hasil['huruf_mutu']) ?></strong>
      </div>
      <div class="result-item">
        <small>Status Kelulusan</small>
        <span class="<?= $hasil['status'] === 'Lulus' ? 'status-lulus' : 'status-gagal' ?>">
          <?= e($hasil['status']) ?>
        </span>
      </div>
    </div>
  </section>
<?php endif; ?>

<!-- Bonus: Riwayat 5 Perhitungan Terakhir ($_SESSION) -->
<section class="card">
  <div class="row-between">
    <h3>Riwayat 5 Perhitungan Terakhir (Session)</h3>
    <?php if (!empty($riwayatTersimpan)): ?>
      <form method="post" action="kalkulator-nilai.php">
        <button type="submit" name="hapus_riwayat" value="1" class="btn btn-outline">Hapus Riwayat</button>
      </form>
    <?php endif; ?>
  </div>

  <?php if (empty($riwayatTersimpan)): ?>
    <p>Belum ada riwayat perhitungan pada sesi ini.</p>
  <?php else: ?>
    <div class="table-wrap">
      <table class="data-table table-center">
        <thead>
          <tr>
            <th rowspan="2">Waktu</th>
            <th rowspan="2">Nama</th>
            <th rowspan="2">Divisi</th>
            <th colspan="3">Nilai</th>
            <th rowspan="2">Nilai Akhir</th>
            <th rowspan="2">Huruf</th>
            <th rowspan="2">Status</th>
          </tr>
          <tr>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($riwayatTersimpan as $row): ?>
            <tr>
              <td><?= e($row['waktu']) ?></td>
              <td><?= e($row['nama']) ?></td>
              <td><?= e($row['divisi']) ?></td>
              <td><?= e((string) $row['tugas']) ?></td>
              <td><?= e((string) $row['uts']) ?></td>
              <td><?= e((string) $row['uas']) ?></td>
              <td><strong><?= number_format((float) $row['nilai_akhir'], 2) ?></strong></td>
              <td><strong><?= e($row['huruf_mutu']) ?></strong></td>
              <td>
                <span class="<?= $row['status'] === 'Lulus' ? 'status-lulus' : 'status-gagal' ?>">
                  <?= e($row['status']) ?>
                </span>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  <?php endif; ?>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>