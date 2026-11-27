<?php
declare(strict_types=1);

/**
 * Escape teks agar aman ditampilkan di HTML (mencegah serangan XSS).
 */
function e(string $teks): string
{
    return htmlspecialchars($teks, ENT_QUOTES, 'UTF-8');
}

/**
 * Daftar divisi magang yang valid untuk dropdown.
 */
function daftarDivisi(): array
{
    return [
        'Web Development',
        'Mobile Development',
        'UI/UX Design',
        'Quality Assurance',
    ];
}

/**
 * Menghitung nilai akhir: 30% Tugas + 30% UTS + 40% UAS.
 */
function hitungNilaiAkhir(float $tugas, float $uts, float $uas): float
{
    return round(($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40), 2);
}

/**
 * Konversi nilai akhir (0-100) ke huruf mutu A-E menggunakan match (PHP 8).
 */
function konversiHurufMutu(float $nilai): string
{
    return match (true) {
        $nilai >= 85 => 'A',
        $nilai >= 75 => 'B',
        $nilai >= 70 => 'C',
        $nilai >= 55 => 'D',
        default      => 'E',
    };
}

/**
 * Menentukan status kelulusan (Lulus jika >= 70).
 */
function tentukanStatus(float $nilai): string
{
    return $nilai >= 70 ? 'Lulus' : 'Tidak Lulus';
}

/**
 * Validasi input form Kalkulator Nilai Peserta.
 * Mengembalikan array berisi pesan error per nama field.
 */
function validasiKalkulator(array $input): array
{
    $errors = [];

    if ($input['nama'] === '') {
        $errors['nama'] = 'Nama peserta wajib diisi.';
    }

    if ($input['divisi'] === '' || !in_array($input['divisi'], daftarDivisi(), true)) {
        $errors['divisi'] = 'Pilih salah satu divisi yang tersedia.';
    }

    $fieldNilai = [
        'tugas' => 'Nilai Tugas',
        'uts'   => 'Nilai UTS',
        'uas'   => 'Nilai UAS',
    ];

    foreach ($fieldNilai as $key => $label) {
        $nilai = $input[$key];
        if ($nilai === '') {
            $errors[$key] = "$label wajib diisi.";
        } elseif (!is_numeric($nilai)) {
            $errors[$key] = "$label harus berupa angka.";
        } elseif ((float) $nilai < 0 || (float) $nilai > 100) {
            $errors[$key] = "$label harus berada di antara 0 sampai 100.";
        }
    }

    return $errors;
}