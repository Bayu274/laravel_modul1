# NOVARA Motors — TODO & Progress Tracker

> Website dealer mobil listrik fiktif. Laravel 13 + Tailwind CSS 4 + SQLite + Pest 5.
> Setiap fase mencakup konsep dari MODUL PBL Laravel 11 Fundamental (12 Acara).

---

## Status Singkat

| Fase | Status | Keterangan |
|------|--------|------------|
| Fase 1: Migrations | [✓] Selesai | 10 tabel baru + edit users — 19 tabel total |
| Fase 2: Models & Relations | [✓] Selesai | 9 models + relasi + User helpers |
| Fase 3: Seeders & Factories | [✓] Selesai | 6 factories + 3 seeders — 4 mobil, 56 specs, 29 features |
| Fase 4: Blade Components | [✓] Selesai | 11 komponen: layout/app, layout/admin, nav-link, button, alert, input, select, textarea, badge, stat-card, modal |
| Fase 5: Refactor Views | [✓] Selesai | CarController + HomeController ke Eloquent, 3 views pakai <x-layout.app> |
| Fase 6: Auth | [✓] Selesai | Login, register, logout, RoleMiddleware, 2 auth views |
| Fase 7: Admin Dashboard | [✓] Selesai | DashboardController + Chart.js + stat cards + 18 admin views |
| Fase 8: Admin CRUD | [✓] Selesai | Cars, Categories, News, Promos controllers + views |
| Fase 9: Admin Management | [✓] Selesai | Orders, Test Drives, Users controllers + views |
| Fase 10: Checkout | [✓] Selesai | CheckoutController + checkout/create view |
| Fase 11: Customer Pages | [✓] Selesai | Dashboard, riwayat pesanan, profil + edit |
| Fase 12: Public Pages | [✓] Selesai | Berita (index + show), promo display di homepage |
| Fase 13: Optimization | [✓] Selesai | Eager loading di semua controller, pagination aktif |
| Fase 14: Final Testing | [✓] Selesai | 17 Pest tests PASS + Pint formatting |

---

## Database Schema (Referensi)

### Tabel yang Sudah Ada (Bawaan Laravel)
- `users` — PERLU DITAMBAH field: role, phone, address, city, province, postal_code, id_card_number, id_card_image
- `cache`
- `jobs`

### Tabel Baru yang Dibuat

```
categories          — Kategori mobil (Hatchback, Sedan, GT, SUV)
cars                — Data mobil (e3, e5, gt, x) + spesifikasi
specifications      — Detail spesifikasi per mobil (label, value, kategori)
features            — Fitur unggulan per mobil
car_category        — Pivot table: many-to-many cars <-> categories
news                — Berita (judul, konten, gambar, status publish)
promos              — Promo (diskon, kode, masa berlaku)
promo_car           — Pivot table: promo terikat mobil (nullable untuk promo umum)
test_drive_requests — Permintaan test drive
orders              — Pemesanan mobil (data diri, pembayaran, alamat kirim)
```

### Relasi antar Model

| Model | Relasi | Tipe | Keterangan |
|-------|--------|------|------------|
| User | orders() | hasMany | |
| User | testDriveRequests() | hasMany | |
| Category | cars() | belongsToMany | Pivot: car_category |
| Car | specifications() | hasMany | |
| Car | features() | hasMany | |
| Car | categories() | belongsToMany | Pivot: car_category |
| Car | orders() | hasMany | |
| Car | promos() | belongsToMany | Pivot: promo_car |
| Specification | car() | belongsTo | |
| Feature | car() | belongsTo | |
| News | — | standalone | Tidak ada relasi |
| Promo | cars() | belongsToMany | Pivot: promo_car |
| TestDriveRequest | user() | belongsTo | nullable |
| Order | user() | belongsTo | |
| Order | car() | belongsTo | |

---

## FASE 1: Migrations (Acara VII, VIII, IX)

