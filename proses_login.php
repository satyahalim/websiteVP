<?php
session_start();
require 'koneksi.php'; // Menggunakan file koneksi Anda

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Gunakan prepared statement untuk keamanan dari SQL Injection
$stmt = $conn->prepare("SELECT password FROM admin WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $admin = $result->fetch_assoc();
    
    // --- INI BAGIAN YANG DIUBAH ---
    // Kita tidak lagi menggunakan password_verify()
    // Kita membandingkan langsung password dari form dengan password di database
    if ($password === $admin['password']) {
        // Jika password benar, buat sesi
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['username'] = $username;
        header('Location: admin.php'); // Arahkan ke halaman admin
        exit;
    }
}

// Jika username tidak ditemukan atau password salah
header('Location: login.php?error=1');
exit;
?>