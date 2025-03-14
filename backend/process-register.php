<?php
session_start();
include '../connection/database.php'; // Pastikan path koneksi sesuai

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi input tidak boleh kosong
    if (empty($username) || empty($password) || empty($confirm_password)) {
        $_SESSION['error'] = "Semua kolom wajib diisi!";
        header("Location: ../register.php");
        exit();
    }

    // Periksa apakah password dan konfirmasi password cocok
    if ($password !== $confirm_password) {
        $_SESSION['error'] = "Password tidak cocok!";
        header("Location: ../register.php");
        exit();
    }

    // Cek apakah username sudah ada
    $stmt = $db->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Username sudah digunakan!";
        header("Location: ../register.php");
        exit();
    }

    // Hash password sebelum menyimpan

    // Simpan data ke database
    $stmt = $db->prepare("INSERT INTO user (username, password, role) VALUES (?, ?, 2)");
    $stmt->bind_param("ss", $username, $password);
    
    if ($stmt->execute()) {
        $_SESSION['success'] = "Registrasi berhasil! Silakan login.";
        header("Location: ../index.php?messageCreate=Success"); // Arahkan ke halaman login
        exit();
    } else {
        $_SESSION['error'] = "Terjadi kesalahan saat registrasi.";
        header("Location: ../register.php");
        exit();
    }
}
?>
