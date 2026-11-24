# Cheatsheet Git — Minggu 1

Catatan 15 perintah Git dasar yang saya gunakan selama setup dan latihan alur kerja tim di Minggu 1 Magang UdaCoding Batch 15.

---

### 1. `git config --global user.name` & `user.email`
```bash
git config --global user.name "pipajalann"
git config --global user.email "eksperimengame@gmail.com"
```
**Penjelasan:** Mengatur nama dan email pemilik commit secara global di komputer, supaya setiap commit yang dibuat tercatat jelas siapa pembuatnya di GitHub.

### 2. `git init`
```bash
git init
```
**Penjelasan:** Mengubah folder biasa di komputer menjadi repository Git lokal (membuat folder tersembunyi `.git` untuk melacak riwayat perubahan file).

### 3. `git clone <url>`
```bash
git clone git@github.com:username/nama-repo.git
```
**Penjelasan:** Menyalin (mengunduh) repository yang sudah ada di GitHub ke komputer secara utuh, lengkap dengan riwayat commit dan sambungan ke remote `origin`.

### 4. `git remote add origin <url>` & `git remote -v`
```bash
git remote add origin git@github.com:pipajalann/magang-udacoding-b15-afif.git
git remote -v
```
**Penjelasan:** Menghubungkan repo lokal dengan repo di GitHub dengan nama alias `origin`. Flag `-v` (*verbose*) dipakai untuk mengecek URL `fetch` dan `push` yang tersambung.

### 5. `git remote set-url origin <url>`
```bash
git remote set-url origin git@github.com:pipajalann/magang-udacoding-b15-afif.git
```
**Penjelasan:** Mengganti alamat URL remote `origin` yang sudah ada (misalnya dari HTTPS ke SSH) tanpa perlu menghapus remote-nya terlebih dahulu.

### 6. `git status`
```bash
git status
```
**Penjelasan:** Mengecek kondisi repo saat ini: sedang berada di branch mana, file apa saja yang baru dibuat, diubah, dihapus, atau sudah siap di-commit.

### 7. `git add <file>` / `git add .`
```bash
git add README.md
git add .
```
**Penjelasan:** Memasukkan perubahan file ke *staging area* (daftar antrean file yang siap disimpan ke commit). Tanda titik (`.`) berarti memilih semua perubahan sekaligus.

### 8. `git commit -m "pesan"`
```bash
git commit -m "docs: tambah cheatsheet git minggu 1"
```
**Penjelasan:** Menyimpan perubahan yang ada di *staging area* ke riwayat Git lokal. Flag `-m` (*message*) dipakai untuk menulis pesan commit (sebaiknya mengikuti format Conventional Commits seperti `feat:`, `fix:`, `docs:`).

### 9. `git log --oneline`
```bash
git log --oneline
```
**Penjelasan:** Melihat daftar riwayat commit yang pernah dibuat. Flag `--oneline` membuat tampilannya ringkas (satu baris per commit) agar mudah dibaca.

### 10. `git branch` & `git branch -M main`
```bash
git branch
git branch -M main
```
**Penjelasan:** `git branch` menampilkan daftar branch yang ada di lokal (tanda `*` menunjukkan branch aktif). `git branch -M main` mengganti nama branch saat ini menjadi `main`.

### 11. `git checkout -b <nama-branch>`
```bash
git checkout -b docs/cheatsheet-git
```
**Penjelasan:** Membuat branch baru sekaligus langsung pindah ke branch tersebut. Ini penting dalam kerja tim agar pekerjaan baru tidak langsung mengubah branch `main`.

### 12. `git checkout <nama-branch>`
```bash
git checkout main
```
**Penjelasan:** Berpindah ke branch lain yang sudah ada, misalnya kembali ke branch `main` setelah selesai mengerjakan fitur di branch terpisah.

### 13. `git push -u origin <nama-branch>`
```bash
git push -u origin docs/cheatsheet-git
```
**Penjelasan:** Mengirim (upload) commit dari komputer lokal ke GitHub pada branch tertentu. Flag `-u` (*set-upstream*) mengaitkan branch lokal dengan branch di GitHub agar ke depannya cukup mengetik `git push`.

### 14. `git pull origin main`
```bash
git pull origin main
```
**Penjelasan:** Mengambil dan menggabungkan perubahan terbaru dari GitHub ke repo lokal. Wajib dijalankan agar kode di laptop selalu sinkron dengan versi terbaru di GitHub (misalnya setelah Pull Request di-merge).

### 15. `git diff`
```bash
git diff
```
**Penjelasan:** Menampilkan detail baris per baris perubahan yang sudah dilakukan pada file sebelum dimasukkan ke *staging area* (`git add`), berguna untuk mengecek ulang kode sebelum commit.
