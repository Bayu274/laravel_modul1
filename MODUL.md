||MODUL AJAR PROJECT BASED LEARNING “Laravel 11 Fundamental”|
|---|---|
||Tim Penyusun: Muhammad Hassan Massaty Slamet Kurniawan Fahrurozi Program Studi D3 Teknologi Informasi Politeknik Nest Sukoharjo 2024|

|INFORMASI UMUM|||
|---|---|---|
|A. IDENTITAS MODUL|||
|Penyusun|: :|Muhammad Hassan Massaty, S.Pd., M.Pd. Slamet Kurniawan Fahrurozi, S.Pd., M.Pd.|
|Instansi|:|Politeknik Nest|
|Tahun Penyusunan|:|2024|
|Jenjang Pendidikan|:|Diploma Tiga|
|Mata Kuliah dalam PBL|:|Sistem Basis Data Pengembangan Situs Web|
|Alokasi Waktu|:|120 menit|
|B. Sub CPMK|||
|1. Mahasiswa memiliki kemampuan dalam mengaplikasikan instalasi laravel dalam sebuah environtment 2. Mahasiswa memiliki kemampuan dalam merancang model, view dan controller menggunakan laravel 3. Mahasiswa memiliki kemampuan dalam mengelola sebuah components dalam laravel 4. Mahasiswa memiliki kemampuan dalam merancang website Laravel menggunakan library yang tersedia 5. Mahasiswa memiliki kemampuan dalam mengimplementasikan passing data menggunakan database ke dalam view 6. Mahasiswa memiliki kemampuan dalam merancang migration dan factory menggunakan laravel|||
|C. Pokok Bahasan|||

