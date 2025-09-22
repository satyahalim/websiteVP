<?php
echo "<h1>Tes Diagnostik Login Admin</h1>";
echo "<hr>";

// 1. Mencoba menghubungkan ke database menggunakan file koneksi Anda
echo "<h2>Langkah 1: Cek Koneksi</h2>";
require 'koneksi.php'; // Menggunakan file koneksi.php Anda

if ($conn) {
    echo "<p style='color:green; font-weight:bold;'>✅ SUKSES: Berhasil terhubung ke database '" . $database . "'.</p>";
} else {
    echo "<p style='color:red; font-weight:bold;'>❌ GAGAL: Tidak bisa terhubung ke database. Periksa detail di file koneksi.php!</p>";
    die(); // Hentikan skrip jika koneksi gagal
}

// 2. Mencari user 'admin' di dalam tabel
echo "<h2>Langkah 2: Cek Data Admin</h2>";
$username_dicari = 'admin';
$stmt = $conn->prepare("SELECT username, password FROM admin WHERE username = ?");
$stmt->bind_param("s", $username_dicari);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $admin = $result->fetch_assoc();
    echo "<p style='color:green; font-weight:bold;'>✅ SUKSES: User '" . htmlspecialchars($admin['username']) . "' ditemukan di database.</p>";
    
    // 3. Menampilkan hash password yang tersimpan di database
    echo "<h2>Langkah 3: Cek Hash Password</h2>";
    echo "<p>Password yang tersimpan di database (hash):</p>";
    echo "<pre style='background-color:#eee; padding:10px; border-radius:5px; word-wrap:break-word;'>" . htmlspecialchars($admin['password']) . "</pre>";
    echo "<p><strong>PENTING:</strong> Pastikan hash ini adalah hasil dari script `buat_admin.php` yang pernah dijalankan sebelumnya.</p>";

} else {
    echo "<p style='color:red; font-weight:bold;'>❌ GAGAL: User dengan username '" . $username_dicari . "' tidak ditemukan di dalam tabel `admin`.</p>";
    echo "<p>Pastikan Anda sudah menjalankan query SQL untuk INSERT data admin.</p>";
}

$stmt->close();
$conn->close();
?>