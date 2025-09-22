<?php
// --- BAGIAN BARU: KEAMANAN & SESI ---
session_start();

// Cek apakah pengguna sudah login. Jika belum, tendang ke halaman login.
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}
// --- AKHIR BAGIAN BARU ---

include 'koneksi.php';

$pesan = ""; // Variabel untuk notifikasi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul   = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tanggal = $_POST['tanggal'];
    $isi     = $_POST['isi'];

    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    $fileName = basename($_FILES["gambar"]["name"]);
    $targetFile = $targetDir . time() . "_" . $fileName;

    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFile)) {
        $url = $targetFile;
        $stmt = $conn->prepare("INSERT INTO artikel (judul, penulis, tanggal, isi, url) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $judul, $penulis, $tanggal, $isi, $url);
        if ($stmt->execute()) {
            $pesan = "<div class='alert success'>Artikel berhasil disimpan!</div>";
        } else {
            $pesan = "<div class='alert error'>Error: " . $stmt->error . "</div>";
        }
        $stmt->close();
    } else {
        $pesan = "<div class='alert error'>Upload gambar gagal.</div>";
    }
}
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
            box-sizing: border-box;
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
        }
        .alert {
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 8px;
        }
        .alert.success { background: #d4edda; color: #155724; }
        .alert.error { background: #f8d7da; color: #721c24; }

        /* --- BAGIAN BARU: STYLE UNTUK LOGOUT --- */
        .admin-header {
            text-align: right;
            margin-bottom: 20px;
        }
        .logout-button {
            background-color: #dc3545;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .logout-button:hover {
            background-color: #c82333;
        }
        /* --- AKHIR BAGIAN BARU --- */
    </style>
</head>
<body>
    <div class="form-container">
        <div class="admin-header">
            <a href="logout.php" class="logout-button">Logout</a>
        </div>
        <h2>Tambah Artikel Baru</h2>
        
        <?php echo $pesan; // Menampilkan pesan notifikasi ?>

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