|1. 2. 3. 4. 5. 6.|Laravel|||Dapat memahami Pengelolaan Komponen dalam Laravel Dapat memahami Penggunaan Library dan Package Laravel|Dapat memahami Instalasi Laravel pada Environment Lokal dan Server Dapat memahami Perancangan Model, View, dan Controller (MVC) di Dapat memahami Implementasi Passing Data dari Database ke View Dapat memahami Perancangan Migration dan Factory di Laravel|||
|---|---|---|---|---|---|---|---|
|D.|Deskripsi Singkat penggunaan Laravel.|library|dan|migration.|Mata kuliah ini mengajarkan penggunaan framework Laravel untuk pengembangan aplikasi web. Mahasiswa akan mempelajari konsep MVC, instalasi Laravel, perancangan komponen, pengelolaan database, serta Mahasiswa merancang dan mengembangkan aplikasi web dinamis menggunakan|diharapkan|mampu|
|E.|Bahan Bacaan|||||||
|1. 2. 3.|W3Schools.|(n.d.). [https://www.w3schools.in/laravel|from](https://www.w3schools.in/laravel|from) [https://laravel.com/docs/11.x/readme](https://laravel.com/docs/11.x/readme) [https://laraveldaily.com/course/laravel-beginners](https://laraveldaily.com/course/laravel-beginners) Laravel|Tutorial.|Laravel. (n.d.). Laravel Documentation-README. Retrieved October 24, 2024, Laraveldaily. (n.d.). Laravel Beginners Course. Retrieved October 24, 2024, from Retrieved|October|24, 2024, from|
|F.|Pertanyaan Kunci|||||||
|1. 2.||merdeka?||Pertanyaan refleksi untuk dosen PIC dan pengampu kegiatan PBL?|Apakah tema yang digunakan pada PBL sudah sesuai dengan kurikulum Apakah tema yang digunakan pada PBL dapat dipahami betul oleh|||
||||||||3|

||mahasiswa? 3. Apakah tema yang digunakan pada PBL sudah mewakili mata kuliah konversi? 4. Apakah tema yang digunakan pada PBL menarik bagi mahasiswa?||
|---|---|---|
||G. Assesmen/ Penilaian Penilaian terbagi atas : absensi, nilai tugas lembar kerja, keaktifan, inovasi dan pemecahan masalah yang diberikan.||
||4||

# KATA PENGANTAR

Puji syukur ke hadirat Allah SWT atas limpahan rahmat dan karunia-Nya sehingga modul pembelajaran dengan judul "Laravel 11 Fundamental" ini dapat disusun dan diselesaikan dengan baik. Modul ini dirancang untuk membantu mahasiswa memahami dasar-dasar penggunaan framework Laravel versi 11, yang saat ini menjadi salah satu framework PHP terpopuler dalam pengembangan aplikasi web. Penyusunan modul ini bertujuan untuk memberikan panduan yang sistematis dan aplikatif, mulai dari pengenalan konsep hingga implementasi fitur utama Laravel. Diharapkan, melalui modul ini, mahasiswa tidak hanya mampu menginstal dan mengkonfigurasi Laravel, tetapi juga menguasai pengelolaan model, view, controller, serta fitur-fitur seperti migrasi database, factory, dan pengelolaan data. Kami menyadari bahwa modul ini masih memiliki kekurangan, baik dari segi isi maupun penyajiannya. Oleh karena itu, saran dan masukan dari pembaca sangat diharapkan untuk perbaikan di masa mendatang. Akhir kata, kami mengucapkan terima kasih kepada semua pihak yang telah berkontribusi dalam penyusunan modul ini. Semoga modul ini dapat menjadi sumber belajar yang bermanfaat bagi mahasiswa dan membantu meningkatkan kompetensi mereka dalam bidang pengembangan aplikasi web.

## Sukoharjo, Oktober 2024

## Tim Penyusun

DAFTAR ISI
INFORMASI UMUM........................................................................................................................... 2
KATA PENGANTAR ........................................................................................................................... 5
ACARA I INSTALASI LARAVEL PADA ENVIRONMENT LOKAL DAN SERVER.............................. 9

A. POKOK BAHASAN..................................................................................................................... 9
B. SUB POKOK BAHASAN............................................................................................................ 9
C. TUJUAN...................................................................................................................................... 9
D. ALAT DAN BAHAN.................................................................................................................. 10
E. MATERI..................................................................................................................................... 10
F. LEMBAR KERJA PRAKTIK........................................................................................................17
ACARA II ROUTE............................................................................................................................. 18

A. POKOK BAHASAN................................................................................................................... 18
B. SUB POKOK BAHASAN.......................................................................................................... 18
C. TUJUAN.................................................................................................................................... 18
D. ALAT DAN BAHAN.................................................................................................................. 19
E. MATERI..................................................................................................................................... 19
F. LEMBAR KERJA PRAKTIK....................................................................................................... 28
ACARA III THREE PAGE LAYOUT................................................................................................... 29

A. POKOK BAHASAN................................................................................................................... 29
B. SUB POKOK BAHASAN.......................................................................................................... 29
C. TUJUAN.................................................................................................................................... 29
D. ALAT DAN BAHAN..................................................................................................................30
E. MATERI.....................................................................................................................................30
F. LEMBAR KERJA PRAKTIK....................................................................................................... 38
ACARA IV MENGGUNAKAN BLADE.............................................................................................. 39

A. POKOK BAHASAN................................................................................................................... 39
B. SUB POKOK BAHASAN.......................................................................................................... 39
C. TUJUAN.................................................................................................................................... 39
D. ALAT DAN BAHAN..................................................................................................................40
E. MATERI.....................................................................................................................................40
F. LEMBAR KERJA PRAKTIK....................................................................................................... 43
ACARA V KONEKSI TAILWIND CSS............................................................................................... 44

A. POKOK BAHASAN................................................................................................................... 44
B. SUB POKOK BAHASAN.......................................................................................................... 45

C. TUJUAN.................................................................................................................................... 45
D. ALAT DAN BAHAN.................................................................................................................. 45
E. MATERI..................................................................................................................................... 45
F. LEMBAR KERJA PRAKTIK........................................................................................................57
ACARA VI KONEKSI DATABASE DENGAN TABLEPLUS.............................................................. 58

A. POKOK BAHASAN................................................................................................................... 58
B. SUB POKOK BAHASAN.......................................................................................................... 58
C. TUJUAN.................................................................................................................................... 58
D. ALAT DAN BAHAN.................................................................................................................. 59
E. MATERI..................................................................................................................................... 59
F. LEMBAR KERJA PRAKTIK........................................................................................................72
ACARA VII DATABASE.....................................................................................................................73

A. POKOK BAHASAN....................................................................................................................73
B. SUB POKOK BAHASAN...........................................................................................................73
C. TUJUAN.................................................................................................................................... 74
D. ALAT DAN BAHAN.................................................................................................................. 74
E. MATERI..................................................................................................................................... 74
F. LEMBAR KERJA PRAKTIK.......................................................................................................96
ACARA VIII FACTORY..................................................................................................................... 97

A. POKOK BAHASAN................................................................................................................... 97
B. SUB POKOK BAHASAN.......................................................................................................... 98
C. TUJUAN.................................................................................................................................... 98
D. ALAT DAN BAHAN.................................................................................................................. 98
E. MATERI..................................................................................................................................... 98
F. LEMBAR KERJA PRAKTIK..................................................................................................... 113
ACARA IX DATABASE RELATION................................................................................................ 114

A. POKOK BAHASAN................................................................................................................. 114
B. SUB POKOK BAHASAN........................................................................................................ 114
C. TUJUAN.................................................................................................................................. 114
D. ALAT DAN BAHAN................................................................................................................ 114
E. MATERI................................................................................................................................... 115
F. LEMBAR KERJA PRAKTIK......................................................................................................127
ACARA X N+1 PROBLEM.............................................................................................................. 128

A. POKOK BAHASAN................................................................................................................. 128

B. SUB POKOK BAHASAN........................................................................................................ 128
C. TUJUAN.................................................................................................................................. 129
D. ALAT DAN BAHAN................................................................................................................ 129
E. MATERI................................................................................................................................... 129
F. LEMBAR KERJA PRAKTIK..................................................................................................... 144
ACARA XI SEEDER AND FORM.................................................................................................... 145

A. POKOK BAHASAN................................................................................................................. 145
B. SUB POKOK BAHASAN........................................................................................................ 145
C. TUJUAN.................................................................................................................................. 146
D. ALAT DAN BAHAN................................................................................................................ 146
E. MATERI................................................................................................................................... 146
F. LEMBAR KERJA PRAKTIK..................................................................................................... 165
ACARA XII REQUEST VALIDATION ............................................................................................. 166

A. POKOK BAHASAN.................................................................................................................166
B. SUB POKOK BAHASAN........................................................................................................166
C. TUJUAN..................................................................................................................................166
D. ALAT DAN BAHAN................................................................................................................ 167
E. MATERI................................................................................................................................... 167
F. LEMBAR KERJA PRAKTIK..................................................................................................... 184

# ACARA I

# INSTALASI LARAVEL PADA ENVIRONMENT LOKAL DAN SERVER

## A. POKOK BAHASAN

Pada topik Instalasi Laravel pada Environment Lokal dan Server, pembahasan dimulai dengan persiapan environment yang diperlukan untuk menjalankan Laravel, termasuk instalasi PHP, Composer, dan MySQL. Langkah pertama melibatkan instalasi Composer, yang berfungsi sebagai dependency manager dalam Laravel. Setelah itu, instalasi Laravel dilakukan menggunakan perintah Composer di terminal atau command line. Selain instalasi pada environment lokal, topik ini juga mencakup konfigurasi Laravel di server produksi, termasuk pengaturan file .env yang berfungsi untuk mengelola koneksi database dan konfigurasi lainnya. Pembahasan juga meliputi pengaturan permission file dan folder, serta penanganan cache yang diperlukan untuk menjaga kinerja aplikasi Laravel baik di lingkungan pengembangan maupun di server.

|B. SUB POKOK BAHASAN||
|---|---|
|1.|Persiapan Environment|
|2.|Instalasi Laravel di Environment Lokal|
|3.|Pengaturan File Konfigurasi .env|
|4.|Instalasi Laravel di Server Produksi|
|5.|Pengelolaan Cache dan Optimasi Aplikasi|
|C. TUJUAN||
|1.|Memahami Persyaratan Sistem|
|2.|Melakukan Instalasi Composer|
|3.|Menginstal Laravel di Environment Lokal|
|4.|Mengkonfigurasi File .env|
|5.|Menginstal Laravel di Server Produksi|
|6.|Mengelola Cache dan Optimasi Aplikasi|

7. Menerapkan Praktik Terbaik untuk Deploy
## D. ALAT DAN BAHAN

1. Code Editor (VS code, PhpStorm dll)
2. TablePlus
3. PHP 8.x
4. Laragon (MySQL PhpMyAdmin)
## E. MATERI

Laravel adalah framework PHP yang dirancang untuk mempermudah pengembangan aplikasi web dengan struktur yang bersih dan ekspresif. Laravel menawarkan berbagai fitur canggih seperti routing, middleware, ORM (Eloquent), dan sistem templating (Blade), yang memungkinkan pengembang untuk membangun aplikasi yang scalable dan maintainable. Laravel 11, versi terbaru dari framework ini, membawa sejumlah peningkatan dan fitur baru yang berfokus pada pengalaman pengembang yang lebih baik. Beberapa fitur utama Laravel 11 mencakup:

- Peningkatan Kinerja: Optimasi yang signifikan untuk meningkatkan kecepatan eksekusi aplikasi.
- Pembaruan Eloquent: Penyempurnaan pada ORM Eloquent untuk menangani relasi dan query dengan lebih efisien.
- Fitur Artisan yang Ditingkatkan: Penambahan perintah Artisan baru untuk membantu dalam pengembangan dan pengelolaan aplikasi.
- Dukungan untuk PHP Terbaru: Integrasi dengan versi PHP terbaru untuk memanfaatkan fitur-fitur terbaru dari bahasa tersebut. Dengan komponen-komponen ini, Laravel 11 semakin menjadi pilihan
populer bagi pengembang yang ingin membangun aplikasi web yang kompleks dan responsif. Persiapan Environtment

|v o o o|Instalasi PHP. Pastikan versi PHP yang diinstal memenuhi syarat baru. Kamu dapat melakukan (disini nama folder bebas)|minimal Laravel. Laravel 11 memerlukan PHP versi 8.1 atau yang lebih instalasi PHP hanya dengan mendownload php di alamat [https://www.php.net/downloads](https://www.php.net/downloads). Setelah proses download selesai extract file kedalam folder PHP Kemudian kamu atur environtment variable komputer kamu dengan cara ke menu control panel -> edit environment variables|
|---|---|---|
|o|Kemudian pilih tab Advance -> Environment Variables||
|o|path yang ada|Kemudian pada Path lakukan edit, pastikan lakukan edit di kedua 11|

|o|ekstrak pada langkah sebelumnya|Kemudian pilih new dan paste lokasi folder php yang sudah di|||
|---|---|---|---|---|
|o|dengan cara seleksi environment -> move up|Langkah terakhir adalah dengan memindahkan php ke atas|||
|o||Hal tersebut bertujuan agar php yang di gunakan oleh komputer adalah php yang baru saja di download, bukan php versi lama yang|12||

||o|sudah|digunakan|dapat|mungkin sudah ada di environment sebelumnya. di load|Langkah terakhir adalah melakukan pengecekan Apakah php oleh CMD -> php -v. Php -v digunakan untuk melihat versi php yang||environment||dengan||cara|ke|
|---|---|---|---|---|---|---|---|---|---|---|---|---|---|
|v|o o o|Setelah|Instalasi Composer. Composer digunakan|adalah untuk instalasi,|mengelola resmi Composer. [https://getcomposer.org/](https://getcomposer.org/) kemudian lakukan instalasi seperti pada umunya. pastikan command line dengan menjalankan: composer -v|dependency menginstalnya dengan mengikuti langkah-langkah di halaman Untuk instalasi composer cukup sederhana hanya mengunduh,|paket Composer|manager dan|dapat|untuk library.|PHP Anda diakses|melalui|yang bisa|
|v|o o o|Laravel Install|Instalasi Database|mendukung dan disini [https://tableplus.com/](https://tableplus.com/) keduanya|seperti MySQL, PostgreSQL, SQLite, dan SQL Server. secara|berbagai Untuk MySQL, pastikan untuk membuat database baru yang akan digunakan oleh aplikasi Laravel disini kita menggunakan laragon untuk mengelola mySQL dan TablePlus untuk mengelola SQLite yang dapat di download dan di install disini [https://laragon.org/|sistem](https://laragon.org/|sistem) normal,||kemudian|manajemen||database, tambahkan|13|

|[https://www.phpmyadmin.net/|PhpMyAdmin](https://www.phpmyadmin.net/|PhpMyAdmin) di laragon dengan cara mendownload di halaman ini kemudian di copy ke directory instalasi laragon folder etc -> apps, paste di dalam folder tersebut|
|---|---|
|o Kemudian coba laragon -> Start All -> Database|phpMyAdmin dengan cara menjalankan|
|o|Kemudian di browser seharusnya phpMyAdmin akan terbuka secara otomatis, untuk user dan password secara default adalah root dan password masih kosong, dan kemudian coba login|
||14|

||o||Kemudian seperti ini tampilan tableplus yang sudah terinstall|
|---|---|---|---|
|v|o o|Instalasi Laravel directory D:\Laravel Saya composer create-project nama_proyek|Setelah Composer terinstal, Anda dapat menginstal Laravel menggunakan perintah berikut di folder yang di inginkan, misal di --prefer-dist laravel/laravel|
|v|o o o|Kemudian tunggu proses sampai selesai Konfigurasi File .env termasuk konfigurasi database. Buka Laravel_pertamaku contoh menggunakan Vs code.|Setelah instalasi, Laravel akan membuat file .env di direktori proyek. File ini digunakan untuk mengatur variabel lingkungan, menggunakan editor pilihan, disini 15|

|o|SQLite|Ubah pengaturan database di file .env sesuai dengan database yang telah dibuat, cara termudah untuk memahami ini kita akan menggunakan SQLite terlebih dahulu. Rubah env. Menggunakan|||
|---|---|---|---|---|
|v o o o|Menjalankan Server Pengembangan dijalankan dengan perintah: php artisan serve Atau php -S 127.0.0.1:80 -t public/ dengan Ctrl + Left Click|Laravel menyediakan server pengembangan bawaan yang dapat Jalankan di terminal bawaan editor dan buka alamat browser|||
|o|Dan browser akan otomatis terbuka website Laravel||16||

## F. LEMBAR KERJA PRAKTIK

Hari / Tanggal : _____________________________ Nama Mahasiswa : _____________________________

1) Silahkan Lakukan Langkah-langkah tersebut, tulis daftar error yang ditemukan
2) Tulis penyelesaian dari error yang ditemukan Jawab
1.
2.

# ACARA II

# ROUTE

## A. POKOK BAHASAN

Pokok bahasan materi ini mencakup pemahaman awal tentang struktur proyek Laravel dan bagaimana mengaksesnya menggunakan VS Code. Materi ini juga menjelaskan konsep dasar routes dalam Laravel, termasuk cara mendeklarasikan route, jenis-jenisnya, serta fungsinya untuk menghubungkan URL dengan logika aplikasi atau tampilan. Selain itu, dibahas pula pengelolaan file view yang digunakan untuk menampilkan antarmuka pengguna, termasuk penggunaan Blade sebagai mesin templating Laravel. Dalam materi ini, dijelaskan langkah-langkah praktis untuk membuat dan mengubah route, menghubungkannya dengan file view, hingga memahami konsep dasar hubungan antara routes dan views. Dengan pendekatan bertahap, mahasiswa diharapkan memahami bagaimana Laravel mengelola alur akses pengguna dari URL hingga tampilan aplikasi.

|B. SUB POKOK BAHASAN||
|---|---|
|1.|Mengakses proyek Laravel menggunakan VS Code.|
|2.|Memahami struktur direktori proyek Laravel.|
|3.|Pengenalan dan fungsi routes dalam Laravel.|
|4.|Deklarasi route baru dan contoh implementasinya.|
|5.|Konsep views dalam Laravel dan penggunaannya.|
|6.|Memahami Blade, mesin templating Laravel.|
|7.|Langkah-langkah untuk menghubungkan routes dengan views.|
|8.|Praktik sederhana membuat tampilan menggunakan HTML biasa.|
|C. TUJUAN||
|1.|Memahami konsep dasar routing|
|2.|Menjelaskan protocol routing|

|D. E.|3. 4. 5. 6. 1. 2. 3. 4. •|Menganalisis jalur terbaik dalam routing Mengonfigurasi routing pada perangkat jaringan Mengidentifikasi dan memecahkan masalah routing Memahami keamanan pada routing ALAT DAN BAHAN Code Editor (VS code, PhpStorm dll) TablePlus PHP 8.x Laragon (MySQL PhpMyAdmin) MATERI Jika anda menggunakan vs code, pada direktori project anda dapat menjalankan perintah|code.|
|---|---|---|---|
||• • •|Perintah ini akan membuka VS Code di direktori current folder. Disini anda akan melihat banyak file boostrapm, vendor dan lain sebagainya.|Jika anda melihat banyak sekali file, anda pasti merasa kewalahan. App, 19|

|• •|Tapi anda tidak harus mempelajari semuanya sekaligus. Kita akan fokus pada satu hal sedikit demi sedikit dan ketika menyelesaikan modul ini, anda akan memiliki pengetahuan yang solid dan menyeluruh framework laravel ini. Langkah selanjutnya kita akan membuka laravel di browser dengan memasukan alamat laravel_saya.test||
|---|---|---|
|• • •|Ketika membuka halaman laravel_saya terdapat banyak menu yang sudah ada seperti documentation, laracast, laravel news dan vibrant ecosystem. Lantas bagaimana bila kita ingin merubah halaman tersebut?? Pertama kita harus membuka folder routes yang ada di dilaravel, kemudian pilih web.php 20||

|•|Salah satu faktor yang menyebabkan laravel populer adalah karena laravel sangat jelas dan simple. Bahkan apabila anda tidak mengerti sebelumnya apa itu routes, anda mungkin sudah dapat mengartikan apa yang dilakukan script tersebut.|||
|---|---|---|---|
|•|Route::get(‘/’ o get disini artinya hanyalah untuk mengunjungi sebuah alamat URL o dan bagaian ‘/’ ini menandakan ketika sedang berada di homepage atau halaman awal, misalkan dalam contoh kasus google, homepage adalah google.com|21||

|o|jadi misalkan kita ingin mengunjungi alamat URL about maka bagian ini akan berubah menjadi ‘/about’. Contoh apabila di google ketika kita melakukan pencarian maka google akan mengunjungi routes ‘/search’, sehingga alamat lengkap akan menjadi google.com/search||
|---|---|---|
|• o o|function () {...} bagian ini menandakan ada fungsi yang dipanggil ketika berada di halaman homepage kemudian dalam routes fungsin yang dipanggil adalah return view(‘welcome’); fungsi tersebut adalah untuk menampilkan atau 22||

melihat(view) halaman welcome. Lantas dimana halaman welcome berada?? Halaman Welcome

- Halaman welcome berada di folder resources → view → dan welcome.blade.php
- Bila anda perhatikan welcome tidak berekstensi .php seperti yang biasanya terlihat di sebuah web, akan tetapi justru welcome.blade.php
- Lantas apa artinya ? Blade PHP adalah mesin templating yang disertakan dengan Laravel, salah satu framework PHP yang paling populer. Blade menyediakan cara yang intuitif untuk membuat tampilan web yang dinamis dan menarik dalam aplikasi Laravel. Blade tidak membatasi pemrogram untuk menggunakan kode PHP biasa dalam membuat kode untuk tampilan.
- Jadi cukup sederhana bukan? apalagi apabila kalian sudah memiliki dasar PHP.

|• nya adalah tampilan|Ketika anda melihat membuka welcome.blade.php semua yang ada didalam welcome yang anda lihat|
|---|---|
|• kita ubah menjadi <h1>Hello, World</h1>|Sekarang coba kita hapus semua script yang ada didalam tag <body> dan|
||24|

- Dan ketika kita refresh halaman laravel_saya.test, maka akan muncul Hello, World
- Sekarang pikirkan tentang apa yang telah Anda pelajari di sini, o Anda mengetahui bahwa dapat mengunjungi file yang ada didalam fungsi route o Anda dapat mendeklarasikan route o dan route dapat mengembalikan atau menampilakan apa yang kita sebut sebagai view o dan secara sederhana view adalah tampilan yang dilihat oleh pengguna. Sebenarnya sedikit lebih rumit dari itu tapi pada tahap ini Anda belajar itu cukup baik. Deklarasi route baru
- Buka folder routes kemudian file web.php, kemudian copy dan paste di bagian bawah route yang sudah ada.
- Kali ini kita akan membuat route ‘/about’, dan anda memiliki 2 pilihan o Cara pertama anda dapat mengunjungi file about

|o|atau Cara Kedua|langsung seperti ini|anda dapat menampilkan pesan sederhana secara|
|---|---|---|---|
|o|dan ketika|kita ke halaman menampilkan halaman sebagai berikut|laravel_saya.test/about maka akan|
|o •|view about|Cara kedua ini biasanya digunakan ketika anda ingin melempar array, yang nanti akan otomatis terkonversi menjadi JSON. tapi kita akan membicarakan hal tersebut nanti. Kita akan kembali menggunakan cara yang pertama yaitu dengan memanggil|26|

|• •|mudah dipahami|langkah selanjutnya adalah membuat file baru di folder resources → views kita akan membuat file about.php, kita lupakan blade sejenak agar lebih|||
|---|---|---|---|---|
|•|yang akan menampilkan pesan sederhana|Dan kita akan membuat file sederhana mengunakan HTML biasa seperti ini|||
|•|Setelah disimpan, refresh halaman laravel_saya.test/about||27||

- Sampai dititik ini saya jamin anda sudah memahami konsep routes dan view didalam laravel
## F. LEMBAR KERJA PRAKTIK

Hari / Tanggal : _____________________________ Nama Mahasiswa : _____________________________

1) Silahkan Lakukan Langkah-langkah tersebut, tulis daftar error yang ditemukan
2) Tulis penyelesaian dari error yang ditemukan Jawab
1.
2.

# ACARA III

# THREE PAGE LAYOUT

## A. POKOK BAHASAN

Materi ini membahas langkah-langkah membuat navigasi antar halaman di Laravel, mengelola tampilan halaman menggunakan file view, serta memperkenalkan penggunaan layout file dengan Blade Templating Engine untuk menciptakan struktur kode yang lebih efisien. Dengan menggunakan layout file, elemen-elemen yang digunakan secara berulang, seperti menu navigasi, dapat dikelola di satu tempat, sehingga mempermudah pengembangan dan pemeliharaan aplikasi.

## B. SUB POKOK BAHASAN

1. Membuat dan memodifikasi route baru, seperti home, about, dan contact.
2. Membuat file view sederhana untuk setiap route dengan menggunakan file HTML atau file Blade.
3. Menambahkan menu navigasi antar halaman dengan elemen HTML dasar.
4. Pengenalan penggunaan layout file di Laravel untuk menyederhanakan tampilan yang digunakan secara berulang.
5. Membuat direktori Components di folder view untuk menyimpan layout dan komponen lain.
6. Menyusun file layout (layout.blade.php) untuk mengelola elemen-elemen tampilan seperti menu navigasi.
7. Menggunakan elemen Blade seperti <x-layout> dan variabel $slot untuk memanggil layout dan menampilkan konten unik pada setiap halaman.
8. Implementasi layout file di semua view (home, about, dan contact) untuk menghasilkan struktur kode yang lebih bersih dan terorganisir.
## C. TUJUAN

1. Memahami konsep layout di Laravel

|2. 3. 4. 5. 6. 7. D. 1. 2. 3. 4. E. •|Membuat struktur tiga halaman dalam aplikasi web Menggunakan layout untuk pengelolaan tampilan Menerapkan dynamic content pada layouts Mengoptimalkan penggunaan komponen di Laravel Penerapan routing untuk navigasi antar halaman Mengoptimalkan kemampuan dalam desain web responsive ALAT DAN BAHAN Code Editor (VS code, PhpStorm dll) TablePlus PHP 8.x Laragon (MySQL PhpMyAdmin) MATERI Pertama kita akan membuat route baru yaitu contact, lakukan langkah seperti sebelumnya di file routes->web.php||
|---|---|---|
|•|Kemudian kita rubah route welcome menjadi home agar lebih mudah dipahami|30|

- Tentu saja kita juga harus merubah file di folder views menjadi home. untuk sekarang kita rubah menjadi home.php, kita hilangkan blade terlebih dahulu
- Dan tentu saja kita juga akan copy paste isi dari script di file about.php ke file home.php dengan membedakan pesan yang tertulis
- kemudian buat 1 file lagi sesuai dengan route yang telah dibuat yaitu contact, isi dengan copy paste script home atau about dengan merubah

||pesan yang ditampilan, kamu juga dapat menyesuaikan title dari halaman html nya|||
|---|---|---|---|
|•|Ini adalah tampilan view home|||
|•|Ini adalah tampilan view about|||
|•|Ini adalah tampilan view contact|||
|• •|Kemudain langkah selanjutnya adalah kita membuat menu navigasi agar dapat berpindah ke satu halaman ke halaman yang lain Mula mula buat navigasi html seperti biasanya|32||

- yang perlu di ingat bahwa link ini akan menuju ke halaman route yang sudah didefinisikan sebelumnya. Kemudian jika kita refresh halaman home maka akan muncul menu navigasi yang sudah dapat berjalan, setidaknya untuk halaman home
- Lantas bagaimana dengan halaman about dan contact, anda dapat melakukan copy paste secara manual menu navigasi yang telah dibuat, akan tetapi cara ini tentu saja tidak terlalu efektif jika skala website yang dibangun besar dan memiliki banyak file view.
- Untuk mengatasi hal tersebut kita dapat menggunakan layout file. langkah pertama untuk menggunakan layout file adalah dengan mengganti nama home.php menjadi home.blade.php dengan melakukan hal ini kita akan dapat memanggil properties yang disediakan blade, seperti yang telah

|•|menyediakan shortcut, helper dan lain lain yang akan kita bahas nanti. file blade di semua view.|dibahas sebelumnya blade adalah templating engine untuk php yang rubah semua nama view menggunakan blade untuk bisa memanggil layout|
|---|---|---|
|•|baru bernama Components di folder view|Langkah pertama untuk menggunakan layout file adalah membuat folder|
|• •|dan layout. Untuk menggunakan layout buat file layout.blade.php|Direktori ini nantinya akan sangat penting, jika anda belum begitu familiar dengan istilah tersebut bayangkan script yang dapat digunakan berulang- ulang yang dapat dipanggil di beberapa file, seperti menu, dropdown, avatar|
|•|dan kita copy kan dengan script yang ada di home|34|

|• •|Jika diperhatikan gambar diatas, pesan yang muncul adalah pesan unik yang hanya muncul ketika di view home, begitu juga dengan halaman yang lain pasti memiliki pesan unik tersendiri Dan kita akan hapus isi dari view home, dan ketika kita jalankan di browser, maka tidak akan keluar apapun karen kita sudah menghapusnya|||
|---|---|---|---|
|• • •|Nah disini yang menarik, kita akan memanggil layout file. kita lakukan dengan cara berinteraksi seolah memanggil costum html tag Lantas apa nama tag nya?? nama tag adalah nama file yang dibuat, dalam kasus ini adalah layout (layout.blade.php) nah bagaimana memanggilnya, kita dapat memanggilnya dengan awalan x dan kemudian dash(-) diikuti nama tag, dalam contoh ini berarti <x-layout>||35|

|•|kemudian kita refresh halaman home dan akan muncul seperti semula|
|---|---|
|• Lantas bagiamna dengan|pesan unik yang ada di script layout?|
|• • <x-layout>.|Disini kita perlu akan menetukan tempat dimana pesan unik akan muncul kemudian menggunakan php, kita dapat memanggil pesan unik dengan variable $slot. dan $slot disini akan memanggil script yang ada didalam tag 36|

|•|Berikut ini adalah file layout||
|---|---|---|
|•|dan berikut ini adalah file home||
|• • •|variabel $slot ini adalah aturan dalam laravel layaknya direktori Components, jadi untuk nama tidak bisa dikostum Lakukan di semua view (about dan contact) Ini adalah file about||
|•|Ini adalah file contact 37||

- Jika dilihat maka script yang kita miliki jadi lebih clean, karena kita sudah menyimpan master dari layout kita dihalaman yang terpisah.
## F. LEMBAR KERJA PRAKTIK

Hari / Tanggal : _____________________________ Nama Mahasiswa : _____________________________

1) Silahkan Lakukan Langkah-langkah tersebut, tulis daftar error yang ditemukan
2) Tulis penyelesaian dari error yang ditemukan Jawab
1.
2.