- [ ] Edit migration `create_users_table` — tambah field: `role`, `phone`, `address`, `city`, `province`, `postal_code`, `id_card_number`, `id_card_image`
- [ ] Buat migration `create_categories_table` — `id`, `name`, `slug`, `description`, `timestamps`
- [ ] Buat migration `create_cars_table` — `id`, `name`, `slug`, `tagline`, `subtitle`, `description`, `price`, `price_numeric`, `image`, `color`, `status`, `timestamps`
- [ ] Buat migration `create_specifications_table` — `id`, `car_id` (FK), `category`, `label`, `value`, `order_column`, `timestamps`
- [ ] Buat migration `create_features_table` — `id`, `car_id` (FK), `description`, `order_column`, `timestamps`
- [ ] Buat migration `create_car_category_table` (pivot) — `car_id` (FK), `category_id` (FK), `timestamps`
- [ ] Buat migration `create_news_table` — `id`, `title`, `slug`, `excerpt`, `content` (longText), `image`, `is_published`, `is_featured`, `published_at`, `timestamps`
- [ ] Buat migration `create_promos_table` — `id`, `title`, `slug`, `description`, `discount_type`, `discount_value`, `promo_code`, `image`, `starts_at`, `expires_at`, `is_active`, `timestamps`
- [ ] Buat migration `create_promo_car_table` (pivot) — `promo_id` (FK), `car_id` (FK), `timestamps`
- [ ] Buat migration `create_test_drive_requests_table` — `id`, `user_id` (FK nullable), `nama`, `email`, `phone`, `model`, `preferred_date`, `status`, `notes`, `timestamps`
- [ ] Buat migration `create_orders_table` — `id`, `user_id` (FK), `car_id` (FK), `color`, `payment_method`, `down_payment`, `monthly_installment`, `tenor`, `full_name`, `phone`, `email`, `shipping_address`, `shipping_city`, `shipping_province`, `shipping_postal_code`, `notes`, `status`, `timestamps`
- [ ] Jalankan `php artisan migrate:fresh` — pastikan semua tabel terbuat
- [ ] Verifikasi di TablePlus — semua tabel muncul dengan benar

---

## FASE 2: Models & Relationships (Acara VI, VII, IX, XII)

- [ ] Buat model `Category.php` — `$fillable`, `cars()` belongsToMany
- [ ] Buat model `Car.php` — `$fillable`, `$table`, `specifications()` hasMany, `features()` hasMany, `categories()` belongsToMany, `orders()` hasMany, `promos()` belongsToMany
- [ ] Buat model `Specification.php` — `$fillable`, `car()` belongsTo
- [ ] Buat model `Feature.php` — `$fillable`, `car()` belongsTo
- [ ] Buat model `News.php` — `$fillable`, `$casts` (is_published, is_featured, published_at)
- [ ] Buat model `Promo.php` — `$fillable`, `$casts` (starts_at, expires_at, is_active), `cars()` belongsToMany
- [ ] Buat model `TestDriveRequest.php` — `$fillable`, `$casts` (preferred_date), `user()` belongsTo nullable
- [ ] Buat model `Order.php` — `$fillable`, `$casts`, `user()` belongsTo, `car()` belongsTo
- [ ] Update model `User.php` — tambah `$fillable` field baru, `orders()` hasMany, `testDriveRequests()` hasMany
- [ ] Jalankan `php artisan tinker` — test relasi dasar (optional, quick check)

---

## FASE 3: Seeders & Factories (Acara VIII, XI)

### Factories
- [ ] Buat `CategoryFactory.php` — Faker: name, slug, description
- [ ] Buat `CarFactory.php` — Faker: name, slug, tagline, subtitle, description, price, image, color
- [ ] Buat `SpecificationFactory.php` — Faker: category, label, value, order_column
- [ ] Buat `FeatureFactory.php` — Faker: description, order_column
- [ ] Buat `TestDriveRequestFactory.php` — Faker: nama, email, phone, model, preferred_date, status
- [ ] Buat `OrderFactory.php` — Faker: color, payment_method, full_name, phone, email, status
- [ ] Tambahkan `HasFactory` ke semua model baru

### Seeders
- [ ] Buat `CategorySeeder.php` — 4 kategori: Hatchback, Sedan, Grand Tourer, SUV
- [ ] Buat `CarSeeder.php` — 4 mobil (e3, e5, gt, x) dengan SEMUA data spesifikasi & fitur dari hardcoded di CarController (32 specs + 29 features)
- [ ] Buat `AdminSeeder.php` — 1 super admin: admin@novara.com / password
- [ ] Update `DatabaseSeeder.php` — panggil CategorySeeder, CarSeeder, AdminSeeder, User::factory(5)->create()
- [ ] Jalankan `php artisan migrate:fresh --seed`
- [ ] Verifikasi di TablePlus — data muncul dengan benar (4 mobil, 32 specs, 29 features, 4 kategori, 1 admin)
- [ ] Jalankan `php artisan tinker` — test `Car::with('specifications', 'features', 'categories')->get()` pastikan relasi works

---

## FASE 4: Blade Components (Acara III, IV, V)

### Layout Components
- [ ] Buat `resources/views/components/layout/app.blade.php` — master layout publik+customer: `<html>`, `<head>`, `<header>`, `{{ $slot }}`, `<footer>`, `<script>`, cookie consent
- [ ] Buat `resources/views/components/layout/admin.blade.php` — admin layout: sidebar navigation + topbar + `{{ $slot }}`

