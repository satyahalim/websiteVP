<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul   = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tanggal = $_POST['tanggal'];
    $isi     = $_POST['isi'];

    // Upload file gambar
    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = basename($_FILES["gambar"]["name"]);
    $targetFile = $targetDir . time() . "_" . $fileName; // kasih timestamp biar unik

    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFile)) {
        $url = $targetFile;

        // ✅ Gunakan prepared statement
        $stmt = $conn->prepare("INSERT INTO artikel (judul, penulis, tanggal, isi, url) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $judul, $penulis, $tanggal, $isi, $url);

        if ($stmt->execute()) {
            echo "<div class='alert success'>Artikel berhasil disimpan!</div>";
        } else {
            echo "<div class='alert error'>Error: " . $stmt->error . "</div>";
        }

        $stmt->close();
    } else {
        echo "<div class='alert error'>Upload gambar gagal.</div>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Admin - Input Artikel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            margin: 0;
            padding: 30px;
        }

        .form-container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 600px;
        }

        h2 {
            margin-bottom: 20px;
            color: #00305f;
            text-align: center;
        }

        label {
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="date"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            transition: border 0.3s;
        }

        input:focus,
        textarea:focus {
            border-color: #00305f;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #00305f;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #00509e;
        }

        .alert {
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 8px;
            font-size: 14px;
            text-align: center;
        }

        .alert.success {
            background: #d4edda;
            color: #155724;
        }

        .alert.error {
            background: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Tambah Artikel Baru</h2>
        <form method="post" enctype="multipart/form-data">
            <label>Judul:</label>
            <input type="text" name="judul" required>

            <label>Penulis:</label>
            <input type="text" name="penulis" required>

            <label>Tanggal:</label>
            <input type="date" name="tanggal" required>

            <label>Isi Artikel:</label>
            <textarea name="isi" rows="6" required></textarea>

            <label>Upload Gambar:</label>
            <input type="file" name="gambar" accept="image/*" required>

            <button type="submit">Simpan Artikel</button>
        </form>
    </div>
</body>
</html>