# ACARA IV

# MENGGUNAKAN BLADE

## A. POKOK BAHASAN

Materi ini menjelaskan cara mengubah elemen navigasi menjadi komponen tersendiri dengan menggunakan Blade Templating Engine di Laravel. Komponen ini akan lebih dinamis dan dapat digunakan di berbagai halaman tanpa perlu menulis ulang kode yang sama. Selain itu, dibahas pula penggunaan attributes di Laravel untuk menambahkan berbagai detail pada komponen, seperti href, id,

|dan|class,|navigasi|
|---|---|---|
|disesuaikan.|||
|B. SUB POKOK BAHASAN|||
|1.|Menggunakan sintaks Blade {{ }} sebagai pengganti <?php echo ?> untuk menampilkan data dalam tampilan.||
|2.|Membuat komponen navigasi terpisah, seperti nav-link.blade.php, untuk memudahkan pengelolaan menu.||
|3.|Menyusun tag anchor (<a>) di dalam file nav-link.blade.php untuk link yang akan digunakan di berbagai halaman.||
|4.|Mengubah layout untuk memanggil komponen navigasi dengan tag navlink.||
|5.|Memperbaiki tautan agar dinamis sehingga bisa mengarahkan ke berbagai halaman seperti home, about, dan contact.||
|6. C. TUJUAN|Memahami penggunaan attributes detail seperti href, id, dan class agar komponen navigasi lebih fleksibel dan dapat disesuaikan dengan mudah.|dalam komponen untuk mengatur|
|1.|Memahami Konsep Template Engine||
|2.|Memanfaatkan Sintaks Blade||
|3.|Menyederhanakan Tampilan dengan Inheritance||

untuk membuat elemen lebih fleksibel dan dapat

|D. E.|4. 5. 6. 1. 2. 3. 4. •|Menggunakan Komponen Blade Mengelola Data di Tampilan Mengoptimalkan Tampilan dengan Directive dan Blade Component ALAT DAN BAHAN Code Editor (VS code, PhpStorm dll) TablePlus PHP 8.x Laragon (MySQL PhpMyAdmin) MATERI Disini kita dapat merubah <?php echo ?> dengan {{}}, ini adalah salah satu helper yang sangat membantu di blade|
|---|---|---|
||• •|Hmm?? Bagaimana jika kita ingin merubah menu navigasi menjadi komponen tersendiri?? Navigasi sebagai Components Pertama kita akan membuat file navigasi di folder component terlebih dahulu misalkan nav-link.blade.php 40|

- Kemudian copy a href home ke nav-link.blade.php
- Berarti dengan di dalam layout kita harus mengganti anchor tag (<a>) menjadi tag navlink
- dan ketika dicoba di browser, home link akan bekerja sebagaimana mestinya, tapi bagaimana dengan about dan contact?
- Mari kita edit sisanya

- Tentu saja ketika dicoba semua link akan mengarah ke home karena di component nav-link masih berupa hardcode untuk home saja, belum dinamis
- Secara logika sederhana berarti kita harus membuat anchor tag disetiap link seperti ini
- Akan tetapi bagaimana cara kita untuk melempakan ke nav-link agar bisa dinamis?
- Disini kita akan berkenalan dengan attributes, attributes ini berisi tentang semua detail seperti href, id, class
- Kemudian kita kembali nav-link kemudian kita panggil attributes

|F. LEMBAR KERJA PRAKTIK|||
|---|---|---|
|Hari / Tanggal|: _____________________________||
|Nama Mahasiswa|: _____________________________||
|ditemukan|||
|Jawab|||
|1.|||
|2.|||
|||43|

1) Silahkan Lakukan Langkah-langkah tersebut, tulis daftar error yang
2) Tulis penyelesaian dari error yang ditemukan

# ACARA V

# KONEKSI TAILWIND CSS

## A. POKOK BAHASAN

Koneksi Tailwind CSS dalam Laravel dapat dilakukan dengan mudah menggunakan paket Laravel Mix, yang menyediakan cara sederhana untuk mengelola dan mengompilasi aset seperti CSS dan JavaScript. Tailwind CSS adalah framework CSS utility-first yang memungkinkan pengembang untuk membuat desain yang responsif dan kustom tanpa menulis banyak CSS kustom. Untuk mengintegrasikan Tailwind CSS ke dalam proyek Laravel, langkah pertama adalah menginstal paket Tailwind melalui npm atau yarn, dan kemudian mengonfigurasi file webpack.mix.js untuk mengompilasi file CSS dengan menggunakan Tailwind. Setelah pengaturan dasar selesai, pengembang dapat mulai menggunakan kelas-kelas utilitas dari Tailwind dalam tampilan Blade. Kelas-kelas ini memberikan fleksibilitas untuk mengatur margin, padding, warna, tipografi, dan elemen desain lainnya langsung di dalam markup HTML tanpa perlu menulis CSS tambahan. Proses kompilasi yang dilakukan oleh Laravel Mix akan menghasilkan file CSS yang teroptimasi dan siap digunakan di aplikasi. Dengan menggabungkan kemampuan Tailwind CSS yang kuat dan efisien dengan kekuatan Laravel, pengembang dapat menciptakan antarmuka yang modern dan responsif dengan lebih cepat dan tanpa banyak kerumitan. Selain itu, Tailwind CSS juga mendukung penggunaan purge untuk menghapus kelas-kelas CSS yang tidak terpakai, sehingga ukuran file CSS menjadi lebih kecil dan aplikasi lebih cepat diakses. Integrasi Tailwind CSS dengan Laravel sangat mendukung pengembangan aplikasi yang fleksibel dan skalabel, dengan memanfaatkan utility-first approach yang ditawarkan oleh Tailwind untuk meningkatkan produktivitas desain.

|B. C. D. E.|1. 2. 3. 4. 1. 2. 3. 4. •|SUB POKOK BAHASAN TUJUAN Memahami konsep tailwind CSS Menggunakan kelas utility Penerapan desain Laragon (MySQL PhpMyAdmin) ALAT DAN BAHAN Code Editor (VS code, PhpStorm dll) TablePlus PHP 8.x Laragon (MySQL PhpMyAdmin) MATERI Kunjung tailwind.com kemudian pilih menu component dan stacked layouts, kemudian copy pilihan paling atas|
|---|---|---|
||•|Paste di bagian layout didalam body, kemudian refresh halaman browser 45|

|•|Jika muncul tampilan seperti itu, berarti kita belum menarik tailwind css, untuk sementara kita gunakan cdn untuk tailwind||
|---|---|---|
|•|refresh halaman kemudian anda bisa lihat bahwa tailwind sudah terload||
|•|langkah selanjutanya adalah menyesuaikan elemen butuhkan yaitu link dan sebagainya|seperti yang kita 46|

- Tailwind memiliki 2 model tampilan untuk navigasi pastikan sudah dirubah semua
- Kemudian scroll kebawah dan kita memiliki bagian untuk memasukan konten
- ganti menjadi slot dan seharusnya sudah bisa digunakan

- jika anda perhatikan gambar diatas maka anda menyadari bahwa tombol home masih aktif walaupun kita ke menu about, ini terjadi karena css aktif di tulis secara harcode di tombol home.
- Lantas ada juga pesan Dashboard sebagai heading, lantas bagaimana bila kita ingin membuat slot baru untuk heading?
- cara membuatnya adalah dengan tag <x-slot:namaslot>
- kita akan mencoba satu di halaman home, misal nama slot adalah heading
- kemudian kita panggil heading ke dari layout dan refresh halaman

|• • •|lakukan hal yang sama di view sisanya lantas bagaimana dengan style button home yang tetap ter-highlight meskipun kita berada dihalaamn lain? Costum Styling berdasarkan Route Jika kita melihat dokumentasi yang ada di dalam script Current yang berarti adalah halaman aktif dan default sudah terdapat memakainya|insrtuksi untuk|
|---|---|---|
|•|kita akan coba hardcode pada link home||
|• •|perhatikan {{true ? 'bg-gray-900 text-white':'text-gray-300 hover:text-white'}} Blade sebenarnya hanya menyederhanakan script yang ada di PHP, jika diartikan ke dalam vanilla PHP maka script tersebut kurang lebih akan seperti ini|script hover:bg-gray-700 49|

|•|<?php if ($condition) {$classes = 'bg-gray-900 text-white';} else {} ?>|$condition = true; // This is the condition you are checking $classes = 'text-gray-300 hover:bg-gray-700 hover:text-white'; jika kita ganti menjadi false maka home tidak akan terhightlight|
|---|---|---|
|• • • •|Sekarang yang menjadi Laravel memiliki request helper function|tantangan adalah memasukan metode yang sebenarnya agar dapat berjalan sesuai dengan keinginan. yang dapat digunakan untuk memanggil informasi, fungsi tersebut adalah request() salah satu metode yang ada di objek request adalah is is membantu kita untuk menyampaikan ekspresion, pattern dan is akan menentukan apakah halaman sekarang cocok dengan style yang diberikan 50|

- (‘/’) menandakan route home, jadi kalau diartikan mengembalikan nilai true apabila pengguna saat ini berada di beranda ('/') dan false apabila tidak.
- Lakukan hal yang sama di link yang lain
- sekarang permasalahan yang muncul adalah terkadang link yang ada diwebsite memiliki style atau instruksi yang kadang2 sangat banyak dan script akan terlihat messy jika kita letak kan di 1 file leayout. Mari kita buat component terpisah seperti sebelumnya
- Copy link home ke nav-link.blade.php
- seperti sebelumnya, href kita hapus karena href nantinya berada di layout,

|•|kemudian rubah anchor tag di layour menjadi nav-link||
|---|---|---|
|•|aria-current adalah cara untuk mengindikasikan apakah link yang sekarang merepresentasikan halaman yang ditampilkan. jadi misal false berarti bukan current page.||
|• •|Selanjutnya kita akan berkenalan dengan prop, jadi didalam blade ada attributes dan prop, attributes adalah semua yang ada di belakang tag nama component dan prop adalah untuk membedakan, atau data yang akan dikirim. jadi misal kita mendefinisiakn prop dengan nama aktif, maka aktif tidak akan disertakan dalam attributes (untuk mengetahui perbedaan nya coba echo attributes) 52||

|• •|kita coba ganti request()-> is menjadi props yang sudah didefinisaka, karena lebih mudah untuk membaca props daripada harus menulis satupersatu request untuk memanggil props cukup panggil varibel sesuai dengan nama props, berarti disini adalah $aktif||
|---|---|---|
|•|jadi bayangkan untuk nilai default $aktif berarti adalah false, karena semua tidak aktif sebelum kita kirim request||
|•|Jadi kita akan mencoba di link contact, meskipun kita menuliskan apa saja di props aktif, maka highlight link akan menyala karena props aktif hanya mendeteksi apakah props telah terbuat / terdefinisikan atau belum|53|

- untuk mengatasinya, kita perlu mendefiniskan prop aktif sebagai boolean, apabila kita hanya menuliskan aktif=”false” maka di sini akan terbaca string dan tetap akan memberikan nilai true
- disini kita akan mendeklarasikan bahwa prop aktif adalah boolean, dan ketika kita menulis false, berarti false dan sebalitnya.
- caranya adalah dengan menambahkan : (titik dua) didepan nama prop, jadi : adalah cara di laravel dan blade untuk mengindikasikan bahwa prop yang kita buat adalah boolean

|•|langkah selanjutnya adalah memastikan bahwa prop aktif tercreate kalau requset nya sesuai. caranya cukup mudah, cukup panggil request()-> is() kemudian isikan nama request nya.|||
|---|---|---|---|
|•|Kemudian coba di browser|||
|•|Bagaimana jika kita ingin membuat props baru untuk menentukan apakah navlink adalah anchor tag atau button tag?? Type Props|55||

|• •|caranya cukup sederhana. buat props baru di navlink misalkan namanya adalah type (bebas), kemudian definisikan type di layout misalkan pada link about, akan menjadi type button, dan defaultnya adalah anchor tag apabila tidak didefinisikan layout||
|---|---|---|
|•|navlink||
|•|ada 2 cara, cara yang pertama adalah langsung echo $type, dan ketika kita cek maka sudah sesuai dengan keinginan||
|• •|akan tetapi cara ini biasanya terlalu messy, cara kedua adalah dengan menggunakan if agar terlihat lebih rapi jika php vanilla maka kita akan menuliskan <?php if(..){..}?> 56||

|•|tetapi di blade kita cukup menuliskan dengan @if||
|---|---|---|
|• F. 1) 2) Jawab 1. 2.|cukup rapi bukan? LEMBAR KERJA PRAKTIK Hari / Tanggal : _____________________________ Nama Mahasiswa : _____________________________ Silahkan Lakukan Langkah-langkah tersebut, tulis daftar error yang ditemukan Tulis penyelesaian dari error yang ditemukan 57||

# ACARA VI

# KONEKSI DATABASE DENGAN TABLEPLUS

## A. POKOK BAHASAN

Materi ini membahas bagaimana mengintegrasikan database dengan aplikasi Laravel menggunakan SQLite, serta memperkenalkan konsep MVC (Model, View, Controller) dalam struktur aplikasi Laravel. Proses ini dimulai dengan menyederhanakan kode di route, lalu memindahkan logika ke dalam kelas dan model, untuk menjaga kode tetap rapi dan mudah dipelihara. Selain itu, pembahasan juga meliputi cara mengelola data melalui model, serta menambahkan fungsi untuk menangani error, seperti menampilkan halaman 404 jika data yang dicari tidak ada.

|B. SUB POKOK BAHASAN||
|---|---|
|1.|Memahami MVC di Laravel|
|2.|Menggunakan SQLite sebagai Database|
|3.|Refaktor Kode dengan Class dan Model|
|4.|Penggunaan Namespace di Laravel|
|5.|Menangani Error dengan Conditional Statements|
|6.|Konfigurasi Database di Laravel|
|C. TUJUAN||
|7.|Memahami Dasar-dasar Koneksi Database|
|8.|Menguasai Penggunaan TablePlus|
|9.|Mengelola Database|
|10.|Melakukan Query dan Manipulasi Data|
|11.|Mengidentifikasi dan Menyelesaikan Masalah Koneksi|
|12.|Menerapkan Keamanan Koneksi Database|

|D. E.|1. 2. 3. 4. •|ALAT DAN BAHAN Code Editor (VS code, PhpStorm dll) TablePlus PHP 8.x Laragon (MySQL PhpMyAdmin) MATERI Setelah kita sampai pada titik ini|
|---|---|---|
||• • • • • •|Langkah selanjutnya adalah mengintegrasikan dengan database Kita akan mulai mempelajarinya menggunakan sqlite Sqlite adalah database yang berbasis file, yang cocok untuk website yang tidak memerlukan storage data yang cukup besar dan relative cukup statis Tapi sebelum itu kita akan belajar sedikit mengenai konsep MVC (Model View Controller) Saya akan menjelaskan secara perlahan-lahan Jadi perhatikan bagian route listkerja|
|||59|

|• •|Jika diperhatikan terdapat Array data pekerjaan di route listkerja solusinya untuk merampingkan script tersebut dan kita definisikan di awal dokumen|dan listkerja/{id}, padahal data tersebut isinya sama persis, lantas bagaimana Misal kita akan pindah data Array pekerjaan menjadi sebuah variable baru|
|---|---|---|
|• •|pekerjaan tersebut menggunakan perintah dibelakangnya|Lantas bagaimana caranya adar route listkerja bisa mengakses variable Ternyata caranya cukup mudah, kita hanya perlu memanggil variable use dan di ikuti nama variable|
|•|Kemudian pada return view kita dapat memanggil variable pekerjaan|60|

- Kemudian lakukan hal yang sama pada route listkerja/{id}, kita hapus Array data pekerjaan dan kita akan gunakan use agar bisa mengakses variable, jadinya seperti ini
- Dan ketika kita coba jalankan browser untuk mengecek, maka website akan bekerja sebagaimana mestinya
- Selanjutnya saya akan perkenalkan class dalam Laravel, karena Framework Laravel merupakan contoh sempurna untuk OOP, maka Semua data dan fungsi di dalam laravel ini dibungkus dalam kelas-kelas atau objek-objek. Bandingkan dengan logika pemrograman terstruktur?? Beda sekali bukan??. Disini setiap objek dapat menerima pesan, memproses data, dan mengirim pesan ke objek lainnya, Model OOP dikatakan dapat memberi fleksibilitas yang lebih, kemudahan mengubah program, dan digunakan luas dalam teknik piranti lunak skala besar.