### Reusable Components
- [ ] Buat `resources/views/components/nav-link.blade.php` — `{{ $slot }}` + `$attributes` + props `:active`, `href`
- [ ] Buat `resources/views/components/button.blade.php` — `{{ $slot }}` + `$attributes` + props `variant` (primary/secondary)
- [ ] Buat `resources/views/components/alert.blade.php` — flash message: success/error/warning + auto-dismiss
- [ ] Buat `resources/views/components/input.blade.php` — label + input + `@error` + `old()` — props: `name`, `label`, `type`
- [ ] Buat `resources/views/components/select.blade.php` — label + select + `@error` + `old()` — props: `name`, `label`, `options`
- [ ] Buat `resources/views/components/textarea.blade.php` — label + textarea + `@error` + `old()`
- [ ] Buat `resources/views/components/badge.blade.php` — status badge: pending (yellow), confirmed (blue), delivered (green), cancelled (red)
- [ ] Buat `resources/views/components/stat-card.blade.php` — angka statistik untuk dashboard admin
- [ ] Buat `resources/views/components/modal.blade.php` — konfirmasi hapus

---

## FASE 5: Refactor Views ke Eloquent + Layout (Acara VI, X)

- [ ] Refactor `welcome.blade.php` — pakai `<x-layout.app>`, data mobil dari Eloquent (`Car::with('categories')->take(4)->get()`), data berita terbaru, data promo aktif
- [ ] Refactor `CarController.php` — hapus hardcoded `MODELS` constant, gunakan Eloquent: `Car::with('specifications', 'features', 'categories')->where('slug', $slug)->firstOrFail()`
- [ ] Refactor `resources/views/cars/show.blade.php` — tampilkan data dari Eloquent (bukan array), spesifikasi dari relasi, fitur dari relasi
- [ ] Buat `resources/views/cars/index.blade.php` — katalog mobil + filter kategori + `Car::paginate(12)`
- [ ] Buat `HomeController.php` — ambil data: 4 mobil unggulan, 3 berita terbaru, 2 promo aktif
- [ ] Jalankan `php artisan serve` — pastikan homepage dan detail page berjalan dengan data dari DB
- [ ] Hapus `CarController::MODELS` constant (setelah semua pindah ke DB)

---

## FASE 6: Authentication (Acara XII)

### Middleware
- [ ] Buat middleware `RoleMiddleware` — cek role user (admin/customer)
- [ ] Register middleware di `bootstrap/app.php` atau `Kernel.php`
- [ ] Jalankan `php artisan migrate` (jika ada perubahan users table)

### Auth Controllers
- [ ] Buat `Auth/LoginController.php` — showLoginForm, login (validasi email+password), logout
- [ ] Buat `Auth/RegisterController.php` — showForm (customer only), register (validasi: name, email, password, phone, address, city, province, postal_code)
- [ ] Buat `Auth/LogoutController.php` — logout + redirect

### Auth Views
- [ ] Buat `resources/views/auth/login.blade.php` — form login + `@error` + `old()`
- [ ] Buat `resources/views/auth/register.blade.php` — form register lengkap + validasi

### Routes
- [ ] Tambahkan routes auth (login, register, logout) ke `routes/web.php`
- [ ] Update routes publik + customer + admin dengan middleware yang sesuai
- [ ] Test login/register flow — pastikan redirect berfungsi

---

## FASE 7: Admin Dashboard (Acara X, XII)

### Admin Layout
- [ ] Buat `resources/views/components/layout/admin.blade.php` — sidebar dengan 8 menu (Dashboard, Mobil, Kategori, Berita, Promo, Pesanan, Test Drive, Pengguna) + topbar + `{{ $slot }}`
- [ ] Style sidebar: dark theme, active state dengan `request()->is()`, responsive (collapse di mobile)

### Dashboard
- [ ] Buat `Admin/DashboardController.php` — query stats: total cars, orders, users, test drives, revenue, order status breakdown, monthly revenue (12 bulan)
- [ ] Buat `resources/views/admin/dashboard.blade.php` — 4 stat cards + bar chart (Chart.js) penjualan bulanan + donut chart status order
- [ ] Integrasikan Chart.js CDN — bar chart pendapatan per bulan, donut chart status order
- [ ] Data chart dikirim sebagai JSON dari controller ke view

---

## FASE 8: Admin CRUD (Acara XI, XII)

