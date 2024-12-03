<?php
error_reporting(E_ALL);
include_once 'koneksi.php';


if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $file_gambar = $_FILES['file_gambar'];
    $gambar = null;

   
    if ($file_gambar['error'] == 0) {
        $filename = str_replace(' ', '_', $file_gambar['name']); 
        $destination = dirname(__FILE__) . '/gambar/' . $filename;

        if (move_uploaded_file($file_gambar['tmp_name'], $destination)) {
            $gambar = 'gambar/' . $filename;
        }
    }

   
    $sql = "UPDATE data_barang SET ";
    $sql .= "nama = '{$nama}', kategori = '{$kategori}', ";
    $sql .= "harga_jual = '{$harga_jual}', harga_beli = '{$harga_beli}', stok = '{$stok}'";

    if (!empty($gambar)) {
        $sql .= ", gambar = '{$gambar}'"; 
    }

    $sql .= " WHERE id_barang = '{$id}'"; 

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: index.php'); 
        exit;
    } else {
        die("Error pada query: " . mysqli_error($conn)); 
    }
}


$id = $_GET['id'];
$sql = "SELECT * FROM data_barang WHERE id_barang = '{$id}'";
$result = mysqli_query($conn, $sql);
if (!$result) die('Error: Data tidak tersedia');
$data = mysqli_fetch_array($result);


function is_select($var, $val) {
    return $var == $val ? 'selected="selected"' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require('header.php')?>
    <div class="contain">
        <h1>Ubah Barang</h1>
        <div class="main">
            <form action="ubah.php" method="post" enctype="multipart/form-data">
                <div class="input">
                    <label for="nama">Nama Barang</label>
                    <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required>
                </div>
                <div class="input">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" required>
                        <option <?php echo is_select('Komputer', $data['kategori']); ?> value="Komputer">Komputer</option>
                        <option <?php echo is_select('Elektronik', $data['kategori']); ?> value="Elektronik">Elektronik</option>
                        <option <?php echo is_select('Hand Phone', $data['kategori']); ?> value="Hand Phone">Hand Phone</option>
                    </select>
                </div>
                <div class="input">
                    <label for="harga_jual">Harga Jual</label>
                    <input type="number" name="harga_jual" value="<?php echo $data['harga_jual']; ?>" required>
                </div>
                <div class="input">
                    <label for="harga_beli">Harga Beli</label>
                    <input type="number" name="harga_beli" value="<?php echo $data['harga_beli']; ?>" required>
                </div>
                <div class="input">
                    <label for="stok">Stok</label>
                    <input type="number" name="stok" value="<?php echo $data['stok']; ?>" required>
                </div>
                <div class="input">
                    <label for="file_gambar">File Gambar</label>
                    <input type="file" name="file_gambar">
                </div>
                <div class="submit">
                    <input type="hidden" name="id" value="<?php echo $data['id_barang']; ?>">
                    <input type="submit" name="submit" value="Simpan">
                </div>
            </form>
        </div>
    </div>
    <?php require('footer.php')?>
</body>
</html>