|•|Pertama kita akan buat kelas pekerjaan, kita sesuaikan Namanya dengan variable yang sudah ada||
|---|---|---|
|•|kemudian kita buat function untuk menyimpan data dari variable, misalkan Namanya adalah daftar_pekerjaan||
|•|Kemudian di dalam function kita masukan data dari variable pekerjaan 62||

- Kemudian, sementara cukup kita return untuk mempermudah proses pemanggilan

|•|Karena kita telah menghapus variable diluar function, maka proses pemanggilan variable diubah menjadi proses pemanggilan kelas, jadi pada route listkerja yang semula seperti ini||
|---|---|---|
|•|Menjadi seperti ini||
|•|Lebih simple bukan?? Lakukan hal yang sama pada route listkerja/{id}, yang semula seperti ini||
|•|Menjadi seperti ini||
|•|Kemudian kita jalankan websitenya, dan pasti akan masih berjalan seperti semula 64||

- Disini kita sudah belajar tentang class, kemudian kamu dapat menambahkan secara spesifik tipe data apa yang akan di return dari sebuah function dengan menggunakan:

- Fungsinya dari menambahkan tipe secara spesifik ini adalah untuk mempermudah dan memperjelas dokumentasi sebuah project jika memiliki project skala besar dan bekerja secara tim
- Disiini kita sudah selesai belajar class sederhana!!!
- Kemudaian sepertinya tidak masuk akal jika kita meletakkan class di route, padahal route hanya untuk mengatur view yang akan ditampilkan. Jika semua properties kita simpan dalam 1 route, maka nanti route akan memiliki jumlah baris code yang sangat banyak dan sulit untuk melakukan debugging dan perbaikan
- Di dalam Laravel, seperti yang telah disebutkan sebelumnya menggunakan model MVC (model-view-controller)
- Disini kalian sudah belajar tentang view, yaitu adalah tampilan yang user lihat
- Controller: kita akan belajar nanti, tapi di dalam file route, dimana kita membuat route dan ada function yang ditugaskan di dalam route, itu bisa dikatakan controller

|• •|Model : model pada dasarnya adalah tempat dimana data diolah, di model juga berisi logika logika untuik pengolahan data, jadi misalkan pada website loker, apa yang dilakukan database kalau sebuah loker sudah terisi, dan lain lain Model Laravel terletak di dalam folder app -> model|||
|---|---|---|---|
|•|Mari kita buat model baru Bernama Pekerjaan|||
|•|Kemudian pindah class yang ada di route ke model pekerjaan|67||

- Pada bagian atas, tambahkan namespace App\Models; dalam Laravel mengacu pada deklarasi namespace di dalam framework Laravel, yang digunakan untuk mengorganisasikan dan mengelompokkan kelas-kelas ke dalam ruang lingkup yang lebih spesifik. Pada contoh ini, namespace App\Models berarti bahwa file tersebut berada di dalam direktori app/Models dalam struktur aplikasi Laravel.

- Dan penggunaan namespace ini memungkinkan kita untuk menggunakan class object pada sebuah controller
- Kita akan coba, misalkan kita akan menggunakan class pekerjaan di route kita, kita cukup tulis kan use App\Models\Pekerjaan;

|•|Ketika kita coba di website, tentu saja masih bisa||
|---|---|---|
|• Selanjutnya jika|diperhatikan di route listkerja/{id} seharusnya diletak kan di model, yaitu yang ini|ada script yang|
|•|Oke kita akan pindah ke model, caranya cukup sederhana, pertama kita buat function baru di model Pekerjaan, misal Namanya function find, karena tugas dari script ini adalah mencari pekerjaan berdasarkan id||
|||70|

|•|Dan pincah script yang ada di route listkerja/{id}, sehingga jadi seperti ini||
|---|---|---|
|•|Dan Langkah terakhir kita ke route listkerja/{id} dan kita ganti panggil fungsi find seperti ini||
|||71|

|• •|ERROR HANDLING|Dan sekarang script kita jadi lebih clean|
|---|---|---|
|• •||Bagaimana jika ada yang mencari id kerja diluar dari database yang ada?? Caranya cukup mudah, kita hanya perlu menambahkan statement if|
|•||dan ketika dicoba lagi, maka akan keluar view 404|
|F. 1) 2) 1. 2.|LEMBAR KERJA PRAKTIK Hari / Tanggal Nama Mahasiswa Silahkan ditemukan Jawab|: ‘ : _____________________________ Lakukan Langkah-langkah tersebut, tulis daftar error yang Tulis penyelesaian dari error yang ditemukan 72|

# ACARA VII

# DATABASE

## A. POKOK BAHASAN

Pada sesi ini, kita akan mempelajari cara bekerja dengan database di Laravel, dimulai dengan cara melihat dan mengonfigurasi database yang ada menggunakan perintah seperti `php artisan db:show`. Selanjutnya, kita akan mengonfigurasi koneksi SQLite di Laravel dengan memeriksa dan mengedit file `.env`. Setelah koneksi terkonfigurasi, kita akan menggunakan perintah `php artisan migrate` untuk membuat dan memigrasi tabel database yang sudah ditentukan. Selain itu, kita akan membahas tentang cara membuat migration baru menggunakan `php artisan make:migration`, serta konvensi penamaan yang perlu diikuti untuk memastikan kejelasan dan konsistensi dalam pembuatan file migration.

Selain migration, kita juga akan mengenal Eloquent ORM (Object-Relational Mapping), yang merupakan fitur Laravel untuk mempermudah interaksi dengan database melalui model. Eloquent memungkinkan kita untuk melakukan operasi CRUD (Create, Read, Update, Delete) tanpa perlu menulis query SQL secara langsung. Setiap model Eloquent terkait dengan satu tabel dalam database dan mendukung berbagai relasi antar tabel. Selain itu, kita akan mempelajari cara menggunakan Eloquent dalam model untuk menangani data dengan lebih efisien dan terstruktur. Sebagai tambahan, kita akan melihat bagaimana menggunakan PHP Artisan Tinker, sebuah perintah yang memungkinkan interaksi langsung dengan aplikasi Laravel melalui command line untuk manipulasi data secara cepat dan mudah.

## B. SUB POKOK BAHASAN

1. Mengenal dan Menggunakan Database di Laravel
2. Mengonfigurasi Koneksi SQLite di Laravel

|3.|Memahami Perintah php artisan migrate untuk Migrasi Database|
|---|---|
|4.|Membuat dan Menjalankan Migration Baru|
|5.|Konvensi Penamaan File Migration di Laravel|
|6.|Proses dan Fungsi Migration: Up dan Down|
|7.|Menggunakan Eloquent ORM untuk Operasi CRUD|
|8.|Struktur dan Penggunaan Eloquent dalam Model|
|9. TUJUAN|Menggunakan PHP Artisan Tinker untuk Manipulasi Data|
|1.|Memahami Konsep Dasar Database|
|2.|Menguasai Model Data|
|3.|Mengenal Sistem Manajemen Basis Data (DBMS|
|4.|Menguasai Bahasa Query (SQL)|
|5.|Membuat dan Mengelola Database|
|6.|Menjaga Keamanan dan Integritas Data|
|7.|Mengoptimalkan Kinerja Database|
|8.|Memahami Normalisasi dan Denormalisasi|
|9.|Memahami Replikasi dan Backup Database|
|10. ALAT DAN BAHAN|Mengembangkan Aplikasi Berbasis Database|
|1.|Code Editor (VS code, PhpStorm dll)|
|2.|TablePlus|
|3.|PHP 8.x|
|4. MATERI|Laragon (MySQL PhpMyAdmin)|

## C.

## D.

## E.

- Setelah belajar MVC, kita akan mulai belajar tentang database
- untuk meilhat database yang sudah ada caranya adalah dengan memberikan perintah
- php artisan db:show

- dan akan keluar tampilan seperti ini
- Jika teman2 perhatikan file database ada di dalam folder database
- Kemudian teman2 dapat cek koneksi database sqlite di file .env
- Kemudian kamu dapat melihat file yang ada di .env seperti ini

- Disini menandakan bahwa di Laravel sudah memakai sqlite, seperti pilihan yang teman2 pilih di awal ketika mendownload Laravel
- Jika teman2 ada yang menggunakna mysql seperti ini
- Berikan komentar dulu pada script yang lain, kemudian tambahkan scipt berikut ini dibagian atas DB_CONNECTION=sqlite
- Kemudian jalankan perintah
- php artisan migrate
- Untuk menggenerate table database yang sudah di tuliskan di laravel
- Kita kembali ke tampilan php artisan db:show

|• terbentuk di awal, atau terbentuk • teman2 menggunkan aplikasi [https://tableplus.com/](https://tableplus.com/) veris free • Setelah terinstall bisa dibuka tableplus,|Disini teman teman bisa melihat bahwa sudah ada 9 table yang sudah Nah untuk melihat database.sqlite ini cara yang paling sederhana adalah tableplus, yang bisa didownload disini|
|---|---|
|• Tambah koneksi baru dengan tombol + • Pilih sqlite||
|• Kemudian akan muncul tampilan seperti ini|77|

- Berikan nama sesuai keinginan
- Dan sqlite file cari di direktor C:\Users\[user]\Herd\[nama_project]\database
- Dan kemudian pilih database.sqlite
- Kemudian temen2 bisa klik Test untuk tes koneksi, dan apabila muncul notifikasi seperti ini berarti sudah terkoneksi
- Setelah sampai sini bisa di save kemudian, akan muncul koneksi bari di tableplus

- Kemudian bisa buka koneksi yang sudah kita buat
- Bisa dilihat bahwa banyak sekali table yang telah otomatis terbuat,
- Kemudian kita kembali ke perintah php artisan migrate

|• • •|Bisa di lihat bahwa perintah php artisan migrate sebenarnya menjalankan 3 perintah diatas, create_jobs_table, create_cache_table, dan create_users_table Nah ternyata file tersebut ada di folder database migration|||
|---|---|---|---|
|•|Bisa kita Analisa pada file create user table ini.|||
|• • •|Ternyata didalam file tersebut untuk meng-create table telah disediakan scriptnya Misalkan kita ingin menambah field baru di table user misal nama depan dan nama belakang. Kita cukup tambahkan script di dalam table user, misal seperti ini|80||

|• • • •|Ketika kita selesai membuat script tambahan di migration, kita tidak bisa serta merta mengharapkan bahwa didalam table kita akan otomatis terdapat field baru. Kita menjalakan ulang migration nya, nah untuk melihat perintah apa saja yang ada di migration, teman2 bisa memberikan perintah Php artisan Kemudian bisa dicari bagian migrate|||
|---|---|---|---|
|•|Disini kita bisa menggunakna php artisan migrate:fresh, untuk Drop semua table dan membuat baru.|||
|•|Kemudian kita cek table plus|81||

- Disini sudah muncul 2 field yang telah kita buat
- Selanjutnya bagaimana car akita untuk membuat table baru??
- Bisa menggunkana perintah
- php artisan make:migration
- Karena dalam Laravel untuk membuat table kita dapat menggunakan migration
- kemudian masukan nama migration, misalkan disini Namanya adalah **create_pekerjaan_table**

Konvensi Penamaan Umum Migration

1. Deskriptif: Nama migrasi harus dengan jelas menggambarkan apa yang dilakukan migrasi tersebut. Misalnya, create_pekerjaan_table menunjukkan bahwa migrasi ini membuat tabel bernama pekerjaan.
2. Struktur: Struktur umum biasanya adalah: o Aksi: create, update, drop, dll. o Nama Tabel: Nama yang jelas mewakili sumber daya atau data. o Sufiks: Biasanya diakhiri dengan _table untuk memperjelas bahwa ini adalah pembuatan atau modifikasi tabel. o Contoh: create_users_table, update_orders_table, drop_comments_table.
3. Penamaan Kustom : Kamu bisa memberi nama pada file migrasi sesuai keinginan kamu, selama nama tersebut deskriptif. Misalnya, jika Kamu membuat migrasi untuk menambahkan kolom baru ke tabel job_listing, Kamu bisa menamakannya: o add_salary_to_pekerjaan_table o update_pekerjaan_table_with_salary Catatan Penting o Keunikan: Setiap nama file migrasi harus unik untuk menghindari konflik. o Stempel Waktu: Laravel secara otomatis menambahkan prefix stempel waktu ke file migrasi saat dibuat, memastikan migrasi dijalankan sesuai urutan waktu pembuatan. Contoh Perintah Saat Kamu membuat migrasi, Kamu bisa mengikuti konvensi penamaan seperti ini: o php artisan make:migration create_pekerjaan_table
## Atau, untuk pembaruan:

o php artisan make:migration add_salary_to_ pekerjaan _table

|•|Ringkasan Meskipun tidak wajib mengikuti pola penamaan ini, mengikuti konvensi penamaan yang jelas dan konsisten sangat disarankan untuk meningkatkan keterbacaan dan pemeliharaan kode kamu. Setelah membuat migration baru maka di folder migration akan muncul file baru yang telah kita buat|||
|---|---|---|---|
|•|Jika teman2 buka migration yang baru ada 2 function yang sudah dibuat|||
|• •|Up dan down, up untuk menjalankan eksekusi dan down untuk rollback action terakhir Misal kita tambahkan field title dan salary di table pekerjaan yang akan dibuat|84||

- Langsung saja tambahkan table->string(‘title) dan table->string(‘salary) sesuai dengan database yang sudah kita buat kemarin
- Kemudian kita jalankan php artisan migrate untuk mengeksekusi migration yang baru
- Cek database di tableplus, kemudian seharusnya sudah muncul table baru di tableplus

|•|Kemudian kita masukan data ke table secara manual dulu untuk sekarang||
|---|---|---|
|•|ELOQUENT Eloquent di Laravel adalah *ORM* (Object-Relational Mapping) bawaan Laravel yang digunakan untuk berinteraksi dengan database. Eloquent memudahkan pengguna untuk bekerja dengan database menggunakan model, yang merepresentasikan tabel dalam database, tanpa harus menulis query SQL secara langsung. Setiap model Eloquent terkait dengan satu tabel, dan memungkinkan untuk melakukan operasi seperti insert, update, 86||

delete, dan select dengan menggunakan metode-metode yang disediakan oleh Eloquent. Beberapa fitur utama Eloquent adalah: o CRUD Operations: Melakukan operasi database seperti menambahkan, memperbarui, menghapus, dan membaca data dengan mudah. o Relationship Handling: Eloquent mendukung relasi antar tabel seperti one-to-one, one-to-many, many-to-many, dll. o Query Builder: Eloquent memiliki query builder yang memungkinkan Anda menulis query dalam bentuk yang lebih sederhana dan intuitif. o Mutators dan Accessor: Digunakan untuk mengubah data sebelum disimpan ke database atau setelah diambil dari database. o Eager Loading dan Lazy Loading: Mengoptimalkan pengambilan data relasi dari database.

- Dengan Eloquent, pengembang dapat mengelola data dalam database dengan cara yang lebih sederhana dan terstruktur dibandingkan menulis query SQL secara manual.
- Simpel nya gini, jadi dengan Eloquent, kita bisa mengelola data yang ada pada database dari hanya satu buah model. misalnya kita punya table siswa,

||maka kita juga akan mempunyai sebuah model dengan nama siswa, nah||
|---|---|---|
||dengan model siswa ini kita bisa mengelola data-data yang ada pada tabel siswa dengan mudah dan cepat.||
|•|Kita bisa menginput data, mengedit, menampilkan, mengupdate, bahkan kita juga bisa menggunakan relasi tabel dengan sangat mudah!.||
|•|Struktur penulisan coding nya pun sangat singkat.||
|•|Jika secara manual pada PHP native, jika kita ingin mengakses atau menampilkan data dari table siswa, biasanya kita menggunakan query “select * from siswa” kan?||
|•|Nah, jika kita menggunakan eloquent laravel, kita cukup mendefinisikan nama modelnya, kemudian kita bisa langsung fungsi all() untuk mengambil semua data pada table siswa.|menggunakan|
|•|Pertama kita buka model yang telah kita buat||
|•|Kita hapus bagian data array, karena kita sudah membuatnya di database|88|

- Kemudian untuk membuat kelas yang menggunakan model eloquent kita hanya perlu memberikan perintah
- Extends Model
- Kemudian jangan lupa gunakan juga
- Use Illuminate\Database\Eloquent\Model;

|•|Dan karena kita menggunakan eloquent kita bisa hapus semua function yang telah kita buat, dan mulai menggunakan eloquent||||
|---|---|---|---|---|
|• •|Kemudian kita coba ke route web home, dan kita coba panggil class pekerjaan Ketika kamu mencoba memanggil fungsi di kelas pekerjaan dapat kamu lihat bahwa sekarnang pekerjaan memiliki banyak properties||||
|•|Misalkan kita akan coba all() untuk memanggil semua record||||
|•|Kemudian kita coba lihat menggunakan fungsi dump and die|||90|

- Kemudian kita jalankan di browser
- Dapat dilihat bahwa Laravel mencoba terkoneksi dengan table pekerjaans tapi tidak ada
- Nah disini terdapat aturan yang cukup unik dari eloquent
- Didalam eloquent, nama kelas harus merupakan nama singular dari sebuah table
- Jadi misalkan nama kelas kita Pekerjaan tabelnya harus Bernama pekerjaans
- Misal nama kelasnya adalah Komentar tablenya harus Bernama komentars
- oleh karena itu biasanya pengguna Laravel menamail kelas dan table dalam Bahasa inggris karena lebih masuk akal bila menggunkan akhiran s
- Lantas bagaimana car akita mengakses table yang berbeda dari nama kelas??
- Caranya kita cukup memberikan perintah di model
- protected $table = ‘pekerjaan’;

|•|Dan jika kita coba di browser, sekarang kita disajikan 3 item kelas yang otomatis dibuat oleh eloquent||
|---|---|---|
|•|Jika kamu buka salah satu modelnya||
|• •|Kamu akan menemukan banyak data, misal kita ingin menampilkan data guru, cukup tuliskan nomor array dan nama field seperti ini $kerja[0]->title|92|

- Dan kita coba di browser
- Lantas bagaimana dengan route /listkerja
- Cukup mudah
- Cukup tuliskan all()
- Dan ketika di muat di browser
- Kenapa datanya tidak keluar??
- Lakukan perbaikan juga di listkekrla/{id}
- Cukup mudah bukan?? PHP ARTISAN tinker PHP Artisan Tinker adalah perintah di Laravel yang memungkinkan kamu

berinteraksi dengan aplikasi Laravel melalui command line. Tinker menggunakan REPL (Read-Eval-Print Loop) untuk mengeksekusi kode PHP secara langsung dalam konteks aplikasi Laravel. Ini sangat berguna untuk melakukan uji coba cepat, memanipulasi data di database, dan mengakses berbagai fitur Laravel tanpa harus membuat rute atau controller.

- Kita akan mencoba memasukan data mengugnakan tinker terlebih dahulu
- Dengan menggunakan perintah
- App\Models\Pekerjaan::create([‘title’ => ‘Direktur’, ‘salary’ => ’90.000.000’]);
- Bisa teman2 perhatikan bahwa title harus dijadikan fillable property terlebih dahulu, karena didalam Laravel memiliki keamanan yang cukup ketat
- Kita difinisikan field mana saja yang bisa dan boleh untuk dilakukan proses editing
- Dengan cara menambahkan perintah fillable di model pekerjaan
- Kemudian kita keluar dari tinker dengan Ctrl+C
- Dan masuk lagi dan jalankan perintah create yang sama

- Kemudian jika kita cek menggunakan all() maka kita memiliki 4 data
- Dan karena menggunakan eloquent, maka database akan otomatis menggenerate timestamp, menakjubkan bukan??
- Dan ketika ingin mencari data tertentu, cukup menggunakan find,
- Jika sebelumnya kita menggunakan cara yang sangat rumit, kali ini cukup find disertai id saja

|•|filednya|Kamu juga bisa pinpoint ke filed yang di inginkan dengan menyebutkan nama|
|---|---|---|
|• • F. 1) 2) 1. 2.|tableplus LEMBAR KERJA PRAKTIK Hari / Tanggal Nama Mahasiswa Silahkan ditemukan Jawab|Berasa sperti magic bukan?? Kemudian jika kamu masuk ke tableplus, maka sudah otomatis masuk ke : _____________________________ : _____________________________ Lakukan Langkah-langkah tersebut, tulis daftar error yang Tulis penyelesaian dari error yang ditemukan 96|

