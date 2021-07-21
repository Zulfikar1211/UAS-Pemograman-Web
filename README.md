# UJIAN AKHIR SEMESTER GENAP 2020/2021
# PEMROGRAMAN WEB

- Nama : Purwanto
- NIM : 311910173
- Kelas : TI.19.B2
- Link demo : https://purwanto.techcelup.com/


## Aplikasi Sederhana Kas RT Berbasis Codeigniter 4

### Install codeigniter 4
Download codeigniter dari website resmi, kemudian extract pada folder htdocs yang ada di xampp.

### Jalankan webserver local
Start service http dan mysql pada aplikasi xampp. Kemudian jalankan php spark serve pada terminal untuk menjalankan webserver localhost codeigniter.

### Membuat database dan hubungkan dengan CI4
Membuat database sesuai dengan instruksi yaitu terdiri dari 2 table. Berikut ini desain database nya.
![desain database](https://user-images.githubusercontent.com/50513551/126255446-5c14d407-f20e-42bf-9dd9-6e4facd53ba9.png)

Setelah berhasil membuat database, selanjutnya adalah menghubungkan CI4 ke database tersebut. Edit file /app/Config/Database.php kemudian masukan nama database di line database.

### Membuat halaman warga
Halaman warga berisi table list warga. Kemudian akan ada juga tombol tambah, edit dan delete.
#### Membuat model warga
Membuat model warga dengan cara membuat file baru /app/Models/Warga_model.php. Model ini berfungsi untuk 
- Mengambil data dari table warga yang ada di database.
- Membuat fungsi untuk update di halaman edit warga.
- Membuat fungsi save warga untuk memproses save data pada saat tambah data warga.
- Dan fungsi hapus data warga.
![model_warga](https://user-images.githubusercontent.com/50513551/126256622-26f54852-feae-4d14-899e-03532ed09594.png)

#### Membuat Controller Warga
Membuat controller baru /app/Controllers/Warga.php. Controller ini berfungsi untuk mengatur tampilan website dan juga untuk memanggil class yang sudah di buat pada Model. Di dalam Controller warga terdapat beberapa controller, antara lain:
- index -> untuk tampilan halaman warga atau yang berisi table list warga.
- tambah -> untuk menampilkan halaman tambah warga.
- add -> berfungsi sebagai aksi tambah warga yang kemudian di insert ke database.
- edit -> untuk menampilkan halaman edit warga.
- update -> berfungsi sebagai aksi update warga yang kemudian di insert ke database.
- hapus -> berfungsi untuk menghapus data warga.
![controller warga](https://user-images.githubusercontent.com/50513551/126257120-ff2e07e0-6172-460f-8da8-cfb548dfc542.png)

#### Membuat view
Setelah membuat controller, selanjutnya adalah membuat view atau tampilan websitenya. Buat file view di /app/Views. Untuk CRUD warga view yang di buat antara lain:
- header_view.php -> header yang nantinya di pakai semua halaman yang berisi title dan link CSS bootstrap.
- footer_view.php -> footer yang nantinya di pakai semua halaman berisi link javascripts dari bootstrap.
- warga_view.php -> untuk menampilkan table list warga.
![warga](https://user-images.githubusercontent.com/50513551/126257381-ab48befd-6d1c-477b-a520-da8541650381.png)

- tambah_view.php -> untuk menampilkan form tambah warga.
![tambah warga](https://user-images.githubusercontent.com/50513551/126257586-238e5748-d55c-47df-84c3-664d56059cd6.png)

- edit_view.php -> untuk menampilkan form edit warga.
![edit warga](https://user-images.githubusercontent.com/50513551/126257596-9b9fa61f-407e-4bb4-8f96-d29b69aee1f3.png)

### Membuat halaman iuran
Halaman iuran berisi table transaksi iuran warga. Di dalam halaman iuran hanya ada tombol tambah untuk menambahkan transaksi baru. Tidak ada tombol untuk update dan delete.

#### Membuat model iuran
Membuat model iuran dengan membuat file baru di /app/Models/Iuran_model.php. Model ini berfungsi untuk:
- Mengambil data dari table iuran yang ada di database.
- Membuat fungsi tambah transaksi iuran baru.
![model_iuran](https://user-images.githubusercontent.com/50513551/126258201-bc73bb94-33f9-4c2f-b5bd-bda433a90c1a.png)

#### Membuat Controller Iuran
Membuat controller baru /app/Controllers/Iuran.php. Controller ini berfungsi untuk mengatur tampilan website yang ada di Views dan juga memanggil class yang sudah di buat pada model. Di dalam controller ini terdapat beberapa controller, antara lain :
- index -> Menampilkan tamble transaksi iuran.
- tambah -> Menampilkan halaman tambah iuran.
- add -> berfungsi untuk melakukan aksi tambah iuran dari halaman tambah iuran.
![controller iuran](https://user-images.githubusercontent.com/50513551/126258498-9a0e271d-59a5-4843-88f5-aeac12b887ed.png)

#### Membuat view iuran
Setelah membuat controller, selanjutnya adalah membuat view atau tampilan websitenya. Buat file view di /app/Views/iuran.
- iuran_view.php -> untuk menampilkan table list transaksi iuran.
![iuran view](https://user-images.githubusercontent.com/50513551/126258791-9f275a9b-2f11-466a-8c5e-99c65be8b139.png)

- tambah_view.php -> untuk menampilkan form tambah iuran.
![tambah iuran](https://user-images.githubusercontent.com/50513551/126258802-d29f0ff9-9385-49f7-9a79-0b5157f7b960.png)

### Membuat halaman laporan
Halaman laporan berisi informasi jumlah iuran per bulan dan per tahun, serta daftar warga yang belum melakukan iuran perbulan.
#### Membuat model laporan
Membuat model baru dengan membuat file /app/Models/Iuran_model.php. Model ini berfungsi untuk:
- getLaporanTahun -> Untuk mengambil data jumlah iuran dalam satu tahun.
- getListBulan -> Untuk mengambil list bulan dalam table iuran.
- getListTahun -> Untuk mengambil list tahun dalam table iuran.
![laporan model](https://user-images.githubusercontent.com/50513551/126259228-64088485-1306-4132-a9d3-6f145e2e3643.png)

#### Membuat controller laporan
Membuat controller baru /app/Controllers/Laporan.php. Controller ini berfungsi untuk mengatur tampilan website yang ada di views dan juga memanggil class yang sudah di buat pada Laporan_model. Di dalam controller lapora terdapat beberapa controller, antara lain.
- index -> Menampilkan table laporan jumlah iuran pertahun dan juga form select untuk memilik bulan dan tahun untuk menampilkan laporan bulanan.
- total -> Menampilkan jumlah iuran perbulan dan daftar warga yang belum melakukan iuran pada bulan yang di pilih pada select di halaman laporan.
![controller lapora](https://user-images.githubusercontent.com/50513551/126259596-ebbd8104-bc21-4866-a96c-578f7808bb5b.png)

#### Membuat View Laporan
Selanjutnya adalah membuat view atau tampilan website laporan. Buat file baru di /app/Views/iuran.
- Laporan_view.php -> untuk menampilkan table laporan jumlah kas pertahun dan form select untuk menampikan data kas perbulan.
![laporan view](https://user-images.githubusercontent.com/50513551/126259904-748f10c8-9580-4b60-b2d8-a4e0d7e53bff.png)

- total_view.php -> Untuk menampilkan table jumlah kas perbulan dan list warga yang belum melakukan pembayaran kas di bulan tersebut.
![total view](https://user-images.githubusercontent.com/50513551/126259913-2c5f353e-70a7-4eed-9930-ccc6c312d7a4.png)

### Upload ke hosting
Untuk pembuatan aplikasinya sudah selesai. Langkah selanjutnya adalah upload ke hosting, supaya bisa di akses dari internet.
#### Hosting dan Domain
Hosting yang saya pakai adalah cPanel dan untuk domainnya menggunakan subdomain purwanto.techcelup.com.

#### Buat database dan user database
Pertama buat database dan user database terlebih dahulu pada hosting. 
#### Export dan import database
Kemudian export database dari phpmyadmin localhost, kemudian export pada phpmyadmin hosting.
#### Upload data
- Upload isi dari folder public CI4 yang sudah di compress menjadi ZIP melalui file manager cPanel ke dalam folder public subdomain purwanto.techcelup.com.
![folder public](https://user-images.githubusercontent.com/50513551/126261332-14be934d-476c-45fc-abd9-7722f34e555d.png)

- Kemudian buat folder /ci4 di root hosting. Lalu upload data CI4 selain folder public yang sudah di compress menjadi ZIP ke folder tersebut. Setelah di upload file ZIP nya jangan lupa di extract.
![folder ci4](https://user-images.githubusercontent.com/50513551/126261339-01a450de-204c-42c0-bc31-b5d409c2ccf5.png)

#### Konfigurasi database
Setelah upload data selesai, selanjutnya adalah konfigurasi database. Edit file database yang ada di /app/Config/Database.php. Kemudian untuk kolom, user, password dan database nya di sesuaikan dengan database yang sebelumnya sudah di buat.
#### Konfigurasi base_url
Base_url adalah alamat untuk mengakses websitenya. Edit file /app/Config/App.php.
Kemudian edit line `public $baseURL = 'http://localhost:8080/';` Menjadi `public $baseURL = 'https://purwanto.techcelup.com/';`
#### Konfigurasi PATH
- Konfigurasi ini bertujuan untuk menentukan lokasi folder app dari ci4. 
- Edit file index.php yang ada di folder public subdomain atau domain.
- Kemudian edit line `$pathsConfig = FCPATH . '../app/Config/Paths.php';` menjadi `$pathsConfig = FCPATH . '../ci4/app/Config/Paths.php';`

#### Website sudah online
Setelah semua langkah di atas sudah di lakukan maka website sudah berhasil online.

### Penutup
Demikian laporan pembuatan aplikasi sederhana kas RT berbasis Codeigniter 4.

Terima Kasih
