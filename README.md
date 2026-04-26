### Setup your .env config file
Make sure to add the database configuration in your .env file such as database name, username, password and port.

### Install Laravel dependencies
In the root of your Laravel application, run the ``php composer.phar install`` (or ``composer install``) command to install all of the framework's dependencies.

### Migrate the tables

In order to migrate the tables and setup the bare minimum structure for this app
to display some data you shoud open your terminal, locate and enter this project
directory and run the following command

``php artisan migrate``

### Generate some test data

Once you have all your database tables setup you can then generate some test data
which will come from our pre-made database table seeders.
In order to do so, in your terminal run the following command

``php artisan db:seed``

N.B. If you run this command twice, all the test data will be duplicated and added to the existing table data, if you want to avoid having duplicate test data please
make sure to ``truncate`` the following ``datafeeds`` table in your database.

### Compile the front-end

In order to compile all the CSS and JS assets for the front-end of this site you need to install NPM dependencies. To do that, open the terminal, type npm install and press the ``Enter`` key.

Then run ``npm run dev`` in the terminal to run a development server to re-compile static assets when making changes to the template.

When you have done with changes, run ``npm run build`` for compiling and minify for production.

### Launch the Laravel backend

In order to make this Laravel installation work properly on your local machine you
can run the following command in your terminal window.

``php artisan serve``

You should receive a message similar to this
``Starting Laravel development server: http://127.0.0.1:8000`` simply copy the URL
in your browser and you'll be ready to test out your new mosaic laravel app.
Sistem Manajemen Hubungan Pelanggan (CRM) – Web-Based Service Management
Deskripsi Proyek
CRM SUJUD adalah platform manajemen hubungan pelanggan berbasis web yang dirancang untuk mengoptimalkan pengelolaan layanan, interaksi pelanggan, dan efisiensi operasional bisnis. Proyek ini dibangun dengan fokus pada sentralisasi data untuk memastikan setiap permintaan layanan pelanggan dapat dikelola secara terstruktur, cepat, dan transparan.

Aplikasi ini mengintegrasikan fungsi pengelolaan data pelanggan dengan sistem pelacakan layanan, memungkinkan pelaku bisnis untuk memantau riwayat interaksi, mengelola jadwal layanan, dan meningkatkan kepuasan pelanggan melalui respon yang lebih terorganisir.

Fitur Utama
Customer Database Management: Pengelolaan data pelanggan yang komprehensif, mencakup informasi kontak dan riwayat layanan.

Service Tracking System: Fitur untuk mencatat dan memantau status layanan atau permintaan pelanggan dari awal hingga selesai.

Dashboard Analytics: Visualisasi ringkas mengenai aktivitas layanan dan statistik pelanggan untuk mendukung pengambilan keputusan.

User Access Control: Sistem keamanan yang mengatur hak akses pengguna untuk menjaga kerahasiaan data perusahaan.

Interaction History: Dokumentasi lengkap setiap interaksi yang terjadi dengan pelanggan guna menjaga kualitas layanan (Quality Control).

Teknologi yang Digunakan
Backend Framework: PHP (Laravel/CI - sesuaikan dengan framework yang Anda gunakan di repo tersebut)

Database: MySQL sebagai media penyimpanan data relasional yang stabil.

Frontend: HTML5, CSS3, dan Bootstrap/Tailwind untuk antarmuka yang bersih dan profesional.

Tools: Git untuk version control dan Composer untuk manajemen dependensi.

Highlight Teknis
Dalam pengembangan CRM SUJUD, saya fokus pada arsitektur database yang efisien untuk menangani relasi data yang kompleks antara pelanggan dan riwayat layanan. Proyek ini membuktikan kemampuan saya dalam membangun solusi perangkat lunak yang berorientasi pada kebutuhan bisnis (business-driven) dan kemudahan penggunaan bagi staf operasional.
