# 🧒💉 POSYANDU Web App

Aplikasi POSYANDU berbasis web menggunakan **Laravel 12** dan **Livewire v3**, dirancang untuk memudahkan pengelolaan data anak, ibu, petugas, imunisasi, vaksinasi, dan laporan pemeriksaan.

---

## 🚀 Fitur Utama

- 🔐 Login & Dashboard
- 👩‍👦 Data Ibu & Anak
- 🩺 Data Imunisasi & Vaksin
- ⚖️ Data Timbangan Anak
- 👨‍⚕️ Data Petugas
- 📊 Laporan Pemeriksaan (lengkap dengan usia, BB, TB, imunisasi & vaksin)
- 📱 Responsive & user-friendly

---

## 🛠️ Instalasi

1. **Clone project ini**
   ```bash
   git clone https://github.com/EigaCerion/APU.git
   cd app
2. **Install dependency Laravel**
   ```bash
   composer install
3. **Copy file .env & generate app key**
   ```bash
   cp .env.example .env
   ```
   ```bash
   php artisan key:generate
4. **Atur database di .env contoh :**
   ```bash
    DB_DATABASE=posyandu
    DB_USERNAME=root
    DB_PASSWORD=
5. **Migrasi dan seed database**
   ```bash
    php artisan migrate
    ```
    ```bash
    php artisan db:seed
5. **Jalankan server**
   ```bash
    php artisan serve
5. **Akses melalui browser**
   ```bash
    http://localhost:8000


## 🔐 Login Default

Email          | Password
admin@demo.com | password

note : Ganti data ini di seeder atau melalui database.

---

## ⚙️ Teknologi Digunakan

- Laravel 12
- Livewire v3
- Tailwind CSS
- Alpine.js
- MySQL

---

## 🤝 Kontribusi
Pull Request dan saran sangat diterima. Jangan lupa untuk fork repo ini dan buat branch baru saat berkontribusi.

## 📄 Lisensi
Aplikasi ini dilisensikan di bawah MIT License.

## 🙌 Terima Kasih
Terima kasih telah menggunakan aplikasi ini. Semoga membantu pengelolaan POSYANDU lebih efektif!