### Mobil
- [ ] Buat `Admin/CarController.php` — index (pagination), create, store (validasi), edit, update, destroy
- [ ] Buat `resources/views/admin/cars/index.blade.php` — tabel + pagination + tombol tambah/edit/hapus
- [ ] Buat `resources/views/admin/cars/create.blade.php` — form: basic info + dynamic specs (add/remove rows) + dynamic features + kategori multi-select
- [ ] Buat `resources/views/admin/cars/edit.blade.php` — form edit dengan data existing + `old()` fallback
- [ ] Validasi: required fields, numeric price, image upload (optional)
- [ ] Handle delete dengan modal konfirmasi

### Kategori
- [ ] Buat `Admin/CategoryController.php` — index, create, store, edit, update, destroy
- [ ] Buat `resources/views/admin/categories/index.blade.php`
- [ ] Buat `resources/views/admin/categories/create.blade.php`

### Berita
- [ ] Buat `Admin/NewsController.php` — index (pagination), create, store, edit, update, destroy, toggle-publish
- [ ] Buat `resources/views/admin/news/index.blade.php` — tabel + status badge + toggle publish
- [ ] Buat `resources/views/admin/news/create.blade.php` — form: title, excerpt, content (textarea), image, is_featured, is_published
- [ ] Buat `resources/views/admin/news/edit.blade.php`
- [ ] Validasi: required title, content

### Promo
- [ ] Buat `Admin/PromoController.php` — index, create, store, edit, update, destroy
- [ ] Buat `resources/views/admin/promos/index.blade.php` — tabel + status badge
- [ ] Buat `resources/views/admin/promos/create.blade.php` — form: title, discount type (select: percentage/fixed), discount value, promo code, dates, is_active, multi-select mobil (nullable untuk promo umum)
- [ ] Buat `resources/views/admin/promos/edit.blade.php`
- [ ] Simpan relasi promo_car di controller (sync)

---

## FASE 9: Admin Management (Acara XI, XII)

### Pesanan
- [ ] Buat `Admin/OrderController.php` — index (pagination + filter status), show (detail), updateStatus
- [ ] Buat `resources/views/admin/orders/index.blade.php` — tabel + filter dropdown status + badge
- [ ] Buat `resources/views/admin/orders/show.blade.php` — detail lengkap: data pembeli, mobil, pembayaran, alamat kirim, tombol ubah status
- [ ] Validasi status transitions (pending → confirmed → processing → delivered / cancelled)

### Test Drive
- [ ] Buat `Admin/TestDriveController.php` — index (pagination + filter), updateStatus
- [ ] Buat `resources/views/admin/test-drives/index.blade.php` — tabel + filter status + ubah status

### Pengguna
- [ ] Buat `Admin/UserController.php` — index, create (admin baru), store
- [ ] Buat `resources/views/admin/users/index.blade.php` — tabel daftar user + admin
- [ ] Buat `resources/views/admin/users/create.blade.php` — form buat admin baru: name, email, password, role= admin
- [ ] Hanya admin yang bisa buat admin baru

---

## FASE 10: Checkout Flow (Acara XI, XII)

- [ ] Buat `CheckoutController.php` — create (form), store (simpan order)
- [ ] Buat `resources/views/checkout/create.blade.php` — form lengkap:
  - [ ] Data diri (auto-fill dari akun, bisa edit): nama, email, no HP
  - [ ] Mobil yang dipilih (readonly, dari route parameter)
  - [ ] Pilihan warna mobil (select)
  - [ ] Metode pembayaran: Cash / Kredit / Leasing (radio)
  - [ ] Jika kredit: DP, cicilan/bulan, tenor (conditional fields)
  - [ ] Alamat pengiriman (auto-fill dari profil, bisa edit): alamat, kota, provinsi, kode pos
  - [ ] Catatan tambahan (textarea)
  - [ ] Ringkasan pesanan (sidebar/card)
- [ ] Validasi: required fields, numeric DP, valid payment method
- [ ] Simpan ke tabel `orders` + redirect ke halaman sukses/riwayat
- [ ] Route: `GET /akun/checkout/{car:slug}` + `POST /akun/checkout/{car:slug}` — middleware auth

---

## FASE 11: Customer Pages (Acara XI, XII)

### Customer Dashboard
- [ ] Buat `Customer/DashboardController.php` — ambil: order terakhir, test drive terakhir, stats
- [ ] Buat `resources/views/customer/dashboard.blade.php` — overview: pesanan aktif + test drive + quick actions

### Riwayat Pesanan
- [ ] Buat `Customer/OrderController.php` — index (pagination)
- [ ] Buat `resources/views/customer/orders/index.blade.php` — tabel riwayat + badge status + link detail

