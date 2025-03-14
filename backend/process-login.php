<?php
require "../connection/database.php";
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = $db->query($sql);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        if ($user['role'] == '1') {
            header('Location: ../admin/dashboard.php');
        } elseif ($user['role'] == '2') {
            header('Location: ../dashboard.php');
        } else if (!$user['username'] && !$user['password']) {
            header('Location: ../index.php');
            exit; // Tambahkan exit agar redirect bekerja dengan baik
        }
    }
}
$db->close();
