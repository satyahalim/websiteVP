<?php
session_start();
// Jika sudah login, arahkan ke halaman admin
if (isset($_SESSION['admin_logged_in'])) {
    header('Location: admin.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Masuk Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
  background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
              url('CC.JPG') no-repeat center center fixed;
  background-size: cover;
  font-family: 'Poppins', sans-serif;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}
    .login-container {
      background: #ffffffbe;
      padding: 40px 35px;
      border-radius: 16px;
      box-shadow: 0 8px 30px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 900px;
      animation: fadeIn 0.6s ease;
    }
    .login-header {
      text-align: center;
      margin-bottom: 25px;
    }
    .login-header h2 {
      font-size: 24px;
      font-weight: 600;
      color: #1a1a1a;
    }
    .login-header p {
      font-size: 14px;
      color: #666;
      margin-top: 5px;
    }
    .form-group {
      margin-bottom: 18px;
    }
    .form-group label {
      font-size: 20px;
      font-weight: 500;
      color: #333;
      display: block;
      margin-bottom: 6px;
    }
    .form-group input {
      width: 100%;
      padding: 12px 14px;
      border: 1px solid #ddd;
      border-radius: 10px;
      font-size: 14px;
      transition: all 0.3s ease;
    }
    .form-group input:focus {
      border-color: #4e73df;
      outline: none;
      box-shadow: 0 0 0 3px rgba(78,115,223,0.2);
    }
    .btn-primary {
      width: 100%;
      background: #4e73df;
      color: #fff;
      font-size: 15px;
      font-weight: 600;
      padding: 12px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.3s ease;
      margin-top: 5px;
    }
    .btn-primary:hover {
      background: #224abe;
    }
    .divider {
      display: flex;
      align-items: center;
      text-align: center;
      margin: 20px 0;
    }
    .divider::before, .divider::after {
      content: '';
      flex: 1;
      height: 1px;
      background: #ddd;
    }
    .divider:not(:empty)::before {
      margin-right: 10px;
    }
    .divider:not(:empty)::after {
      margin-left: 10px;
    }
    .btn-google {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      background: #fff;
      border: 1px solid #ddd;
      padding: 10px;
      border-radius: 10px;
      font-size: 14px;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .btn-google:hover {
      background: #f8f9fa;
    }
    .btn-google img {
      width: 18px;
    }
    .help-text {
      margin-top: 15px;
      font-size: 13px;
      text-align: center;
      color: #666;
    }
    .help-text a {
      color: #4e73df;
      font-weight: 500;
      text-decoration: none;
    }
    .help-text a:hover {
      text-decoration: underline;
    }
    .alert-error {
      background: #f8d7da;
      color: #721c24;
      padding: 12px;
      margin-bottom: 15px;
      border-radius: 8px;
      font-size: 14px;
      text-align: center;
    }
    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(-15px);}
      to {opacity: 1; transform: translateY(0);}
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="login-header">
      <h2>Masuk Admin</h2>
      
    </div>

    <?php if (isset($_GET['error'])): ?>
      <div class="alert-error">Email atau password salah!</div>
    <?php endif; ?>

    <form action="proses_login.php" method="post">
      <div class="form-group">
        <label for="username">Email : </label>
        <input type="text" id="username" name="username" placeholder="Masukkan Username" required>
      </div>

      <div class="form-group">
        <label for="password">Password : </label>
        <input type="password" id="password" name="password" placeholder="Masukkan password" required>
      </div>

      <button type="submit" class="btn-primary">Masuk</button>
    </form>

    <div class="divider">atau</div>

    <button class="btn-google">
      <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google"> 
      Masuk dengan Google
    </button>

    <div class="help-text">
      Butuh bantuan? <a href="#">Hubungi Admin</a>
    </div>
  </div>
</body>
</html>