# ACARA VIII

# FACTORY

## A. POKOK BAHASAN

Pada sesi kali ini, kita akan mempelajari berbagai fitur yang disediakan oleh Laravel untuk memudahkan pengembangan aplikasi, seperti PHP Artisan Tinker, Model, Migration, dan Factory.

Dengan PHP Artisan Tinker, kita dapat melakukan berbagai operasi pada model, termasuk penghapusan data. Misalnya, kita dapat menghapus data pada tabel menggunakan perintah tertentu, dan perubahan tersebut langsung tercermin di database.

Laravel juga memudahkan pembuatan model dan migration melalui perintah php artisan make:model yang dilengkapi dengan opsi tambahan, seperti -m untuk membuat migration bersamaan dengan model. Proses ini sangat efisien untuk mempercepat pengembangan.

Selain itu, kita akan membahas penggunaan Factory untuk menghasilkan data uji secara otomatis. Factory memungkinkan pembuatan data palsu yang sangat berguna dalam pengujian dan pengembangan aplikasi. Dengan menggunakan perintah yang tepat, kita bisa menghasilkan sejumlah data dummy yang langsung ditambahkan ke tabel.

Laravel juga menyediakan kemudahan dalam mengelola relasi antar tabel. Dengan factory, kita bisa membuat data yang saling terhubung antar tabel secara otomatis, membuat pengelolaan data lebih efisien dan terstruktur.

Secara keseluruhan, Laravel menawarkan berbagai perintah artisan yang sangat membantu dalam pengembangan aplikasi, mulai dari pembuatan model dan migration hingga pengelolaan data dan relasi antar tabel.

|B. SUB POKOK BAHASAN||
|---|---|
|1.|Penggunaan PHP Artisan Tinker untuk Mengelola Data|
|2.|Pembuatan Model dan Migration dengan PHP Artisan|
|3.|Implementasi Factory di Laravel untuk Data Dummy|
|4.|Aturan Penamaan dan Pengaturan Factory di Laravel|
|5.|Mengelola Relasi Antar Tabel Menggunakan Factory|
|6.|Pembuatan Model, Migration, dan Factory Secara Bersamaan dengan Perintah Artisan|
|C. TUJUAN||
|1.|Memahami konsep factory pattern|
|2.|Mengaplikasikan Pola Desain pada Kode:|
|3.|Memisahkan Proses Pembuatan Objek dari Kode Utama:|
|4.|Mengurangi Ketergantungan pada Kelas Spesifik|
|5.|Meningkatkan Skalabilitas Sistem|
|D. ALAT DAN BAHAN||
|1.|Code Editor (VS code, PhpStorm dll)|
|2.|TablePlus|
|3.|PHP 8.x|
|4.|Laragon (MySQL PhpMyAdmin)|
|E. MATERI||

- Di dalam php artisan tinker kita juga bisa melakukan proses delete, misalkan kita definisikan 1 variabel
- $kerja = App\Models\Pekerjaan::find(3)

|• •|Kita dapat menghapus dengan cara $kerja->delete()|
|---|---|
|•|Dan ketika kita cek di tableplus, maka datanya sudah hilang|
|• • • •|Nah kemudan jika kita ingin membuat model, migration kita masih melakukan secara manual Jika kita memberikan perintah Php artisan make Maka akan keluar banyak perintaha yang bisa kita gunakan, dan salah satunya adalah make:model|
|• • •|Nah tentu saja dalam perintah make:model ini kita bisa memberikan perintah tambahan, lantas bagaimana caranya kitab isa mengetahui apa saja perintah tambahan yang tersedia?? Jika kita memberikan perintah help sebelum php artisan make:model maka akan keluar banyak sekali daftar perintah tambahan yang bisa digunakan Php artisan help make:model 99|

- Dan salah satu perintah yang sangat berguna adalah -m untuk otomatis membuat migration
- Jadi umumnya alur dari setiap membuat migration adalah kita membuat model kemudian migration akan otomatis ikut terbuat tanpa kita harus membuat manual
- Jadi misalkan kita membuat model Prodi misalnya dengan perintah -m maka migration akan otomatis terbuat
- Php artisan make:model Prodi -m
- Dan di migration ketika kita ekseskusi sudah otomatis membuat table secar otomatis Factory
- Dalam Laravel, Factory adalah fitur yang digunakan untuk menghasilkan data uji secara otomatis. Factory memungkinkan pembuatan contoh (instance) model dengan cepat, yang dapat digunakan untuk mengisi database selama pengujian atau pengembangan.
- Factory di Laravel biasanya digunakan bersama dengan Eloquent, ORM bawaan Laravel, untuk membuat model-model dengan data yang diformat sesuai kebutuhan. Factory ini sangat berguna untuk pengujian karena

memungkinkan developer membuat data palsu (dummy) dengan mudah tanpa harus menuliskannya secara manual.

- Definisi Factory: Factory didefinisikan di dalam direktori `database/factories`. Di dalam file ini, kamu bisa menentukan pola data seperti apa yang akan dibuat untuk sebuah model.
- Penggunaan: Setelah factory didefinisikan, kamu dapat menggunakan factory tersebut untuk membuat satu atau beberapa instance model dengan perintah: o User::factory()->create(); // Membuat satu instance model User o User::factory()->count(10)->create(); // Membuat 10 instance model
User

- Faker Library: Laravel menggunakan Faker untuk mengisi data palsu, seperti nama, alamat, atau email, yang dibutuhkan oleh model.
- Dengan menggunakan factory, proses pengujian aplikasi menjadi lebih efisien dan fleksibel karena developer dapat dengan mudah menghasilkan berbagai skenario data tanpa memodifikasi database utama.
- Jika kita perhatikan di model users bawaan Laravel, disana terdapat script has factory

|•|Artinya bahwa model tersebut memiliki factory, nah factory terletak di dalam folder database -> factor|
|---|---|
|•|Kemudian jika diperhatikan dalam file userfactory sudah terdapat function|
|• • • •|Function ini gunanya untuk membuat data dummy di Laravel, misalkan dalam proses pengembangan membutuhkan data, di Laravel sudah menyediakan itu tanpa harus memasukan manual 1 per satu Unutk menggunakan factory kita bisa lakukan melalui tinker (misalkan php artisan tinker) Misal kita ingin membuat user dummy maka kita akan memanggil model user, dan masukan perintah App\Model\User::factory()->create() 102|

|• •|Jika punya teman2 eror, ingat pada SESI sebelumnya kita merubah name menjadi first_name dan last_name. Kita harus sesuaikan disini||
|---|---|---|
|•|Kemudian jika kita cek di tableplus sudah ada data dummy baru di table user||
|• • •|Nah bagaimana jika kita ingin membuat 100 data dummy. Cuku mudah cukup masukan perintah App\Model\User::factory(100)->create() Dan kita cek di table plus, maka sudah muncul banyak sekali data 103||

- Jadi bagaimana jika kita ingin membuat factori untuk model pekerjaan??
- Dalam Laravel, aturan penamaan factory mengikuti konvensi tertentu yang dirancang untuk konsistensi dan kemudahan dalam mengelola file. Berikut adalah aturan-aturan penamaan factory dalam Laravel:
- 1. Nama File Factory: o File factory disimpan di direktori `database/factories/`. Nama file
harus menggunakan format `[NamaModel]Factory.php`. Contohnya: o Jika kamu membuat factory untuk model `User`, maka nama file-nya harus `UserFactory.php`.

- 2. Kelas Factory:

o Nama kelas factory juga harus mengikuti format `[NamaModel]Factory`. Misalnya, untuk model `User`, nama kelas factory adalah `UserFactory`.

- 3. Penulisan Metode Factory: o Metode yang digunakan untuk mendefinisikan data model disebut
`definition()`. Di dalam metode ini, kamu mendefinisikan pola data untuk setiap kolom model menggunakan Faker.

- 4. Penamaan Factory Saat Digunakan: o Saat menggunakan factory, format pemanggilan mengikuti penamaan
model, yaitu `Model::factory()`. Misalnya, untuk model `User`: o User::factory()->create();

- Dengan mengikuti aturan penamaan ini, kode menjadi lebih rapi dan mudah dibaca, serta sesuai dengan standar konvensi Laravel.
- Jadi sesuai dengan aturan yang ada maka nama factory untuk model pekerjaan adalah PekerjaanFactory, kemudian kita masukan perintah
- Php artisan make:factory PekerjaanFactory
- Kemudian bisa dilihat bahwa dibagian folder factory sudah ada factory baru.
- Jika kita kembali melihat tael pekerjaan

|• Maka dapat dilihat bahwa kita|memiliki title dan salary, kita coba menggunakan factory yang telah kita buat untuk mengisi title dan salary|
|---|---|
|• • App\Models\Pekerjaan::factory()->create()|Kemudain kita jalankan pekerjaan factory dari tinker kita jalankan perintah|
||106|

|•|Dan kita mendapatkan eror, jika kita lihat model pekerjaan yang kita buat secara manual dan bandingkan dengan model users bawaan dari laravel, kita bisa lihat bahwa di model user kita memiliki script use hasfactory||
|---|---|---|
|•|Yang artinya bahwa model tersebut memiliki factory, kemudian kita akan lakukan hal yang sama di model pekerjaan, agar factory yang kita biat dapat terpanggil di model kita, caranya sangat mudah, kita masukan perintah yang sama use hasFactory||
|• •|Dan kemudian kita jalankan lagi pekerjaan factory dari tinker kita jalankan perintah App\Models\Pekerjaan::factory()->create() 107||

- Dan otomatis akan membuat data baru di table,
- Yang perlu jadi perhatian jika kita melakukan edit script, kita harus keluar dari tinker dulu CTRL+C kemudian kita masuk lagi untuk menjalankan perintah tertentu, karena tinker bekerja mengeksekusi script saat tinker dijalankan
- Misal kita coba masukan 300 data fake di factory pekerjaan maka Laravel akan mengeksekusi nya dengan cepat

|• membuat model baru Bernama Perusahaan • Php artisan make:model Perusahaan -m -f|Jika kita perhatikan maka dalammembuat model baru kitab isa membuat migration dan factory secara otomatis dengan -m dan -f, mari kita coba|
|---|---|
|• Menakjubkan bukan?? • table di table perusahaan, misalkan nama perusahaan|Kemudian kita edit pada migration perusahaan, misalkan kita ingin 1 field|
|• Kemudian di migration pekerjaan menghubungkan kedua table tersebut|tambahakan id perusahaan untuk 109|

- Kemudian kita migrate fresh untuk drop and create table yan terbaru, php artisan migrate fresh
- Dan ketika kita ke factory job, unutk membuat job baru maka script kita sudah tidak akan bisa karena kita sudah memberikan hubungan table pekerjaan dan perusahaan

|•|Kita perlu mendefiniskan perusahaanfactory terlebih dahulu|||
|---|---|---|---|
|•|Dan di pekerjaan factory kita tambahkan perusahaan_id|||
||||111|

|•|Kemudian jika kita manjalankan pekerjaan factory|||
|---|---|---|---|
|•|Dan ketika kita cek di table pekerjaan|||
|•|Dan table perusahaan|||
|•|Otomatis akan terisi data, berikut kita bisa lihat relasinya|||
|• •|Misal kita ingin membuat 10 data pekerjaan juga cukup simple App\Models\Pekerjaan::factory(10)->create()|112||

## F. LEMBAR KERJA PRAKTIK

Hari / Tanggal : _____________________________ Nama Mahasiswa : _____________________________

1) Silahkan Lakukan Langkah-langkah tersebut, tulis daftar error yang ditemukan
2) Tulis penyelesaian dari error yang ditemukan Jawab
1.
2.

# ACARA IX

# DATABASE RELATION

## A. POKOK BAHASAN

