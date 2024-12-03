<?php
    include("koneksi.php");

    $sql = 'SELECT * FROM data_barang';
    $result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require('header.php')?>
    <div class="contain">
    <h1>Data Barang</h1>
    <div class="main">
        <table>
            <tr>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><img src="gambar/<?=$row['gambar'];?>" alt="<?=$row['nama'];?>"></td>
                    <td><?=$row['nama'];?></td>
                    <td><?=$row['kategori'];?></td>
                    <td><?=$row['harga_beli'];?></td>
                    <td><?=$row['harga_jual'];?></td>
                    <td><?=$row['stok'];?></td>
                    <td>
                        <a href="hapus.php?id=<?php echo $row['id_barang']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            <?php else: ?>
            <tr>
                <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
        </table>
    </div>
   </div>
   <?php require('footer.php')?>
</body>
</html>
