<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $file_gambar = $_FILES['file_gambar'];
    $gambar = null;

    if ($file_gambar['error'] == 0) {
        $filename = str_replace(' ', '_', $file_gambar['name']); // Mengganti spasi dengan _
        $destination = dirname(__FILE__) . '/gambar/' . $filename;
        
        if (move_uploaded_file($file_gambar['tmp_name'], $destination)) {
            $gambar = 'gambar/' . $filename;
        }
    }

   
    $sql = 'INSERT INTO data_barang (nama, kategori, harga_jual, harga_beli, stok, gambar)';
    $sql .= " VALUES ('{$nama}', '{$kategori}', '{$harga_jual}', '{$harga_beli}', '{$stok}', '{$gambar}')"; // Perbaikan di sini

   
    $result = mysqli_query($conn, $sql);
    
   
    if ($result) {
        header('Location: index.php');
        exit; 
    } else {
        echo 'Terjadi kesalahan saat memasukkan data.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php require('header.php') ?>
<div class="contain">
    <h1>Tambah Barang</h1>
    <div class="main">
    <form action="" method="post" enctype="multipart/form-data">
            <label for="">Nama Barang</label>
            <input type="text" name="nama" required>
        </div>
        <div class="input">
            <label for="">Kategori</label>
            <select name="kategori" required>
                <option value="Komputer">Komputer</option>
                <option value="Elektronik">Elektronik</option>
                <option value="Hand Phone">Hand Phone</option>
            </select>
        </div>
        <div class="input">
            <label for="">Harga Jual</label>
            <input type="number" name="harga_jual" required>
        </div>
        <div class="input">
            <label for="">Harga Beli</label>
            <input type="number" name="harga_beli" required>
        </div>
        <div class="input">
            <label for="">Stok</label>
            <input type="number" name="stok" required>
        </div>
        <div class="input">
            <label for="">File Gambar</label>
            <input type="file" name="file_gambar" required>
        </div>
        <div class="submit">
            <input type="submit" name="submit" value="Simpan">
        </div>
    </form>
    </div>
</div> 
<?php require('footer.php') ?>
</body>
</html>