Database relation adalah konsep inti dalam sistem manajemen basis data relasional (RDBMS), yang mengorganisasikan data ke dalam bentuk tabel-tabel terstruktur. Sebuah relation, atau tabel, terdiri dari baris (row) dan kolom (column), di mana setiap baris merepresentasikan satu entitas atau catatan, dan setiap kolom menyimpan atribut atau properti dari entitas tersebut. Konsep ini memungkinkan data di berbagai tabel saling terhubung melalui kunci utama (primary key) dan kunci asing (foreign key), membentuk hubungan yang terstruktur. Misalnya, tabel "Pelanggan" dapat dihubungkan dengan tabel "Pesanan" melalui kolom ID pelanggan, sehingga memungkinkan pengelolaan data yang lebih efisien dan terintegrasi. Relasi dalam database tidak hanya mempermudah pengorganisasian data tetapi juga memungkinkan eksekusi query yang kompleks untuk analisis data antar tabel. Dengan pendekatan ini, database relasional menjadi alat yang sangat efektif untuk menyimpan, mengelola, dan memproses informasi dalam aplikasi modern.

## B. SUB POKOK BAHASAN

## C. TUJUAN

1. Memahami konsep database relational
2. Mengerti struktur tabel relational
3. Mengenal kunci utama (primary key) dan kunci asing (foreign key)
4. Menguasasi teknik normalisasi
5. Menggunakan SQL untuk mengolah data
6. Menerapkan integritas referensial
## D. ALAT DAN BAHAN

1. Code Editor (VS code, PhpStorm dll)

2. TablePlus
3. PHP 8.x
4. Laragon (MySQL PhpMyAdmin)
## E. MATERI

- Jadi seperti SESI sebelumnya, kita telah mendefinisikan relasi antara table perusahaan dan pekerjaan
- Lantas bagaimana kita bisa akses data perusahaan dari pekerjaan
- Pertama-tama kita perlu membuat fungsi baru di model pekerjaan
- Karena pekerjaan adalah milik dari perusahaan, maka kita akan menggunakan relasi belongsto
- BelongsTo Laravel merupakan salah satu fitur yang ada pada framework Laravel. Fitur ini digunakan untuk membangun relasi atau hubungan antara dua tabel dalam database. Dalam konsep database, relasi ini dikenal dengan istilah foreign key.
- Dalam penggunaannya, BelongsTo Laravel dihubungkan dengan model yang akan dibuat relasi atau hubungannya. Relasi tersebut merupakan hubungan antara primary key dari model yang satu dengan foreign key dari model lainnya.
- Kita buat fungsinya seperti ini

- Perhatikan, nantinya ada beberapa banyak relasi dalam database seperti many to one, one to many, dsb seperti yang telah kalian pelajari sebelumnya.
- Jadi cara mudahnya, kita analogikan apakah pekerjaan milik perusahaan?? Apakah perusahaan hanya boleh memiliki satu pekerjaan?? Apakah perusahaan memiliki banyak pekerjaan? Tentu pernyataan terakhir yang benar, oleh karena itu relasi dari table perusahaan ke pekerjaan adalah hasmany
- Kita bisa coba menjalankan di tinker, misal kita mencari data pertama dengan variable kerja misalnya
## $kerja = App\Models\Pekerjaan::first()

- Dan karena kita telah mendefinisikan relasi di model pekerjaan kita dapat mengakses property perusahaan
- Dan jika diperhatikan maka Laravel akan otomatis memanggil model perusahaan
- Dan jika kita ingin spesikif mencari nama perusahaan cukup tambahkan property nama

- Nah ketika teman2 lihat disini.
- Ketika memasukan perintah perusahaan, sebenarnya SQL query kedua telah dijalankan, jika yang pertama adalah menggunakan model pekerjaan, yang kedua adalah menggunakan model perusahaan
- Nah pada kejadian ini, Laravel telah mengimplementasikan yang Namanya “lazy loading”
- Lazy loading dalam Laravel mengacu pada mekanisme pengambilan data dari database yang dilakukan hanya ketika dibutuhkan. Ini terjadi saat relasi antar model diakses tanpa terlebih dahulu memuat data relasinya secara eksplisit. Misalnya, saat Anda mengambil data model utama dan baru mengakses relasi terkait, Laravel secara otomatis menjalankan query tambahan untuk mengambil data relasi tersebut.
- Nah, kemudian bagaimana jika kita balik??
- Bagaimana jika kita ingin mengakses pekerjaan dari model perusahaan??
- Caranya cukup mudah, kita hanya perlu membuat sebuah function baru di model perusahaan

|• • • •|Kenapa hasmany?? Karena secara logika, perusahaan memiliki banyak pekerjaan Dan jika kita jalankan di tinker Dan kita akan masuk ke model perusahaan dengan perintah $perusahaan = App\Models\Perusahaan::first();|||
|---|---|---|---|
|• •|Kemudian kita panggil function pekerjaan yang sudah kita buat tadi dengan perintah $perusahaan->pekerjaan|118||

- Bisa dilihat bahwa kita mendapatkan koleksi dari data yang sesuai, disini muncul hanya 1 karena setiap perusahaan hanya memiliki 1 pekerjaan
- Jadi misal kita rubah manual data di table pekerjaan sehingga memiliki perusaahaan yang sama seperti ini
- Maka ketika kita menjalankan di tinker menggunakan perintah yang sama maka akan muncul 2 record

- Nah percaya atau tidak mungkin 85% project yang teman2 nanti akan kerjaan biasanya hanya menggunakan relation hasmany dan belongsto
## Pivot Table

- Pivot table dalam database relasional adalah tabel khusus yang digunakan untuk mengelola relasi many-to-many antara dua tabel lain. Ini penting saat sebuah entitas di satu tabel bisa memiliki hubungan dengan beberapa entitas di tabel lain, dan sebaliknya.
- Misalnya, dalam aplikasi Laravel, ada dua tabel: users dan roles. Satu pengguna bisa memiliki banyak peran, dan satu peran bisa dimiliki oleh banyak pengguna. Untuk mengelola hubungan ini, diperlukan tabel pivot (biasanya diberi nama seperti role_user).
- Struktur Tabel Pivot biasanya hanya terdiri dari kolom yang menyimpan foreign key dari kedua tabel yang terhubung.
- Mari kita praktekan pada project kita
- Pertama kita akan membuat model kategori beserta migrasi dan faktorinya nya dengan perintah
- Php artisan make:model kategori -mf
- Jadi mari kita lihat file migration nya, yang pertama kita akan menambahkan nama di table kategori, kemudian kita akan membuat pivot table baru berama kategori_pekerjaan

- Disini kalian bisa melihat bahwa 1 file migration bisa digunakan untuk membuat 2 table sekaligus
- Kemudian jalankan migrate untuk 2 table baru
- Kemudian bila teman-teman lihat di table pivot (pekerjaan_kategori) yang terbentuk

|• • •|Bagian foreign id secara otomatis merupakan sebuah bentuk singular dari table yang sudah ada dan diakhiri dengan _id Foreign ID atau foreign key adalah kolom di sebuah tabel database yang menyimpan referensi ke primary key di tabel lain. Fungsinya adalah untuk menciptakan relasi antara dua tabel dan menjaga integritas data. Foreign key memastikan bahwa nilai yang dimasukkan dalam kolom tersebut harus merupakan nilai yang valid dari kolom primary key di tabel lain. Oke, misal kita akan masukan sebuah record secara manual ke table kategori|||
|---|---|---|---|
|•|Dan masukan secara manual record ke table pekerjaan_kategori|||
|• •|Nah jika kita hapus kategorinya, seharusnya data yang ada dipivot table ikut terhapus, Disini kita perlu menambahkan constrain()->cascadeondelete(); pada file migration kategori|||
|||122||

|• Kemudian kita akan rollback menambahkan 1 function diibawahnya|menggunakan function down dan|
|---|---|
|• Dan kita akan eksekusi dengan menggunakna perintah • Php artisan migrate:rollback; php artisan migrate||
|• bersamaan tanpa harus melakukan eksekusi 1 per satu • ketikan perintah pragma foreign_keys = on|Disini teman2 juga bisa mengetahui bahwa artisan bisa dilakukan secara Akan tetapi hal tersebut belum bisa dilakukan di table plus karena settingan default dari table plus, untuk mengaktifkan bisa dilakukan di menu sql dan|
|• Kemudian run current|123|

- Nah disini teman 2 bisa mulai melihat jika teman2 menghapus record yang ada di kategori, maka record di pekerjaan kategori juga akan terhapus
- Nah bisa dilihat juga bahwa di table pekerjaan_kategoris ada panah di recordnya
- Misal di klik di panah kategori_id, maka akan menuju table kategori, begitu juga dengan pekerjaan_id
- Nah koneksi ini sudah terjadi otomatis di Laravel, tetapi kalau untuk table plus memang harus diaktifkan dulu secara manula menggunakn pragma foreign_keys = on
- Selanjutnya adalah kita harus membuat relasi antara table pekerjaan dan kategori
- Disini kita akan menggunakan belongstomany,
- belongsToMany adalah metode relasi dalam Laravel yang digunakan untuk mengelola hubungan many-to-many antara dua model. Relasi ini berarti bahwa setiap entitas dari satu model dapat memiliki banyak entitas dari model lain, dan sebaliknya.
- Dalam relasi many-to-many, biasanya diperlukan tabel pivot sebagai perantara yang menyimpan foreign key dari kedua tabel yang berelasi.
- Contoh Penggunaan:
- Misalkan Anda memiliki dua tabel: users dan roles. Seorang pengguna (User) dapat memiliki beberapa peran (Role), dan satu peran dapat dimiliki oleh banyak pengguna.
- Dan kita definisikan di model pekerjaan

|•|Dan di model kategori|||
|---|---|---|---|
|•|Dan ketika teman2 coba untuk akses daftar_kategori akan menemukan error seperti ini|||
|• •|Error yang Anda alami muncul karena Laravel tidak dapat menemukan tabel pivot yang diperlukan untuk mengelola relasi many-to-many antara model Pekerjaan dan Kategori. Berdasarkan pesan kesalahan, Laravel sedang mencari tabel bernama kategori_pekerjaan, tetapi tabel tersebut mungkin tidak ada, atau namanya berbeda. Jika Anda menggunakan nama tabel pivot yang berbeda|(misalnya, 125||

|Pekerjaan. • Misalkan nama tabel pivot Anda mendefinisikan relasinya seperti ini: • Model pekerjaan|pekerjaan_kategori), Anda harus memberitahukan Laravel tentang nama tabel tersebut. Anda dapat melakukan ini dengan menyesuaikan relasi di model adalah pekerjaan_kategori, Anda bisa|
|---|---|
|• Model kategori||
|• Dan ketika kita akses function daftar kategori maka akan muncul seperti ini||
||126|

## F. LEMBAR KERJA PRAKTIK

Hari / Tanggal : _____________________________ Nama Mahasiswa : _____________________________

1) Silahkan Lakukan Langkah-langkah tersebut, tulis daftar error yang ditemukan
2) Tulis penyelesaian dari error yang ditemukan Jawab
1.
2.

# ACARA X

# N+1 PROBLEM

## A. POKOK BAHASAN

N+1 Problem adalah masalah kinerja yang umum terjadi dalam aplikasi yang menggunakan ORM (Object-Relational Mapping) untuk mengakses basis data, seperti pada framework Laravel atau Django. Masalah ini muncul ketika sebuah aplikasi melakukan satu query awal untuk mengambil data utama, lalu diikuti dengan N query tambahan untuk setiap item dalam data tersebut untuk mengambil data terkait. Misalnya, jika aplikasi melakukan query untuk mengambil daftar pengguna dan setiap pengguna memiliki beberapa postingan, N+1 problem terjadi ketika aplikasi menjalankan satu query untuk mengambil semua pengguna, kemudian menjalankan satu query tambahan untuk mengambil postingan untuk masing-masing pengguna. Hal ini dapat menyebabkan jumlah query yang sangat banyak (N+1 query), sehingga menurunkan kinerja aplikasi karena setiap query membutuhkan waktu untuk dieksekusi dan berinteraksi dengan database. Untuk mengatasi N+1 Problem, teknik seperti lazy loading dapat diganti dengan eager loading, di mana data terkait dimuat dalam satu query gabungan sehingga mengurangi jumlah query yang dieksekusi. Dengan eager loading, semua data yang diperlukan dapat diambil dalam satu atau beberapa query besar, meningkatkan efisiensi dan mempercepat performa aplikasi secara signifikan.

|B. SUB POKOK BAHASAN||
|---|---|
|1.|Desain Cardlist dengan Tailwind CSS|
|2.|Menambahkan Data Perusahaan pada Cardlist|
|3.|Mengatasi Masalah N+1 dengan Eager Loading|
|4.|Pengenalan Pagination di Laravel|
|5.|Kustomisasi Tampilan Pagination dengan CSS Framework|

|C. D. E.|1. 2. 3. 4. 5. 1. 2. 3. 4. •|TUJUAN Memahami konsep dasar N+1 Problem Mengidentifikasi masalah dalam pengembangan sistem Meningkatkan kemampuan analisis Menerapkan solusi yang efisien Mengoptimalkan kinerja sistem ALAT DAN BAHAN Code Editor (VS code, PhpStorm dll) TablePlus PHP 8.x Laragon (MySQL PhpMyAdmin) MATERI Jika teman teman perhatikan pada tampilan list kerja maka akan terlihat seperti ini|
|---|---|---|
||•|Kita rubah sedikit agar menjadi sebuah cardlist 129|

|•|Kemudian tampilan nya akan menjadi seperti ini||
|---|---|---|
|•|Selanjutnya adalah saya rasa tepian kotak dibuat lebih rounded agar terlihat elegan dengan menambahkan rounded-lg, lg disini adalah ukuran seberapa rounded tepian nya, jika teman2 sudah mendownload exstension tailwind maka akan muncul pilihan seperti ini||
|•|Kemudian kita tambahkan dibelakang class yang sudah ada 130||

|•|Hasilnya tepian akan agak melengkung seperti ini||
|---|---|---|
|• Kemudian|kitab isa menambahkan padding menggunakan space-y di div bagian atas|antara masing2 kotak|
|•|Dan nanti hasilnya akan seperti ini||
|||131|

|•|Selanjutnya adalah saya ingin menambahkan perusahaan di setiap cardlistnya dengan memanggil data perusahaan dari variable kerja karena kita sudah koneksikan||
|---|---|---|
|•|Tampilan nya akan jadi seperti ini||
|•|Kemudian kita akan membuat bold dan biru agar terlihat berbeda||
||132||

