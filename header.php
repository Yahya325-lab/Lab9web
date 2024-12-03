<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <style>
      .container {
    width: 80%; 
    margin: 0 auto; 
    padding: 20px; 
    border: 1px solid #ddd; 
    background-color: #000000; 
    border-radius: 10px; 
}

.footer p {
    color: blue; /* Mengubah warna teks menjadi biru */
    font-size: 14px; /* Mengatur ukuran teks */
    text-align: center; /* Menyelaraskan teks ke tengah */
}


header {
    text-align: center; 
    margin-bottom: 20px; 
}


header h1 {
    font-size: 24px; 
    color: #333; 
    font-family: 'Arial', sans-serif; 
    margin: 0; 
    color: white;
}


nav {
    text-align: center; 
    margin-top: 20px; 
}


nav a {
    text-decoration: none; 
    color: #007BFF; 
    font-size: 18px; 
    margin: 0 10px; 
    padding: 5px 10px; 
    border-radius: 5px; 
    transition: background-color 0.3s ease, color 0.3s ease; 
}


nav a:hover {
    background-color: #007BFF; 
    color: #fff; 
}

.container footer{
    text-align: center;
    background-color: black;
    color: white;
    padding: 20px;
    
}
.content{
    width: 80%;
    margin: auto;
    padding: 60px;
    text-align: center;
}



    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Modularisasi Menggunakan Require</h1>
        </header>
        <nav>
            <a href="index.php">Home</a>
            <a href="tambah.php">Tambah Item</a>
            <a href="ubah.php">Ubah Item</a>
        </nav>
    </div>
</body>
</html>