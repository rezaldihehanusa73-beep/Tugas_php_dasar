<?php
if (!isset($_GET['nim']) || !isset($_GET['nama'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mahasiswa</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            padding: 20px; 
        }
        .card { 
            border: 1px solid #1b1b1b; 
            padding: 20px; 
            border-radius: 8px; 
            max-width: 500px; 
            margin: auto; 
            background-color: #ffb70e; 
        }
        .button { 
            padding: 8px 16px; 
            background-color: #f8eee4; 
            color: black; 
            text-decoration: none; b
            order-radius: 4px; 
            display: inline-block; 
            margin-top: 20px; 
        }
        .button:hover { 
            background-color: #ff8103; 
            color: white;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Detail Mahasiswa</h2>
        <p><strong>NIM:</strong> <?= $_GET['nim']; ?></p>
        <p><strong>Nama:</strong> <?= $_GET['nama']; ?></p>
        <p><strong>Jurusan:</strong> <?= $_GET['jurusan']; ?></p>
        <p><strong>Email:</strong> <?= $_GET['email']; ?></p>
        <p><strong>Nilai:</strong> <?= $_GET['nilai']; ?></p>
        <p><strong>Grade:</strong> <?= $_GET['grade']; ?></p>
        <p><strong>Status:</strong> <?= $_GET['status']; ?></p>
        
        <a href="index.php" class="button">Kembali</a>
    </div>

</body>
</html>