|•||Maka tampilan nya akan seperti ini||
|---|---|---|---|
|• • • •||N+1 Problem Masalah N+1 merujuk pada eksekusi kueri basis data dalam sebuah loop, daripada membuat satu kueri yang memuat semua data yang relevan sekaligus. Disini kita akan melihat praktik nya menggunakan Laravel debugbar Untuk melakukan instalasi bisa mengunjungi situs [https://github.com/barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) Untuk melakukan proses instalasi teman2 membutuhkan composer, teman2 bisa download terlebih dahulu dan lakukan instalasi di [https://getcomposer.org/download/||](https://getcomposer.org/download/||)
|•||Kemudian untuk mengecek apakah composer sudah terinstall di cmd bisa ketikan composer, dan nanti akan muncul list perintah composer 133||

- Setelah proses instalasi composer selesai dan berhasil selanjutnya adalah melakukan instalasi Laravel debugbas dengan cara ketikan perintah
- composer require barryvdh/laravel-debugbar --dev
- di dalam terminal vscode
- tunggu samapai prosesnya selesai
- Langkah terakhir sebelum melihat debugbar adalah pastikan di fil env. Bagian APP_DEBUG adalah true, tentu saja nanti ketika kita dalam proses production debug ini harus dimatikan

- Setelah proses instalasi selesai teman2 bisa lohat debugbar dipojok kiri halaman Laravel
- Dan ketika di klik akan muncul menu beragam
- Nah ketika teman2 menuju halaman listkerja teman teman bisa perhatikan dibagian query menampilkan banyak sekali query yang dipisah2

- Nah ini lah yang dinamakan problem n+1
- Query yang mulanya berjumlah 12 akan kita sederhanakan dengan menggabungkan query yang serupa
- Karena jika kita memiliki 1000 record maka akan memakan waktu ayng cukup signifikan
- Disini kita akan berkenalan dengna eager load
- Eager load adalah teknik dalam pemrograman yang digunakan untuk mengoptimalkan pengambilan data dalam relasi antar tabel pada sistem basis data. Dalam konteks framework seperti Laravel, eager loading memungkinkan kita untuk mengambil data terkait dalam satu query, sehingga mengurangi jumlah query yang dikirim ke database dan meningkatkan performa aplikasi.
- Misalnya, jika kita memiliki model `Post` yang berelasi dengan `Comment`, dengan eager loading kita bisa mengambil data `Post` beserta `Comment`- nya dalam satu query menggunakan metode `with`. Contoh:
- $posts = Post::with('comments')->get();
- Dengan begitu, semua komentar untuk setiap post sudah tersedia dalam data `posts` tanpa perlu query tambahan. Teknik ini efektif digunakan ketika kita tahu bahwa data relasi akan dibutuhkan, karena mengurangi *overhead* yang ditimbulkan oleh query berulang-ulang (lazy loading).
- Lantas Langkahnya seperti apa??
- Ternyata cukup sedderhana
- Pada listkerja bagian pekerjaan::all() kita ganti menjadi Pekerjaan::with('perusahaan')->get()

- Dan ketika web kita refresh maka query akan ter ringkas dengan rapi
- Sebenarnya kita bisa mendisable lazy loading (n+1) secara sepenuhnya, tapi nanti kita akan bahas dilain waktu PAGINATION
- Pekerjaan::with('perusahaan')->get()
- Jika kita perhatikan script tersebut get() akan memberikan semua recored karena pada dasarnya get adalah select *
- Lantas bagaimana dengan 500 record?? Disini kita akan berkenalan dengan pagination
- Pagination dalam Laravel adalah fitur yang memudahkan pembagian data menjadi halaman-halaman yang lebih kecil untuk ditampilkan kepada pengguna. Hal ini berguna ketika jumlah data yang diambil cukup besar, sehingga dapat meningkatkan kinerja aplikasi dan membuat tampilan data lebih rapi serta mudah dinavigasi oleh pengguna.
- Caranya cukup sederhana kita hanya merubah get() dengan paginate()

|•|Nah disini setiap halaman akan terlimit menjadi 2 record saja||
|---|---|---|
|• •|Disini kita bisa melihat bahwa pagination seudah berjalan Dan untuk melakukan checking bisa dicoba untuk memberikan tambahan ?page=2 atau ?page=3||
||138||

|• •|Maka data akan otomatis berubah, nah untuk menampilkan link pagination di Laravel caranya cukup mudah Kita lihat di view listkerja kemudian kita tambahkan script $pekerjaan -> links()||
|---|---|---|
|•|Maka Laravel langsung akan memberikan link template yang sudah otomatis terbuat||
|• • •|Nah disini Laravel menggunakan tailwind secara default untuk membuat style nya, kamu juga bisa melakukan editing secara manual Dengan menggunakna perintah php artisan vendor:publish php artisan vendor:publish adalah perintah di Laravel yang digunakan untuk menyalin file konfigurasi, aset, atau file lain dari paket pihak ketiga ke dalam direktori aplikasi Laravel. Ini memungkinkan kita untuk mengubah file 139||

|•|yang dipublikasikan sesuai kebutuhan tanpa mengubah file asli dari paket tersebut. Karena pagination berada di vendor, kita perlu menyalin nya terlebih dulu|||
|---|---|---|---|
|•|Kemudian pilih yang pagination dengan memasukan angka 12|||
|•|Dan seharusnya di folder view sudah ada file vendor baru|||
|||140||

|• framework seperti tailwind, bootstrap • Jadi semisalkan kita ingin|Bisa dilihat bahwa sbeenarnya pagination support banyak sekali css mengganti tulisan showing ini|
|---|---|
|• Kita bisa ke file tailwind.blade.php • • Dan ketika kita refresh maka akan muncul tampilan seperti ini|Search showing, kemudian kitab isa ganti misalkna menjadi menampilkan|
||141|

- Selain paginate kitab isa menggunakan simplepaginate dan cursorapginate
- Untuk simplepaginate
- Berikut adalah tampilan nya, hanya menggunakan next dan previous
- Unutk cursorpaginate sama menggunakan next dan previous, akan tetapi pada url menggunakan cursor seperti ini

|• • • •|Kita juga bisa merubah style css nya melalui AppServiceProvider.php Misalkan kita ingin menggunakna bootstrap5 Maka kita tinggal memberikan perintah Paginator::usebootstrapfive() Jika teman2 menginstal ekstensi Laravel intelisense maka akan keluar pilihan versi bootstrap|||
|---|---|---|---|
|•|Disini kita akan mencoba menggukana bootstrap 5|||
|||143||

|•||Dan ketika dicoba maka tampulan nya akan seperti ini||
|---|---|---|---|
|• F. 1) 2) 1. 2.|saja LEMBAR KERJA PRAKTIK Hari / Tanggal Nama Mahasiswa Silahkan ditemukan Jawab|Hal tersebut wajar terlihat berantakan karena memang kita tidak meload style dari bootstrap, unutk sekarang kita kembalikan ke tampilan tailwinds : _____________________________ : _____________________________ Lakukan Langkah-langkah tersebut, Tulis penyelesaian dari error yang ditemukan|tulis daftar error yang 144|

# ACARA XI

# SEEDER AND FORM

## A. POKOK BAHASAN

Seeder dan form adalah dua konsep penting dalam pengembangan aplikasi berbasis web, khususnya dalam framework seperti Laravel. Seeder berfungsi untuk mengisi basis data secara otomatis dengan data uji atau data awal yang diperlukan dalam pengembangan. Dengan seeder, pengembang dapat menambahkan data sampel ke dalam database secara cepat dan konsisten, sehingga mempercepat proses pengujian dan memastikan data yang dibutuhkan sudah tersedia. Misalnya, jika aplikasi memerlukan data pengguna awal atau daftar produk, seeder dapat digunakan untuk menambahkan data tersebut tanpa perlu memasukkannya secara manual. Sementara itu, form dalam konteks aplikasi web adalah antarmuka untuk menerima input dari pengguna. Formulir ini memungkinkan pengguna memasukkan data, seperti nama, email, atau kata sandi, yang kemudian dikirimkan ke server untuk disimpan atau diproses lebih lanjut. Dalam pengembangan aplikasi, form menjadi elemen krusial karena berfungsi sebagai jembatan interaksi antara pengguna dan sistem. Form yang dirancang dengan baik meningkatkan pengalaman pengguna dan mempermudah pengumpulan serta pengelolaan data yang masuk ke sistem. Kedua konsep ini saling melengkapi dalam aplikasi berbasis data: seeder menyediakan data awal, sedangkan form memungkinkan pengguna menambahkan data baru.

## B. SUB POKOK BAHASAN

1. Seeder dan Factory di Laravel
2. Cara Menggunakan php artisan migrate:fresh --seed
3. Pembuatan Seeder Spesifik dengan php artisan make:seeder
4. Formulir di Laravel menggunakan Blade dan Tailwind CSS

5. Proses Input Data dengan CSRF Protection
6. Validasi Input Form
7. Menampilkan Data dan Pagination di Laravel
## C. TUJUAN

1. Memahami konsep seeder
2. Penggunaan seeder untuk pengujian
3. Automatisasi pengisian data
4. Menulis seeder dengan data dinamis
5. Memahami konsep formulir dalam web
6. Membuat formulir untuk input data
7. Validasi formulir
8. Pengolahan dan penyimpanan data
9. Penerapan keamanan pada formulir
## D. ALAT DAN BAHAN

1. Code Editor (VS code, PhpStorm dll)
2. TablePlus
3. PHP 8.x
4. Laragon (MySQL PhpMyAdmin)
## E. MATERI

- Jadi misalkan teman2 jalankan perintah php artisan migrate:fresh
- Pasti smua file yang ada di database akan terhapus bukan??

|•|Lantas|bagaimana|jika|kita|ingin|membuat|database|record|dummy|
|---|---|---|---|---|---|---|---|---|---|
||pekerjaan lagi??|||||||||
|•|Apakah|kita|harus|masuk|ke|php|artisan|tinker|kemudian|

app\model\pekerjaan::factory(100)->create()

- Terlalu panjang bukan??
- Nah disini kita akan berkenalan dengan seeder
- Mari kita buka seeder di folder database

|•|Dapat dilihat kita punya 1 file disanam dan sudah ada user factorynya|||
|---|---|---|---|
|•|Dan keitka kita coba php artisan db:seed|||
|• •|Terdapat error karena ternyata table user kita menggunakan last_name dan first_name Mari kita sesuaikan|147||

|•|Kita coba jalankan lagi php artisan db:seed|||
|---|---|---|---|
|•|Dan ketika di cek di tableplus maka sudah keluar data dummy sesuai dengan yang kita inginkna|||
|• • • •|Beruntungnya metode ini dapat kita gabung dengan migrate dengan perintah Php artisan migrate:fresh –seed Menakjubkan bukan Jadi semisal kita sudah memiliki factory, kita cukup memanggilnya class factorynya saja misalkan pekerjaan::factory(100)->create()|148||

- Ketika kita inign menjalankan db:seed tanpa migrate fresh maka akan terjadi eror seperti ini
- Mengapa demikian??
- Karena di table user sudah ada data nya dan kita akan membuat data lagi di table user, padahal record email adalah unique, yang aritnya tidak boleh ada yang sama, semisal kita beri komentar dulu atau kita menggunakan migrate fresh –seed maka akan menyelesaikan masalah
- Sementara kita beri tanda komentar dulu

|•|Dan ketika php artisan db:seed dijalankna maka factory pekerjaan akan otomatis berjalan|
|---|---|
|• • • • •|Dan ketika di cek di table pekerjaan maka sudah terdapat database hasil dari factory pekerjaan Lebih praktis bukan?? Dan ketika teman2 melakukan php artisan mirgrate:fresh --seed maka akan otomatis menjalankan migrate sekaligus factory Nah yang lebih menyenangkan kita bisa memisahkan seeder untuk melakukan tugas tertentu Misalkan dengan perintah php artisan make:seeder dengan nama misalkan PekerjaanSeeder|
|•|Kemudian di dalam folder seeder sudah ada pekerjaanSeeder|
|• •|Seiring berjalan nya waktu dan seiring kompleknya project, kamu akan menemui bahwa kamu akan membutuhkan seeder secara terpisah Dan panggil factory didalam pekerjaanseeder 150|

- Kemudian untuk memanggail pekerjaan seeder melalui databaseseeder anda dapat mengghunakan perintah $this->call(PekerjaanSeder::class)
- Dan ketika menjalankan php artisan migrate:fresh –seed, maka anda akan melihat bahwa pekerjaan seeder juga akan ikut di eksekusi
- Dan terakhir tentang seeder, kamu bisa langsugn menjalankan seeder secara spesifik tanpa harus menggunakan databaseSeeder dengan perintah php artisan db:seed –class=PekerjaanSeeder

- Tentusaja nama PekerjaanSeeder dapat disesuaikan dengan nama seeder yang kalian buat
- Baik sekarang kalian telah belajar seeder dan factory
- Seeder: o Digunakan untuk memasukkan data statis atau data contoh dalam
jumlah tertentu ke dalam database. o Biasanya digunakan ketika kita ingin menambahkan data awal yang tetap, misalnya data pengguna admin, kategori, atau jenis produk. o Seeder dibuat dengan menjalankan perintah php artisan make:seeder NamaSeeder dan eksekusi dilakukan dengan php artisan db:seed atau php artisan migrate--seed jika dilakukan bersamaan dengan migration.

- Factory: o Digunakan untuk menghasilkan data acak yang seringkali diperlukan
dalam pengujian atau pengembangan, seperti data pengguna atau produk palsu. o Menggunakan bantuan faker untuk menghasilkan data secara dinamis dan dalam jumlah besar. o Factory biasanya dihubungkan dengan model tertentu dan dibuat dengan perintah php artisan make:factory NamaFactory-- model=NamaModel. o Penggunaan factory umumnya dilakukan bersamaan dengan seeder untuk menghasilkan data acak sesuai kebutuhan.

## FORMS dalam Laravel

- Jadi ketika kalian lihat di route web,

|•|Maka kalian akan menemukan sebuah pola||
|---|---|---|
|•|Nah disini kita akan coba membuat route pekerjaan ketiga dengan nama create||
|•|Jika kita coba untuk membuat die and dump “hallo saya suka makan soto” dan kita lihat ke browser, maka pasti akan error||
||153||

|•|Nah anehnya walaupun kita belum menentukan view mana yang dipanggil Laravel akan memanggil view kerja, aneh bukan?? Mari kita lihat kenapa hal tersebut terjadi||
|---|---|---|
|• • • •|Permasalahan nya adalah di liskerja/{id}, disini di berikan perintah untuk mendengarkan semua request seterlah /job ke semua hal, termasuk create, tidak hanya id saja Nah jadi ketika kita aksses ke listkerja/create maka akan diaraehakn ke listkerja/{id} Lantas bagaimana solusinya?? cukup mudah, cukup pindahkan create ke atas dari listkerja/id 154||

|•|Dan ketika kita referesh maka dd akan berfugnsi|||
|---|---|---|---|
|• •|Kemudian mari kita buat view baru di route create dengan nama create misalnya Kemudian mari kita rapikan folder view terlebih dahulu|||
|• •|Disini kita memiliki 3 view untuk pekerjaan, kita akan satukan dalam 1 folder unutk mempermudah dokumentasi kedepan nya Misal kita buat folder pekerjaan dan pindahkan ketiga view tersebut kedalam folder pekerjaan|155||

|• • •|Nah disini mari kita rapikan, o untuk view listkerja karena menampilkan semua data kerja, kita jadikan index o untuk view kerja karena menampilkan pekerjaan sesuai dengan in kita ganti menjadi show kemudian kita sesuaikan di route web nya, bisa menggunakan 2 cara, bisa menggunakan / atau. bisa seperti ini|
|---|---|
|•|Atau menggunakan. 156|

|• • •|Kita gunakan saja agar lebih rapi Nah jika teman2 nanti memiliki fitur lain selain pekerjaan bisa melakukan treatment yang sama di view nya, menggunakan folder dan rubah naman view sesuai dengan tugasnya Selanjutnya kita isikan create pekerjaan secara simple terlebih dahulu|||
|---|---|---|---|
|• • •|Jadi kita akan mengugnakna form dari tailwind [https://tailwindui.com/components/application-ui/forms/form-layouts](https://tailwindui.com/components/application-ui/forms/form-layouts) Kemduian kita copykan kedalam view create kita dan coba jalankan di web|157||

- Dan kita sesuaikan menjadi seperti ini, kita hanya pakai posisi dan gaji saja menjadi seperti ini

|•|Dan kita coba inputkan sesuatu di form kita||
|---|---|---|
|•|Bisa dilihat di url kita akan berubah menjadi 159||

[http://127.0.0.1/listkerja/create?posisi=Dosen+TI&salary=50.000.000+per+](http://127.0.0.1/listkerja/create?posisi=Dosen+TI&salary=50.000.000+per+) Tahun

- Disini karena defaultnya menggunakan get
- Kita rubah menjadi post
- @csrf dalam Laravel adalah Blade directive yang digunakan untuk melindungi aplikasi dari serangan Cross-Site Request Forgery (CSRF). Serangan CSRF terjadi ketika pihak ketiga mencoba mengirim permintaan berbahaya yang tampaknya berasal dari pengguna yang sah di aplikasi.
- Dalam Laravel, ketika Anda membuat form HTML yang melakukan POST, PUT, PATCH, atau DELETE request, Anda perlu menyertakan token CSRF agar permintaan tersebut valid. Direktif @csrf menghasilkan input tersembunyi yang berisi token CSRF unik untuk sesi pengguna. Laravel kemudian akan memverifikasi token ini untuk memastikan bahwa permintaan berasal dari sumber yang sah.
- Dan pada route web kita tambahkan route post baru berisi function dd untuk mengecek form kita

|•|Dan ketika coba masukan di form dan kita save|||
|---|---|---|---|
|•|Maka akan muncul dapa seperti ini|||
|• •|Nah disini kita akan cobamasukan ke table plus Jadi di table pekerjaan saya ada kolom perusahaan_id, title dan salary|161||

- Kita coba masukan
- Dibagian validasi kita akan belajar pada sesi selanjutnya
- Untuk isian request isikan sesuai dengan name yang ada di input name halaman forms
- Dan setelah proses input ke database kita akan return ke halaman listkerja
- Kita cek di web, unutk save

- Akan muncul error seperti ini
- Karena fillable perusahaan_id belum kita setting di bagian model pekerjaan, tambahkan
- Kemudian kita coba lagi

|•|Dan data kita sudah tampil di bagian terakhir page kita||||
|---|---|---|---|---|
|•|Kita dapat mengatur order dari pagination melalui web route unutk menampilkan data terakhir pertama dengan fungsi latest()||||
|•|Dan kita lihat di browser kita||||
|•|Halaman 1 sudah muncul data yang terakhir||164||

## F. LEMBAR KERJA PRAKTIK

Hari / Tanggal : _____________________________ Nama Mahasiswa : _____________________________

1) Silahkan Lakukan Langkah-langkah tersebut, tulis daftar error yang ditemukan
2) Tulis penyelesaian dari error yang ditemukan Jawab
1.
2.

