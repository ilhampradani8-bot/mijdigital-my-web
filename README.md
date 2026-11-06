# MIJ Digital ENT — Official Website

Website resmi **MIJ Digital ENT** (https://mijdigital.my) — Solusi pembuatan website profesional, personal branding, corporate profile, dan sistem perniagaan di Malaysia.

---

## 🚀 Panduan Produksi & Auto-Deployment FTP

Proyek ini telah dikonfigurasi untuk auto-deploy otomatis ke hosting cPanel melalui **GitHub Actions**.

### 1. Kredensial FTP Terpasang (GitHub Secrets)
Akun FTP berikut sudah terpasang secara aman di menu **Settings ➔ Secrets and variables ➔ Actions** repository GitHub:
- `FTP_SERVER`: `maverick.gbnetwork.my`
- `FTP_USERNAME`: `id_rsa@mijdigital.my`
- `FTP_PASSWORD`: *(Tersimpan aman di Secrets)*

### 2. Workflow Otomatis (`.github/workflows/deploy.yml`)
Setiap kali Anda melakukan `git push origin main`, workflow GitHub Actions akan otomatis mensinkronkan perubahan file ke direktori `/public_html/` di cPanel hosting:
```yaml
name: Deploy Website to cPanel FTP

on:
  push:
    branches:
      - main

jobs:
  web-deploy:
    name: Sync to cPanel public_html
    runs-on: ubuntu-latest
    steps:
      - name: 🚚 Checkout Code
        uses: actions/checkout@v4
        with:
          fetch-depth: 2

      - name: 📂 Sync files via FTP
        uses: SamKirkland/FTP-Deploy-Action@v4.3.5
        with:
          server: ${{ secrets.FTP_SERVER }}
          username: ${{ secrets.FTP_USERNAME }}
          password: ${{ secrets.FTP_PASSWORD }}
          server-dir: public_html/
          exclude: |
            **/.git*
            **/.git*/**
            README.md
```

---

## 🛠️ Struktur File & Cara Edit Website

| File / Folder | Fungsi Utama |
| :--- | :--- |
| `index.php` | Halaman utama (Hero, CTA Neumorphism, Services overview) |
| `portfolio.php` | Halaman katalog portofolio proyek klien |
| `services.php` | Halaman rincian layanan digital & web |
| `pricing.php` | Halaman paket harga website |
| `header.php` | Navigasi atas, Meta SEO, Schema JSON-LD, Favicon, Verification tags |
| `footer.php` | Bagian bawah website, kontak, copyright |
| `data.json` | Database flat-file untuk daftar portofolio & harga paket |
| `lang.json` | Kamus multi-bahasa (Bahasa Melayu & English) |
| `admin.php` | Panel admin untuk upload dan kelola portofolio tanpa coding |
| `uploads/` | Direktori penyimpanan gambar screenshot portofolio |
| `robots.txt` | Aturan crawling untuk Googlebot, Bingbot, dan AI LLM engines |
| `sitemap.xml` | Peta situs XML resmi untuk mesin pencari |

---

## 📝 Alur Pengembangan (Git Workflow)

1. **Edit file** di local / workspace.
2. **Commit & Push ke GitHub**:
   ```bash
   git add -A
   git commit -m "update: perbaikan konten dan tampilan"
   git push origin main
   ```
3. GitHub Actions akan otomatis mengunggah perubahan ke cPanel dalam waktu ~15-30 detik.

---

## 🔍 Catatan SEO & Google Indexing
- Pastikan kode verifikasi Google Search Console diisi pada `<meta name="google-site-verification" content="...">` di `header.php`.
- Halaman portofolio harus menyajikan data HTML langsung dari server (`data.json`) agar crawler Googlebot tidak membaca halaman sebagai "kosong".

