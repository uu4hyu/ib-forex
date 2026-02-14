# IB Forex - Deploy Ready (CodeIgniter 3 Style)

Project ini telah direfaktor dari single `index.html` menjadi struktur MVC ala CodeIgniter 3 agar lebih siap deploy.

## Struktur

- `index.php` → front controller.
- `application/controllers/Home.php` → controller halaman utama.
- `application/views/home.php` → tampilan landing page.
- `application/config/` → konfigurasi base URL dan routing.
- `system/core/` → bootstrap ringan (controller, loader, router) dengan pola CI3.
- `.htaccess` → URL rewrite untuk produksi Apache.
- `.env.example` → contoh environment variable deploy.

## Menjalankan lokal

```bash
php -S 0.0.0.0:8000
```

Lalu buka `http://localhost:8000`.

## Deploy (shared hosting / VPS)

1. Upload semua file ke document root.
2. Pastikan `mod_rewrite` aktif (Apache).
3. Salin `.env.example` menjadi `.env` (opsional), lalu set:
   - `CI_ENV=production`
   - `APP_BASE_URL=https://domain-anda.com`
4. Pastikan web server mengarah ke `index.php` sebagai entry point.

## Catatan

Template lama tetap dipakai penuh dan sekarang dimuat melalui view (`application/views/home.php`) agar siap dikembangkan ke multi-page/module berikutnya.
