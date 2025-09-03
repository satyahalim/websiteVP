<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kategori = $_POST['kategori'];

    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    foreach ($_FILES['gambar']['tmp_name'] as $key => $tmpName) {
        $fileName   = basename($_FILES["gambar"]["name"][$key]);
        $targetFile = $targetDir . time() . "_" . $fileName;

        if (move_uploaded_file($tmpName, $targetFile)) {
            $sql = "INSERT INTO galeri (url, kategori) VALUES ('$targetFile', '$kategori')";
            $conn->query($sql);
        }
    }

    echo "Upload berhasil!";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Upload Galeri</title>
</head>
<body>
    <h2>Upload Gambar Galeri</h2>
    <form method="post" enctype="multipart/form-data">
        <label>Pilih Kategori:</label><br>
        <select name="kategori" required>
            <option value="Job">Job</option>
            <option value="Kompetisi">Kompetisi</option>
            <option value="Konser">Konser</option>
            <option value="Internal">Internal</option>
        </select>
        <br><br>

        <label>Pilih Gambar (bisa lebih dari satu):</label><br>
        <input type="file" name="gambar[]" multiple accept="image/*" required>
        <br><br>

        <button type="submit">Upload</button>
    </form>
</body>
</html>
