|Nama|NIM|Kelas|Matkul|
|----|---|-----|------|
|Yahya Ramadhan|312310401|TI.23.A4|Pemograman Web 1|

Modularisasi menggunakan require
<br>
Fungsi require dalam PHP adalah fungsi yang digunakan untuk menyertakan file PHP lain ke dalam skrip saat eksekusi. Fungsi ini sangat penting ketika file yang disertakan berisi kode yang diperlukan untuk menjalankan aplikasi, seperti konfigurasi atau definisi fungsi dan kelas. 

Praktikum ini hasil modularisasi dari praktikum ke 8
![Screenshot 2024-12-03 122051](https://github.com/user-attachments/assets/f8fc32ee-d54c-4213-af95-67e51170d92d)


Pertama buat table nya terlebih dahulu, foto diatas tampilan table phpmyadmin yang sudah dibuat sebelumnya

<br>

**Screenshot dan Penjelasan**

<br>

![Screenshot 2024-12-03 122501](https://github.com/user-attachments/assets/30ec7bc3-dfd6-40c8-b082-090ff755e8e7)

Terdapat tulisan **"Koneksi ke server berhasil"** yang menandakan program berhasil terkoneksi ke database nya

![Screenshot 2024-12-03 122918](https://github.com/user-attachments/assets/d8785ccf-2d52-4b8d-9b23-089b9e412f43)

Di halaman Home ini menggunakan require() untuk memanggil _header.php_ & _footer.php_ untuk menampilkan bagian header, lalu ditengah halaman menggunakan _index.php_ yang memunculkan data barang dan pengguna bisa menghapus data dengan menekan tulisan "Hapus" (ketika ditekan program php _hapus.php_ akan menghapus data tersebut)
<br>
![Screenshot 2024-12-03 123352](https://github.com/user-attachments/assets/aa6d4f16-29c8-4a64-b5b2-b20e60d47751)
Di halaman _tambah.php_ ini menunjukan form untuk menambah data dan pengguna bisa memasukan data mulai dari nama barang, kategori, harga jual, harga beli, stok, dan file gambar 
<br>
![Screenshot 2024-12-03 123748](https://github.com/user-attachments/assets/2bf0f21e-46ff-42b0-b894-8060b49a52ef)
Di halaman _ubah.php_ ini pengguna dapat mengubah data suatu barang dalam database, dari nama barang, kategori, harga jual, harga beli, stok, dan file gambar. Di kode error_reporting(E_ALL), digunakan untuk mengaktifkan pelaporan kesalahan PHP untuk semua jenis, termasuk peringatan dan notifikasi. Dan ketika pengguna meng-klik tombol simpan maka data tsb akan berubah di halaman _index.php_
<br>
