# Laporan Minggu 1 - Magang Udacoding Batch 15

- **Nama:** Afif Ananda Utama
- **Divisi:** Web Development
- **Repository GitHub:** [https://github.com/pipajalann/magang-udacoding-b15-afif](https://github.com/pipajalann/magang-udacoding-b15-afif)
- **Live Landing Page (GitHub Pages):** [https://pipajalann.github.io/magang-udacoding-b15-afif/minggu-1/landing-page/](https://pipajalann.github.io/magang-udacoding-b15-afif/minggu-1/landing-page/)

---

## 1. Ringkasan Materi yang Dipelajari Minggu Ini

Pada Minggu 1, saya mempelajari dan mempraktikkan dasar-dasar pengembangan web secara menyeluruh melalui tiga bagian tugas:

1. **Setup Tools & Alur Kerja Git/GitHub (Bagian A):**
   - Instalasi dan konfigurasi VS Code, Git (SSH ke GitHub), serta Laragon (PHP 8.3).
   - Praktik alur kerja tim: membuat branch terpisah (`docs/...`, `feature/...`), menulis commit dengan format **Conventional Commits** (`feat:`, `docs:`, `style:`), membuka **Pull Request**, merge ke `main`, dan sinkronisasi repo lokal.
   - Praktik kolaborasi lintas repository menggunakan **Fork & Pull Request** untuk menambahkan nama ke `CONTRIBUTORS.md` teman satu divisi, serta menyusun 15 perintah Git di `minggu-1/cheatsheet-git.md`.
2. **HTML5 Semantik & CSS3 Responsif Murni (Bagian B):**
   - Membangun landing page fiktif *"Udacoding Bootcamp Fullstack 12 Minggu"* menggunakan HTML dan CSS murni tanpa framework (tanpa Bootstrap/Tailwind).
   - Menerapkan struktur HTML semantik (`header`, `nav`, `main`, `section`, `article`, `details`/`summary`, `footer`), satu tag `<h1>`, CSS variables di `:root`, satuan `rem`, Google Fonts, Flexbox (4 card keunggulan), CSS Grid 1/2/3 kolom (6 card kurikulum), media query mobile-first (`576px`, `768px`, `992px`), menu hamburger murni CSS, validasi form HTML5, serta deployment ke **GitHub Pages**.
3. **PHP 8 Dasar, Validasi Form & Keamanan XSS (Bagian C):**
   - Mengerjakan 8 file latihan sintaks PHP 8: variabel/tipe data/konstanta/`var_dump`, operator & string, percabangan `if/elseif/else` & `match`, perulangan `for`/`while`/`foreach` (tabel perkalian 1-10), array associative & multidimensi, function dengan type declaration (`hitungRataRata`), built-in function string & array, serta format tanggal Indonesia.
   - Membangun mini project **Kalkulator Nilai Peserta** dengan pemisahan file (`header.php`, `footer.php`, `functions.php`), validasi form POST (pesan error di bawah field & isian tidak hilang saat error), escape output memakai `htmlspecialchars()` untuk mencegah serangan **XSS**, serta penyimpanan riwayat 5 perhitungan terakhir menggunakan `$_SESSION`.

---

## 2. Tabel Setiap Bagian Tugas

| Bagian | Tugas | Link | Status | Kendala | Solusi |
| --- | --- | --- | --- | --- | --- |
| **Bagian A** | Setup Tools, Git/GitHub, Cheatsheet Git & Kolaborasi PR | [cheatsheet-git.md](./cheatsheet-git.md), [CONTRIBUTORS.md](../CONTRIBUTORS.md), [PR #1](https://github.com/pipajalann/magang-udacoding-b15-afif/pull/1) | Selesai (PR ke teman sudah dikirim, menunggu PR masuk untuk direview) | Error `Deletion of directory failed` saat `git checkout main` di Windows karena folder masih terbuka di VS Code / Live Server. | Menutup folder/tab yang mengunci, lalu menyinkronkan branch lokal menggunakan `git checkout -B main origin/main` dan `git restore .`. |
| **Bagian B** | Landing Page Responsif (HTML & CSS Murni) + GitHub Pages | [landing-page/index.html](./landing-page/index.html), [Live GitHub Pages](https://pipajalann.github.io/magang-udacoding-b15-afif/minggu-1/landing-page/), [PR #2](https://github.com/pipajalann/magang-udacoding-b15-afif/pull/2) | Selesai | Warna teks badge kurikulum sempat tertimpa warna abu-abu dari `.card p` (kontras rendah), dan tampilan dropdown `<select>` masih terlihat mentah. | Memperbaiki spesifisitas CSS, mengganti badge menjadi watermark angka modern (`::before`), dan merapikan dropdown dengan `appearance: base-select`. |
| **Bagian C** | 8 Latihan Sintaks PHP & Mini Project Kalkulator Nilai Peserta | [php-dasar/index.php](./php-dasar/index.php), [kalkulator-nilai.php](./php-dasar/kalkulator-nilai.php) | Selesai | Proyek berada di `Documents\Magang` sehingga awalnya tidak langsung terbaca dari `localhost` Laragon, serta tampilan form terasa terlalu memanjang. | Mengarahkan Document Root Laragon ke `C:\Users\pc\Documents\Magang` (atau `php -S localhost:8000`) dan menata ulang form dengan grid 3 kolom untuk input nilai. |

---

## 3. Tiga Hal yang Paling Sulit & Cara Mengatasinya

1. **Sinkronisasi Branch Git di Windows Setelah Merge Pull Request**
   - **Kendala:** Setelah PR di-merge di GitHub, perintah `git checkout main` sering gagal menghapus folder yang sedang terbuka di Live Server / File Explorer sehingga posisi repo lokal sempat tertahan di branch fitur.
   - **Cara Mengatasi:** Menggunakan `git checkout -B main origin/main` dilanjutkan `git restore .` agar branch `main` lokal langsung sejajar dengan `origin/main` secara bersih tanpa kehilangan file.
2. **Menjaga CSS Murni Tetap Ringkas, Rapi, dan Responsif di Semua Ukuran Layar**
   - **Kendala:** File CSS sempat menjadi terlalu panjang, terjadi konflik spesifisitas warna di dalam card, serta tampilan form & dropdown bawaan browser kurang rapi.
   - **Cara Mengatasi:** Menyederhanakan stylesheet memakai variabel `:root`, selector `:is(...)`, pembagian blok yang terstruktur, serta memakai satu `style.css` bersama antara Landing Page dan halaman PHP.
3. **Validasi Form Server-Side (Sticky Input) & Keamanan XSS di PHP**
   - **Kendala:** Menjaga agar isian form tidak hilang ketika terjadi error validasi, menampilkan error tepat di bawah setiap field, dan mencegah eksekusi script berbahaya dari input pengguna.
   - **Cara Mengatasi:** Memisahkan logika validasi ke `includes/functions.php` yang mengembalikan array `$errors` per field, mengisi ulang nilai input (`value`), dan membungkus semua output user dengan helper `e()` berbasis `htmlspecialchars($teks, ENT_QUOTES, 'UTF-8')`.

---

## 4. Target Belajar Minggu ke-2

1. **Memperdalam JavaScript & Manipulasi DOM:** Memahami logika JavaScript modern (ES6+), event handling, dan interaksi dinamis di sisi frontend tanpa reload halaman.
2. **Belajar Database MySQL & Koneksi PHP (PDO):** Merancang tabel relasional, menulis query SQL dasar, dan membangun fitur CRUD (Create, Read, Update, Delete) yang aman dengan *prepared statements*.
3. **Membiasakan Code Review & Clean Code:** Menerapkan struktur folder yang rapi, commit yang konsisten, serta lebih aktif melakukan review Pull Request bersama teman satu divisi.

---

## 5. Rencana Demo / Presentasi 5 Menit

- **0:00 - 0:45 (Intro & Bagian A):** Perkenalan singkat, tunjukkan repo GitHub, riwayat Pull Request yang sudah di-merge, dan `cheatsheet-git.md`.
- **0:45 - 2:15 (Demo Bagian B - Landing Page):** Buka live link GitHub Pages, tunjukkan tampilan desktop -> tablet -> mobile (hamburger menu & Grid 3/2/1), form kontak, dan skor Lighthouse.
- **2:15 - 4:00 (Demo Bagian C - PHP Dasar):** Buka `localhost/minggu-1/php-dasar/`, tunjukkan contoh latihan PHP, lalu demo **Kalkulator Nilai Peserta** (uji validasi kosong/error, uji input valid -> hasil & riwayat `$_SESSION`, serta uji input `<script>alert('XSS')</script>` untuk membuktikan proteksi `htmlspecialchars()`).
- **4:00 - 5:00 (Kendala & Target Minggu ke-2):** Jelaskan singkat 3 kendala utama + solusinya dan tutup dengan target belajar Minggu ke-2.

---

## 6. Daftar Output yang Dikumpulkan

- **Repo GitHub:** `https://github.com/pipajalann/magang-udacoding-b15-afif`
- **Link PR (Repo Sendiri):**
  - PR #1 (Bagian A - Cheatsheet Git): `https://github.com/pipajalann/magang-udacoding-b15-afif/pull/1`
  - PR #2 (Bagian B - Landing Page): `https://github.com/pipajalann/magang-udacoding-b15-afif/pull/2`
  - PR #3 (Bagian C & Laporan Minggu 1): *(isi setelah PR dibuat & di-merge)*
- **Link PR ke Repo Teman:** `https://github.com/hidz09/magang-udacoding-b15-syahid/pulls` *(ganti dengan nomor PR spesifik milikmu)*
- **Live GitHub Pages:** `https://pipajalann.github.io/magang-udacoding-b15-afif/minggu-1/landing-page/`
- **Dokumen Wajib:** `minggu-1/cheatsheet-git.md` dan `minggu-1/laporan-minggu-1.md`
- **Screenshot yang Dilampirkan saat Pengumpulan:**
  - [ ] Landing Page tampilan Desktop, Tablet, dan Mobile
  - [ ] Skor Lighthouse (Accessibility & Best Practices >= 90)
  - [ ] Latihan PHP berjalan di `localhost`
  - [ ] Kalkulator Nilai Peserta (hasil + validasi error + riwayat session) berjalan di `localhost`
