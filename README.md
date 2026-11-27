# Magang UdaCoding Batch 15 - Afif

Repository ini dibuat sebagai dokumentasi progres, latihan, dan tugas selama mengikuti program magang di **UdaCoding Batam (Batch 15)**.

## Profil Singkat
- **Nama Lengkap:** Afif Ananda Utama
- **Nama Panggilan:** Afif
- **Username GitHub:** [@pipajalann](https://github.com/pipajalann)
- **Divisi:** Web Development
- **Batch:** 15 (UdaCoding Batam)

## 3 Target Belajar Selama Magang
1. **Menguasai Alur Kerja Tim dengan Git & GitHub** — Memahami branching, Conventional Commits, Pull Request, hingga code review seperti di dunia kerja nyata.
2. **Membangun Tampilan Web yang Rapi & Responsif** — Memperkuat dasar HTML, CSS, dan JavaScript agar website nyaman dipakai di desktop maupun mobile.
3. **Memahami Pengembangan Web Dinamis (Backend & Database)** — Belajar mengelola logika server menggunakan PHP serta menghubungkannya dengan database.

## Struktur Folder
- `minggu-1/cheatsheet-git.md` — Catatan 15 perintah Git dasar.
- `minggu-1/landing-page/` — Landing page responsif "Udacoding Bootcamp Fullstack 12 Minggu" (HTML5 & CSS3 murni).
- `minggu-1/php-dasar/` — 8 latihan sintaks PHP dasar dan mini project Kalkulator Nilai Peserta.

## Catatan Keamanan PHP: Kenapa Wajib `htmlspecialchars()`?
Pada mini project **Kalkulator Nilai Peserta** (`minggu-1/php-dasar/kalkulator-nilai.php`), seluruh output yang berasal dari input pengguna (seperti nama dan nilai) selalu di-escape menggunakan fungsi `htmlspecialchars($teks, ENT_QUOTES, 'UTF-8')`.

Tujuannya adalah **mencegah serangan XSS (Cross-Site Scripting)**. Tanpa `htmlspecialchars()`, jika pengguna memasukkan kode berbahaya seperti `<script>alert('XSS')</script>` ke dalam input form lalu ditampilkan langsung ke halaman HTML, browser akan mengeksekusi script tersebut. Dengan `htmlspecialchars()`, karakter khusus seperti `<`, `>`, `"`, dan `'` diubah menjadi entitas HTML (`&lt;`, `&gt;`, `&quot;`, `&#039;`) sehingga browser hanya menampilkannya sebagai teks biasa, bukan kode yang dijalankan.