# ACARA XII

# REQUEST VALIDATION

## A. POKOK BAHASAN

Pada sesi ini, kita akan membahas beberapa konsep penting dalam pengembangan aplikasi web menggunakan Laravel. Dimulai dengan pemahaman mengenai properti $guarded dan $fillable dalam model Eloquent yang berfungsi untuk mengatur atribut mana saja yang boleh atau tidak boleh diisi secara massal. Selanjutnya, kita akan membahas cara membuat tombol dinamis menggunakan Tailwind CSS yang responsif serta cara menampilkan pesan kesalahan validasi pada form input. Tidak hanya itu, sesi ini juga mencakup pembuatan komponen button yang dapat digunakan ulang dengan memanfaatkan slot dan atribut, serta cara menampilkan error yang spesifik pada setiap input form. Terakhir, kita akan melihat bagaimana cara mengatur identitas mahasiswa dalam proyek, memastikan validasi yang baik baik pada sisi client maupun server untuk meningkatkan pengalaman pengguna.

|B. SUB POKOK BAHASAN||
|---|---|
|1.|Penggunaan $guarded dan $fillable dalam Model Eloquent|
|2.|Membuat Tombol Dinamis dengan Tailwind CSS|
|3.|Penggunaan Slot dan Atribut untuk Komponen Button|
|4.|Menampilkan Pesan Kesalahan Validasi pada Form|
|5.|Menampilkan Error Berdasarkan Input Form|
|6.|Validasi Form dengan HTML Required dan Laravel|
|7.|Pengaturan Identitas Mahasiswa dalam Proyek|
|C. TUJUAN||
|1.|Memahami konsep request validation|
|2.|Mengetahui jenis dan teknik validasi|
|3.|Meningkatkan keamanan aplikasi|

|4. 5. D. 1. 2. 3. 4. E. •|Mengoptimalkan pengalaman pengguna Mematuhi standar dan regulasi data ALAT DAN BAHAN Code Editor (VS code, PhpStorm dll) TablePlus PHP 8.x Laragon (MySQL PhpMyAdmin) MATERI Sedikit tips, jiak kita ingin membuat table menajdi fillable dan harus mengisi 1 per satu, maka akan memakan waktu bukan?? Wakaupun sebenarnya itu adalah untuk keamanan tapi kitab isa mendisable itu dengan cara protected $guarded = [];||
|---|---|---|
|• • •|Jadi ketika kita coba input maka akan bekerja sebagai mana mestinya Dalam Laravel, properti `$guarded` digunakan dalam model Eloquent untuk mendefinisikan atribut-atribut yang tidak boleh diisi secara massal (mass- assignable). Properti ini adalah kebalikan dari `$fillable`, yang menentukan atribut-atribut yang diperbolehkan untuk diisi secara massal. Ketika menggunakan `$guarded`, atribut apa pun yang disebutkan dalam properti ini akan dilindungi dari pengisian massal, sehingga tidak dapat 167||

diperbarui saat menggunakan fungsi seperti `Model::create()` atau `Model::update()`.

- Contoh Penggunaan `$guarded`
- Berikut adalah contoh penggunaan `$guarded` dalam model Laravel: o class Produk extends Model o { o protected $guarded = ['harga']; o}
- Dalam contoh ini: o Hanya atribut `harga` yang dilindungi, artinya atribut ini tidak bisa diisi
secara massal. o Semua atribut lain dapat diisi secara massal, kecuali yang secara eksplisit dilindungi.

- Jika Anda ingin melindungi semua atribut dari pengisian massal, Anda perlu mengatur $guarded dengan tanda bintang ('*'). Pengaturan ini akan memastikan bahwa semua atribut dilindungi dari pengisian massal, kecuali yang diizinkan secara eksplisit dengan $fillable.
- Contoh untuk Melindungi Semua Atribut o class Produk extends Model o { o protected $guarded = ['*']; o}
- Dengan menggunakan ['*'] sebagai nilai dari $guarded:
- Semua atribut akan dilindungi dari pengisian massal secara default.
- Anda tidak dapat mengisi atribut apa pun secara massal, kecuali Anda menentukannya di $fillable.
- Sebaliknya, jika $guarded diatur menjadi array kosong ([]), tidak ada atribut yang dilindungi, sehingga semua atribut dapat diisi secara massal.
- Contoh Menggunakan Array Kosong untuk $guarded

o class Produk extends Model o { o protected $guarded = []; o}

- Dengan cara ini:
- Semua atribut tersedia untuk pengisian massal.
- Kontrol dapat dialihkan sepenuhnya ke $fillable jika ada atribut tertentu yang ingin diatur.
- Ringkasan o $guarded = ['*'] melindungi semua atribut dari pengisian massal. o $guarded = [] mengizinkan semua atribut diisi secara massal
- Jika kita melihat url kita, create job belum memiliki tombol untuk mengakses
- Mari kita berikan tombol untuk mengakses hal tersebut
- Kita akan membuat tombol agar disetiap halaman keluar tombolnya
- Mari kita lihat component layout->bagian header
- Tambahkan href agar menjadi link
- Kita coba di browser

- Dan sudah ada tombol tambah pekerjaan
- Kita berikan sedikit css, Kita tambahkan style sm:flex dan sm:justify between
- Dalam Tailwind CSS, sm:flex sm:justify-between adalah kombinasi dari dua kelas utilitas yang diterapkan pada elemen responsif.
- sm:flex: Mengubah elemen menjadi flex container mulai dari ukuran layar "sm" (small) dan seterusnya. Sebelum ukuran layar "sm", elemen ini tidak menggunakan flexbox dan akan menggunakan pengaturan default (seperti block atau inline).
- sm:justify-between: Menyusun elemen di dalam flex container dengan ruang yang sama di antara mereka, mulai dari ukuran layar "sm" dan seterusnya. Sebelum ukuran layar "sm", elemen ini tidak diberi aturan justify-between dan akan menggunakan pengaturan default.
- Secara keseluruhan, kedua kelas ini memastikan bahwa elemen menggunakan flexbox dengan distribusi ruang yang rata pada layar kecil dan lebih besar (dimulai dari breakpoint "sm"), tetapi tidak akan berlaku pada layar yang lebih kecil dari "sm".
- Dan kita lihat di browser

|• •|dan untuk syling tomobl nya kita bisa copy paste dari style yang ada di pagination jadi bisa ke folder vendor kemudian file tailwind|||
|---|---|---|---|
|•|Kemudian teman2 search “next”|||
|•|Kemudian copy seluruh classnya kedalam href yang ada di tombol tambah pekerjaan, menajdi seperti ini|171||

|•|Dan ketika kita refresh webnya|||
|---|---|---|---|
|• • •|Nah setelah membuat nya secara manual kita coba akan membuatnya menggunakan slot dan attributes Memang dalam tailwind css, mereka sudah berfikiran bahwa style nya akan digunakan untuk style kita, jadi proses copy paster syle ini akan menjadi hal yang umum jika teman2 mengerjakan project menggunakan css framework Untuk membuat component misal kita buat file baru Bernama button|||
|•|Kemudian dalam button kita copykan href yang sudah kita buat tadi|||
|• •|Nah disini kita buat class menjadi attributes dan label tambah pekerjaan menjadi slot, seperti sesi sebelumnya Jadi kita hapus href=’/listkerja/create’ karena kita tidak ingin menulis hardcode di component button, dan rubah class menjadi attributes seperti ini|172||

- Dan di layout kite rubah jadi seperti ini
- Kemudian kita berikan identitas atau penanda bahwa project ini adalah versi ke berapa, disini kita akan gunakan nama dan nim saja untuk contoh sekaligus penanda sebagai project teman2
- Pertama Tambahkan variabel di .env:
- IDENTITAS_MAHASISWA=nama_nim_Tanggal
- Kemudian buat model dengan nama masing masing untuk mahasiswa yang bisa digunakan untuk menyimpan atau mengakses data mahasiswa, termasuk identitas uniknya.
- php artisan make:model hassan_k3513046

|•|kemudian di dalam model tersebut kita buat function simple seperti ini menggunakan nama panggilan kalian|||
|---|---|---|---|
|•|Kemudian kita tambahkan routenya seperti ini|||
|•|Dan di view seperti ini|||
||||174|

- Kemudian jika kita akses menggunakan route /mahasiswa akan keluar seperti ini
- Baik Sekarang kita akan beralih ke validasi form
- Jika teman teman perhatikan, jika form dalam keadaan kosong dan kita klik save
- Maka akan keluar error seperti ini

- Disini disebutkan bahwa nama pekerjaan dan gaji tidak boleh kosong
- Jadi ketika teman2 lihat route listkerja
- Kita sudah berikan tempat untuk validasi, kita berikan validasi simple seperti ini
- Script Laravel berikut digunakan untuk validasi input yang diterima dari request (misalnya form yang dikirimkan oleh pengguna). Penjelasan lengkapnya adalah sebagai berikut:
- request(): Fungsi ini digunakan untuk mendapatkan objek request yang berisi data yang dikirimkan oleh pengguna melalui form atau API. Dalam konteks ini, request() berfungsi untuk mengambil data dari request yang masuk.
- validate(): Fungsi validate() adalah metode untuk memvalidasi data yang ada pada objek request. Fungsi ini menerima array yang berisi aturan validasi untuk setiap field (kolom input) yang akan diproses.
- Format: validate() menerima parameter berupa array yang terdiri dari pasangan key (nama kolom atau field) dan value (aturan validasi yang diterapkan pada kolom tersebut). •'posisi' => ['required', 'min:4']: •'required': Ini adalah aturan yang memastikan bahwa input untuk kolom posisi harus diisi oleh pengguna. Jika kolom ini kosong, maka validasi akan gagal.

•'min:4': Aturan ini memastikan bahwa panjang input di kolom posisi minimal 4 karakter. Jika pengguna memasukkan kurang dari 4 karakter, maka validasi akan gagal. •'salary' => ['required']: •'required': Aturan ini memastikan bahwa input untuk kolom salary harus diisi oleh pengguna. Jika kolom ini kosong, maka validasi akan gagal.

- Proses: o Ketika request diterima (misalnya melalui form submission), fungsi
validate() akan memeriksa apakah data yang dikirimkan memenuhi aturan yang ditentukan. o Jika semua aturan validasi dipenuhi (misalnya, posisi diisi dan minimal 4 karakter, serta salary diisi), maka request akan diteruskan ke proses berikutnya. o Jika ada input yang tidak memenuhi aturan validasi (misalnya posisi kosong atau salary tidak diisi), maka Laravel secara otomatis akan mengembalikan respons dengan pesan kesalahan (error messages) yang sesuai dan proses selanjutnya akan dihentikan.

- Kemudian jika kita coba untuk mentrigger errornya dengan input seperti ini
- Atau kita kosongkan saja, dan ketika kita save maka otomatis akan refresh ke halaman create lagi tanpa menampilkan errornya, bagaimana solusinya??
- Jadi kita lihat view create kita

- Misal nanti errornya akan kita tampilakan disini
- Kita cukup menuliskan seperti ini

|@if ($errors->any())|
|---|
|<ul>|
|@foreach ($errors->all() as $error)|
|<li>{{ $error}}</li>|
|@endforeach|
|</ul>|

@endif

|•|||Penjelasan:|
|---|---|---|---|
|•||o o o o|$errors->any(): $errors adalah objek yang berisi daftar pesan kesalahan (error messages) yang dihasilkan dari proses validasi form. any() adalah metode yang digunakan untuk memeriksa apakah ada pesan kesalahan yang dikumpulkan di dalam objek $errors. Jika ada kesalahan (misalnya, karena validasi form gagal), maka $errors->any() akan mengembalikan true. Jika tidak ada kesalahan, maka mengembalikan false. Jadi, @if ($errors->any()) berarti: "Jika ada pesan kesalahan validasi."|
|•||o|<ul> dan <li>{{$error}}</li>: Jika ada kesalahan, maka kode di dalam blok @if akan dijalankan. Kode ini digunakan untuk menampilkan pesan kesalahan dalam sebuah daftar unordered (<ul>).|
|•|||$errors->all(): Ini adalah metode yang mengembalikan semua pesan kesalahan dalam bentuk array. Setiap pesan kesalahan disimpan dalam bentuk string.|
|•|||@foreach ($errors->all() as $error): Loop ini digunakan untuk iterasi melalui semua pesan kesalahan yang ada di dalam array. Setiap pesan kesalahan disimpan dalam variabel $error.|
|•|||<li>{{$error}}</li>: Setiap pesan kesalahan yang terdapat dalam $error akan ditampilkan dalam elemen <li>. Jadi, setiap kesalahan akan ditampilkan sebagai item dalam daftar.|
|•||@endif: o|Ini adalah penutup dari @if yang menandakan bahwa blok @if telah selesai. Jika tidak ada kesalahan, maka tidak akan ada daftar kesalahan yang ditampilkan.|
||||179|

|•|||Alur Kerja:|
|---|---|---|---|
|||o o o o o o|Ketika pengguna mengirimkan form, jika ada kesalahan dalam input yang tidak memenuhi aturan validasi, Laravel akan menyimpan pesan kesalahan tersebut di dalam objek $errors. Setelah itu, pada halaman yang sama, Laravel akan menampilkan pesan-pesan kesalahan ini menggunakan kode di atas. Misalnya, jika pengguna mengirimkan form dengan data yang tidak valid, seperti: posisi tidak diisi atau terlalu pendek. salary tidak diisi. Maka Laravel akan mengembalikan form bersama dengan pesan kesalahan yang ditampilkan di halaman menggunakan script di atas.|
|•||o o o o|Contoh Hasil: Jika ada dua kesalahan validasi, misalnya: Posisi harus diisi dan minimal 4 karakter. Salary harus diisi. Pesan kesalahan yang ditampilkan bisa terlihat seperti ini dalam|
|||o o o o o|HTML: html <ul> <li>The posisi field is required and must be at least 4 characters long.</li> <li>The salary field is required.</li> </ul>|
|•||o|Tujuan dan Manfaat: Menampilkan Pesan Kesalahan Validasi: Script ini memungkinkan pengguna untuk melihat kesalahan input mereka setelah form dikirim. Ini sangat berguna untuk memberikan umpan balik kepada pengguna tentang apa yang salah dengan data yang mereka masukkan.|
||||180|

|•|o Mengelola Validasi Form dengan Mudah: Laravel secara otomatis mengelola kesalahan validasi dan menyediakan cara mudah untuk menampilkan pesan kesalahan dengan menggunakan objek $errors. o Dengan menggunakan kode ini di dalam form Anda, pengguna akan mendapat informasi yang jelas mengenai kesalahan input yang perlu diperbaiki. Maka ketika kita coba di browser akan muncul peringatan seperti ini|
|---|---|
|•|Kita sesuaikan sedikit dengan menambah style css|
|•|Dan nanti tampilan nya seperti ini|
||181|

|• • •|Nah disini kita bisa menampilkan errornya di bawah input formnya masing2 dengan sedikit tweak Caranya adalah dengan mendefinisikan error masing2 berdasarkan nama inputnya Kita beri komentar pada script error yang telha kita buat|||
|---|---|---|---|
|•|Kemudian definisikan error pada masing2 nama inputnya @error('posisi') <p class="text-xs text-red-500 font-semibold mt-1">{{$message}}</p> @enderror|||
|•|Dan hasil totalnya seperti ini|||
|||182||

|•|Dan ketika coba di coba di browser akan seperti ini|||
|---|---|---|---|
|•|Langkah terakhir adalah menambahkan required html pada input form untuk double validation|||
|•|Jadi ketika kosong maka akan memberikan seperti ini|||
|||183||

## F. LEMBAR KERJA PRAKTIK

Hari / Tanggal : _____________________________ Nama Mahasiswa : _____________________________

1) Silahkan Lakukan Langkah-langkah tersebut, tulis daftar error yang ditemukan
2) Tulis penyelesaian dari error yang ditemukan Jawab
1.
2.