### Profil
- [ ] Buat `Customer/ProfileController.php` — show, edit, update
- [ ] Buat `resources/views/customer/profile/show.blade.php` — tampilkan data profil
- [ ] Buat `resources/views/customer/profile/edit.blade.php` — form edit: name, phone, address, city, province, postal_code, id_card_number
- [ ] Validasi: required fields, unique email
- [ ] Route: `GET /akun/profil` + `GET /akun/profil/edit` + `PUT /akun/profil`

---

## FASE 12: Public Pages (Acara VII, XI)

### Berita
- [ ] Buat `NewsController.php` (publik) — index (pagination + featured filter), show (detail)
- [ ] Buat `resources/views/news/index.blade.php` — grid berita + pagination
- [ ] Buat `resources/views/news/show.blade.php` — detail berita: judul, konten, gambar, tanggal publish

### Homepage Update
- [ ] Update `welcome.blade.php` — tambah section: Berita Terbaru (3 card), Promo Aktif (1-2 banner)
- [ ] Update `HomeController.php` — ambil: `News::latest()->take(3)->get()`, `Promo::where('is_active', true)->take(2)->get()`

### Promo Display
- [ ] Tampilkan promo di halaman detail mobil (`cars/show.blade.php`) — promo yang terikat ke mobil tersebut
- [ ] Tampilkan promo umum di homepage

---

## FASE 13: Optimization (Acara X)

- [ ] Install Laravel Debugbar: `composer require barryvdh/laravel-debugbar --dev`
- [ ] Pastikan `APP_DEBUG=true` di `.env`
- [ ] Cek debugbar di homepage — identifikasi query N+1
- [ ] Fix N+1: `Car::with('specifications', 'features', 'categories')` di semua query
- [ ] Fix N+1: `Order::with('user', 'car')` di admin orders
- [ ] Fix N+1: `TestDriveRequest::with('user')` di admin test drives
- [ ] Pagination: gunakan `paginate()` di semua index (cars, orders, test-drives, users, news)
- [ ] Publish pagination views: `php artisan vendor:publish --tag=laravel-pagination`
- [ ] Custom pagination style sesuai Tailwind (sudah default di Tailwind 4)
- [ ] Verifikasi di debugbar: tidak ada N+1 warning

---

## FASE 14: Final Testing & Polish

- [ ] Jalankan `php artisan test` — semua Pest tests pass
- [ ] Jalankan `vendor/bin/pint --dirty --format agent` — format semua file PHP
- [ ] Test semua alur:
  - [ ] Homepage loads with data from DB
  - [ ] Katalog mobil + filter + pagination
  - [ ] Detail mobil (specs, features, promo terkait)
  - [ ] Register customer
  - [ ] Login customer
  - [ ] Checkout flow (pilih mobil → isi form → submit → lihat di riwayat)
  - [ ] Customer dashboard + profil + edit
  - [ ] Test drive form (dengan dan tanpa login)
  - [ ] Admin login
  - [ ] Admin dashboard (stats + chart)
  - [ ] Admin CRUD mobil (create, edit, delete)
  - [ ] Admin CRUD berita
  - [ ] Admin CRUD promo
  - [ ] Admin kelola pesanan (lihat detail, ubah status)
  - [ ] Admin kelola test drive (ubah status)
  - [ ] Admin buat akun baru
  - [ ] Logout
- [ ] Pastikan tidak ada error di `php artisan serve`
- [ ] Pastikan TablePlus menampilkan semua data dengan benar

---

## Akhiran MODUL yang Dicakup

| # | Acara MODUL | Fase Implementasi |
|---|-------------|-------------------|
| I | Instalasi Laravel | Sudah done (awal project) |
| II | Route | Fase 6, 10, 11 (routes expanded) |
| III | Three Page Layout | Fase 4 (layout components) |
| IV | Menggunakan Blade | Fase 4 (nav-link, button, input components) |
| V | Koneksi Tailwind CSS | Fase 4, 7 (props, active state, slots) |
| VI | Koneksi Database + MVC | Fase 2, 5 (Models + refactor ke Eloquent) |
| VII | Database + Migration | Fase 1, 3 (10 migrations + seeders) |
| VIII | Factory | Fase 3 (6 factories + Faker) |
| IX | Database Relation | Fase 2 (belongsTo, hasMany, belongsToMany + pivot) |
| X | N+1 Problem + Pagination | Fase 5, 13 (eager loading + paginate + Debugbar) |
| XI | Seeder and Form | Fase 3, 10, 11, 12 (seeders + checkout form + admin forms) |
| XII | Request Validation | Fase 6, 8, 9, 10, 11 (validate + @error + $fillable + $guarded) |
